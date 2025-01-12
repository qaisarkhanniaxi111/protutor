<?php


namespace App\Http\Controllers\Tutor;

use App\Models\GroupLesson;
use App\Models\Galleries;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Tutors;
use Illuminate\Support\Facades\Session;
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
            $request->file('image')->move(storage_path('app/public/group_lessons/images/'), $newName);
            $url = $newName;
            $newGallery->image = $url;
            $newGallery->image_type = 1;
            $newGallery->group_lesson_id = $newGroupLesson->id;
            $newGallery->save();
        }
        session()->flash('groupLessonCreated', 'Created');
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
        $updateGroupLesson = GroupLesson::find($request['GroupLessonId']);
        $updateGroupLesson->tutor_id = session()->get("tutorid");
        $updateGroupLesson->title = $request['title'];
        $updateGroupLesson->teach_level_id = $request['teaches_level'];
        $updateGroupLesson->subject_id = $request['subject'];
        $updateGroupLesson->participants = $request['total_Participants'];
        $updateGroupLesson->price = $request['price'];
        $updateGroupLesson->is_completed = $request['status'];
        $updateGroupLesson->registration_start_date = $request['register_Start_Date'];
        $updateGroupLesson->registration_end_date = $request['register_End_Date'];
        $updateGroupLesson->class_start_date = $request['class_Start_Date'];
        $updateGroupLesson->class_end_date = $request['class_End_Date'];
        $updateGroupLesson->save();
        if ($request->hasFile('image')) {
            $gallery = Gallery::where('group_lesson_id', $request['GroupLessonId'])->first();
            $deleteGallery = Gallery::find($gallery->id);


            $image = explode('/', $deleteGallery->image);

            $imageName = $image[array_key_last($image)];
            if (file_exists(storage_path('app/public/group_lessons/images/' . $imageName))) {
                unlink(storage_path('app/public/group_lessons/images/' . $imageName));
            }
            $updateGallery = Gallery::find($gallery->id);
            $fileName = $request->file('image')->getClientOriginalName();
            $newName = time() . $fileName;
            $request->file('image')->move(storage_path('app/public/group_lessons/images/'), $newName);
            $url = $newName;
            $updateGallery->image = $url;
            $updateGallery->image_type = 1;
            $updateGallery->group_lesson_id = $updateGroupLesson->id;
            $updateGallery->save();
        }
        return redirect(route('index.groupLesson'));
    }

    public function showGroupLesson($id)
    {
        $showGroupLesson = GroupLesson::find($id);
        $showGroupLesson = $showGroupLesson->toArray();
        if (!empty($showGroupLesson)) {
            $gallery = Gallery::where('group_lesson_id', $id)->first();
            $tutorid = session()->get("tutorid");
            $tutor = new Tutors();
            $subj = $tutor->getSubjects($tutorid);
            $teaches_levels = $tutor->teaches_levels();
            $data = compact('showGroupLesson', 'subj', 'teaches_levels', 'gallery');
            return view('tutor.GroupLesson.show')->with($data);
        }
    }
    public function editGroupLesson($id)
    {

        $editGroupLesson = GroupLesson::find($id);
        $editGroupLesson = $editGroupLesson->toArray();
        if (!empty($editGroupLesson)) {
            $gallery = Gallery::where('group_lesson_id', $id)->first();
            $tutorid = session()->get("tutorid");
            $tutor = new Tutors();
            $subj = $tutor->getSubjects($tutorid);
            $teaches_levels = $tutor->teaches_levels();
            $data = compact('editGroupLesson', 'subj', 'teaches_levels', 'id', 'gallery');
            session()->flash('groupLessonCreated', 'Updated');
            return view('tutor.GroupLesson.edit')->with($data);
        }
    }

    public function deleteGroupLesson($id)
    {
        $groupLesson = GroupLesson::find($id);
        if ($groupLesson) {
            $gallery = Gallery::where('group_lesson_id', $groupLesson->id)->first();
            $deleteGallery = Gallery::find($gallery->id);
            if ($deleteGallery) {


                $image = explode('/', $deleteGallery->image);

                $imageName = $image[array_key_last($image)];
                if (file_exists(storage_path('app/public/group_lessons/images/' . $imageName))) {
                    unlink(storage_path('app/public/group_lessons/images/' . $imageName));
                }
                $deleteGallery->delete();
            }
            $groupLesson->delete();
            return redirect(route('index.groupLesson'));
        }
    }


    public function createGroupLesson()
    {
        $tutorid = Session::get("tutorid");
        $tutor = new Tutors();

        $groupLessons = GroupLesson::where('tutor_id', $tutorid)->where('is_completed', 0)->get();
        $groupLessonsCompleted = GroupLesson::where('tutor_id', $tutorid)->where('is_completed', 1)->get();
        $groupLessons = $groupLessons->toArray();
        $groupLessonsCompleted = $groupLessonsCompleted->toArray();

        $subj = $tutor->getSubjects($tutorid);

        $teaches_levels = $tutor->teaches_levels();
        return view("tutor.GroupLesson.createGroupLesson", ["teaches_levels" => $teaches_levels, "subjects" => $subj, "groupLessons" => $groupLessons, "groupLessonsCompleted" => $groupLessonsCompleted]);
    }
    public function completeGroupLesson()
    {
        $tutorid = Session::get("tutorid");
        $tutor = new Tutors();

        $groupLessons = GroupLesson::where('tutor_id', $tutorid)->where('is_completed', 0)->get();
        $groupLessonsCompleted = GroupLesson::where('tutor_id', $tutorid)->where('is_completed', 1)->get();
        $groupLessons = $groupLessons->toArray();
        $groupLessonsCompleted = $groupLessonsCompleted->toArray();

        $subj = $tutor->getSubjects($tutorid);

        $teaches_levels = $tutor->teaches_levels();
        return view("tutor.GroupLesson.CompletedGroupLesson", ["teaches_levels" => $teaches_levels, "subjects" => $subj, "groupLessons" => $groupLessons, "groupLessonsCompleted" => $groupLessonsCompleted]);
    }
    public function uncompleteGroupLesson()
    {
        $tutorid = Session::get("tutorid");
        $tutor = new Tutors();

        $groupLessons = GroupLesson::where('tutor_id', $tutorid)->where('is_completed', 0)->get();
        $groupLessonsCompleted = GroupLesson::where('tutor_id', $tutorid)->where('is_completed', 1)->get();
        $groupLessons = $groupLessons->toArray();
        $groupLessonsCompleted = $groupLessonsCompleted->toArray();

        $subj = $tutor->getSubjects($tutorid);

        $teaches_levels = $tutor->teaches_levels();
        return view("tutor.GroupLesson.UncompletedGroupLesson", ["teaches_levels" => $teaches_levels, "subjects" => $subj, "groupLessons" => $groupLessons, "groupLessonsCompleted" => $groupLessonsCompleted]);
    }
}
