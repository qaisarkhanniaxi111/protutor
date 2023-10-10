<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use App\Models\Certificate;
use App\Models\Countries;
use App\Models\GroupLesson;
use App\Models\Hourly_rate;
use App\Models\Spoken_language;
use App\Models\Subject;
use App\Models\Teaches_level;
use App\Models\Userdetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FindTutorController extends Controller
{
    public function tutors(Request $request)
    {

        $data = Session::get('userdata');
        if ($data->role != 4) {
            return redirect('/dashboard');
        }

        $PageTitle = 'Tutor Info | ProTutor';
        //$Spoken_language = Spoken_language::all();
        $Spoken_language =  Spoken_language::where('user_status', 1)->get();
        $subjectAll = Subject::all();
        $rateAll = Hourly_rate::all();
        $countryAll = Countries::all();

        if (isset($_REQUEST['subject']) or isset($_REQUEST['hourly_rate']) or isset($_REQUEST['country']) or isset($_REQUEST['user_status']) or isset($_REQUEST['native_language']) or isset($_REQUEST['spoken_language'])) {


            $user_data = 'SELECT users.id as user_id,users.first_name,users.last_name,users.phone_number,users.role,users.user_status,users.email ,users.email_verify,users.password,userdetails.* FROM `users` LEFT JOIN `userdetails` ON users.id = userdetails.student_no WHERE users.role=3';


            if (isset($_REQUEST['subject']) and $_REQUEST['subject'] != '') {
                $user_data .= " and " . 'userdetails.subject=' . $_REQUEST['subject'];
            }

            if (isset($_REQUEST['hourly_rate']) and $_REQUEST['hourly_rate'] != '') {
                $expVal = explode('-', $_REQUEST['hourly_rate']);
                //$user_data .= " and " .'userdetails.hourly_rate IN (SELECT id from hourly_rates WHERE id between '.$expVal[0] .' and '.$expVal[1] .')'. )   ;
                //$user_data .= " and " .'userdetails.hourly_rate between '.$expVal[0] .' and '.$expVal[1] ;
                $user_data .= " and " . 'userdetails.hourly_rate IN ' . '(SELECT id from hourly_rates WHERE id between ' . $expVal[0] . ' and ' . $expVal[1] . ')';
            }

            if (isset($_REQUEST['country']) and $_REQUEST['country'] != '') {
                $user_data .= " and " . 'userdetails.country=' . $_REQUEST['country'];
            }

            if (isset($_REQUEST['user_status']) and $_REQUEST['user_status'] != '') {
                $user_data .= " and " . 'users.user_status=' . $_REQUEST['user_status'];
            }

            if (isset($_REQUEST['native_language']) and $_REQUEST['native_language'] != '') {
                $user_data .= " and " . 'userdetails.native_language=' . $_REQUEST['native_language'];
            }

            if (isset($_REQUEST['spoken_language']) and $_REQUEST['spoken_language'] != '') {
                $user_data .= " and " . 'userdetails.languages=' . $_REQUEST['spoken_language'];
            }
            //\DB::enableQueryLog();
            $userdata = DB::select($user_data);
            //dd(\DB::getQueryLog());

            return view("student.tutor.find_a_tutor", compact('PageTitle', 'countryAll', 'rateAll', 'subjectAll', 'Spoken_language', 'userdata'));
        } else {

            $user_status = '3';
            $user_data = 'SELECT users.id as user_id,users.first_name,users.last_name,users.phone_number,users.role,users.user_status,users.email ,users.email_verify,users.password,userdetails.* FROM `users` LEFT JOIN `userdetails` ON users.id = userdetails.student_no WHERE users.role="' . $user_status . '" LIMIT 12';
            $userdata = DB::select($user_data);

            return view("student.tutor.find_a_tutor", compact('PageTitle', 'countryAll', 'rateAll', 'subjectAll', 'Spoken_language', 'userdata'));
        }
    }


    public function tutor(Request $request, $tutorid)
    {
        $data = Session::get('userdata');
        if ($data->role != 4) {
            return redirect('/dashboard');
        }

        $PageTitle = 'Tutor Detail | ProTutor';
        $teacher_data =  Userdetail::where('student_no', $tutorid)->get();
        $subjects = Subject::all();
        $languages = Spoken_language::all();
        $country = Countries::all();
        $certificateAll = Certificate::all();
        $hour_rate = Hourly_rate::all();

        $degree = DB::select('SELECT educations.degree_name, educations.specialization, educations.university_name, educations.year_of_study FROM `educations` join userdetails on educations.userdetail_id = userdetails.student_no
            where userdetails.student_no="' . $tutorid . '";');

        $certificateAll = DB::select('SELECT certifications.year_of_study, certifications.certificate_name, certifications.issued_by FROM `certifications` join userdetails on certifications.userdetail_id = userdetails.student_no
            where userdetails.student_no="' . $tutorid . '";');

        $experience = DB::select('SELECT experiences.period_of_employment, experiences.company_name, experiences.position FROM `experiences` join userdetails on experiences.userdetail_id = userdetails.student_no
            where userdetails.student_no="' . $tutorid . '";');


        // calculate Tutor rating
        $ratings = GroupLesson::where('tutor_id', $tutorid)
            ->join('ratings', 'group_lessons.id', '=', 'ratings.group_lesson_id')
            ->join('userdetails', 'ratings.student_id', '=', 'userdetails.student_no')
            ->select('ratings.*', 'userdetails.*');

        $rating = $ratings->orderBy('ratings.created_at', 'desc')->get();

        //  dd($rating->toArray());

        $count = 0;
        foreach ($rating as $countRating) {
            $count += $countRating->rating;
            //  $count+=$countRating->rating;
        }
        $numberOfRating = $ratings->count();
        //  echo $count;
        //  dd($numberOfRating);
        if ($count <= 0 || $numberOfRating <= 0) {
            $groupLessonRating = 0;
        } else {

            $groupLessonRating = $count / $numberOfRating;
        }


        if (!empty($experience)) {
            $years_of_Exps = [];
            foreach ($experience as $key => $value) {
                $year = explode('-', $value->period_of_employment);
                $years_of_Exps[] = $year[1] - $year[0];
            }

            $years_of_Exp = array_sum($years_of_Exps);

            return view("student.tutor.tutor_detail_single", compact('PageTitle', 'teacher_data', 'subjects', 'languages', 'degree', 'years_of_Exp', 'country', 'experience', 'certificateAll', 'hour_rate', 'groupLessonRating', 'rating'));
        } else {
            $years_of_Exp = 0;
            return view("student.tutor.tutor_detail_single", compact('PageTitle', 'teacher_data', 'subjects', 'languages', 'degree', 'years_of_Exp', 'country', 'experience', 'certificateAll', 'hour_rate', 'groupLessonRating', 'rating'));
        }
    }



    public function getcalendar(Request $request, $id)
    {

        //$getData = Calendar::where('student_no',$id)->where('status','schedule')->get();
        $getData = Calendar::where('student_no', $id)->get();
        $data = [];
        foreach ($getData as $key => $value) {
            $data[] = array(
                'id' => $value["id"],
                'title' => $value["note"],
                'start' => $value["start_date"],
                'end' => $value["end_date"],
                'subject' => $value["subject"],
                'grade' => $value["grade"],
                'status' => $value["status"]

            );
        }
        return json_encode($data);
    }




    public function fetchCalendarAvailability(Request $request, $id)
    {
        // Assuming you have availability data in the "Calendar" model
        $availabilityData = Calendar::where('student_no', $id)->get();

        $data = [];

        foreach ($availabilityData as $slot) {
            $startDateTime = Carbon::parse($slot->start_date);
            $endDateTime = Carbon::parse($slot->end_date);
            $timezone = $startDateTime->getTimezone()->getName();
            // Divide the availability slot into 1-hour time slots
            while ($startDateTime->lt($endDateTime)) {
                $nextHour = $startDateTime->clone()->addHour();
                if ($nextHour->gt($endDateTime)) {
                    $nextHour = $endDateTime;
                }

                $data[] = [
                    'id' => $slot->id,
                    'start' => $startDateTime->toIso8601String(),
                    'end' => $nextHour->toIso8601String(),
                    'timezone' => $timezone
                ];

                $startDateTime = $nextHour;
            }
        }

        return response()->json($data);
    }




    public function purchase_lession_by_student(Request $request)
    {
        $eventID = $request->eventID;
        $student_no = $request->student_no;

        $get_schedule =  Calendar::where('id', $eventID)->get();
        $sch_start_date = $get_schedule[0]->start_date;
        $sch_end_date = $get_schedule[0]->end_date;
        $sch_grade = $get_schedule[0]->grade;
        $sch_subject = $get_schedule[0]->subject;
        $sch_note = $get_schedule[0]->note;

        $startTime = Carbon::parse($sch_start_date);
        $finishTime = Carbon::parse($sch_end_date);
        $totalDuration = $finishTime->diff($startTime);

        $teacher_data =  Userdetail::where('student_no', $student_no)->get();
        $subjects = Subject::all();
        $languages = Spoken_language::all();
        $country = Countries::all();
        $certificateAll = Certificate::all();
        $hour_rate = Hourly_rate::all();
        $teache_level =  Teaches_level::all();

        $degree = DB::select('SELECT educations.degree_name, educations.specialization, educations.university_name, educations.year_of_study FROM `educations` join userdetails on educations.userdetail_id = userdetails.student_no
            where userdetails.student_no="' . $student_no . '";');

        $certificateAll = DB::select('SELECT certifications.year_of_study, certifications.certificate_name, certifications.issued_by FROM `certifications` join userdetails on certifications.userdetail_id = userdetails.student_no
            where userdetails.student_no="' . $student_no . '";');

        $experience = DB::select('SELECT experiences.period_of_employment, experiences.company_name, experiences.position FROM `experiences` join userdetails on experiences.userdetail_id = userdetails.student_no
            where userdetails.student_no="' . $student_no . '";');

        if (!empty($experience)) {
            $years_of_Exps = [];
            foreach ($experience as $key => $value) {
                $year = explode('-', $value->period_of_employment);
                $years_of_Exps[] = $year[1] - $year[0];
            }
            $years_of_Exp = array_sum($years_of_Exps);
        } else {
            $years_of_Exp = 0;
        }

?>
        <div class="row">
            <div class="col-lg-6">
                <div class="box">
                    <div class="tutor-list-single alt">
                        <div class="tutor-list-left">
                            <div class="tutor-list-img">
                                <a href="#"><img src="<?php echo url('/') . '/public/images/' . $teacher_data[0]->profile_img; ?>" alt=""></a>
                            </div>
                            <div class="tutor-list-txt">
                                <div class="tutor-list-info">
                                    <h5><a href="#"><?php echo $teacher_data[0]->first_name . ' ' . $teacher_data[0]->last_name; ?>&nbsp;</a></h5>
                                    <?php
                                    foreach ($country as $key => $value) {
                                        if ($teacher_data[0]->country == $value->id) {
                                    ?>
                                            <img class="nationality" src="<?php echo url('/') . '/public/assets/frontpage_assets/flags/' . Str::lower($value->iso) . '.png'; ?>" alt="language">
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($teacher_data[0]->profile_verified == 1) {
                                        echo '<span class="verify"><i class="fas fa-user-check" style="color: #3f8307;"></i></span>';
                                    } else {
                                        echo '<span class="verify"><i class="fa-solid fa-user-xmark" style="color: red;"></i></span>';
                                    }
                                    ?>
                                    <span class="tutor-stat"><i class="fa-solid fa-circle"></i> Online</span>
                                </div>
                                <div class="tutor-spec"><span><i class="fa-solid fa-graduation-cap"></i></span><span><strong>Teaches</strong></span>
                                    <?php
                                    foreach ($subjects as $key => $value) {
                                        $medi_arr = explode(',', $teacher_data[0]->subject);
                                        if (count($medi_arr) > 1) {
                                            if (in_array($value->id, $medi_arr)) {
                                                echo '<span class="text-dark">' . $value->subject . '</span>';
                                            }
                                        } else {
                                            if ($teacher_data[0]->subject == $value->id) {
                                                echo '<span class="text-dark">' . $value->subject . '</span>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="tutor-spec"><span><i class="fa-solid fa-comments"></i></span><span><strong>Speaks:</strong></span><span>
                                        <?php
                                        foreach ($languages as $key => $native_lan) {

                                            $medi_arr1 = explode(',', $teacher_data[0]->native_language);
                                            if (count($medi_arr1) > 1) {
                                                if (in_array($native_lan->id, $medi_arr1)) {
                                                    echo '<span> &nbsp;' . $native_lan->spoken_language . '</span>';
                                                }
                                            } else {
                                                if ($teacher_data[0]->native_language == $native_lan->id) {
                                                    echo '<span> &nbsp;' . $native_lan->spoken_language . '</span>';
                                                }
                                            }
                                        }
                                        echo '<span class="spec">Native</span> ';
                                        ?>
                                        <?php
                                        foreach ($languages as $key => $advance_lang) {
                                            $medi_arr1 = explode(',', $teacher_data[0]->languages);
                                            if (count($medi_arr1) > 1) {
                                                if (in_array($advance_lang->id, $medi_arr1)) {
                                                    echo '<span> &nbsp;' . $advance_lang->spoken_language . '';
                                                }
                                            } else {
                                                if ($teacher_data[0]->languages == $advance_lang->id) {
                                                    echo '<span> &nbsp;' . $advance_lang->spoken_language . '</span>';
                                                }
                                            }
                                        }
                                        echo '&nbsp;&nbsp;<span class="spec adv">Advanced</span>';
                                        ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lesson-timer mt-4">
                        <h2>Date and Time of Lesson</h2>
                        <h3><?php echo date("D-M d,Y", strtotime($sch_start_date)) ?> <?php echo date("h:i", strtotime($sch_start_date)) ?>-<?php echo date("h:ia", strtotime($sch_end_date)); ?></h3>

                        <!-- <p>GMT +5:00</p> -->
                    </div>

                    <div class="lesson-timer">
                        <ul>

                            <li class="pb-4">
                                <h2>Service Details</h2>
                                <h2>Price Per Hour</h2>
                            </li>
                            <li class="pb-2">
                                <h5><?php echo $sch_note; ?></h5>
                            </li>
                            <li class="pb-1">
                                <p>
                                    <b>Grade:</b>
                                    <?php
                                    foreach ($teache_level as $key => $teache_value) {
                                        if ($sch_grade == $teache_value->id) {
                                            echo $teache_value->teaches_level;
                                        }
                                    }
                                    ?>
                                    &nbsp; &nbsp;
                                    <b>Subject:</b>
                                    <?php
                                    foreach ($subjects as $key => $value) {
                                        if ($sch_subject == $value->id) {
                                            echo $value->subject;
                                        }
                                    }
                                    ?>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <?php
                                    $totalDuration1 = $totalDuration->h;
                                    if ($totalDuration1 > 0) {
                                        echo $totalDuration1 . ' Hour Lesson';

                                        foreach ($hour_rate as $key => $rateAll_data1) {
                                            if ($teacher_data[0]->hourly_rate == $rateAll_data1->id) {
                                                $totalhour = ($rateAll_data1->hourly_rate) * ($totalDuration1);
                                            }
                                        }
                                    } else {
                                        echo $totalDuration->i . ' minute Lesson';
                                        foreach ($hour_rate as $key => $rateAll_data1) {
                                            if ($teacher_data[0]->hourly_rate == $rateAll_data1->id) {
                                                $totalhour = $rateAll_data1->hourly_rate;
                                            }
                                        }
                                    }

                                    ?>
                                </p>
                                <p>
                                    <?php
                                    echo '$' . $totalhour . '.00';
                                    ?>
                                </p>
                            </li>
                            <li>
                                <p>Transaction Fee</p>
                                <p>$ 2.00</p>
                            </li>
                            <li class="pt-4">
                                <h2><strong>Total</strong></h2>
                                <h2>
                                    <strong>
                                        <?php echo '$' . (2) + ($totalhour) . '.00'; ?>
                                    </strong>
                                </h2>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="box mt-3">
                    <div class="rev-bar">
                        <span class="revBox"><i class="fa-solid fa-star"></i> 5.0</span>
                        <h4>2 Reviews</h4>
                    </div>
                    <div class="owl-carousel review-carousel">
                        <div class="item">
                            <div class="rev-img">
                                <div class="rev-img-left"><img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg" alt=""></div>
                                <div class="rev-img-txt"><strong>Name of Student</strong></div>
                            </div>
                            <p>I'm so lucky to have Myles as my tutor. My reason to sign up for Tutors Online was to improve my English for work, which is in an Engineering domain. Myles himself is an engineer and that's a massive bonus because he can help me with not only speaking correctly but also delivering the context right with technical terminologies. Her lessons are always fun. Every single time, I get a couple of really good laughs!</p>
                        </div>
                        <div class="item">
                            <div class="rev-img">
                                <div class="rev-img-left"><img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg" alt=""></div>
                                <div class="rev-img-txt"><strong>Name of Student</strong></div>
                            </div>
                            <p>I'm so lucky to have Myles as my tutor. My reason to sign up for Tutors Online was to improve my English for work, which is in an Engineering domain. Myles himself is an engineer and that's a massive bonus because he can help me with not only speaking correctly but also delivering the context right with technical terminologies. Her lessons are always fun. Every single time, I get a couple of really good laughs!</p>
                        </div>
                        <div class="item">
                            <div class="rev-img">
                                <div class="rev-img-left"><img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg" alt=""></div>
                                <div class="rev-img-txt"><strong>Name of Student</strong></div>
                            </div>
                            <p>I'm so lucky to have Myles as my tutor. My reason to sign up for Tutors Online was to improve my English for work, which is in an Engineering domain. Myles himself is an engineer and that's a massive bonus because he can help me with not only speaking correctly but also delivering the context right with technical terminologies. Her lessons are always fun. Every single time, I get a couple of really good laughs!</p>
                        </div>
                        <div class="item">
                            <div class="rev-img">
                                <div class="rev-img-left"><img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg" alt=""></div>
                                <div class="rev-img-txt"><strong>Name of Student</strong></div>
                            </div>
                            <p>I'm so lucky to have Myles as my tutor. My reason to sign up for Tutors Online was to improve my English for work, which is in an Engineering domain. Myles himself is an engineer and that's a massive bonus because he can help me with not only speaking correctly but also delivering the context right with technical terminologies. Her lessons are always fun. Every single time, I get a couple of really good laughs!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box">

                    <div class="tab-title d-flex">
                        <div>
                            <h2>Secure Checkout</h2>
                        </div>
                    </div>

                    <div class="secure-checkout">
                        <h3>Payment Method</h3>
                        <h4>It's safe to pay on Tutors Online. All transactions are protected by SSL encryption.</h4>
                    </div>

                    <div class="payment-accordion">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <div class="btn-left">
                                            <div class="button-circle"></div>
                                            <span class="button-title">Payment Card</span>
                                            <span class="button-img"><img src="./assets/images/cards.png" alt=""></span>
                                            <span class="button-info">Visa, Mastercard, American Express, Discover, Diners</span>
                                        </div>
                                        <div class="btn-right"><i class="fa-solid fa-lock"></i></div>
                                    </button>
                                </h2>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="btn-left">
                                            <div class="button-circle"></div>
                                            <span class="button-img"><img src="./assets/images/paypal.png" alt=""></span>
                                        </div>
                                        <div class="btn-right"><i class="fa-solid fa-lock"></i></div>
                                    </button>
                                </h2>
                            </div>
                        </div>

                    </div>

                    <form method="post" id="payment_id" action="<?php echo url('/order'); ?>">

                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="teacher_id" value="<?php echo $student_no; ?>">
                        <input type="hidden" name="calender_sch_id" value="<?php echo $eventID; ?>">
                        <input type="hidden" name="total" value="<?php echo $totalhour; ?>">
                        <input type="hidden" name="transaction_fee" value="2">
                        <input type="hidden" name="net_total" value="<?php echo (2) + ($totalhour); ?>">
                        <div class="save-changes text-start">
                            <button type="submit">Checkout</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

<?php
    }
}
