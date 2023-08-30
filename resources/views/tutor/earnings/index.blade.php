@include('/tutor/common/header')
@include('/tutor/common/sidebar')
<!-- Container -->
<section class="wrapper">
    <div class="page-title">
      <h1>Earnings</h1>
    </div>

    <div class="box p-0">
      <div class="earning-list">
        <ul>
          <li>
            <div class="earning-list-single">
              <h2>Net Income</h2>
              <h3>{{ config('protutor.currency') }} {{ $totalPendingClearenceBalance ? $totalPendingClearenceBalance: 0 }}</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Withdrawn</h2>
              <h3>$ 0</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Used for Featuring</h2>
              <h3>$ 0</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Pending Clearance</h2>
              <h3>{{ config('protutor.currency') }} {{ $totalPendingClearenceBalance ? $totalPendingClearenceBalance: 0 }}</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Cancelation Fee</h2>
              <h3>$ 0</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Available for Withdrawal</h2>
              <h3>{{ config('protutor.currency') }} {{ $totalAvailableBalance ? $totalAvailableBalance: 0 }}</h3>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="withdraw-funds mt-3 mb-3">
        <h3>Withdraw Funds</h3>
        <button class="theme-btn bdr grey">Stripe Account</button>
      </div>

      <div class="box mt-3">
          <div class="table-responsive">
            @if (count($allPayments) > 0)
            <table class="table quiz-table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>For</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($allPayments as $payment)
                <tr>
                  <td><span class="txt-green">{{ $payment->created_at->format('m-d-Y') }}</span></td>
                  <td>{{ $payment->groupLesson ? Str::limit($payment->groupLesson->title, 20) : '' }} </td>
                  <td><span class="txt-green">{{ config('protutor.currency') }} {{ $payment->amount }}</span></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
               <h3 class="text-center text-danger">No payment history available</h3>
            @endif
          </div>
      </div>

  </section>
<!-- Container -->
@include('/tutor/common/footer')
