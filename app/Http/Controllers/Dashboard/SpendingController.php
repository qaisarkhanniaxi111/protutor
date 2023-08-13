<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    public function openStudentSpendings()
    {
        $payments = null;

        if (auth()->check()) {

            $student = auth()->user();

            $payments = Payment::where('student_id', $student->id)
                        ->get();

        }

        return view('dashboard.spendings', compact('payments'));
    }
}
