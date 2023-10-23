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

            $studentId = auth()->id();

            $payments = Payment::whereHas('studentPayments', function($query) use($studentId) {
                            $query->where('student_id', $studentId);
                        })
                        ->notFetchInActivePayments()
                        ->orderBy('created_at', 'desc')
                        ->get();

            $totalSpentAmount = Payment::whereHas('studentPayments', function($query) use($studentId) {
                $query->where('student_id', $studentId);
            })
            ->notFetchInActivePayments()
            ->sum('amount');

            $totalSpentAmountInCents = $totalSpentAmount / 100;

        }

        return view('dashboard.spendings', compact('payments', 'totalSpentAmountInCents'));
    }
}
