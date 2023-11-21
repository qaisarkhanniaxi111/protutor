<?php

namespace App\Http\Controllers\Tutor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Tutors;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;
use App\Services\PayUService\Exception;
use App\Jobs\SendQuizInvites;
use App\Models\GroupLesson;
use App\Models\Subject;

class TutorController extends \App\Http\Controllers\Controller
{
  public function dashboard(Request $request)
  {
    $PageTitle = 'Dashboard | ProTutor';
    // $tutorData = DB::table('users')
		// 	->inRandomOrder()
		// 	->limit(4)
		// 	->get();
    // dd($tutorData);
		$tutorId = auth()->user();
		$tutorId = $tutorId ? $tutorId->id : '';
    $tutorData = DB::select("SELECT ch_messages.to_id AS id, userdetails.first_name,userdetails.last_name, MAX(ch_messages.created_at) AS created_at, ch_messages.body AS body FROM users JOIN ch_messages ON (users.id = ch_messages.from_id) JOIN userdetails ON ch_messages.to_id = userdetails.student_no WHERE users.id = $tutorId GROUP BY ch_messages.to_id, userdetails.first_name,userdetails.last_name ORDER BY ch_messages.created_at;");
    $currentDateTime = date('Y-m-d H:i:s');
    // dd($currentDateTime);
		$quizes = DB::select("select quiz.id as quizid,quiz.quiztitle, quiz.startdate,quiz.enddate,quiz.status,users.first_name,users.last_name,subjects.subject as subject , teaches_levels.teaches_level as teach_level from quiz,users,group_lessons,subjects,teaches_levels where quiz.tutorid=users.id and quiz.group_lesson_id=group_lessons.id and group_lessons.subject_id=subjects.id and group_lessons.teach_level_id=teaches_levels.id and quiz.tutorid=$tutorId ORDER BY quiz.startdate ASC;");
    $upcommingDate = DB::select("SELECT startdate FROM quiz INNER JOIN teaches_levels ON teaches_levels.id=quiz.teaches_level INNER JOIN subjects ON quiz.subjectid=subjects.id AND quiz.tutorId=$tutorId AND quiz.startdate > '$currentDateTime' ORDER BY quiz.startdate ASC LIMIT 1;");
    // dd($upcommingDate);
		$startDateTimeForTimer = isset($upcommingDate[0]->startdate) ? $upcommingDate[0]->startdate : '';
    $monthlyGraphData=DB::select("SELECT p.tutor_id, CONCAT( CASE WHEN MONTH(p.created_at) = 1 THEN 'Jan' WHEN MONTH(p.created_at) = 2 THEN 'Feb' WHEN MONTH(p.created_at) = 3 THEN 'Mar' WHEN MONTH(p.created_at) = 4 THEN 'Apr' WHEN MONTH(p.created_at) = 5 THEN 'May' WHEN MONTH(p.created_at) = 6 THEN 'Jun' WHEN MONTH(p.created_at) = 7 THEN 'Jul' WHEN MONTH(p.created_at) = 8 THEN 'Aug' WHEN MONTH(p.created_at) = 9 THEN 'Sep' WHEN MONTH(p.created_at) = 10 THEN 'Oct' WHEN MONTH(p.created_at) = 11 THEN 'Nov' WHEN MONTH(p.created_at) = 12 THEN 'Dec' END, ', ', YEAR(p.created_at) ) AS month, SUM(p.amount) AS monthly_earnings FROM payments p WHERE p.tutor_id = $tutorId AND p.status='pending' GROUP BY p.tutor_id, month ORDER BY month;");
		$GraphDates=[];
		$GraphValues=[];
		foreach ($monthlyGraphData as $key => $value) {
			$GraphDates[]=$value->month;
			$GraphValues[]=$value->monthly_earnings/100;
		}

    $tutorSch=DB::select("SELECT users.first_name,users.last_name,o.user_id, o.teacher_id, calendars.* FROM `order` as o JOIN calendars ON calendars.id = o.calender_sch_id JOIN users ON o.user_id=users.id WHERE DATE(calendars.start_date)=CURDATE() and o.teacher_id=$tutorId;");
    return view("tutor/dashboard",compact('PageTitle', 'tutorData', 'quizes','currentDateTime','startDateTimeForTimer','GraphValues','GraphDates','tutorSch','tutorId'));
  }

  public function fetchTutorSch(Request $request){
    if($request->for==1){

      $tutorSch=DB::select("SELECT users.first_name,users.last_name,o.user_id, o.teacher_id, calendars.* FROM `order` as o JOIN calendars ON calendars.id = o.calender_sch_id JOIN users ON o.user_id=users.id WHERE DATE(calendars.start_date)='$request->date' and o.teacher_id=$request->id;");
      // return $tutorSch;
      $viewRender = view('tutor.includes.tutorSch', ['tutorSch' => $tutorSch])->render();

      return response()->json(['html' => $viewRender]);
    }elseif($request->for==2){
      $tutorSch=DB::select("SELECT users.first_name,users.last_name,o.user_id, o.teacher_id, calendars.* FROM `order` as o JOIN calendars ON calendars.id = o.calender_sch_id JOIN users ON o.teacher_id=users.id WHERE DATE(calendars.start_date)='$request->date' and o.user_id=$request->id;");
      // return $tutorSch;
      $viewRender = view('tutor.includes.tutorSch', ['tutorSch' => $tutorSch])->render();

      return response()->json(['html' => $viewRender]);
    }
  }

  public function getSortByTutorGraphData(Request $request){
		$tutorId = auth()->user();
		$tutorId = $tutorId ? $tutorId->id : '';
		if($request->sortBy=='Monthly'){
			$monthlyGraphData=DB::select("SELECT p.tutor_id, CONCAT( CASE WHEN MONTH(p.created_at) = 1 THEN 'Jan' WHEN MONTH(p.created_at) = 2 THEN 'Feb' WHEN MONTH(p.created_at) = 3 THEN 'Mar' WHEN MONTH(p.created_at) = 4 THEN 'Apr' WHEN MONTH(p.created_at) = 5 THEN 'May' WHEN MONTH(p.created_at) = 6 THEN 'Jun' WHEN MONTH(p.created_at) = 7 THEN 'Jul' WHEN MONTH(p.created_at) = 8 THEN 'Aug' WHEN MONTH(p.created_at) = 9 THEN 'Sep' WHEN MONTH(p.created_at) = 10 THEN 'Oct' WHEN MONTH(p.created_at) = 11 THEN 'Nov' WHEN MONTH(p.created_at) = 12 THEN 'Dec' END, ', ', YEAR(p.created_at) ) AS month, SUM(p.amount) AS monthly_earnings FROM payments p WHERE p.tutor_id = $tutorId AND p.status='pending' GROUP BY p.tutor_id, month ORDER BY month;");
			$GraphDates=[];
			$GraphValues=[];
			foreach ($monthlyGraphData as $key => $value) {
				$GraphDates[]=$value->month;
				$GraphValues[]=$value->monthly_earnings/100;
			}
			return response()->json(['labels'=>$GraphDates,'data'=>$GraphValues]);
		}
		if($request->sortBy=='Weekly'){
			$weeklyGraphData=DB::select("SELECT p.tutor_id, CONCAT( DATE_FORMAT(MIN(p.created_at), '%d'), '-', DATE_FORMAT(DATE_ADD(MIN(p.created_at), INTERVAL 6 DAY), '%d %b, %Y') ) AS weekly_range, SUM(p.amount) AS weekly_earnings FROM payments p WHERE p.tutor_id = $tutorId AND p.status='pending' GROUP BY p.tutor_id, YEAR(p.created_at), WEEK(p.created_at) ORDER BY YEAR(p.created_at), WEEK(p.created_at);");
			$GraphDates=[];
			$GraphValues=[];
			foreach ($weeklyGraphData as $key => $value) {
				$GraphDates[]=$value->weekly_range;
				$GraphValues[]=$value->weekly_earnings/100;
			}
			return response()->json(['labels'=>$GraphDates,'data'=>$GraphValues]);
		}
		if($request->sortBy=='Yearly'){
			$yearlyGraphData=DB::select("SELECT p.tutor_id, YEAR(p.created_at) AS year, SUM(p.amount) AS yearly_earnings FROM payments p WHERE p.tutor_id = $tutorId AND p.status='pending' GROUP BY p.tutor_id, year ORDER BY year;");
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
    return redirect('/')->with('success_msg',__('You are successfully logout'));
  }
  public function quiz()
  {
    $tutorid=Session::get("tutorid");
    $tutor=new Tutors();
    $quizes=$tutor->getTutorAllQuizes($tutorid);
    $upcoming=$tutor->getTutorAllQuizesUpcoming($tutorid);
    $drafts=$tutor->getTutorAllQuizesDrafts($tutorid);
    $expired=$tutor->getTutorAllQuizesExpired($tutorid);

    $groupLessons=GroupLesson::where('tutor_id',$tutorid)->orderBy('id','DESC')->get();
    $subj=$tutor->getSubjects($tutorid);

    
    $teaches_levels=$tutor->getTeachesLevels($tutorid);
    return view("tutor/quiz",["teaches_levels"=>$teaches_levels,"subjects"=>$subj,"quizes"=>$quizes,"upcoming"=>$upcoming,"drafts"=>$drafts,"expired"=>$expired,'groupLessons'=>$groupLessons]);
  }
  public function createQuiz(Request $r)
  {
    try{
    $id=Session::get("tutorid");
    $groupLessonId=$r->get("groupLessonId");
    $quiztitle=$r->get("quiztitle");
    
    $startdate=$r->get("startdate");
    $enddate=$r->get("enddate");
    $quizid=$r->get("quizid");
    $tutor=new Tutors();
    
    if($quizid==0)
    {
      $result=$tutor->createQuiz($id,$groupLessonId,$quiztitle,$startdate,$enddate);
      return $result[0]->last;
    }
    else {
      $result=$tutor->updateQuiz($id,$groupLessonId,$quiztitle,$quizid,$startdate,$enddate);
      return $quizid;
    }
  }
  catch(\Exception $e)
    {
      $message=addslashes($e->getMessage());
      return $message;
    }
  }

  public function createQuizInstructions(Request $r)
  {
    try{
    $quizid=$r->get("quizid");
    $instructions=$r->get("instructions");
    $instructions=addslashes($instructions);
    $tutor=new Tutors();
    $result=$tutor->updateQuizInstructions($quizid,$instructions);
    return "";
  }
  catch(\Exception $e)
    {
      $message=addslashes($e->getMessage());
      return $message;
    }
  }

  public function submitQuestion(Request $r)
  {
    try{
    $quizid=$r->get("quizid");
    $type=$r->get("type");
    $question=$r->get("question");
    $option1=$r->get("option1");
    $option2=$r->get("option2");
    $option3=$r->get("option3");
    $option4=$r->get("option4");
    $correct=$r->get("correct");
    $tutor=new Tutors();
    $result=$tutor->createQuizQuestion($quizid,$type,$question,$option1,$option2,$option3,$option4,$correct);
    return $result[0]->last;
  }  catch(\Exception $e)
      {
        $message=addslashes($e->getMessage());
        return $message;
      }
    }

    public function submitQuizSettings(Request $r)
    {
      try{
      $quizid=$r->get("quizid");
      $quizprogressbar=$r->get("quizprogressbar");
      $randomizequestions=$r->get("randomizequestions");
      $quiztimer=$r->get("quiztimer");
      $autoadvance=$r->get("autoadvance");
      $quiztries=$r->get("quiztries");
      $quiztimeinseconds=$r->get("quiztimeinseconds");
      $quiznooftries=$r->get("quiznooftries");
      $templateused=$r->get("templateUsed");

      $tutor=new Tutors();
      $tutor->submitQuizSettings($quizid,$quizprogressbar,$randomizequestions,$quiztimer,$quiztimeinseconds,$autoadvance,$quiztries,$quiznooftries,$templateused);
      return "";
    }
    catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function publishQuiz(Request $r)
    {
      try{
      $tutorid=Session::get("tutorid");
      $id=$r->get("quizid");
      $tutor=new Tutors();
      $tutor->publishQuiz($id);

      SendQuizInvites::dispatch($tutorid,$id);
    }
    catch(\Exception $e)
        {
          return $e;
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function deleteQuiz(Request $r)
    {
      try{
        $quizid=$r->get("quizid");
        $tutor=new Tutors();
        $tutor->deleteQuiz($quizid);
        return "";
      }
      catch(\Exception $e)
          {
            $message=addslashes($e->getMessage());
            return $message;
          }
    }

    public function getQuizQuestions(Request $r)
    {
      try{
        $quizid=$r->get("quizid");
        $tutor=new Tutors();
        $questions=$tutor->getQuizQuestions($quizid);
        $quizes=$tutor->getQuiz($quizid);
        return [$questions,$quizes];
      }
      catch(\Exception $e)
          {
            $message=addslashes($e->getMessage());
            return $message;
          }
    }

    public function editSubmitQuestion(Request $r)
    {
      try{
      $quizid=$r->get("quizid");
      $questionid=$r->get("questionid");
      $type=$r->get("type");
      $question=$r->get("question");
      $option1=$r->get("option1");
      $option2=$r->get("option2");
      $option3=$r->get("option3");
      $option4=$r->get("option4");
      $correct=$r->get("correct");
      $tutor=new Tutors();
      $result=$tutor->updateQuizQuestion($questionid,$type,$question,$option1,$option2,$option3,$option4,$correct);
      $result=$tutor->getQuizQuestions($quizid);
      return $result;
    }catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function deleteQuestion(Request $r)
    {
      try{
      $quizid=$r->get("quizid");
      $questionid=$r->get("questionid");

      $tutor=new Tutors();
      $tutor->deleteQuestion($questionid);
      $result=$tutor->getQuizQuestions($quizid);
      return $result;
    }catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function republishQuiz(Request $r)
    {
      try{
      $tutorid=Session::get("tutorid");
      $startdate=$r->get("startdate");
      $enddate=$r->get("enddate");
      $quizid=$r->get("quizid");
      $tutor=new Tutors();
      $tutor->republishQuiz($quizid,$startdate,$enddate);
      SendQuizInvites::dispatch($tutorid,$quizid);
      return "";
    }
    catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function filterData(Request $r)
    {
      try{
      $data= $r->input("filter");
      $filter="";
      $tutorid=Session::get("tutorid");

      if(isset($data["quiztitle"]));
      {
        $quiztitle=$data["quiztitle"];
        if($quiztitle!="")
        {
        $filter.=" and quiz.quiztitle like '%$quiztitle%' ";
      }
      }

      if(isset($data["subject"]));
      {
        $subject=$data["subject"];
        if($subject!="Select Course")
        {
        $filter.=" and subjects.subject ='$subject'";
      }
      }

      if(isset($data["teaches_level"]));
      {
        $teaches_level=$data["teaches_level"];
        if($teaches_level!="Select Class / Grade")
        {
        $filter.=" and teaches_levels.teaches_level='$teaches_level' ";
      }
      }

      if(isset($data["status"]));
      {
        $status=$data["status"];
        if($status!="Select Quiz Status")
        {
          if($status=="Upcoming")
          {
            $currentDateTime = date('Y-m-d H:i:s');
            $filter.=" and quiz.status='Upcoming' and enddate>'$currentDateTime'";
          }
          else if($status=="Expired")
          {
            $currentDateTime = date('Y-m-d H:i:s');
            $filter.=" and quiz.status='Upcoming'  and enddate<'$currentDateTime'";
          }
          else if($status=="Drafts")
          {
            $filter.=" and quiz.status ='$status' ";
          }

      }

      if(isset($data["startdate"]));
      {
        $startdate=$data["startdate"];
        if($startdate!="")
        {
        $filter.=" and DATE(startdate)>='$startdate' ";
      }
      }

        if(isset($data["enddate"]));
        {
            $enddate=$data["enddate"];
            if($enddate!="")
            {
                $filter.=" and DATE(enddate)<='$enddate' ";
            }
        }
      }

      $tutor=new Tutors();
      $result=$tutor->getTutorAllQuizes($tutorid,$filter);
      return $result;
    }    catch(\Exception $e)
            {
              $message=addslashes($e->getMessage());
              return $message;
            }
    }

    public function tutorquizgrouplessons()
    {
      $tutorid=Session::get("tutorid");
      $tutor=new Tutors();

    
      $groupLessonsCompleted=GroupLesson::where('tutor_id',$tutorid)->orderBy('id','DESC')->paginate(8);
     
      

      $subj=$tutor->getSubjects($tutorid);
      $allSubjects=Subject::select('*')->get();

      $teaches_levels=$tutor->getTeachesLevels($tutorid);

      return view("tutor.GroupLesson.index",["teaches_levels"=>$teaches_levels,"subjects"=>$subj,"groupLessonsCompleted"=>$groupLessonsCompleted,"allSubjects"=>$allSubjects]);
    }

    public function game()
    {
      return view("games/index");
    }
    public function game2()
    {
      return view("games/index2");
    }

    public function openChat()
    {
        return view('tutor.chat');
    }

}
