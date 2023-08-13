<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GroupLesson;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $price = $request->price;
        $group_lesson_id = $request->group_lesson_id;
        $user = auth()->user();
        return view('frontend.payment', ['intent' => $user->createSetupIntent(), 'price' => $price, 'groupLessonId' => $group_lesson_id]);
    }
    public function charge(Request $request, GroupLesson $groupLesson)
    {
        $tutor = $groupLesson->tutor;
        $amount = $request['amount'] * 100;

        $paymentMethodId = $request['payment_method'];
        $user = auth()->user();
        $user->createOrGetStripeCustomer();
        $paymentMethod = $user->addPaymentMethod($paymentMethodId);

        $transaction = $user->charge(
            $amount,
            $paymentMethod->id
        );

        $tutor_id = $tutor->id;
        $group_lesson_id = $groupLesson->id;
        $std_id = auth()->user()->id;
        $currency = config('protutor.currency');
        $payment_id = $paymentMethod->id;

        $newPayment = new Payment;

        $newPayment->student_id = $std_id;
        $newPayment->tutor_id = $tutor_id;
        $newPayment->group_lesson_id = $group_lesson_id;
        $newPayment->currency = $currency;
        $newPayment->transaction_id = $transaction ? $transaction->id: '';

        $newPayment->amount = $request->amount;

        $newPayment->save();

        return redirect()->route('group.details', $groupLesson->id);
    }
}
