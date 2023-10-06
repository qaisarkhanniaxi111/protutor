<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Countries;
use App\Models\Subject;
use App\Models\Userdetail;
use App\Models\Education;
use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Identification;
use App\Models\Hourly_rate;
use App\Models\StudentHelper;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;
use App\Models\Tutors;
use App\Models\StudentsModal;
use App\Services\PayUService\Exception;

class DashboardController extends Controller
{
	public function dashboard(Request $request)
	{
		$PageTitle = 'Dashboard | ProTutor';
		$tutorData = DB::table('users')
			->inRandomOrder()
			->limit(4)
			->get();
		$student = auth()->user();
		$studentId = $student ? $student->id : '';
		$quizes = DB::select("SELECT * FROM quiz INNER JOIN teaches_levels ON teaches_levels.id=quiz.teaches_level INNER JOIN subjects ON quiz.subjectid=subjects.id INNER JOIN students_quiz_invites ON quiz.id=students_quiz_invites.quizid AND students_quiz_invites.studentid=$studentId ORDER BY quiz.startdate ASC;");

		$currentDateTime = date('Y-m-d H:i:s');
		$upcommingDate = DB::select("SELECT startdate FROM quiz INNER JOIN teaches_levels ON teaches_levels.id=quiz.teaches_level INNER JOIN subjects ON quiz.subjectid=subjects.id INNER JOIN students_quiz_invites ON quiz.id=students_quiz_invites.quizid AND students_quiz_invites.studentid=$studentId AND quiz.startdate > '$currentDateTime' ORDER BY quiz.startdate ASC LIMIT 1;");
		$startDateTimeForTimer = $upcommingDate[0]->startdate;
		// dd($startDateTimeForTimer);
		// dd($quizes);

		$monthlyGraphData=DB::select("SELECT p.tutor_id, CONCAT( CASE WHEN MONTH(p.created_at) = 1 THEN 'Jan' WHEN MONTH(p.created_at) = 2 THEN 'Feb' WHEN MONTH(p.created_at) = 3 THEN 'Mar' WHEN MONTH(p.created_at) = 4 THEN 'Apr' WHEN MONTH(p.created_at) = 5 THEN 'May' WHEN MONTH(p.created_at) = 6 THEN 'Jun' WHEN MONTH(p.created_at) = 7 THEN 'Jul' WHEN MONTH(p.created_at) = 8 THEN 'Aug' WHEN MONTH(p.created_at) = 9 THEN 'Sep' WHEN MONTH(p.created_at) = 10 THEN 'Oct' WHEN MONTH(p.created_at) = 11 THEN 'Nov' WHEN MONTH(p.created_at) = 12 THEN 'Dec' END, ', ', YEAR(p.created_at) ) AS month, SUM(p.amount) AS monthly_earnings FROM payments p JOIN payment_student ps ON p.id = ps.payment_id WHERE ps.student_id = $studentId AND p.status='pending' GROUP BY p.tutor_id, month ORDER BY month;");
		$GraphDates=[];
		$GraphValues=[];
		foreach ($monthlyGraphData as $key => $value) {
			$GraphDates[]=$value->month;
			$GraphValues[]=$value->monthly_earnings/100;
		}

		// dd($GraphValues);

		return view("dashboard/dashboard", compact('PageTitle', 'tutorData', 'quizes', 'startDateTimeForTimer', 'currentDateTime','GraphValues','GraphDates'));
	}

	public function getSortByStudentGraphData(Request $request){
		$student = auth()->user();
		$studentId = $student ? $student->id : '';
		if($request->sortBy=='Monthly'){
			$monthlyGraphData=DB::select("SELECT p.tutor_id, CONCAT( CASE WHEN MONTH(p.created_at) = 1 THEN 'Jan' WHEN MONTH(p.created_at) = 2 THEN 'Feb' WHEN MONTH(p.created_at) = 3 THEN 'Mar' WHEN MONTH(p.created_at) = 4 THEN 'Apr' WHEN MONTH(p.created_at) = 5 THEN 'May' WHEN MONTH(p.created_at) = 6 THEN 'Jun' WHEN MONTH(p.created_at) = 7 THEN 'Jul' WHEN MONTH(p.created_at) = 8 THEN 'Aug' WHEN MONTH(p.created_at) = 9 THEN 'Sep' WHEN MONTH(p.created_at) = 10 THEN 'Oct' WHEN MONTH(p.created_at) = 11 THEN 'Nov' WHEN MONTH(p.created_at) = 12 THEN 'Dec' END, ', ', YEAR(p.created_at) ) AS month, SUM(p.amount) AS monthly_earnings FROM payments p JOIN payment_student ps ON p.id = ps.payment_id WHERE ps.student_id = $studentId AND p.status='pending' GROUP BY p.tutor_id, month ORDER BY month;");
			$GraphDates=[];
			$GraphValues=[];
			foreach ($monthlyGraphData as $key => $value) {
				$GraphDates[]=$value->month;
				$GraphValues[]=$value->monthly_earnings/100;
			}
			return response()->json(['labels'=>$GraphDates,'data'=>$GraphValues]);
		}
		if($request->sortBy=='Weekly'){
			$weeklyGraphData=DB::select("SELECT p.tutor_id, CONCAT( DATE_FORMAT(MIN(p.created_at), '%d'), '-', DATE_FORMAT(DATE_ADD(MIN(p.created_at), INTERVAL 6 DAY), '%d %b, %Y') ) AS weekly_range, SUM(p.amount) AS weekly_earnings FROM payments p JOIN payment_student ps ON p.id = ps.payment_id WHERE ps.student_id = $studentId AND p.status='pending' GROUP BY p.tutor_id, YEAR(p.created_at), WEEK(p.created_at) ORDER BY YEAR(p.created_at), WEEK(p.created_at);");
			$GraphDates=[];
			$GraphValues=[];
			foreach ($weeklyGraphData as $key => $value) {
				$GraphDates[]=$value->weekly_range;
				$GraphValues[]=$value->weekly_earnings/100;
			}
			return response()->json(['labels'=>$GraphDates,'data'=>$GraphValues]);
		}
		if($request->sortBy=='Yearly'){
			$yearlyGraphData=DB::select("SELECT p.tutor_id, YEAR(p.created_at) AS year, SUM(p.amount) AS yearly_earnings FROM payments p JOIN payment_student ps ON p.id = ps.payment_id WHERE ps.student_id = $studentId AND p.status='pending' GROUP BY p.tutor_id, year ORDER BY year;");
			$GraphDates=[];
			$GraphValues=[];
			foreach ($yearlyGraphData as $key => $value) {
				$GraphDates[]=$value->year;
				$GraphValues[]=$value->yearly_earnings/100;
			}
			return response()->json(['labels'=>$GraphDates,'data'=>$GraphValues]);
		}
		// return response()->json($request->all());
	}

	public function logout() // This function are used for user logout
	{
		Session::flush();
		return redirect('/')->with('success_msg', __('You are successfully logout'));
	}

	public function profileUpdate(Request $request, $id = NULL)
	{

		$data = Session::get('userdata');


		$PageTitle = 'Profile | ProTutor';
		$userid = Session::get('userid');
		$countries =  Countries::all();

		if ($data) {
			if ($data->role == 4) {

				//updateStudent
				$getData = 'SELECT users.id as user_id,users.first_name,users.last_name,users.phone_number,users.role,users.user_status,users.email ,users.email_verify,users.password,userdetails.* FROM `users` LEFT JOIN `userdetails` ON users.id = userdetails.student_no WHERE users.id="' . $userid . '"';
				$listUser = DB::select($getData);
				if ($request->post()) {
					if ($request->updateStudent == 'updateStudent') {
						$profile = Userdetail::where('student_no', $request->id)->update([
							'timezone' => $request->timezone,
							'phone' => $request->phone,
							'country' => $request->country,
						]);
						return redirect('/profile/about')->with('success_msg', __('Profile update successfully'));
					}

					if ($request->updatePhoto == 'updatePhoto') {
						if ($_FILES['profile_img']['name']) {
							$image1 = $request->file('profile_img');
							$imageName = time() . '_' . $image1->getClientOriginalName();
							$request->profile_img->move(public_path('images'), $imageName);
							$profile = Userdetail::where('student_no', $request->id)->update([
								'profile_img' => $imageName
							]);
						}
						return redirect('/profile/photo')->with('success_msg', __('Profile update successfully'));
					}
				}

				return view("dashboard/profile_student", compact('PageTitle', 'listUser', 'countries'));
			} else {

				$getData = 'SELECT users.id as user_id,users.first_name,users.last_name,users.phone_number,users.role,users.user_status,users.email ,users.email_verify,users.password,userdetails.* FROM `users` LEFT JOIN `userdetails` ON users.id = userdetails.student_no WHERE users.id="' . $userid . '"';
				$listUser = DB::select($getData);


				$subject =  Subject::all();

				$getEgducation = Education::where('userdetail_id', $userid)->get();
				$getCertificate = Certificate::where('userdetail_id', $userid)->get();
				$getExperience = Experience::where('userdetail_id', $userid)->get();
				$getIdentification = Identification::where('userdetail_id', $userid)->get();
				$rateAll = Hourly_rate::all();



				if ($request->post()) {
					//print_r($request->subject); die;
					//DB::enableQueryLog();
					//dd(DB::getQueryLog());
					if ($request->about == 'about') {
						if ($request->subject) {
							$profile = Userdetail::where('student_no', $request->id)->update([
								'subject' => implode(',', $request->subject)
							]);
						}

						if ($request->subject == "") {
							$profile = Userdetail::where('student_no', $request->id)->update([
								'subject' => ""
							]);
						}

						$profile = Userdetail::where('student_no', $request->id)->update([
							'teaching_exp' => $request->teaching_exp,
							'current_sit' => $request->current_sit,
							'country' => $request->country,
							'timezone' => $request->timezone,
							'phone' => $request->phone,
							'hourly_rate' => $request->hourly_rate,
						]);
						return redirect('/profile/about')->with('success_msg', __('Profile update successfully'));
					}

					if ($request->photo == 'photo') {
						if ($_FILES['profile_img']['name']) {
							$image1 = $request->file('profile_img');
							$imageName = time() . '_' . $image1->getClientOriginalName();
							$request->profile_img->move(public_path('images'), $imageName);
							$profile = Userdetail::where('student_no', $request->id)->update([
								'profile_img' => $imageName
							]);
						}
						return redirect('/profile/photo')->with('success_msg', __('Profile update successfully'));
					}

					if ($request->description == 'description') {
						$profile = Userdetail::where('student_no', $request->id)->update([
							'desc_first_last' => $request->desc_first_last,
							'desc_about' => $request->desc_about
						]);
						return redirect('/profile/description')->with('success_msg', __('Profile update successfully'));
					}

					if ($request->videoSub == 'videoSub') {
						if ($_FILES['upload_video']['name']) {
							$image12 = $request->file('upload_video');
							$imageName1 = time() . '_' . $image12->getClientOriginalName();
							$request->upload_video->move(public_path('videos'), $imageName1);

							$profile = Userdetail::where('student_no', $request->id)->update([
								'video_link' => $imageName1
							]);
						}
						return redirect('/profile/video')->with('success_msg', __('Profile update successfully'));
					}
					if ($request->education == 'education') {
						foreach ($request->university_name as $key => $value) {
							$education =  new Education;

							$filess = $request->file('degree_verification_pic');
							$fileNames = time() . '_' . $filess[$key]->getClientOriginalName();
							$request->degree_verification_pic[$key]->move(public_path('educations'), $fileNames);

							$education->userdetail_id =  $request->id;
							$education->university_name =  $value;
							$education->degree_name =  $request->degree_name[$key];
							$education->degree_type =  $request->degree_type[$key];
							$education->specialization =  $request->specialization[$key];
							$education->year_of_study =  $request->year_of_study[$key] . '-' . $request->year_of_study_end[$key];
							$education->degree_verification_pic =  $fileNames;
							$education->save();
						}
						return redirect('/profile/background')->with('success_msg', __('Profile update successfully'));
					}


					if ($request->certificate == 'certificate') {
						foreach ($request->certificate_name as $key => $value) {
							$certificate =  new Certificate;

							$filess = $request->file('certificate_verified_pic');
							$fileNames = time() . '_' . $filess[$key]->getClientOriginalName();
							$request->certificate_verified_pic[$key]->move(public_path('certificates'), $fileNames);


							$certificate->userdetail_id =  $request->id;
							$certificate->certificate_name =  $value;
							$certificate->description =  $request->description[$key];
							$certificate->issued_by =  $request->issued_by[$key];
							$certificate->year_of_study =  $request->year_of_study[$key] . '-' . $request->year_of_study_end[$key];
							$certificate->certificate_verified_pic =  $fileNames;
							$certificate->save();
						}
						return redirect('/profile/background')->with('success_msg', __('Profile update successfully'));
					}

					if ($request->experience == 'experience') {
						foreach ($request->company_name as $key => $value) {
							$experience =  new Experience;

							$experience->userdetail_id =  $request->id;
							$experience->company_name =  $value;
							$experience->position =  $request->position[$key];
							$experience->period_of_employment =  $request->period_of_employment[$key] . '-' . $request->period_of_employment_end[$key];
							$experience->save();
						}
						return redirect('/profile/background')->with('success_msg', __('Profile update successfully'));
					}


					if ($request->identification == 'identification') {

						foreach ($request->issued_by_country as $key => $value) {
							$experience =  new Identification;

							$experience->userdetail_id =  $request->id;
							$experience->issued_by_country =  $value;
							$experience->type_of_document =  $request->type_of_document[$key];
							$experience->identification_number =  $request->identification_number[$key];
							$experience->expiry_date =  $request->expiry_date[$key] . '-' . $request->expiry_date_end[$key];

							$filess = $request->file('identity_document_front');
							$fileNames = time() . '_front' . $filess[$key]->getClientOriginalName();
							$request->identity_document_front[$key]->move(public_path('identity'), $fileNames);
							$experience->identity_document_front =  $fileNames;

							$filess_b = $request->file('identity_document_back');
							$fileNames_b = time() . '_back' . $filess_b[$key]->getClientOriginalName();
							$request->identity_document_back[$key]->move(public_path('identity'), $fileNames_b);
							$experience->identity_document_back =  $fileNames_b;
							$experience->save();
						}
						return redirect('/profile/background')->with('success_msg', __('Profile update successfully'));
					}


					// return redirect('/profile')->with('success_msg',__('Profile update successfully'));

				}
				return view("dashboard/profile", compact('PageTitle', 'listUser', 'countries', 'subject', 'getEgducation', 'getCertificate', 'getExperience', 'getIdentification', 'rateAll'));
			}
		}
	}





	public function deleteEducation(Request $request, $id)
	{
		$deleteRow = Education::where('id', $id);

		if ($deleteRow->delete()) {
			return redirect("/profile/background")->with('success_msg', 'Education deleted successfully.');
		}
	}
	public function deleteExperience(Request $request, $id)
	{
		$deleteRow = Experience::where('id', $id);

		if ($deleteRow->delete()) {
			return redirect("/profile/background")->with('success_msg', 'Experience deleted successfully.');
		}
	}
	public function deleteCertificate(Request $request, $id)
	{
		$deleteRow = Certificate::where('id', $id);

		if ($deleteRow->delete()) {
			return redirect("/profile/background")->with('success_msg', 'Certificate deleted successfully.');
		}
	}
	public function deleteIdentity(Request $request, $id)
	{
		$deleteRow = Identification::where('id', $id);

		if ($deleteRow->delete()) {
			return redirect("/profile/background")->with('success_msg', 'Certificate deleted successfully.');
		}
	}
	public function quiz()
	{
		$studentid = Session::get("userid");
		$tutor = new Tutors();
		$subjects = $tutor->getSubj();
		$teaches_levels = $tutor->teaches_levels();

		$studentModal = new StudentsModal();

		$student_quizes = $studentModal->getStudentQuizesAttempt($studentid, "");
		$student_quizes_upcoming = $studentModal->getStudentQuizesUpcoming($studentid, "");

		foreach ($student_quizes as $s) {
			$s->totalquestions = count($studentModal->getQuizQuestions($s->quizid));

			$at = $studentModal->attemptedQuestions($s->attemptid);

			$s->attempted = $at[0]->total;
		}
		//	echo $completedCount;

		$completed = 0;
		$started = 0;
		foreach ($student_quizes as $quiz) {
			if ($quiz->status === 'closed') {
				$completed++;
			}
			if ($quiz->status === 'started') {
				$started++;
			}
		}
		return view("student.quiz", ["results" => $student_quizes, "upcoming" => $student_quizes_upcoming, "started" => $started, "completed" => $completed, "subjects" => $subjects, "teaches_levels" => $teaches_levels]);
	}

	public function attemptQuiz(Request $r)
	{
		$quizid = $r->get("quizid");
		$studentid = Session::get("userid");
		$studentsModal = new StudentsModal();
		$invited = $studentsModal->ifUserInvited($studentid, $quizid);
		if (count($invited) > 0) {
			$tutor = new Tutors();
			$quizdetails = $tutor->getQuiz($quizid);
			// dd($quizdetails);
			$startdate = $quizdetails[0]->startdate;
			$enddate = $quizdetails[0]->enddate;

			$studentHelper = new StudentHelper();
			$flag = $studentHelper->ifQuizWithinStartAndEndDateTime($startdate, $enddate);
			if ($flag) {
				if ($quizdetails[0]->quiztries == "y") {
					if ($quizdetails[0]->quiznooftries == 0) {
						$tries = 1;
					} else {
						$tries = $quizdetails[0]->quiznooftries;
					}
				} else {
					$tries = 1;
				}
				$attempted = $studentsModal->ifUserAttempted($studentid, $quizid, 'closed');
				if (count($attempted) >= $tries) {
					echo "You have attempted the Quiz";
					return;
				} else {
					$attempted = $studentsModal->ifUserAttempted($studentid, $quizid, 'started');
					if (count($attempted) > 0) {
						$txt = "Continue Test";
					} else {
						$txt = "Start Test";
					}

					if ($quizdetails[0]->quiztemplate == 0) {
						return view("student.attemptquiz", ["text" => $txt, "quizdetails" => $quizdetails]);
					} else if ($quizdetails[0]->quiztemplate == 1) {
						$questions = $studentsModal->getQuizQuestions($quizdetails[0]->quizid);
						return view("student.game1", ["text" => $txt, "quizdetails" => $quizdetails, "questions" => $questions]);
					} else if ($quizdetails[0]->quiztemplate == 2) {
						$questions = $studentsModal->getQuizQuestions($quizdetails[0]->quizid);
						return view("student.game2", ["text" => $txt, "quizdetails" => $quizdetails, "questions" => $questions]);
					}
				}
			} else {
				echo "Quiz time expired";
				return;
			}
		}

		echo "You are not registered for the quiz";
	}

	function startquiz(Request $r)
	{
		try {
			$quizid = $r->get("quizid");
			$studentid = Session::get("userid");
			$studentModal = new StudentsModal();
			$attempted = $studentModal->ifUserAttempted($studentid, $quizid, 'started');
			if (count($attempted) == 0) {
				$studentModal->addStudentAttempt($quizid, $studentid);
			}

			return $this->quizInfo($quizid, $studentid);
		} catch (\Exception $e) {
			$message = addslashes($e->getMessage());
			return $message;
		}
	}

	function startquiz2(Request $r)
	{

		try {
			$quizid = $r->get("quizid");
			$studentid = Session::get("userid");
			$studentModal = new StudentsModal();
			$attempted = $studentModal->ifUserAttempted($studentid, $quizid, 'started');
			if (count($attempted) == 0) {
				$studentModal->addStudentAttempt($quizid, $studentid);
				$studentModal->updateStudentAttempt($quizid, $studentid);
			}

			return "";
		} catch (\Exception $e) {
			$message = addslashes($e->getMessage());
			return $message;
		}

		return "";
	}

	private function quizInfo($quizid, $studentid)
	{
		try {
			$tutor = new Tutors();
			$quizdetails = $tutor->getQuiz($quizid);

			$startdate = $quizdetails[0]->startdate;
			$enddate = $quizdetails[0]->enddate;

			$studentHelper = new StudentHelper();
			$studentModal = new StudentsModal();

			$flag = $studentHelper->ifQuizWithinStartAndEndDateTime($startdate, $enddate);
			if ($flag) {
				if ($quizdetails[0]->quiztries == "y") {
					if ($quizdetails[0]->quiznooftries == 0) {
						$tries = 1;
					} else {
						$tries = $quizdetails[0]->quiznooftries;
					}
				} else {
					$tries = 1;
				}
				$attempted = $studentModal->ifUserAttempted($studentid, $quizid, 'closed');
				if (count($attempted) >= $tries) {
					return "Completed";
				} else {
					$attempted = $studentModal->ifUserAttempted($studentid, $quizid, 'started');
					if (count($attempted) > 0) {
						$attemptid = $attempted[0]->id;
					} else {
						return "Completed";
					}
				}


				$questions = $studentModal->getQuizQuestions($quizid);
				//	shuffle($questions);
				$students_answers = $studentModal->getQuizQuestionsAnswersOfStudent($quizid, $studentid, $attemptid);
				if (count($students_answers) == count($questions)) {
					return "Completed";
				}
				$result = $questions[count($students_answers)];

				if (count($students_answers) + 1 == count($questions)) {
					$studentModal->updateStudentAttempt($quizid, $studentid);
				}
				if (count($students_answers) == 0) {
					if (count($attempted) == 0) {
						//	$result2=$studentModal->addStudentAttempt($quizid,$studentid);
						//	$attemptid=$result2[0]->last;
					}
				}
				$studentModal->addStudentQuizQuestion($studentid, $quizid, $attemptid, $result->questionid);
				return [$questions, $students_answers];
			} else {
				return "Expired";
			}
		} catch (\Exception $e) {
			$message = addslashes($e->getMessage());
			return $message;
		}
	}

	public function savequizquestionanswer(Request $r)
	{
		try {
			$studentid = Session::get("userid");
			$quizid = $r->get("quizid");
			$questionid = $r->get("questionid");

			$answer = $r->get("answer");
			$studentModal = new StudentsModal();
			$studentModal->updateQuizAnswer($quizid, $questionid, $studentid, $answer);

			return $this->quizInfo($quizid, $studentid);
		} catch (\Exception $e) {
			$message = addslashes($e->getMessage());
			return $message;
		}
	}

	public function filterData(Request $r)
	{
		try {
			$data = $r->input("filter");
			$filter = "";
			$studentid = Session::get("userid");

			if (isset($data["quiztitle"])); {
				$quiztitle = $data["quiztitle"];
				if ($quiztitle != "") {
					$filter .= " and quiz.quiztitle like '%$quiztitle%' ";
				}
			}

			if (isset($data["subject"])); {
				$subject = $data["subject"];
				if ($subject != "Select Course") {
					$filter .= " and subjects.subject ='$subject'";
				}
			}

			if (isset($data["tutor"])); {
				$tutor = $data["tutor"];
				if ($tutor != "") {
					$filter .= " and (users.first_name like '%$tutor%' or users.last_name like '%$tutor%') ";
				}
			}

			if (isset($data["teaches_level"])); {
				$teaches_level = $data["teaches_level"];
				if ($teaches_level != "Select Class / Grade") {
					$filter .= " and teaches_levels.teaches_level='$teaches_level' ";
				}
			}


			$studentModal = new StudentsModal();
			if ($data["status"] == "Upcoming") {
				//	return $filter;
				$result = $studentModal->getStudentQuizesUpcoming($studentid, $filter);
			} else if ($data["status"] == "started" || $data["status"] == "closed") {
				$status = $data['status'];
				$filter .= " and student_quiz_attempt.status='$status'";

				$student_quizes = $studentModal->getStudentQuizesAttempt($studentid, $filter);
				if (count($student_quizes) > 0) {
					foreach ($student_quizes as $s) {

						$s->totalquestions = count($studentModal->getQuizQuestions($s->quizid));

						$at = $studentModal->attemptedQuestions($s->attemptid);

						$s->attempted = $at[0]->total;
					}
				}
				return $student_quizes;
			}

			return $result;
		} catch (\Exception $e) {
			$message = addslashes($e->getMessage());
			return $message;
		}
	}

	function savequizquestionanswergame(Request $r)
	{

		$quizid = $r->get("quizid");
		$questionid = $r->get("questionid");
		$status = $r->get("status");
		$studentid = Session::get("userid");
		$studentModal = new StudentsModal();
		$attempted = $studentModal->ifUserAttempted($studentid, $quizid, 'closed');
		$attemptid = $attempted[0]->id;
		$tutor = new Tutors();
		$question = $studentModal->getQuizQuestionById($quizid, $questionid);
		$ans = $status;
		if ($status == "true") {
			$ans = "true";
			$ans = $question[0]->correctanswer;
		} else {
			$ans = "wrong";
		}
		$studentModal->addStudentQuizQuestion($studentid, $quizid, $attemptid, $questionid);
		$studentModal->updateQuizAnswer($quizid, $questionid, $studentid, $ans);

		return "";
	}
}
