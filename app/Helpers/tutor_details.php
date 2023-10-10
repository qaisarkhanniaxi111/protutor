<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('activetutorlessons')) {
  function activetutorlessons($tutorId) {

      $activeLession=DB::select("SELECT COUNT(*) as activeCount FROM users INNER JOIN group_lessons ON users.id = group_lessons.tutor_id INNER JOIN group_lesson_student ON group_lessons.id = group_lesson_student.group_lesson_id WHERE users.id = $tutorId AND users.role = 3 AND group_lessons.is_completed = 0;");

      return isset($activeLession[0]) ? $activeLession[0]->activeCount : '' ;
  }
}
if (! function_exists('deliveredtutorlessons')) {
  function deliveredtutorlessons($tutorId) {

      $deliveredLession=DB::select("SELECT COUNT(*) as Count FROM users INNER JOIN group_lessons ON users.id = group_lessons.tutor_id WHERE users.id = $tutorId AND users.role = 3 AND group_lessons.is_completed = 1;");

      return isset($deliveredLession[0]) ? $deliveredLession[0]->Count : '' ;
  }
}
if (! function_exists('totaltutorlessons')) {
  function totaltutorlessons($tutorId) {

      $totalLession=DB::select("SELECT COUNT(*) as Count FROM users INNER JOIN group_lessons ON users.id = group_lessons.tutor_id WHERE users.id = $tutorId AND users.role = 3;");

      return isset($totalLession[0]) ? $totalLession[0]->Count : '' ;
  }
}