<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\GroupLesson;
use App\Models\Payment;
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
}
