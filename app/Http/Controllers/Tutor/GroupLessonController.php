<?php


namespace App\Http\Controllers\Tutor;
use App\Models\GroupLesson;
use App\Models\Galleries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupLessonController extends Controller
{
    public function storeGroupLesson(Request $request){
        
        $newGroupLesson = new GroupLesson;
        $newGroupLesson->title = $request['quizTitle'];
        $newGroupLesson->teacher_level_id = $request['teaches_level'];
        $newGroupLesson->subject_id = $request['subjectt'];
        $newGroupLesson->participants = $request['totalParticipants'];
        $newGroupLesson->price = 1;
        $newGroupLesson->registration_start_date = $request['registerStartDate'];
        $newGroupLesson->registration_end_date = $request['registerEndDate'];
        $newGroupLesson->class_start_date = $request['classStartDate'];
        $newGroupLesson->class_end_date = $request['ClassEndDate'];
        $newGroupLesson->save();
        
        if($r->hasFile('quizGroupImage')){
            $newGallery = new Galleries;
            $fileName = $r->file('quizGroupImage')->getClientOriginalName();
            $newName = time().$fileName;
            $r->file('quizGroupImage')->move(public_path('files') , $newName);
            $url = asset('files/'.$newName);
            $newGallery->image = $url;
            $newGallery->image_type = 1;
            $newGallery->save();
            
        }
    }
}
