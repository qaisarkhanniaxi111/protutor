<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\GroupLesson;
use App\Models\GroupLessonPlan;
use App\Models\Payment;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentGroupLessonController extends Controller
{
    public function groupLesson(){
        $groupLessons = GroupLesson::with(['teachLevel', 'subject', 'tutor', 'gallery'])->get();
        $student = auth()->user();
        $studentId = $student ? $student->id: '';
        if ($student) {
            $payments = Payment::whereHas('studentPayments', function($query) use($studentId) {
                    $query->where('student_id', $studentId);
                })
                ->notFetchInActivePayments()
                ->get();
        }
        $enrolled=$payments->toArray();
        $AllLessons=$groupLessons->toArray();
       
        return view('dashboard.groupLessons.groupLessons',['enrolled'=>$enrolled,'AllLessons'=>$AllLessons]);
    }
    public function groupLessonDetails($groupLesson){
        $student = auth()->user();
        $studentId = $student ? $student->id: '';
        if ($student) {
            $payments = Payment::whereHas('studentPayments', function($query) use($studentId) {
                    $query->where('student_id', $studentId);
                })
                ->notFetchInActivePayments()
                ->where('group_lesson_id', $groupLesson)
                ->count();
        }
        if($payments==1){
            $todayDate = now()->format('Y-m-d');
            $completedPlan=GroupLessonPlan::where('group_lesson_id',$groupLesson)->where('date','<',$todayDate)->get();
            $activePlan=GroupLessonPlan::where('group_lesson_id',$groupLesson)->where('date','=',$todayDate)->get();
            $remainningPlan=GroupLessonPlan::where('group_lesson_id',$groupLesson)->where('date','>',$todayDate)->get();
       
        $completedPlans=$completedPlan->toArray();
        $activePlans=$activePlan->toArray();
        $remainningPlans=$remainningPlan->toArray();

        $ratingStatus = false;
        $ratingExists = false;

       
        
        $checkRatingStatus = GroupLesson::where('id', $groupLesson)->select('class_end_date')->first();

        if ($checkRatingStatus && $checkRatingStatus->class_end_date <= $todayDate) {
            $ratingStatus = true;
        } 
        $checkRatingExists=Rating::where('group_lesson_id',$groupLesson)->where('student_id',$studentId)->count();
        
        if($checkRatingExists>0){
            $ratingExists = true;
        }
        
        return view('dashboard.groupLessons.groupLessonsDetails',['completedPlans'=>$completedPlans,'activePlans'=>$activePlans,'remainningPlans'=>$remainningPlans,'ratingStatus'=>$ratingStatus,'ratingExists'=>$ratingExists,'groupLesson_id'=>$groupLesson]);
    }else{
        abort(404);
    }
    }
}
