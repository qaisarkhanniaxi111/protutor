<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Countries;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Hourly_rate;
use App\Models\Identification;
use App\Models\Subject;
use App\Models\Userdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function profileUpdate(Request $request,$id =NULL){

        $data = Session::get('tutordata');


        $PageTitle = 'Profile | ProTutor';
        $userid = Session::get('tutorid');  
        $countries =  Countries::all();

        if($data->role == 4){

            //updateStudent
            $getData='SELECT users.id as user_id,users.first_name,users.last_name,users.phone_number,users.role,users.user_status,users.email ,users.email_verify,users.password,userdetails.* FROM `users` LEFT JOIN `userdetails` ON users.id = userdetails.student_no WHERE users.id="'.$userid.'"';
            $listUser = DB::select($getData);
            if($request->post()){
                if($request->updateStudent == 'updateStudent'){
                    $profile = Userdetail::where('student_no', $request->id)->update([ 
                        'timezone' => $request->timezone,
                        'phone' => $request->phone, 
                        'country' => $request->country, 
                    ]);
                    return redirect('/profile/about')->with('success_msg',__('Profile update successfully'));
                }

                if($request->updatePhoto == 'updatePhoto'){ 
                    if($_FILES['profile_img']['name']){
                        $image1 = $request->file('profile_img');
                        $imageName = time().'_'.$image1->getClientOriginalName();  
                        $request->profile_img->move(public_path('images'), $imageName);
                        $profile = Userdetail::where('student_no', $request->id)->update([
                            'profile_img' => $imageName 
                        ]); 
                    }
                    return redirect('/profile/photo')->with('success_msg',__('Profile update successfully'));
                }
                
            }

            return view("dashboard/profile_student",compact('PageTitle','listUser','countries'));

        }else{ 

            $getData='SELECT users.id as user_id,users.first_name,users.last_name,users.phone_number,users.role,users.user_status,users.email ,users.email_verify,users.password,userdetails.* FROM `users` LEFT JOIN `userdetails` ON users.id = userdetails.student_no WHERE users.id="'.$userid.'"';
            $listUser = DB::select($getData);

            
            $subject =  Subject::all();

            $getEgducation = Education::where('userdetail_id',$userid)->get();
            $getCertificate = Certificate::where('userdetail_id',$userid)->get();
            $getExperience = Experience::where('userdetail_id',$userid)->get();
            $getIdentification = Identification::where('userdetail_id',$userid)->get();
            $rateAll = Hourly_rate::all();



            if($request->post()){
            //print_r($request->subject); die;
            //DB::enableQueryLog();
            //dd(DB::getQueryLog());
                if($request->about == 'about'){
                    if($request->subject){
                        $profile = Userdetail::where('student_no', $request->id)->update([
                            'subject' => implode(',', $request->subject)
                        ]);     
                    }

                    if($request->subject ==""){
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
                    return redirect('tutor/profile/about')->with('success_msg',__('Profile update successfully'));
                }

                if($request->photo == 'photo'){
                    if($_FILES['profile_img']['name']){
                        $image1 = $request->file('profile_img');
                        $imageName = time().'_'.$image1->getClientOriginalName();  
                        $request->profile_img->move(public_path('images'), $imageName);
                        $profile = Userdetail::where('student_no', $request->id)->update([
                            'profile_img' => $imageName 
                        ]); 
                    }
                    return redirect('tutor/profile/photo')->with('success_msg',__('Profile update successfully'));
                } 

                if($request->description == 'description'){
                    $profile = Userdetail::where('student_no', $request->id)->update([
                        'desc_first_last' => $request->desc_first_last,
                        'desc_about' => $request->desc_about
                    ]);     
                    return redirect('tutor/profile/description')->with('success_msg',__('Profile update successfully'));
                }

                if($request->videoSub == 'videoSub'){
                    if($_FILES['upload_video']['name']){
                        $image12 = $request->file('upload_video');
                        $imageName1 = time().'_'.$image12->getClientOriginalName();  
                        $request->upload_video->move(public_path('videos'), $imageName1);

                        $profile = Userdetail::where('student_no', $request->id)->update([
                            'video_link' => $imageName1 
                        ]); 
                    }
                    return redirect('tutor/profile/video')->with('success_msg',__('Profile update successfully'));
                } 
                if($request->education == 'education'){ 
                    foreach ($request->university_name as $key => $value) {
                        $education =  new Education;

                        $filess = $request->file('degree_verification_pic');
                        $fileNames = time().'_'.$filess[$key]->getClientOriginalName();  
                        $request->degree_verification_pic[$key]->move(public_path('educations'), $fileNames);

                        $education->userdetail_id =  $request->id;
                        $education->university_name =  $value;
                        $education->degree_name =  $request->degree_name[$key];
                        $education->degree_type =  $request->degree_type[$key];
                        $education->specialization =  $request->specialization[$key];
                        $education->year_of_study =  $request->year_of_study[$key].'-'.$request->year_of_study_end[$key];
                        $education->degree_verification_pic =  $fileNames; 
                        $education->save();
                    }  
                    return redirect('tutor/profile/background')->with('success_msg',__('Profile update successfully'));
                }


                if($request->certificate == 'certificate'){ 
                    foreach ($request->certificate_name as $key => $value) {
                        $certificate =  new Certificate; 

                        $filess = $request->file('certificate_verified_pic');
                        $fileNames = time().'_'.$filess[$key]->getClientOriginalName();  
                        $request->certificate_verified_pic[$key]->move(public_path('certificates'), $fileNames);


                        $certificate->userdetail_id =  $request->id;
                        $certificate->certificate_name =  $value;
                        $certificate->description =  $request->description[$key];
                        $certificate->issued_by =  $request->issued_by[$key]; 
                        $certificate->year_of_study =  $request->year_of_study[$key].'-'.$request->year_of_study_end[$key];
                        $certificate->certificate_verified_pic =  $fileNames; 
                        $certificate->save();
                    }
                    return redirect('tutor/profile/background')->with('success_msg',__('Profile update successfully'));  
                }

                if($request->experience == 'experience'){ 
                    foreach ($request->company_name as $key => $value) {
                        $experience =  new Experience; 

                        $experience->userdetail_id =  $request->id;
                        $experience->company_name =  $value;
                        $experience->position =  $request->position[$key]; 
                        $experience->period_of_employment =  $request->period_of_employment[$key].'-'.$request->period_of_employment_end[$key];
                        $experience->save();
                    }  
                    return redirect('tutor/profile/background')->with('success_msg',__('Profile update successfully'));
                }


                if($request->identification == 'identification'){ 

                    foreach ($request->issued_by_country as $key => $value) {
                        $experience =  new Identification; 

                        $experience->userdetail_id =  $request->id;
                        $experience->issued_by_country =  $value;
                        $experience->type_of_document =  $request->type_of_document[$key];
                        $experience->identification_number =  $request->identification_number[$key]; 
                        $experience->expiry_date =  $request->expiry_date[$key].'-'.$request->expiry_date_end[$key];

                        $filess = $request->file('identity_document_front');
                        $fileNames = time().'_front'.$filess[$key]->getClientOriginalName();  
                        $request->identity_document_front[$key]->move(public_path('identity'), $fileNames);
                        $experience->identity_document_front =  $fileNames;

                        $filess_b = $request->file('identity_document_back');
                        $fileNames_b = time().'_back'.$filess_b[$key]->getClientOriginalName();  
                        $request->identity_document_back[$key]->move(public_path('identity'), $fileNames_b);
                        $experience->identity_document_back =  $fileNames_b; 
                        $experience->save();
                    }
                    return redirect('tutor/profile/background')->with('success_msg',__('Profile update successfully'));
                }


               // return redirect('/profile')->with('success_msg',__('Profile update successfully'));

            }
            return view("tutor.profile.profile",compact('PageTitle','listUser','countries','subject','getEgducation','getCertificate','getExperience','getIdentification','rateAll'));
        }
    }





    public function deleteEducation(Request $request, $id){
        $deleteRow = Education::where('id',$id);

        if($deleteRow->delete()) { 
            return redirect("/tutor/profile/background")->with('success_msg','Education deleted successfully.');
        }
    }
    public function deleteExperience(Request $request, $id){
        $deleteRow = Experience::where('id',$id);

        if($deleteRow->delete()) { 
            return redirect("/tutor/profile/background")->with('success_msg','Experience deleted successfully.');
        }
    }
    public function deleteCertificate(Request $request, $id){
        $deleteRow = Certificate::where('id',$id);

        if($deleteRow->delete()) { 
            return redirect("/tutor/profile/background")->with('success_msg','Certificate deleted successfully.');
        }
    }
    public function deleteIdentity(Request $request, $id){
        $deleteRow = Identification::where('id',$id);

        if($deleteRow->delete()) { 
            return redirect("/tutor/profile/background")->with('success_msg','Certificate deleted successfully.');
        }
    }
}
