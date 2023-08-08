<?php


namespace App\Http\Controllers\Tutor;

use App\Models\GroupLesson;
use App\Models\Galleries;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Tutors;
use Illuminate\Http\Request;

class GroupLessonController extends Controller
{
    public function storeGroupLesson(Request $request)
    {
        $request->validate(
            [
                'image' => 'required',
                'title' => 'required',
                'teaches_level' => 'required',
                'subject' => 'required',
                'total_Participants' => 'required',
                'price' => 'required',
                'register_Start_Date' => 'required',
                'register_End_Date' => 'required',
                'class_Start_Date' => 'required',
                'class_End_Date' => 'required',

            ]
        );
        $newGroupLesson = new GroupLesson;
        $newGroupLesson->tutor_id = session()->get("tutorid");
        $newGroupLesson->title = $request['title'];
        $newGroupLesson->teach_level_id = $request['teaches_level'];
        $newGroupLesson->subject_id = $request['subject'];
        $newGroupLesson->participants = $request['total_Participants'];
        $newGroupLesson->price = $request['price'];
        $newGroupLesson->registration_start_date = $request['register_Start_Date'];
        $newGroupLesson->registration_end_date = $request['register_End_Date'];
        $newGroupLesson->class_start_date = $request['class_Start_Date'];
        $newGroupLesson->class_end_date = $request['class_End_Date'];
        $newGroupLesson->save();

        if ($request->hasFile('image')) {
            $newGallery = new Galleries;
            $fileName = $request->file('image')->getClientOriginalName();
            $newName = time() . $fileName;
            $request->file('image')->move(storage_path('app/public/group_lessons/images/'),$newName);
            $url = $newName;
            $newGallery->image = $url;
            $newGallery->image_type = 1;
            $newGallery->group_lesson_id = $newGroupLesson->id;
            $newGallery->save();
        }
        session()->flash('groupLessonCreated','Created');
        return redirect(route('index.groupLesson'));
    }

    public function updateGroupLesson(Request $request)
    {
        $request->validate(
            [
                'GroupLessonId' => 'required',
                'title' => 'required',
                'teaches_level' => 'required',
                'subject' => 'required',
                'total_Participants' => 'required',
                'price' => 'required',
                'register_Start_Date' => 'required',
                'register_End_Date' => 'required',
                'class_Start_Date' => 'required',
                'class_End_Date' => 'required',

            ]
        );
        $newGroupLesson = GroupLesson::find($request['GroupLessonId']);
        $newGroupLesson->tutor_id = session()->get("tutorid");
        $newGroupLesson->title = $request['title'];
        $newGroupLesson->teach_level_id = $request['teaches_level'];
        $newGroupLesson->subject_id = $request['subject'];
        $newGroupLesson->participants = $request['total_Participants'];
        $newGroupLesson->price = $request['price'];
        $newGroupLesson->is_completed = $request['status'];
        $newGroupLesson->registration_start_date = $request['register_Start_Date'];
        $newGroupLesson->registration_end_date = $request['register_End_Date'];
        $newGroupLesson->class_start_date = $request['class_Start_Date'];
        $newGroupLesson->class_end_date = $request['class_End_Date'];
        $newGroupLesson->save();
        return redirect(route('index.groupLesson'));
    }

    public function showGroupLesson($id)
    {
        $showGroupLesson = GroupLesson::find($id);
        $showGroupLesson = $showGroupLesson->toArray();
        if (!empty($showGroupLesson)) {
            $tutorid = session()->get("tutorid");
            $tutor = new Tutors();
            $subj = $tutor->getSubjects($tutorid);
            $teaches_levels = $tutor->teaches_levels();
            $data = compact('showGroupLesson', 'subj', 'teaches_levels');
            return view('tutor.GroupLesson.show')->with($data);
        }
    }
    public function editGroupLesson($id)
    {
        $editGroupLesson = GroupLesson::find($id);
        $editGroupLesson = $editGroupLesson->toArray();
        if (!empty($editGroupLesson)) {
            $tutorid = session()->get("tutorid");
            $tutor = new Tutors();
            $subj = $tutor->getSubjects($tutorid);
            $teaches_levels = $tutor->teaches_levels();
            $data = compact('editGroupLesson', 'subj', 'teaches_levels', 'id');
            session()->flash('groupLessonCreated','Updated');
            return view('tutor.GroupLesson.edit')->with($data);
        }
    }

    public function deleteGroupLesson($id)
    {
        $deleteLineItem = GroupLesson::find($id);
        if ($deleteLineItem) {
            $groupLessonId = $deleteLineItem->id;
            Gallery::find($groupLessonId)->delete();
            $deleteLineItem->delete();
            return redirect(route('index.groupLesson'));
        }
    }

   
}
