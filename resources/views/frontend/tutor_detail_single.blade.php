@php
    $lightNavbar = true;
@endphp
@include('/frontend/common/header')
<link rel="stylesheet" href="{{ url('/') }}/fullcalendar/fullcalendar.min.css" />
<style>
    p {
        text-align: unset;
    }
</style>
<main>
    <section class="hero-section-profile">
        <div class="hero-section-profile-bg"></div>
        <div class="container">
            <div class="row ">
                <div class="col-xl-8">
                    <div class="profile-data">
                        <div class="profile-image">
                            <img src="{{ url('/') }}/images/{{ $teacher_data[0]->profile_img }}" alt="">
                            <div class="profile-active"></div>
                        </div>
                        <div class="profile-content mt-lg-0 mt-3">
                            <h3>{{ $teacher_data[0]->first_name . ' ' . $teacher_data[0]->last_name }}</h3>
                            <div class="d-flex align-items-lg-center mt-3 flex-wrap align-items-start">
                                <?php
                                foreach ($subjects as $key => $value) {
                                    $medi_arr = explode(',', $teacher_data[0]->subject);
                                    if (count($medi_arr) > 1) {
                                        if (in_array($value->id, $medi_arr)) {
                                            echo '<h2 class="text-primary me-2 ps-0">' . $value->subject . '</h2>';
                                        }
                                    } else {
                                        if ($teacher_data[0]->subject == $value->id) {
                                            echo '<h2 class="text-primary">' . $value->subject . '</h2>';
                                        }
                                    }
                                }
                                ?>


                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <h2>{{ $years_of_Exp }} years of experience</h2>
                                <h2 class=" border-end-0">
                                    <?php 
                                    foreach ($country as $key => $value) { 
                                      if($teacher_data[0]->country==$value->id){
                                         ?>
                                    <img class="me-2"
                                        src="{{ url('/') }}/assets/frontpage_assets/flags/{{ Str::lower($value->iso) }}.png"
                                        alt="language">
                                    <?php 
                                     }
                                 }
                                 ?>

                                    United State
                                </h2>
                            </div>

                            <div class="d-flex align-items-start mt-3">
                                <img src="{{ url('newAssets/') }}assets/images/lesson.svg" alt=""
                                    class="me-2">
                                <p class="mb-0 pb-0">
                                    Teaches English lessons</p>
                            </div>
                            <div class="d-flex align-items-start mt-3">
                                <img src="{{ url('newAssets/') }}assets/images/speaks.svg" alt=""
                                    class="me-2">
                                <p class="mb-0 pb-0"><span>Speaks:</span> English (Native), German (C2), Lithuanian
                                    (B2)</p>
                            </div>
                            <div class="d-flex align-items-start mt-3">
                                <img src="{{ url('newAssets/') }}assets/images/taughts.svg" alt=""
                                    class="me-2">
                                <p class="mb-0 pb-0">315lessons taught</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mt-4 pb-2 row">
                        <div class="col-lg-6 mb-3">
                            <div class="review-card super-card">
                                <div class="d-flex align-items-center review-card-header">
                                    <img src="{{ url('newAssets/assets/images/super.svg') }}" alt="">
                                    <div class="ms-3">
                                        <h2 class="mb-0 pb-0">Super tutor</h2>
                                        <span>A highly rated and experienced tutor.</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center review-card-header mt-4">
                                    <img src="{{ url('newAssets/assets/images/verifiedd.svg') }}" alt=""
                                        class="img-fluid p-2">
                                    <div class="ms-3">
                                        <h2 class="mb-0 pb-0">Verified</h2>
                                        <span>1k+ students contacted this tutor.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="review-card">
                                <div class="d-flex align-items-center justify-content-between review-card-header w-100">
                                    <div class="d-flex align-items-center w-100">
                                        <img src="{{ url('newAssets/assets/images/woman-with-headset-video-call 1.png') }}"
                                            alt="">
                                        <div class="ms-3">
                                            <h2 class="mb-0 pb-0">Alfredo Schleifer</h2>
                                            <span>February 1, 2023</span>
                                        </div>
                                    </div>
                                    <div class="recent-caption">
                                        Recent review
                                    </div>
                                </div>

                                <div class="review-card-body mt-3">
                                    <img src="{{ url('newAssets/assets/images/semi.svg') }}" alt="">
                                    <p class="mb-0 pb-0">In my experience all the teachers are very
                                        supportive and friendly and the placement process has been very
                                        smooth. it’s also no issue talk about whatever you want to</p>
                                </div>
                            </div>

                        </div>


                        <div class="mt-4">
                            <!-- Tab links -->
                            <div class="tab-div">
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'About')"
                                        id="defaultOpen">About</button>
                                    <button class="tablinks" onclick="openCity(event, 'Schedule')">Schedule</button>
                                    <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews
                                        (5)</button>
                                    <button class="tablinks" onclick="openCity(event, 'Resume')">Resume</button>
                                    <button class="tablinks" onclick="openCity(event, 'Subjects')">Subjects</button>
                                </div>
                            </div>

                            <!-- Tab content -->
                            <div id="About" class="tabcontent">
                                <h1 class="heading">About the tutor</h1>
                                <p>I am 29 years old and I'm a Sworn Translator. I've been teaching ESL for all
                                    levels
                                    since 2010 and I've been tutoring Spanish students since high-school. I've also
                                    do
                                    translations from Spanish into English and Portuguese. My love for languages has
                                    made me continue studying different teaching methodologies and improving my
                                    knowledge of the grammar, not only in English but in my mother tongue as well.
                                </p>

                                <p>
                                    Besides having degree as a Sworn Translator, I have a CELTA certificate and
                                    almost a
                                    decade of experience in teaching all levels and ages in schools and institutes.
                                    Even
                                    before the pandemic, I started teaching English online and that allowed me to
                                    get
                                    students from all over the world. I love working with games and videos and
                                    adapting
                                    my classes for any needs my students may have.
                                </p>
                                <p>
                                    Book a lesson with me so we can set your goals to achieve that English or
                                    Spanish
                                    level you've always dreamed.
                                </p>
                            </div>

                            <div id="Schedule" class="tabcontent "
                                style="border-radius: 6px;
                                border: 1px solid rgba(17, 159, 46, 0.30);
                                background: #FAFFFB;
                                box-shadow: 4px 10px 40px 0px rgba(163, 191, 185, 0.20);">
                                <!-- tutor schedule -->
                                <div class="tutor-sec mt-5" id="schedule">
                                    <h4 class="t-title fw-bold mb-2">Schedule</h4>
                                    <div class="border"></div>

                                    <div class="tutor-schedule">

                                        <div id="schedule-calendar"></div>

                                    </div>
                                </div>


                                {{-- <h1 class="heading">Schedule</h1>
                                <p>Choose the time for your first lesson. The timings are displayed in your local
                                    timezone.</p>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex align-items-center mb-4 me-3">
                                        <div class="left-arrow">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5249 9.96004L4.2649 6.70004C3.8799 6.31504 3.8799 5.68504 4.2649 5.30004L7.5249 2.04004"
                                                    stroke-opacity="0.3" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="right-arrow ms-2 me-3">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.4751 2.03996L7.7351 5.29996C8.1201 5.68496 8.1201 6.31496 7.7351 6.69996L4.4751 9.95996"
                                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="mb-0 pb-0">Jun 23–29, 2023</p>
                                    </div>
                                    <select class="form-select tab-select mb-4" aria-label="Default select example ">
                                        <option selected style="color: black;">Asia/Dhaka GMT +6:00</option>
                                        <option value="1" style="color: black;">Asia/Dhaka GMT +6:00</option>
                                        <option value="2" style="color: black;">Asia/Dhaka GMT +6:00</option>
                                        <option value="3" style="color: black;">Asia/Dhaka GMT +6:00</option>
                                    </select>
                                </div>
                                <div class="tab-table-responsive">
                                    <table class="table tab-table ">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h3>Mon<br><span>23</span></h3>
                                                </th>
                                                <th>
                                                    <h3>Mon<br><span>23</span></h3>
                                                </th>
                                                <th>
                                                    <h3>Tue<br><span>23</span></h3>
                                                </th>
                                                <th>
                                                    <h3>Wed<br><span>23</span></h3>
                                                </th>
                                                <th>
                                                    <h3>Thu<br><span>23</span></h3>
                                                </th>
                                                <th>
                                                    <h3>Fri<br><span>23</span></h3>
                                                </th>
                                                <th>
                                                    <h3>Sat<br><span>23</span></h3>
                                                </th>
                                                <th>
                                                    <h3>Sun<br><span>23</span></h3>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>05:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <h4>01:00</h4>
                                                </td>
                                                <td>
                                                    <h4>22:00</h4>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div> --}}

                            </div>

                            <div id="Reviews" class="tabcontent">
                                <h1 class="heading mb-3">What students say</h1>
                                <div class="row  align-items-center px-lg-4 mb-4 mt-3">
                                    <div class="col-lg-4 mb-3">
                                        <div class="review-tag-div border-right py-5">
                                            <div class="review-tag ">
                                                <h2>5</h2>
                                                <div class="d-flex align-items-center justify-content-center my-3">
                                                    <img src="{{ url('/') }}/newAssets/assets/images/star.svg"
                                                        alt="" class="me-1">
                                                    <img src="{{ url('/') }}/newAssets/assets/images/star.svg"
                                                        alt="" class="me-1">
                                                    <img src="{{ url('/') }}/newAssets/assets/images/star.svg"
                                                        alt="" class="me-1">
                                                    <img src="{{ url('/') }}/newAssets/assets/images/star.svg"
                                                        alt="" class="me-1">
                                                    <img src="{{ url('/') }}/newAssets/assets/images/star.svg"
                                                        alt="" class="me-1">
                                                </div>
                                                <p class="mb-0 pb-0 text-center">10 Review</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ms-auto mb-3">
                                        <div class="progress-line">
                                            <div class="d-flex align-items-center me-2">
                                                <b>5&nbsp;</b>Stars
                                            </div>
                                            <div class=" w-100">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 100%; height: 5px;" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex align-items-center ms-2">
                                                (10)
                                            </div>
                                        </div>

                                        <div class="progress-line zero-progress mt-3">
                                            <div class="d-flex align-items-center me-2">
                                                <b>4&nbsp;</b>Stars
                                            </div>
                                            <div class="progress w-100 ">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 0%; height: 5px;" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex align-items-center ms-2">
                                                (0)
                                            </div>
                                        </div>

                                        <div class="progress-line zero-progress mt-3">
                                            <div class="d-flex align-items-center me-2">
                                                <b>3&nbsp;</b>Stars
                                            </div>
                                            <div class="progress w-100 ">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 0%; height: 5px;" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex align-items-center ms-2">
                                                (0)
                                            </div>
                                        </div>
                                        <div class="progress-line zero-progress mt-3">
                                            <div class="d-flex align-items-center me-2">
                                                <b>2&nbsp;</b>Stars
                                            </div>
                                            <div class="progress w-100 ">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 0%; height: 5px;" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex align-items-center ms-2">
                                                (0)
                                            </div>
                                        </div>
                                        <div class="progress-line zero-progress mt-3">
                                            <div class="d-flex align-items-center me-2">
                                                <b>1&nbsp;</b>Stars
                                            </div>
                                            <div class="progress w-100 ">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 0%; height: 5px;" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex align-items-center ms-2">
                                                (0)
                                            </div>
                                        </div>
                                        <div class="progress-line zero-progress mt-3">
                                            <div class="d-flex align-items-center me-2">
                                                <b>0&nbsp;</b>Stars
                                            </div>
                                            <div class="progress w-100 ">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 0%; height: 5px;" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex align-items-center ms-2">
                                                (0)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">

                                    <div class="col-lg-6 mb-3">
                                        <div class="review-card">
                                            <div class="d-flex align-items-center review-card-header">
                                                <img src="{{ url('newAssets/assets/images/woman-with-headset-video-call 1.png') }}"
                                                    alt="">
                                                <div class="ms-3">
                                                    <h2 class="mb-0 pb-0">Alfredo Schleifer</h2>
                                                    <span>February 1, 2023</span>
                                                </div>
                                            </div>
                                            <div class="review-card-body">
                                                <img src="{{ url('newAssets/assets/images/semi.svg') }}"
                                                    alt="">
                                                <p class="mb-0 pb-0">In my experience all the teachers are very
                                                    supportive and friendly and the placement process has been very
                                                    smooth. it’s also no issue talk about whatever you want to</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="review-card">
                                            <div class="d-flex align-items-center review-card-header">
                                                <img src="{{ url('newAssets/assets/images/woman-with-headset-video-call 1.png') }}"
                                                    alt="">
                                                <div class="ms-3">
                                                    <h2 class="mb-0 pb-0">Alfredo Schleifer</h2>
                                                    <span>February 1, 2023</span>
                                                </div>
                                            </div>
                                            <div class="review-card-body">
                                                <img src="{{ url('newAssets/') }}assets/images/semi.svg"
                                                    alt="">
                                                <p class="mb-0 pb-0">In my experience all the teachers are very
                                                    supportive and friendly and the placement process has been very
                                                    smooth. it’s also no issue talk about whatever you want to</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="review-card">
                                            <div class="d-flex align-items-center review-card-header">
                                                <img src="{{ url('newAssets/assets/images/woman-with-headset-video-call 1.png') }}"
                                                    alt="">
                                                <div class="ms-3">
                                                    <h2 class="mb-0 pb-0">Alfredo Schleifer</h2>
                                                    <span>February 1, 2023</span>
                                                </div>
                                            </div>
                                            <div class="review-card-body">
                                                <img src="{{ url('newAssets/assets/images/semi.svg') }}"
                                                    alt="">
                                                <p class="mb-0 pb-0">In my experience all the teachers are very
                                                    supportive and friendly and the placement process has been very
                                                    smooth. it’s also no issue talk about whatever you want to</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="review-card">
                                            <div class="d-flex align-items-center review-card-header">
                                                <img src="{{ url('newAssets/assets/images/woman-with-headset-video-call 1.png') }}"
                                                    alt="">
                                                <div class="ms-3">
                                                    <h2 class="mb-0 pb-0">Alfredo Schleifer</h2>
                                                    <span>February 1, 2023</span>
                                                </div>
                                            </div>
                                            <div class="review-card-body">
                                                <img src="{{ url('newAssets/assets/images/semi.svg') }}"
                                                    alt="">
                                                <p class="mb-0 pb-0">In my experience all the teachers are very
                                                    supportive and friendly and the placement process has been very
                                                    smooth. it’s also no issue talk about whatever you want to</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="review-card">
                                            <div class="d-flex align-items-center review-card-header">
                                                <img src="{{ url('newAssets/assets/images/woman-with-headset-video-call 1.png') }}"
                                                    alt="">
                                                <div class="ms-3">
                                                    <h2 class="mb-0 pb-0">Alfredo Schleifer</h2>
                                                    <span>February 1, 2023</span>
                                                </div>
                                            </div>
                                            <div class="review-card-body">
                                                <img src="{{ url('newAssets/assets/images/semi.svg') }}"
                                                    alt="">
                                                <p class="mb-0 pb-0">In my experience all the teachers are very
                                                    supportive and friendly and the placement process has been very
                                                    smooth. it’s also no issue talk about whatever you want to</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="review-card">
                                            <div class="d-flex align-items-center review-card-header">
                                                <img src="{{ url('newAssets/assets/images/woman-with-headset-video-call 1.png') }}"
                                                    alt="">
                                                <div class="ms-3">
                                                    <h2 class="mb-0 pb-0">Alfredo Schleifer</h2>
                                                    <span>February 1, 2023</span>
                                                </div>
                                            </div>
                                            <div class="review-card-body">
                                                <img src="{{ url('newAssets/assets/images/semi.svg') }}"
                                                    alt="">
                                                <p class="mb-0 pb-0">In my experience all the teachers are very
                                                    supportive and friendly and the placement process has been very
                                                    smooth. it’s also no issue talk about whatever you want to</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <button class="main-btn-blank">
                                            Show more
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div id="Resume" class="tabcontent">
                                <div class="d-flex align-items-center  border-bottom pb-3 flex-wrap">
                                    <h1 class="heading mb-0 mb-md-0 mb-2">Resume</h1>
                                    <div class="resume-tab ms-auto ">
                                        <button class="resumetablinks " id="defaultOpen2"
                                            onclick="resume(event, 'Education')">Education</button>
                                        <button class="resumetablinks "
                                            onclick="resume(event, 'Work-experience')">Work experience</button>
                                    </div>
                                </div>

                                <!-- Tab content -->
                                <div id="Education" class="resumetabcontent">
                                    <div class="d-flex align-items-center">
                                        <p class="tab-year mb-0 pb-0">2011 — 2016</p>
                                        <div class="ms-4">
                                            <h1 class="mb-0 pb-0 tab-resume-heading">Universidad del Salvador</h1>
                                            <p class="mb-2 mt-1 pb-0 tab-resume-caption ">Sworn Translator</p>
                                            <div class="d-flex align-items-center tab-resume-tag">
                                                <img src="{{ url('newAssets/assets/images/verifiedd.svg') }}"
                                                    alt="" class="me-2">
                                                Diploma verified
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Work-experience" class="resumetabcontent">
                                    <div class="d-flex align-items-center">
                                        <p class="tab-year mb-0 pb-0">2011 — 2016</p>
                                        <div class="ms-4">
                                            <h1 class="mb-0 pb-0 tab-resume-heading">Universidad del Salvador</h1>
                                            <p class="mb-2 mt-1 pb-0 tab-resume-caption ">Sworn Translator</p>
                                            <div class="d-flex align-items-center tab-resume-tag">
                                                <img src="{{ url('newAssets/assets/images/verifiedd.svg') }}"
                                                    alt="" class="me-2">
                                                Diploma verified
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Certifications" class="resumetabcontent">
                                    <h5>Certification</h5>
                                </div>

                            </div>

                            <div id="Subjects" class="tabcontent">
                                <h1 class="heading">Subjects</h1>
                                <div class="mb-3">
                                    <h2 style="font-size: 16px; font-weight: 500">1. Conversational English</h2>
                                    <p>Clases de conversación enfocada en pronunciación, expresiones informales y
                                        desarrollo de la fluidez en el idioma.</p>
                                </div>
                                <div class="mb-3">
                                    <h2 style="font-size: 16px; font-weight: 500">2. Business English</h2>
                                    <p>Vocabulario específico para RRHH y otras áreas de marketing y recruiting.</p>
                                </div>
                                <div class="mb-3">
                                    <h2 style="font-size: 16px; font-weight: 500">3. English for kids</h2>
                                    <p>Enseñanza del idioma a través de juegos, canciones y vídeos.
                                    <p>
                                </div>
                                <div class="mb-3">
                                    <h2 style="font-size: 16px; font-weight: 500">4. English for traveling</h2>
                                    <p>Enseñanza del idioma a través de juegos, canciones y vídeos.
                                    <p>
                                </div>
                                <div class="mb-3">
                                    <h2 style="font-size: 16px; font-weight: 500">5. English for beginners</h2>
                                    <p>Enseñanza del idioma a través de juegos, canciones y vídeos.
                                    <p>
                                </div>
                                <div class="mb-3">
                                    <h2 style="font-size: 16px; font-weight: 500">6. English for beginners</h2>
                                    <p>Enseñanza del idioma a través de juegos, canciones y vídeos.
                                    <p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 bg-danger">

                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="side-card">
                        <video controls>
                            <source src="{{ url('/') }}/videos/{{ $teacher_data[0]->video_link }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ url('newAssets/') }}assets/images/star.svg" alt="">
                                <b class="text-dark me-2">5.0</b>
                                <p class="mb-0 pb-0">(33 review)</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <b class="text-dark me-2">$20</b>
                                <p class="mb-0 pb-0 "> (50 - min lesson)</p>
                            </div>
                        </div>
                        <button class="main-btn-sm w-100">Book a trial lesson</button>
                        <div class="d-flex align-items-center mt-3">
                            {{-- <img src="{{ url("newAssets/assets/images/heart.svg") }}" alt="" class="me-2"> --}}
                            <div class="like me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 40 40" fill="none">
                                    <path
                                        d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                        fill="#FF6C0B" fill-opacity="0.15" />
                                    <path class="like-fill "
                                        d="M18.6356 12.9894L18.6468 13.0001L18.6583 13.0104C19.0273 13.3404 19.505 13.5228 20 13.5228C20.495 13.5228 20.9727 13.3404 21.3417 13.0104L21.3535 12.9998L21.365 12.9888C22.2116 12.1818 23.8293 11 26 11C27.5801 11 28.7855 11.6184 29.6199 12.6803C30.4752 13.7688 31 15.4045 31 17.5C31 18.7417 30.4893 20.1505 29.5891 21.6176C28.696 23.073 27.467 24.5082 26.1492 25.7806C24.8327 27.0516 23.4532 28.1356 22.2806 28.895C21.6935 29.2752 21.1737 29.5641 20.7514 29.754C20.297 29.9584 20.0599 30 20 30C19.9401 30 19.703 29.9584 19.2486 29.754C18.8263 29.5641 18.3065 29.2752 17.7194 28.895C16.5468 28.1356 15.1673 27.0516 13.8508 25.7806C12.533 24.5082 11.304 23.073 10.4109 21.6176C9.51066 20.1505 9 18.7417 9 17.5C9 15.4045 9.52485 13.7688 10.3801 12.6803C11.2145 11.6184 12.4199 11 14 11C16.169 11 17.7883 12.183 18.6356 12.9894Z"
                                        stroke="#FF6C0B" stroke-width="2" />
                                </svg>
                            </div>
                            <button class="main-btn-blank-sm w-100">Send message</button>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <img src="{{ url('newAssets/assets/images/pro.svg') }}" alt="" class="me-2">
                            <p class="mb-0 pb-0">6 lessons booked in the last 48 hours</p>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <img src="{{ url('newAssets/assets/images/dot.svg') }}" alt="" class="me-2">
                            <p class="mb-0 pb-0">Usually responds in 12 hrs</p>
                        </div>
                        <div class="border-bottom my-4"></div>
                        <div class="d-flex align-items-center review-card-header mb-2">
                            <img src="{{ url('newAssets/assets/images/vL.svg') }}" alt="" class="">
                            <div class="ms-3">
                                <h2 class="mb-0 pb-0">Very popular</h2>
                                <span>4 students contacted this tutor in the last 48 hours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="tutors">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-12 mb-4">
                    <div class="d-flex justify-content-between align-items center flex-md-row flex-column">
                        <div>
                            <h2 class="heading text-md-start">
                                Check more tutors who teach English
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel ">
                        <div>
                            <div class="tutors-card h-100 bg-white">
                                <img src="{{ url('newAssets/assets/images/team (1).png') }}" alt="">
                                <div class="tutors-card--text bg-white">
                                    <div class="mb-2">
                                        <h3 class="mb-2">Gretchen Herwitz</h3>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <h4 class="me-2">*&nbsp;&nbsp;English Teacher</h4>

                                        </div>
                                    </div>
                                    <div class="mt-auto flex-grow-1 d-flex flex-column justify-content-end">
                                        <div class="d-flex align-items-center ">
                                            <img src="{{ url('newAssets/assets/images/flag.png') }}" alt=""
                                                class="flag-img">
                                            <p class="mb-0 pb-0 ms-2">Country Name</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-2">
                                            <img src="{{ url('newAssets/assets/images/reading-book 1.png') }}"
                                                alt="" class="flag-img">
                                            <p class="mb-0 pb-0 ms-2">21 active students</p>
                                            <p class="mb-0 pb-0 ms-2 lesson-numbers ms-3"> 315 lessons</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>



    <section class="testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h2 class="heading text-md-start">
                        Find an Online English Teacher to Help You Master English
                    </h2>
                </div>
                <div class="col-lg-6 pe-lg-5 ">


                    <div class="accordion mt-3 faq-accordian" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">Is there a free trial available?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p class="main-text2  text-gray mt-3"
                                        style="color: rgba(44, 44, 44, 0.80);
                                    ;">
                                        Live tutoring software enables tutors to teach students in real time
                                        utilizing interactive
                                        video conferencing features. As a Student or Parent, you can browse through
                                        Tutor profiles
                                        and their subject expertise, and thereafter book live lesson.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">Can I change my plan later?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p class="main-text2  text-gray mt-3"
                                        style="color: rgba(44, 44, 44, 0.80);
                                    ;">
                                        Live tutoring software enables tutors to teach students in real time
                                        utilizing interactive
                                        video conferencing features. As a Student or Parent, you can browse through
                                        Tutor profiles
                                        and their subject expertise, and thereafter book live lesson.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">What is your cancellation policy?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p class="main-text2  text-gray mt-3"
                                        style="color: rgba(44, 44, 44, 0.80);
                                    ;">
                                        Live tutoring software enables tutors to teach students in real time
                                        utilizing interactive
                                        video conferencing features. As a Student or Parent, you can browse through
                                        Tutor profiles
                                        and their subject expertise, and thereafter book live lesson.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4">Can other info be added to an invoice?</button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p class="main-text2  text-gray mt-3"
                                        style="color: rgba(44, 44, 44, 0.80);
                                    ;">
                                        Live tutoring software enables tutors to teach students in real time
                                        utilizing interactive
                                        video conferencing features. As a Student or Parent, you can browse through
                                        Tutor profiles
                                        and their subject expertise, and thereafter book live lesson.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5">How does billing work?</button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p class="main-text2  text-gray mt-3"
                                        style="color: rgba(44, 44, 44, 0.80);
                                    ;">
                                        Live tutoring software enables tutors to teach students in real time
                                        utilizing interactive
                                        video conferencing features. As a Student or Parent, you can browse through
                                        Tutor profiles
                                        and their subject expertise, and thereafter book live lesson.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
                <div class="col-lg-6">

                </div>

            </div>
        </div>
    </section>

</main>


<form id="submitPrivateLesson" action="{{ route('private.charge') }}" method="post">
    @csrf
    <input type="number" name="tutor_id" value="{{ $teacher_data[0]->student_no }}" hidden>
    <input type="number" name="student_id" value="{{ auth()->user()->id }}" hidden>
    <input type="number" name="price" value="{{ $teacher_data[0]->hourly_rate }}" hidden>
    <input type="number" name="calendar_sch_id" id="calendar_sch_id" hidden>
    <input type="datetime" name="start" id="session_start" hidden>
    <input type="datetime" name="end" id="session_end" hidden>
</form>
@include('/frontend/common/footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ url('/') }}/fullcalendar/lib/moment.min.js"></script>
<script src="{{ url('/') }}/fullcalendar/fullcalendar.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script> --}}
<script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active-tab", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active-tab";
    }
    document.getElementById("defaultOpen").click();
</script>
<script>
    function resume(evt, cityName) {
        // Declare all variables
        var i, tabcontent2, tablinks2;

        // Get all elements with class="tabcontent" and hide them
        tabcontent2 = document.getElementsByClassName("resumetabcontent");
        for (i = 0; i < tabcontent2.length; i++) {
            tabcontent2[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks2 = document.getElementsByClassName("resumetablinks");
        for (i = 0; i < tablinks2.length; i++) {
            tablinks2[i].className = tablinks2[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen2").click();
</script>
<script type="text/javascript">
    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            margin: 10,
            loop: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                767: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1300: {
                    items: 4,

                }
            }

        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js">
</script>
<script>
    $('.date-display').datepicker({});
    document.addEventListener('DOMContentLoaded', function() {
        // console.log('hi loaded <?php echo $teacher_data[0]->student_no; ?>');
        var calendarEl = document.getElementById('schedule-calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next title',
                right: ''
            },

            defaultView: 'timeGridWeek',
            selectable: true,
            editable: true,
            events: "{{ url('/') }}/fetchCalendarAvailability/<?php echo $teacher_data[0]->student_no; ?>",
            eventClick: function(eventClickInfo, jsEvent, view) {
                eventID = eventClickInfo.el.fcSeg.eventRange.def.publicId;
                console.log(eventID);
                console.log(eventClickInfo.el.fcSeg.start)
                $("#session_start").val(moment(eventClickInfo.el.fcSeg.start).add(0, 'minute').format('YYYY-MM-DD HH:mm'))
                $("#session_end").val(moment(eventClickInfo.el.fcSeg.end).add(0, 'minute').format('YYYY-MM-DD HH:mm'))
                $("#calendar_sch_id").val(eventID);
                $('#submitPrivateLesson').submit();
            },
            eventDataTransform: function(event, element, info) {
                if (event.status == 'time_off') {
                    event.editable = false;
                    event.color = "red";

                }
                return event;
            },
        });


        calendar.render();
        calendar.changeView('timeGridWeek');
    });
</script>
