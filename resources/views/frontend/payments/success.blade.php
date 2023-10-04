@extends('layouts.site')

@section('title', 'Payment success')

@section('content')
<!-- start page title -->
@if ($paymentStatus == true || $groupLessonStatus == true)

<div class="page-title">
    <div class="container">
        <h1>Payment Status</h1>
    </div>
</div>

<section class="apps-banner" style="margin-top: 5%">
    <div class="container">
        <div class="apps-banner-main" style="background: #2CD48F">
            <div class="row align-items-center">
                <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up">
                    <div style="padding: 50px">
                        <h2>Your payment has been processed successfully.</h2>
                        <div class="text-center mt-3 mb-3">
                            <a href="{{ url('/') }}" style="background: #FF6C0B; border: none" class="btn btn-lg btn-primary text-white">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
@endif


@endsection
