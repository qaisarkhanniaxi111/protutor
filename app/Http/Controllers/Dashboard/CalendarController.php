<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Notifications;
use App\Models\Calendar;
use App\Models\User;
use App\Models\Userdetail;
use App\Models\Subject;
use App\Models\Teaches_level;
use App\Models\Tutors;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CalendarController extends Controller
{
    public function calendar(Request $request)
    { 

        $data = Session::get('tutordata');
        if($data->role != 3){
            return redirect(route('calendar.index'));
        }

        $userid = Session::get('tutorid');
        $teacher_data=  Userdetail::where('student_no', $userid)->get();
        $profile_verified = $teacher_data[0]->profile_verified;
        if($profile_verified=='0'){
            return redirect(route('tutor.dashboard'))->with('error_msg',__("You cannot go to the Calendar menu, please complete your profile first and have your profile verified by an administrator."));
        }

        $tutor=new Tutors();
        $tutorid=Session::get("tutorid");
        $subjs=$tutor->getSubjects($tutorid);
        $subject =  Subject::all();
        $teache_level =  Teaches_level::all();

        $PageTitle = 'Calendar | ProTutor';

        if($request->post()){ 
            
            $schedule = new Calendar;
            $schedule->start_date =  $request->start_date; 
            $schedule->end_date =  $request->end_date; 
            $schedule->student_no =  $request->student_no;  
            $schedule->grade =  $request->grade;  
            $schedule->subject =  $request->subject;  
            $schedule->note =  $request->note;  
            $schedule->status =  'schedule';  
            $schedule->save();

            $user_data =  User::where('id', $request->student_no)->first();
            $user_email = $user_data->email;
            $superadmin='1';
            $admin='2';
            $notificationstype = array('superadmin'=>$superadmin,'admin'=>$admin);
            $notifi_notifiable_id=implode(",",$notificationstype);

            $notificationsdata = 'New Schedule added by ('.$user_email.')';
            $Notifications = new Notifications();
            $Notifications->viewer_role =$notifi_notifiable_id;
            $Notifications->user_id ='1';
            $Notifications->message_type='NewSchedule';
            $Notifications->data=$notificationsdata;
            $Notifications->read_at='0';
            $Notifications->save(); 
            
        }
        
        return view("tutor.calendar.index",compact('PageTitle','subject','teache_level','subjs'));

    }

    public function getcalendar(Request $request,$id)
    {

        //$getData = Calendar::where('student_no',$id)->where('status','schedule')->get();
        $getData = Calendar::where('student_no',$id)->get();
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

    public function editcalendar(Request $request)
    {

        Calendar::where('id', $request->id)->update([ 
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'grade' => $request->grade,
            'subject' => $request->subject,
            'note' => $request->note 
        ]);     
    } 

    public function addSchedule(Request $request)
    { 

        if($request->post()){ 



            //DB::enableQueryLog();
            $cale = Calendar::whereBetween('start_date', [$request->start_date_s, $request->end_date_s])->orWhere(function ($query) use ($request) {
                $query->whereBetween('end_date', [$request->start_date_s, $request->end_date_s]);
            })->first(); 
            //dd(DB::getQueryLog());

            if(!empty($cale)){
                return "error";
            }  

            $schedule = new Calendar;
            $schedule->start_date =  $request->start_date_s; 
            $schedule->end_date =  $request->end_date_s; 
            $schedule->student_no =  $request->student_no_s;
            $schedule->note =  $request->note_s;
            $schedule->status =  'time_off';

            if($schedule->save()){

                $user_data =  User::where('id', $request->student_no_s)->first();
                $user_email = $user_data->email;
                $superadmin='1';
                $admin='2';
                $notificationstype = array('superadmin'=>$superadmin,'admin'=>$admin);
                $notifi_notifiable_id=implode(",",$notificationstype);

                $notificationsdata = 'New Schedule time off added by ('.$user_email.')';
                $Notifications = new Notifications();
                $Notifications->viewer_role =$notifi_notifiable_id;
                $Notifications->user_id ='1';
                $Notifications->message_type='NewSchedule';
                $Notifications->data=$notificationsdata;
                $Notifications->read_at='0';
                $Notifications->save();

                return true;
            } else{
                return false;
            }
        }
    }

    public function add_availability_Schedule(Request $request)
    { 

        if($request->post()){ 


            //DB::enableQueryLog();
            $cale = Calendar::whereBetween('start_date', [$request->start_date_a, $request->end_date_a])->orWhere(function ($query) use ($request) {
                $query->whereBetween('end_date', [$request->start_date_a, $request->end_date_a]);
            })->first(); 
            //dd(DB::getQueryLog());

            if(!empty($cale)){
                return "error";
            }  
            $startDateTime = Carbon::parse($request->start_date_a);
            $endDateTime = Carbon::parse($request->end_date_a);
           
            // Divide the availability slot into 1-hour time slots
            while ($startDateTime->lt($endDateTime)) {
                $nextHour = $startDateTime->clone()->addHour();
                if ($nextHour->gt($endDateTime)) {
                    $nextHour = $endDateTime;
                }

                $schedule = new Calendar;
                $schedule->start_date =  $startDateTime; 
                $schedule->end_date =  $nextHour; 
                $schedule->student_no =  $request->student_no_a;
                $schedule->grade =  $request->grade_a;
                $schedule->subject =  $request->subject_a;
                $schedule->note =  $request->note_a;
                $schedule->status =  'schedule';
                $schedule->save();
                $startDateTime = $nextHour;
            }
            // $schedule = new Calendar;
            // $schedule->start_date =  $request->start_date_a; 
            // $schedule->end_date =  $request->end_date_a; 
            // $schedule->student_no =  $request->student_no_a;
            // $schedule->grade =  $request->grade_a;
            // $schedule->subject =  $request->subject_a;
            // $schedule->note =  $request->note_a;
            // $schedule->status =  'schedule';

            // if($schedule->save()){

                $user_data =  User::where('id', $request->student_no_a)->first();
                $user_email = $user_data->email;
                $superadmin='1';
                $admin='2';
                $notificationstype = array('superadmin'=>$superadmin,'admin'=>$admin);
                $notifi_notifiable_id=implode(",",$notificationstype);

                $notificationsdata = 'New Schedule added by ('.$user_email.')';
                $Notifications = new Notifications();
                $Notifications->viewer_role =$notifi_notifiable_id;
                $Notifications->user_id ='1';
                $Notifications->message_type='NewSchedule';
                $Notifications->data=$notificationsdata;
                $Notifications->read_at='0';
                $Notifications->save();

                return true;
            // } else{
            //     return false;
            // }
        }
        
    }


    public function getEventByid(Request $request,$id)
    {
        //$getData = Calendar::where('id',$id)->where('status','schedule')->get();
         //print_r($getData[0]); die;
        $getData = Calendar::where('id',$id)->get();
        return $getData[0];
    } 
}
