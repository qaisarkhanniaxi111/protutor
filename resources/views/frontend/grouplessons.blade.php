@php
    $lightNavbar = true;
@endphp
@include('frontend/common/header')

<link rel="stylesheet" href="assets/frontpage_assets/css/lessons.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
{{-- <link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/navbar.css"> --}}
<link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/lessons.css">
<link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/search.css">
<link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/slick.css">
<link rel="stylesheet" href="assets/frontpage_assets/css/sliderCard.css">
<link rel="stylesheet" href="assets/frontpage_assets/css/testimonials.css">
<link rel="stylesheet" href="{{ asset('assets/frontpage_assets/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/tutor/css/toastr.min.css') }}">
<style>
    p{
        text-align: unset;
    }
    #english-USD {
        border: none;
        background-position: right center;
        padding-right: 2px;
        color: #2c2c2c;
        font-size: 14px;
    }

    #english-USD:hover {
        cursor: pointer;
    }

    .login-section {
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
    }

    button {
        border: none;
        text-decoration: none;
    }

    .footer {
        width: 100%;
        height: 420px;
        flex-shrink: 0;
        background: #FFF9F5;
    }

    .footer-content {
        padding-top: 60px;
        padding-left: 120px;
        display: flex
    }

    .footer1 {
        flex: 1
    }

    .footer2 {
        flex: 1;
        padding-left: 81px
    }

    .footer3 {
        flex: 1
    }

    .footer4 {
        flex: 1
    }

    .footer5 {
        flex: 1
    }


    .footer-top-heading {
        width: 160px;
        color: #2C2C2C;
        font-feature-settings: 'clig' off, 'liga' off;
        font-family: Poppins;
        font-size: 22px;
        font-style: normal;
        font-weight: 500;
        line-height: 30px;
        /* 136.364% */
        padding-bottom: 18px
    }

    .footer-heading-item {
        width: 123.711px;
        color: rgba(44, 44, 44, 0.50);
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 32px;
        /* 177.778% */
        padding-bottom: 8px
    }

    .footer-head {
        color: rgba(44, 44, 44, 0.80);
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 32px;
        /* 177.778% */
    }

    .copyright {
        color: rgba(44, 44, 44, 0.50);
        font-family: Poppins;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.28px;
    }

    body {
        overflow-y: hidden;
    }
</style>

<main class="pt-4 mt-4">
<div class="hero">
    <div class="container">
    <section class="lesson-btns">
        <div class="btns-box">
            <button class="private-lesson"><a href="{{ route('private.lessons') }}">Private Lesson</a></button>
            <button class="group-classes"><a href="#">Group Classes</a></button>
        </div>
        <h1 class="text-online mt-5">Online English classes to practice speaking together</h1>
        <p class="tagline mt-4">Learn, speak and connect with a small group of students, guided by an expert tutor</p>
    </section>
</div>
</div>

<div class="search-container">
    <form id="filter-form">
        <div class="search-menu">
            <div class="search-items">
                <ul>
                    <li class="dropdown">
                        <button class="dropbtn" data-bs-toggle="dropdown">
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/english-level.svg') }}" /> <span
                                id="teaches_level_btn"> Teaches level</span>
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
                        </button>
                        <div class="dropdown-menu">
                            <input type="number" name="teaches_level" id="teaches_level_filter" hidden>
                            @foreach ($teaches_levels as $teach_level)
                                <a onclick="teaches_level_btn.innerText=this.innerText;teaches_level_filter.value=Number(this.id);submit_filter()"
                                    id={{ $teach_level['id'] }}>{{ $teach_level['teaches_level'] }}</a>
                            @endforeach

                        </div>
                    </li>
                    <li class="dropdown">
                        <button class="dropbtn" data-bs-toggle="dropdown">
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/topic.svg') }}" /> <span
                                id="subject_btn">Subject</span>
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
                        </button>
                        <div class="dropdown-menu">
                            <input type="number" name="subject" id="subject_filter" hidden>
                            @foreach ($subjects as $subject)
                                <a onclick="subject_btn.innerText=this.innerText;subject_filter.value=Number(this.id);submit_filter()"
                                    id="{{ $subject['id'] }}">{{ $subject['subject'] }}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="dropdown">
                        <button class="dropbtn" data-bs-toggle="dropdown">
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/price.svg') }}" /> <span
                                id="price_btn">Price</span>
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
                        </button>
                        <div class="dropdown-menu">
                            <input type="text" name="price" id="price_filter" hidden>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="1-5">1$-5$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="6-10">6$-10$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="11-15">11$-15$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="16-20">16$-20$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="21-25">21$-25$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="26-30">26$-30$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="31-35">31$-35$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="36-40">36$-40$</a>
                            <a onclick="price_btn.innerText=this.innerText;price_filter.value=this.id;submit_filter()"
                                id="40+">40$+</a>

                        </div>
                    </li>


                    <li class="dropdown">
                        <button class="dropbtn" data-bs-toggle="dropdown">
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/english-level.svg') }}" />Date
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
                        </button>
                        <div class="dropdown-menu px-1">
                            <input class="form-control" type="date" name="date" id="date_filter"
                                onchange="submit_filter()">
                        </div>
                    </li>


                    <li class="dropdown">
                        <button type="button" class="dropbtn" data-bs-toggle="dropdown">
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/Sortby.svg') }}" />Sort by
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
                        </button>
                        <div class="dropdown-menu">
                            <input type="text" name="sort_by" id="ascending" hidden>
                            <a onclick="ascending.value='ascending';submit_filter()">Ascending</a>
                            <a onclick="ascending.value='descending';submit_filter()">Descending</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" class="dropbtn" data-bs-toggle="dropdown"
                            onclick="reset_filter();submit_filter()">
                            <img class="icon-btn" alt="Svg xml"
                                src="{{ asset('assets/frontpage_assets/images/Sortby.svg') }}" />Remove Filter

                        </button>

                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<!-- slider 1-->
<section id="card-section" class="px-lg-2">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="text-container ps-md-0 ps-sm-0 ps-0">
                    <h2 class="starting-today">Starting today</h2>
                </div>
            </div>
            <div class="col-lg-12 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center mx-auto"
                style="max-width:1360px;" id="filter-today-cards-id">

                @if (count($todayGroupLessons) > 0)
                    @foreach ($todayGroupLessons as $groupLesson)

                        <div class="">
                            <div class="card-wrapper">
                                <div class="slider-card ">
                                    @if ($gallery = $groupLesson->gallery)
                                        @if ($gallery->image)
                                            <img class="card-image" alt="Image" src="{{ $gallery->image }}" />
                                        @endif
                                    @else
                                        <img class="card-image" alt="Image" src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} " />
                                    @endif
                                    <div class="b2-c2">
                                        {{-- <div class="b2c2text-wrapper"></div> --}}
                                        {{-- <div class="vl"></div> --}}
                                        <div class="likely-tosell">{{ remainingGroupLessonParticipants($groupLesson->id) }} Seats are left, Grab your seat now</div>
                                    </div>

                                    <p class="paragraph text-start mt-3 mb-0 pb-0" style="min-height:62px">{{ Str::limit($groupLesson->title, 40) }}</p>
                                    <div class="profile mt-3"
                                        style="background-color:transparent !important; box-shadow:none !importnat; padding:0px !important;">
                                        <div class="person-data" style="box-shadow:none !importnat">
                                            <div class="person" style="box-shadow:none !importnat">
                                                @if ($groupLesson->tutor)
                                                    @if ($groupLesson->tutor->avatar != null)
                                                    <img class="-person-image" alt="Image"
                                                        style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                                        src="{{ $groupLesson->tutor->avatar }}"/>
                                                    @else
                                                    <img class="-person-image" alt="Image"
                                                        style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                                        src="{{ asset('assets/student/images/user-img.jpg') }}"/>
                                                    @endif
                                                @endif

                                                <div class="text-wrapper-4"
                                                    style="box-shadow:none !important; text-shadow:none !importnat;">
                                                    {{ $groupLesson->tutor->fullname }}
                                                </div>
                                            </div>
                                            <div class="vl"></div>
                                            <div class="reviews">
                                                <div class="icon pe-1">
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="rating">
                                                    <span style="margin-left: 5px" class="span-text">{{ getLessonAverageRating($groupLesson->id) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#E3E3E3" />
                                        <div class="price-panal">
                                            <button class="price-box">
                                                <div class="price-wrapper">
                                                    <div class="price-elements">
                                                        <a href="{{ route('group.details', $groupLesson->id) }}">
                                                            <span class="span-priceText">{{ config('protutor.currency') }}{{ $groupLesson->price }} </span>
                                                            <span class="span-classtext">/ Class</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </button>

                                            <div class="top-reviews">
                                                <div class="reviews-box">
                                                    @foreach (groupLessonParticipants($groupLesson->id) as $key => $user)
                                                        <img src="{{ $user->avatar }}"
                                                            class="review-{{ 3 + $key }}" alt="Image"
                                                            style="height:24px; width:24px; border-radius:100%; object-fit:cover"/>
                                                    @endforeach

                                                </div>
                                                <div class="review-text" style="margin-left: 40%">
                                                    <span style="color: black; font-size: 12px">{{ totalEnrolledGroupLessonParticipants($groupLesson->id) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="text-danger text-center">No lesson uploaded yet</h4>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- slider 2-->
<section id="card-section" class="px-lg-2">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="text-container ps-md-0 ps-sm-0 ps-0">
                    <h2 class="starting-today">All Lessons</h2>
                </div>
            </div>
            <div class="col-lg-12 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center mx-auto"
                style="max-width:1360px;" id="filter-cards-id">

                @if (count($groupLessons) > 0)
                    @foreach ($groupLessons as $groupLesson)

                        <div class="">
                            <div class="card-wrapper">
                                <div class="slider-card ">
                                    @if ($gallery = $groupLesson->gallery)
                                        @if ($gallery->image)
                                            <img class="card-image" alt="{{ $gallery->image }}" src="{{ url($gallery->image) }}" />
                                        @endif
                                    @else
                                        <img class="card-image" alt="Image" src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} " />
                                    @endif
                                    <div class="b2-c2">
                                        {{-- <div class="b2c2text-wrapper"></div> --}}
                                        {{-- <div class="vl"></div> --}}
                                        <div class="likely-tosell">{{ remainingGroupLessonParticipants($groupLesson->id) }} Seats are left, Grab your seat now</div>
                                    </div>

                                    <p class="paragraph text-start mt-3 mb-0 pb-0" style="min-height:62px">{{ Str::limit($groupLesson->title, 40) }}</p>
                                    <div class="profile mt-3"
                                        style="background-color:transparent !important; box-shadow:none !importnat; padding:0px !important;">
                                        <div class="person-data" style="box-shadow:none !importnat">
                                            <div class="person" style="box-shadow:none !importnat">
                                                @if ($groupLesson->tutor)
                                                    @if ($groupLesson->tutor->avatar != null)
                                                    <img class="-person-image" alt="Image"
                                                        style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                                        src="{{ $groupLesson->tutor->avatar }}"/>
                                                    @else
                                                    <img class="-person-image" alt="Image"
                                                        style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                                        src="{{ asset('assets/student/images/user-img.jpg') }}"/>
                                                    @endif
                                                @endif

                                                <div class="text-wrapper-4"
                                                    style="box-shadow:none !important; text-shadow:none !importnat;">
                                                    {{ $groupLesson->tutor->fullname }}
                                                </div>
                                            </div>
                                            <div class="vl"></div>
                                            <div class="reviews">
                                                <div class="icon pe-1">
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="rating">
                                                    <span style="margin-left: 5px" class="span-text">{{ getLessonAverageRating($groupLesson->id) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#E3E3E3" />
                                        <div class="price-panal">
                                            <button class="price-box">
                                                <div class="price-wrapper">
                                                    <div class="price-elements">
                                                        <a href="{{ route('group.details', $groupLesson->id) }}">
                                                            <span class="span-priceText">{{ config('protutor.currency') }}{{ $groupLesson->price }} </span>
                                                            <span class="span-classtext">/ Class</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </button>

                                            <div class="top-reviews">
                                                <div class="reviews-box">
                                                    @foreach (groupLessonParticipants($groupLesson->id) as $key => $user)
                                                        <img src="{{ $user->avatar }}"
                                                            class="review-{{ 3 + $key }}" alt="Image"
                                                            style="height:24px; width:24px; border-radius:100%; object-fit:cover"/>
                                                    @endforeach

                                                </div>
                                                <div class="review-text" style="margin-left: 40%">
                                                    <span style="color: black; font-size: 12px">{{ totalEnrolledGroupLessonParticipants($groupLesson->id) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="text-danger text-center">No lesson uploaded yet</h4>
                @endif

            </div>

            <div class="col-12 offset-5" style="margin-top: 5%; margin-bottom: 5%">
                    {{ $groupLessons->links() }}
            </div>

        </div>
    </div>
</section>

<!-- testimonial Section -->
<section class="test-card">
    <div class="container-testimonial">
        <section class="section-testimonial">
            <div class="text-testimonial col-6">
                <h2>Student Testimonials</h2>
                <div class="double-cols">
                    <q>In my experience all the teachers are very supportive and friendly and the placement process has
                        been
                        very
                        smooth. it’s
                        also no issue talk about whatever you want to.</q>
                    <h6 class="name">Sherina Munir - Designer</h6>
                </div>
            </div>
            <div class="testimonial-image col-6">
                <img src="{{ asset('assets/frontpage_assets/images/Testimonials.png') }}" alt="Person Image">
            </div>
        </section>
    </div>
</section>

<!-- Corporate language training for business -->
<section class="test-card">
    <div class="corporate-language">
        <section class="section-carporate">
            <div class="corporate-image col-6">
                <img src="{{ asset('assets/frontpage_assets/images/Corporate-language.png') }}" alt="Person Image">
            </div>
            <div class="text-corporate col-6">
                <h2>Corporate language training for business</h2>
                <div class="double-cols">
                    <p class="name">ProTutor corporate training is designed for teams and businesses offering
                        personalized
                        language learning
                        with online
                        tutors. Book a demo to learn more.
                        Want your employer to pay for your lessons? Refer your company!</p>
                    <div class="join-as">
                        <button class="tutor"><a href="#"></a>Join as a Tutor</button>
                        <button class="student"><a href="#"></a>Join as a Student</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
</main>
<!-- Footer Section -->
@include('/frontend/common/footer')
<script src="{{ asset('assets/tutor/js/toastr.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".redirect_tutor_url").click(function() {
            var id = $(this).attr("data-id");
            var APP_URL = {!! json_encode(url('/')) !!}
            var full_url = APP_URL + '/tutor-detail/' + id;
            window.location.href = full_url;
        });
    });
</script>

<script>
    function reset_filter() {
        ascending.value = '';
        price_filter.value = '';
        subject_filter.value = '';
        teaches_level_filter.value = '';
        date_filter.value = '';
        teaches_level_btn.innerText = "Teaches Level";
        subject_btn.innerText = "Subject";
        price_btn.innerText = "Price";
    }

    function TodaySubmit_filter() {
        let formData = $('#filter-form')[0];
        let form = new FormData(formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{ route('groupLesson.filter2') }}',
            method: 'POST',
            processData: false,
            contentType: false,
            data: form,
            success: function(result) {

                if (result.html) {
                        $("#filter-today-cards-id").html(result.html);
                        // console.log(groupLessons);
                }
                else {
                    $("#filter-today-cards-id").html(
                        `<h4 class="text-danger text-center">No lesson uploaded yet</h4>`);
                }

            },
            error: function(error) {
                console.log(error.responseJSON.errors)

            }
        });



    }

    function submit_filter() {

        TodaySubmit_filter();
        let formData = $('#filter-form')[0];
        let form = new FormData(formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{ route('groupLesson.filter') }}',
            method: 'POST',
            processData: false,
            contentType: false,
            data: form,
            success: function(result) {

                if (result.html) {
                        $("#filter-cards-id").html(result.html);
                        // console.log(groupLessons);
                }
                else {
                    $("#filter-cards-id").html(
                        `<h4 class="text-danger text-center">No lesson uploaded yet</h4>`);
                }


            },
            error: function(error) {
                // console.log(error.responseJSON.errors)

            }
        });


    }

</script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="{{ url('assets/frontpage_assets/js/custom.js') }}"></script>
<script src="{{ url('assets/frontpage_assets/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>