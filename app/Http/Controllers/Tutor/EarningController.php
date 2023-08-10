<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EarningController extends Controller
{
    public function openEarningPage()
    {
        $totalClearenceBalance = 0;
        $tutor = auth()->user();

        if ($tutor->teacherPayments) {

            $totalClearenceBalance = Payment::where('tutor_id', $tutor->id)->where('status', 'available')->get();

            $totalClearenceBalance = $totalClearenceBalance->map(function($key) {
                return $key->amount;
            })->implode('-');

        }

        return view('tutor.earnings.index', compact('tutor', 'totalClearenceBalance'));
    }

    public function openClearencePage()
    {
        return view('tutor.earnings.clearence');
    }
}
