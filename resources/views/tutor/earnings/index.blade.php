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
              <h3>$ 0</h3>
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
              <h3>{{ config('protutor.currency') }} {{ $totalClearenceBalance ? $totalClearenceBalance: 0 }}</h3>
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
              <h3>$ 0</h3>
            </div>
          </li>
        </ul>
      </div>
    </div>


  </section>
<!-- Container -->
@include('/tutor/common/footer')
