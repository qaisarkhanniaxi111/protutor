<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('tutor.payment', ['intent' => $user->createSetupIntent()]);
    }
    public function charge(Request $request)
    {
        $amount = $request['amount']*100;
        $paymentMethodId = $request['payment_method'];
        $user = auth()->user();
        $user->createOrGetStripeCustomer();
        $paymentMethod = $user->addPaymentMethod($paymentMethodId);
        $user->charge(
            $amount,
            $paymentMethod->id
        );
    }
}
