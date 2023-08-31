<?php


namespace App\Http\Controllers\Tutor;

use App\Models\GroupLesson;
use App\Models\Galleries;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GroupLessonPlan;
use App\Models\Payment;
use App\Models\Rating;
use App\Models\Subject;
use App\Models\Teaches_level;
use App\Models\Tutors;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class GroupLessonController extends Controller
{
    public function groupclasses()
    {
        $todayDate = now()->format('Y-m-d');
        $todayGroupLessons = GroupLesson::with(['teachLevel', 'subject', 'tutor', 'gallery'])->whereDate('class_start_date', $todayDate)->limit(4)->get();
        $groupLessons = GroupLesson::with(['teachLevel', 'subject', 'tutor', 'gallery'])->simplePaginate(12);

        $teaches_levels = Teaches_level::select('id', 'teaches_level')->get();
        $teaches_levels = $teaches_levels->toArray();
        $subjects = Subject::select('id', 'subject')->get();
        $subjects = $subjects->toArray();

        return view("frontend.grouplessons", compact('todayGroupLessons', 'groupLessons', 'teaches_levels', 'subjects'));
    }

    public function openGroupDetails(GroupLesson $groupLesson)
    {
        $groupLessonPlan=GroupLessonPlan::where('group_lesson_id',$groupLesson->id)->get();
        $groupLessonPlan=$groupLessonPlan->toArray();
        $tutor = $groupLesson->tutor;
        $teachLevel = $groupLesson->teachLevel;
        $subject = $groupLesson->subject;
        $gallery = $groupLesson->gallery;
        $student = $groupLesson ? $groupLesson->students: '';

        $student = auth()->user();
        $studentId = $student ? $student->id: '';

        $paymentStatus = 'unpaid';
        $payments = null;

        if ($student) {
            $payments = Payment::whereHas('studentPayments', function($query) use($studentId) {
                    $query->where('student_id', $studentId);
                })
                ->notFetchInActivePayments()
                ->where('group_lesson_id', $groupLesson->id)
                ->count();
        }

        if ($payments > 0) {

            $paymentStatus = 'paid';

        }


        $ratingStatus = false;
        $ratingExists = false;

        if (auth()->check()) {
            if ($student->rating) {
                $ratingExists = true;
            }
        }
        // $ratingExists = $student->rating ? true: false;

        $todayDate = Carbon::now();
        $groupLessonEndDate = Carbon::parse($groupLesson->class_end_date);

        if($groupLessonEndDate->lt($todayDate)){

            if (! $ratingExists) {
                $ratingStatus = true;
            }

        }

        // calculate rating
        $ratings = Rating::where('group_lesson_id', $groupLesson->id);
        $rating = $ratings->get();

        $count=0;
        foreach ($rating as $countRating) {
            $count+=$countRating->rating;
        }
        $numberOfRating=$ratings->count();
        if($count<=0 || $numberOfRating<=0){
            $groupLessonRating=0;
        }else{

            $groupLessonRating=$count/$numberOfRating;
        }

        $enrolledIntoGroupLesson = false;

        if ($student) {
            if ($student->studentEnrolledLessons) {
                $enrolledIntoGroupLesson = $student->studentEnrolledLessons->find($groupLesson->id);

                if ($enrolledIntoGroupLesson) {
                    $enrolledIntoGroupLesson = true;
                }
            }
        }

        $currentGroupLessonUrl = request()->url();

        session()->put('group_lesson_detail_page_url', $currentGroupLessonUrl);


        return view('frontend.grouplessondetails', compact('groupLesson', 'tutor', 'teachLevel', 'subject', 'gallery','paymentStatus', 'student', 'ratingStatus', 'groupLessonRating', 'enrolledIntoGroupLesson','groupLessonPlan'));
    }


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
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $newName = time() . '.' . $fileExt;
            $request->file('image')->move(storage_path('app/public/group_lessons/images/'), $newName);
            $url = $newName;
            $newGallery->image = $url;
            $newGallery->image_type = 1;
            $newGallery->group_lesson_id = $newGroupLesson->id;
            $newGallery->save();
        }

        // Plan items from the URL
        $encodedPlanItems = $request['plan'];
        // Decode the URL parameter
        $decodedPlanItems = urldecode($encodedPlanItems);

        // Parse the JSON string to get the original array
        $planItemsArray = json_decode($decodedPlanItems, true);
        foreach ($planItemsArray as $value) {

            $newPlan = new GroupLessonPlan;
            $newPlan->group_lesson_id = $newGroupLesson->id;
            $newPlan->type = $value['planItemType'];
            $newPlan->date = $value['date'];
            $newPlan->time = $value['time'];
            $newPlan->save();
        }

        return response()->json($request->all());
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
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $newName = time() . '.' . $fileExt;
            $request->file('image')->move(storage_path('app/public/group_lessons/images/'), $newName);
            $url = $newName;
            $updateGallery->image = $url;
            $updateGallery->image_type = 1;
            $updateGallery->group_lesson_id = $updateGroupLesson->id;
            $updateGallery->save();
        }

        return 'ok';
    }

    public function showGroupLesson($id)
    {
        $showGroupLesson = GroupLesson::with(['teachLevel', 'subject', 'tutor', 'gallery'])->where('id', $id)->first();
        if (!empty($showGroupLesson)) {
            return response()->json($showGroupLesson);
        }
    }
    public function editGroupLesson($id)
    {

        $editGroupLesson = GroupLesson::with(['teachLevel', 'subject', 'tutor', 'gallery'])->where('id', $id)->first();
        if (!empty($editGroupLesson)) {
            $tutorid = session()->get("tutorid");
            $tutor = new Tutors();
            $subj = $tutor->getSubjects($tutorid);
            $teaches_levels = $tutor->teaches_levels();
            return response()->json(["groupLesson" => $editGroupLesson, 'subjects' => $subj, 'teaches_levels' => $teaches_levels]);
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

            return "ok";
        }
    }

    public function completeGroupLesson()
    {
        $tutorid = Session::get("tutorid");
        $tutor = new Tutors();

        $groupLessons = GroupLesson::with(['teachLevel', 'subject', 'tutor', 'gallery'])->where('tutor_id', $tutorid)->where('tutor_id', $tutorid)->where('is_completed', 1)->orderBy('id', 'DESC')->get();

        $subj = $tutor->getSubjects($tutorid);

        $teaches_levels = $tutor->teaches_levels();
        return response()->json($groupLessons);
    }
    public function uncompleteGroupLesson()
    {
        $tutorid = Session::get("tutorid");
        $tutor = new Tutors();

        $groupLessons = GroupLesson::with(['teachLevel', 'subject', 'tutor', 'gallery'])->where('tutor_id', $tutorid)->where('tutor_id', $tutorid)->where('is_completed', 0)->orderBy('id', 'DESC')->get();

        $subj = $tutor->getSubjects($tutorid);

        $teaches_levels = $tutor->teaches_levels();
        return response()->json($groupLessons);
    }

}
