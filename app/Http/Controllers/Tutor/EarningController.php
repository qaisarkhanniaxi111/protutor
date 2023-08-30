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
        $totalPendingClearenceBalance = 0;
        $totalAvailableBalance = 0;
        $allPayments = null;

        $tutor = auth()->user();

        if ($tutor->teacherPayments) {

            $totalPendingClearenceBalance = Payment::where('tutor_id', $tutor->id)->where('status', 'pending')->sum('amount');
            $totalPendingClearenceBalance = $totalPendingClearenceBalance/ 100;

            $totalAvailableBalance = Payment::where('tutor_id', $tutor->id)->where('status', 'available')->sum('amount');
            $totalAvailableBalance = $totalAvailableBalance/ 100;

            $allPayments = Payment::where('tutor_id', $tutor->id)->notFetchInActivePayments()->get();

        }

        return view('tutor.earnings.index', compact('tutor', 'totalPendingClearenceBalance', 'totalAvailableBalance', 'allPayments'));
    }

    public function openClearencePage()
    {
        return view('tutor.earnings.clearence');
    }

    public function withdrawPayment()
    {
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
        // $stripe = new \Stripe\StripeClient('sk_test_51Nb3o5HZ8kiMSLqoXJctNo9l89gCjRJTp713N3a2BkQhujdOW3PJChZFfr8v2SdtdLvYG2GKnw43LhNNkETUzAqU001P3I0mLO');

        // $stripe->accounts->create(['type' => 'standard']);

        // dd(config('services.stripe.secret'));

        // $stripeAcc = $stripe->accounts->create([
        //     'country' => 'US',
        //     'type' => 'custom',
        //     'capabilities' => [
        //     //   'card_payments' => ['requested' => true],
        //       'transfers' => ['requested' => true],
        //     //   'crypto_transfers' => ['requested' => true],
        //     //   'legacy_payments' => ['requested' => true],
        //     ],
        //   ]);

        //   dd($stripeAcc);
            // dd('he');
        //   $accountId = 'acct_1KlBYRBHOKvtnZNp';
            // dd($accountId);

        //   $acc= $stripe->accounts->retrieve($accountId, []);

        //   dd($acc);

        //   $linkedAcc = $stripe->accountLinks->create([
        //     'account' => $accountId,
        //     'refresh_url' => 'https://example.com/reauth',
        //     'return_url' => 'https://example.com/return',
        //     'type' => 'account_onboarding',
        //   ]);

        //   dd($linkedAcc);


        $accountId = 'acct_1Nkh64QtbewicbDz';
        $payment = $stripe->paymentIntents->create(
        [
            'amount' => 200 * 100,
            'currency' => 'usd',
            'automatic_payment_methods' => ['enabled' => true],
            'transfer_data' => ['destination' => $accountId],
        ]
        );

        dd($payment);




        // $session = $stripe->checkout->sessions->create([
        //     'mode' => 'payment',
        //     'line_items' => [
        //         'price_data' => [
        //             'currency' => 'usd',
        //             'unit_amount' => 200 * 100,
        //             'product_data' => [
        //               'name' => 'Group Lesson',
        //             ],
        //           ],
        //           [
        //             'quantity' => 1,
        //           ],
        //     ],
        //     'payment_intent_data' => [
        //       'application_fee_amount' => 123,
        //       'transfer_data' => ['destination' => $accountId],
        //     ],
        //     'success_url' => 'https://example.com/success',
        //     'cancel_url' => 'https://example.com/cancel',
        //   ]);

        // dd($session);
    }
}
