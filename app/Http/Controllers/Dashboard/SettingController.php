<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function settings(){
        $PageTitle = 'Settings | ProTutor';
        $userid = Session::get('tutorid');  
        $user_data =  User::where('id', $userid)->first();
        $calender = $user_data->role;
        return view("tutor.setting",compact('PageTitle','user_data','calender'));
    }
    public function change_password(Request $request){

        if($request->post())
        {
            $user = User::where('id',Session::get('tutorid'))->first();
    
            if($user->password === md5($request->post('Curr_pswd')))
            {
                if($request->post('new_pswd') == $request->post('confirm_pswd'))
                {
                    $user->password = md5($request->post('new_pswd'));
    
                    DB::table('users')->where('id',$user->id)->update(['password' => $user->password]);
                }else{
                    return view("tutor.setting")->with('error_msg',__('Your new and confirm password does not matched'));
                }
                return view("tutor.setting")->with('success_msg',__('Your password has been changed successfully'));
            }else{
                return view("tutor.setting")->with('error_msg',__('Your old password does not matched'));
            }   
        }
        return view("tutor.setting");
    }


    
    public function student_settings(){
        $PageTitle = 'Settings | ProTutor';
        $userid = Session::get('userid');  
        $user_data =  User::where('id', $userid)->first();
        $calender = $user_data->role;
        return view("student.setting",compact('PageTitle','user_data','calender'));
    }
    public function student_change_password(Request $request){

        if($request->post())
        {
            $user = User::where('id',Session::get('userid'))->first();
    
            if($user->password === md5($request->post('Curr_pswd')))
            {
                if($request->post('new_pswd') == $request->post('confirm_pswd'))
                {
                    $user->password = md5($request->post('new_pswd'));
    
                    DB::table('users')->where('id',$user->id)->update(['password' => $user->password]);
                }else{
                    return view("tutor.setting")->with('error_msg',__('Your new and confirm password does not matched'));
                }
                return view("tutor.setting")->with('success_msg',__('Your password has been changed successfully'));
            }else{
                return view("tutor.setting")->with('error_msg',__('Your old password does not matched'));
            }   
        }
        return view("student.setting");
    }
}
