@include('/dashboard/common/header')
@include('/dashboard/common/sidebar')
<!-- Container -->
  <section class="wrapper">
    <div class="page-title">
      <h1>Spendings</h1>
    </div>
    <div class="box mt-3">
        <div class="table-responsive">
          @if (count($payments) > 0)
          <table class="table quiz-table">
            <thead>
              <tr>
                <th class="text-start">Transaction Id</th>
                <th class="text-start">For</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($payments as $payment)
              <tr>
                <td class="text-start">{{ $payment->transaction_id }}</td>
                <td class="text-start">{{ $payment->groupLesson ? Str::limit($payment->groupLesson->title, 20) : '' }} with {{ $payment->tutor ? Str::limit($payment->tutor->fullname, 20) : '' }}</td>
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
