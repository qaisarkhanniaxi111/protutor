<?php

use App\Models\GroupLesson;
use App\Models\Payment;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Support\Facades\DB;

if (! function_exists('remainingGroupLessonParticipants')) {

    $totalParticipants = 0;
    $enrolledParticipants = 0;
    $remainingParticipants = 0;

    function remainingGroupLessonParticipants($groupLessonId) {

        $groupLesson = GroupLesson::find($groupLessonId);

        $enrolledParticipants = $groupLesson->enrolledStudents ? $groupLesson->enrolledStudents->count(): 0;
        // $enrolledParticipants = Payment::notFetchInActivePayments()->where('group_lesson_id', $groupLessonId)->count();

        if ($groupLesson) {

            $totalParticipants = $groupLesson->participants;
            $remainingParticipants = $totalParticipants - $enrolledParticipants;

        }

        return $remainingParticipants;
    }
}

if (! function_exists('groupLessonParticipantsReached')) {

    $totalParticipants = 0;
    $enrolledParticipants = 0;
    $remainingParticipants = 0;

    function groupLessonParticipantsReached($groupLessonId) {

        $groupLesson = GroupLesson::find($groupLessonId);

        $enrolledParticipants = $groupLesson->enrolledStudents ? $groupLesson->enrolledStudents->count(): 0;

        if ($groupLesson) {
            $totalParticipants = $groupLesson->participants;

            $participantsReached = $enrolledParticipants >= $totalParticipants ? true: false;
        }

        return $participantsReached;
    }
}


if (! function_exists('totalEnrolledGroupLessonParticipants')) {

    $totalEnrolledParticipants = 0;

    function totalEnrolledGroupLessonParticipants($groupLessonId) {

        $groupLesson = GroupLesson::find($groupLessonId);

        if (! $groupLesson) {
            abort(404, config('protutor.error_message.404'));
        }

        $totalEnrolledParticipants = $groupLesson->enrolledStudents ? $groupLesson->enrolledStudents->count(): 0;

        return $totalEnrolledParticipants;
    }
}

if (! function_exists('groupLessonParticipants')) {

    function groupLessonParticipants($groupLessonId) {

        $groupLesson = GroupLesson::find($groupLessonId);

        if (! $groupLesson) {
            abort(404, config('protutor.error_message.404'));
        }

        $enrolledParticipants = $groupLesson->enrolledStudents;

        return $enrolledParticipants;
    }
}
if (! function_exists('groupLessonParticipants2')) {

    function groupLessonParticipants2($groupLessonId) {

        $enrolledParticipants = DB::select("select `userdetails`.*, `group_lesson_student`.`group_lesson_id` as `pivot_lesson_id`, `group_lesson_student`.`student_id` as `pivot_std_id` from `userdetails` inner join `group_lesson_student` on `userdetails`.`student_no` = `group_lesson_student`.`student_id` where `group_lesson_student`.`group_lesson_id` = $groupLessonId");

        if (! $enrolledParticipants) {
            abort(404, config('protutor.error_message.404'));
        }


        return $enrolledParticipants;
    }
}

// if(!function_exists('getLessonRating')){
//     function getLessonRating($lessonId){
//       // calculate rating
//       $ratings = Rating::where('group_lesson_id', $lessonId);
//       $rating = $ratings->get();
//       $count=0;
//       foreach ($rating as $countRating) {
//           $count += $countRating->rating;
//       }
//       $numberOfRating=$ratings->count();
//       if($count<=0 || $numberOfRating<=0){
//           $groupLessonRating=0;
//           return $groupLessonRating.'('.$numberOfRating.')';
//       }else{

//           $groupLessonRating=$count/$numberOfRating;
//           return $groupLessonRating.'('.$numberOfRating.')';
//       }
//     }
// }

if(!function_exists('getLessonAverageRating')){
    function getLessonAverageRating($lessonId){

    $groupLesson = GroupLesson::find($lessonId);

    if (! $groupLesson) {
        abort(404, config('protutor.error_message.404'));
    }

    $ratings = $groupLesson->ratings;

    $totalStars = 0;
    $ratedParticipants = 0;
    $averageRating = 0;

    if (count($ratings) > 0) {

        foreach ($ratings as $rating) {
            $totalStars += $rating->rating;
        }

        $ratedParticipants = count($ratings);

        $averageRating = $totalStars / $ratedParticipants;
    }

    return number_format($averageRating, 1) .'('. $ratedParticipants.')';

    }
}

if(!function_exists('getLessonRatings')){

    function getLessonRatings($groupLessonId){

        $groupLesson = GroupLesson::find($groupLessonId);

        if (! $groupLesson) {
            abort(404, config('protutor.error_message.404'));
        }

        $ratings = $groupLesson->ratings;

        return $ratings;

    }

}

