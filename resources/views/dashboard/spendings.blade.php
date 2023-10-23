@include('/dashboard/common/header')
@include('/dashboard/common/sidebar')
<!-- Container -->
<section class="wrapper">
    <div class="page-title">
      <h1>Spendings</h1>
    </div>
    <div class="box p-0">
      <div class="earning-list">
        <ul>
          <li>
            <div class="earning-list-single">
              <h2>Spent</h2>
              <h3>{{ config('protutor.currency') }}{{ $totalSpentAmountInCents ? $totalSpentAmountInCents: 0 }}</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Used for Lessons</h2>
              <h3>{{ config('protutor.currency') }}{{ $totalSpentAmountInCents ? $totalSpentAmountInCents: 0 }}</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Refund Claimed</h2>
              <h3>$0</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Pending Clearance</h2>
              <h3>$0</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Cancelation Fee</h2>
              <h3>$0</h3>
            </div>
          </li>
          <li>
            <div class="earning-list-single">
              <h2>Available for Withdrawal</h2>
              <h3>$0</h3>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="box mt-3">
        <div class="table-responsive">
          @if (count($payments) > 0)
          <table class="table quiz-table">
            <thead>
              <tr>
                <th class="text-start">Date</th>
                <th class="text-start">For</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($payments as $payment)
              <tr>
                <td class="text-start">{{ date('m-d-Y', strtotime($payment->created_at)) }}</td>
                <td class="text-start">{{ $payment->groupLesson ? Str::limit($payment->groupLesson->title, 20) : 'Private Lesson' }} with {{ $payment->tutor ? Str::limit($payment->tutor->fullname, 20) : '' }}</td>
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
@include('/dashboard/common/footer')
