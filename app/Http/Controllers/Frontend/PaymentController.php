<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GroupLesson;
use App\Models\Payment;
use App\Models\User;
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
        $price = $request->price;

        $paymentMethodId = $request['payment_method'];
        $user = auth()->user();

        $user = $user->createOrGetStripeCustomer();

        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $session = \Stripe\Checkout\Session::create([

            'line_items' => [[
                'price_data' => [
                  'currency' => 'usd',
                  'unit_amount' => $price * 100,
                  'product_data' => [
                    'name' => $groupLesson->title,
                  ],
                ],
                'quantity' => 1,
              ]],

            'customer' => $user,
            'payment_intent_data'=> [
                'setup_future_usage'=> 'on_session',
            ],


            'mode' => 'payment',
            'success_url' => env('APP_URL') . '/payments/success',
            'cancel_url' => session()->get('group_lesson_detail_page_url'),

        ]);

        if ($session->url) {

            $paymentId = $this->storePaymentToDatabase($tutor, $groupLesson, $session, $price);

            session()->put('payment_id', $paymentId);
            session()->put('group_lesson_id', $groupLesson->id);

            return redirect($session->url);
        }
        else {
            return 'something went wrong, so please go back refresh your webpage and try again';
        }

    }

    private function storePaymentToDatabase($tutor, $groupLesson, $session, $price)
    {
        $tutor_id = $tutor->id;
        $group_lesson_id = $groupLesson->id;
        $std_id = auth()->user()->id;
        $currency = config('protutor.currency');

        $student = User::find($std_id);

        if (! $student) {
            abort(401, config('protutor.error_message.404'));
        }

        $newPayment = new Payment;

        $newPayment->tutor_id = $tutor_id;
        $newPayment->group_lesson_id = $group_lesson_id;
        $newPayment->currency = $currency;
        $newPayment->transaction_id = $session ? $session->id: '';

        $newPayment->amount = $price;
        $newPayment->status = 'in-active';
        $newPayment->save();

        $newPayment->studentPayments()->attach($std_id);

        return $newPayment->id;
    }

    public function openSuccessPage()
    {
        $paymentStatus = $this->updatePaymentStatus();
        $groupLessonStatus = $this->markAsEnrolledStatus();

        return view('frontend.payments.success', compact('paymentStatus', 'groupLessonStatus'));
    }

    private function updatePaymentStatus()
    {
        $paymentStatus = false;

        if (session()->has('payment_id')) {

            $paymentId = session()->get('payment_id');
            $payment = Payment::find($paymentId);

            if (! $payment) {
                abort(403, 'Unable to sync payment with app, please contact the administrator along with payment id: '. $paymentId);
            }

            $payment->update([
                'status' => 'pending'
            ]);

            session()->forget('payment_id');

            $paymentStatus = true;
        }

        return $paymentStatus;
    }

    private function markAsEnrolledStatus()
    {
        $groupLessonStatus = false;

        if (session()->has('group_lesson_id')) {

            $group_lesson_id = session()->get('group_lesson_id');

            auth()->user()->studentEnrolledLessons()->attach($group_lesson_id);

            session()->forget('group_lesson_id');

            $groupLessonStatus = true;
        }

        return $groupLessonStatus;
    }
}
