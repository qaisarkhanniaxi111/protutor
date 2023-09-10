@include('/tutor/common/header')
@include('/tutor/common/sidebar')
<!-- Container -->
<section class="wrapper">
    <div class="page-title">
      <h1>Withdraw</h1>
    </div>
    <div class="box">
        <div class="row justify-content-center" style="margin-top: 5%; margin-bottom: 5%">
            <div class="col-lg-12">
                <div class="">
                    <form method="post" action="{{ route('tutor.earnings.withdraw.store') }}">
                        @csrf
                        <div class="bg-block-main">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session()->has('alert-success'))
                                <div class="alert alert-success fade show" role="alert">
                                    <strong>Success!</strong> {{ session()->get('alert-success') }}
                                </div>
                            @endif
                            <div class="inp-group mt-0">
                                <label for="">Account No</label>
                                <input class="inp" type="text" name="account_no" placeholder="acc_3hjdf4w33dd">
                            </div>
                            <div class="inp-group">
                                <label for="">Amount</label>
                                <input class="inp" step="0.001" type="number" name="amount" placeholder="20">
                            </div>
                            <div class="save-changes">
                                <button>Transfer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
<!-- Container -->
@include('/tutor/common/footer')