@php
    $lightNavbar = true;
@endphp
@include('frontend/common/newHeader')
<link rel="stylesheet" href="{{ url('newAssets/assets/css/private-lessons.css') }}">
<style>
    p {
        text-align: unset;
    }

    /*calender*/

    #schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button,
    #model-schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button {
        background: #fe6903;
        border: solid 1px #fe6903;
    }

    #schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button:hover,
    #model-schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button:hover {
        color: #fff;
        opacity: 0.7;
    }

    #schedule-calendar .fc-header-toolbar .fc-toolbar-chunk button.fc-today-button.fc-button.fc-button-primary,
    #model-schedule-calendar .fc-header-toolbar .fc-toolbar-chunk button.fc-today-button.fc-button.fc-button-primary {
        background: #a2b5ff;
        border-color: #a2b5ff;
    }


    #schedule-calendar .fc-view-harness thead th.fc-col-header-cell a.fc-col-header-cell-cushion,
    #model-schedule-calendar .fc-view-harness thead th.fc-col-header-cell a.fc-col-header-cell-cushion {
        color: #fe6903;
        text-decoration: none
    }

    #schedule-calendar .fc-view-harness td .fc-timegrid-col-frame .fc-timegrid-event-harness a.fc-event,
    #model-schedule-calendar .fc-view-harness td .fc-timegrid-col-frame .fc-timegrid-event-harness a.fc-event {
        background: #422d5a;
        border: none !important;
        text-align: center;
        font-size: 16px;
    }

    #schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button:first-child,
    #schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button.fc-prev-button,
    #model-schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button:first-child,
    #model-schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button.fc-prev-button {
        border-right: solid 1px #fff;
    }

    #schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button.fc-prev-button,
    #model-schedule-calendar .fc-header-toolbar .fc-toolbar-chunk .fc-button-group button.fc-prev-button {
        margin-right: 1px;
    }
</style>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img src="" alt="" id="modelTutorImage"
                    style="width:40px;height:40px;object-fit: cover;" class="rounded-circle me-3">
                <span class="h1 modal-title fs-5" id="modelTutorName"
                    style="font-family: Arial, Helvetica, sans-serif"></span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>Choose the time for your first lesson. The timings are displayed in your local
                    timezone.</p>

                <div class="tabtable-responsive">
                    <div class="fulltab-table">
                        <div id='model-schedule-calendar'></div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn disabled" style="background-color: #fe6903;color:#fff"
                    id="continueSubmitShcdulebtn" onclick="submitStudentSchedule()">Continue</button>
            </div>
        </div>
    </div>
</div>
<main>
    {{-- @if (count($userdata))
        @foreach ($userdata as $userdata_val)

        <pre>
            {{ print_r($userdata_val) }}
    </pre>

    @endforeach
    @endif --}}


    <section class="hero ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 order-lg-1 order-2">
                    <div class="left-hero">
                        <div class="btn-hero">
                            <button id="btn-hero-1" class="btns-hero">Private lessons</button>
                            <a href="{{ route('public.lessons') }}" class="text-decoration-none"> <button
                                    id="btn-hero-2" class="btns-hero" style="color: #FF6C0B">Group Lessons</button></a>
                        </div>
                        <h1 class="main-heading text-dark mt-5">
                            Online English tutors <br> & teachers <br> for private lessons
                        </h1>
                        <p class="main-text text-dark">Looking for an online English tutor? ProTutor is the leading
                            online <br> language learning platform
                            worldwide.</p>

                        <div class="btn-group">
                            <button type="button" id="btn-1" class="btn dropdown-toggle btn-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                English
                            </button>
                            <ul id="dropdown-menu-1" class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Urdu</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                                <li><a class="dropdown-item" href="#">German</a></li>
                                <li><a class="dropdown-item" href="#">Chinese</a></li>

                            </ul>
                            <button class="btn-started">Get Started</button>
                        </div>
                        <p class="last-hero-p">Our <span class="c1000">1000+</span> Tutors help student to grub
                            knowledge.</p>

                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="right-hero d-flex justify-content-center mb-lg-0 mb-3">
                        <img src="{{ url('newAssets/assets/images/images/hero.png') }}" alt="img"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


    </section>

    <div class="">
        <div class="container">
            <form action="{{ url('/private/group') }}" method="get">
                <div class="row select-section">
                    <div class="col-lg-3">
                        <div class="slc">
                            <label for="">I want to learn</label>
                            <select class="form-select" name="subject" aria-label="Default select example">
                                <option value="" selected> Select </option>
                                @foreach ($subjectAll as $data2)
                                    <option <?php echo isset($_GET['subject']) && $_GET['subject'] == $data2->id ? 'selected' : ''; ?> value="{{ $data2->id }}">{{ $data2->subject }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="slc">
                            <label for="">price per lesson</label>
                            <select class="form-select" name="hourly_rate" aria-label="Default select example">
                                <option value="" selected> Select </option>
                                <option value="1-5" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '1-5' ? 'selected' : ''; ?>>
                                    $1-5</option>
                                <option value="6-10" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '6-10' ? 'selected' : ''; ?>>
                                    $6-10</option>
                                <option value="11-15" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '11-15' ? 'selected' : ''; ?>>
                                    $11-15</option>
                                <option value="16-20" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '16-20' ? 'selected' : ''; ?>>
                                    $16-20</option>
                                <option value="21-25" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '21-25' ? 'selected' : ''; ?>>
                                    $21-25</option>
                                <option value="26-30" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '26-30' ? 'selected' : ''; ?>>
                                    $26-30</option>
                                <option value="31-35" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '31-35' ? 'selected' : ''; ?>>
                                    $31-35</option>
                                <option value="36-40" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '36-40' ? 'selected' : ''; ?>>
                                    $36-40</option>
                                <option value="41-45" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '41-45' ? 'selected' : ''; ?>>
                                    $41-45</option>
                                <option value="46-50" <?php echo isset($_GET['hourly_rate']) && $_GET['hourly_rate'] == '46-50' ? 'selected' : ''; ?>>
                                    $46-50</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="slc">
                            <label for="">Country of birth</label>
                            <select class="form-select" name="country" aria-label="Default select example">
                                <option value="" selected>Any country </option>
                                @foreach ($countryAll as $data)
                                    <option <?php echo isset($_GET['country']) && $_GET['country'] == $data->id ? 'selected' : ''; ?> value="{{ $data->id }}">{{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="slc border-0">
                            <label for="">I’m available</label>
                            <select class="form-select" name="user_status" aria-label="Default select example">
                                <option value="" selected> Any time</option>
                                <option value="1" <?php echo isset($_GET['user_status']) && $_GET['user_status'] == 1 ? 'selected' : ''; ?>>
                                    Active</option>
                                <option value="0" <?php echo isset($_GET['user_status']) && $_GET['user_status'] == 0 ? 'selected' : ''; ?>>
                                    Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row filter-search align-items-center">
                    <div class="col-xl-8 d-flex align-items-center flex-md-row flex-column">
                        <div class="dropdown my-3 mx-2">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Specialist
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($Spoken_language as $spoken_language_data)
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                value="{{ $spoken_language_data->id }}" id="flexCheckDefault"
                                                <?php echo isset($_GET['spoken_language']) && $_GET['spoken_language'] == $spoken_language_data->id ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $spoken_language_data->spoken_language }}
                                            </label>
                                        </div>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="dropdown my-3 mx-2">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Also Speak
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($Spoken_language as $spoken_language_data)
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="spoken_language"
                                                value="{{ $spoken_language_data->id }}" id="flexCheckDefault"
                                                <?php echo isset($_GET['spoken_language']) && $_GET['spoken_language'] == $spoken_language_data->id ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $spoken_language_data->spoken_language }}
                                            </label>
                                        </div>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="dropdown my-3 mx-2">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Native speaker
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($Spoken_language as $spoken_language_data)
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="native_language"
                                                value="{{ $spoken_language_data->id }}" id="flexCheckDefault"
                                                <?php echo isset($_GET['native_language']) && $_GET['native_language'] == $spoken_language_data->id ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $spoken_language_data->spoken_language }}
                                            </label>
                                        </div>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="dropdown my-3 mx-2">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Professional
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mathmatics
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Computer
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Chemistry
                                        </label>
                                    </div>
                                </li>
                                <li class="more-heading">
                                    <h2 class="">
                                        More Languages
                                    </h2>
                                </li>

                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <button class="btn me-2 rounded-5 apply-filter-btn">submit</button>
                        <a href="{{ url('/private/group/') }}" class="btn rounded-5 apply-filter-btn">clear</a>
                    </div>
                    <div class="col-xl-4 d-flex align-items-center flex-md-row flex-column">
                        <div class="sort ms-auto d-flex align-items-center mb-md-0 mb-3">
                            <p class="mb-0 pb-0">
                                sort by:
                            </p>
                            <div class="d-flex align-items-md-center flex-md-row flex-column ">
                                <select class="form-select text-dark " aria-label="Default select example ">
                                    <option selected style="color: black;">Our top picks</option>
                                    <option value="1" style="color: black;">English, EUR</option>
                                    <option value="2" style="color: black;">English, USD</option>
                                    <option value="3" style="color: black;">English, USD</option>
                                </select>

                            </div>
                        </div>
                        <div class="search">
                            <input type="text" placeholder="Search by name or keyword">
                            <img src="{{ url('newAssets') }}/assets/images/search.svg" alt=""
                                class="search-icon">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <section class="teacher-section pb-0">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="teacher-heading mb-3">
                        {{ isset($totalTutors) ? $totalTutors : count($userdata) }} teachers available
                    </div>
                </div>
            </div>
                

                    {{-- @if (count($userdata))
                    @foreach ($userdata as $userdata_val)
                    <div class="teacher-card-div mb-3"
                        onmouseenter="changeCalendarContent('{{ $userdata_val->video_link }}')">
                        <div class="teacher-card--header">
                            <a class="w-100 text-decoration-none"
                                href="{{url('/tutor-detail')}}/{{$userdata_val->user_id}}">

                                <div class="teacher-card--header-text w-100 align-items-start">
                                    <div class=" d-flex align-items-start flex-md-row flex-column mb-md-0 mb-3">
                                        <div class="online-image">
                                            <img src="{{ url('/') }}/images/{{ $userdata_val->profile_img }}" alt="">
                                            <div class="online"></div>
                                        </div>
                                        <div class="profile-data-text">
                                            <div
                                                class="d-flex align-items-sm-center flex-sm-row flex-column align-items-start">
                                                <h1 class="mb-0 pb-0">
                                                    {{ $userdata_val->first_name . ' ' . $userdata_val->last_name }}
                                                </h1>
                                                <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                    <img src="{{ url('newAssets') }}/assets/images/star.svg" alt=""
                                                        class="ms-sm-3 ms-0 me-1">
                                                    <h3 class="mb-0 pb-0">5.0</h3>
                                                    <span>(33 review)</span>
                                                </div>
                                            </div>
                                            <div class=" mb-2">
                                                <!-- <h2 class="mb-0 pb-0">English teacher</h2> -->
                                                <div
                                                    class="d-flex align-items-lg-center mt-3 flex-wrap align-items-start">
                                                    <?php
                                                    foreach ($subjectAll as $key => $value) {
                                                        $medi_arr = explode(',', $userdata_val->subject);
                                                        if (count($medi_arr) > 1) {
                                                            if (in_array($value->id, $medi_arr)) {
                                                                echo '<h2 class="text-primary me-2 ps-0">' . $value->subject . ' </h2>';
                                                            }
                                                        } else {
                                                            if ($userdata_val->subject == $value->id) {
                                                                echo '<h2 class="text-primary me-2 ps-0">' . $value->subject . '</h2>';
                                                            }
                                                        }
                                                    }
                                                    
                                                    ?>


                                                </div>

                                                <div class="d-flex align-items-center  mt-2">
                                                    <?php 
                                                    foreach ($countryAll as $key => $value) { 
                                                      if($userdata_val->country==$value->id){
                                                         ?>
                                                    <span><img
                                                            src="{{ url('/') }}/assets/frontpage_assets/flags/{{ Str::lower($value->iso) }}.png"
                                                            alt=""></span>
                                                    <p class="mb-0 pb-0 ps-1">{{ $value->nicename }}</p>

                                                    <?php 
                                                         
                                                     }
                                                 }
                                                 ?>

                                                </div>
                                            </div>
                                            <div>
                                                <p class="mb-0 pb-0 mt-2 mb-2">
                                                    <span>Speaks:</span> English (Native) German (Advanced)
                                                    Lithuanian
                                                    (Native)
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="profile-price flex-shrink-0">
                                        <h2 class="mb-0 pb-0">${{ $userdata_val->hourly_rate }}</h2>
                                        <p class="mb-0 pb-0">60-mins lesson</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="teacher-card-body">
                            <p>
                                {{ $userdata_val->desc_about }}

                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center flex-md-row flex-column ">
                            <div class="mb-md-0 mb-3">
                                <img src="{{ url('newAssets') }}/assets/images/veri.svg" alt="">
                            </div>
                            <div class="d-flex align-items-center flex-md-row flex-column sm-100 ">
                                <div class="d-flex align-items-center w-100 mb-md-0 mb-3">
                                    <div class="like">
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
                                    <button class="main-btn-blank-sm w-100 mx-3"><a
                                            href="{{ url('chat', $userdata_val->user_id) }}" style="color: #FF6C0B"
                                            class="text-decoration-none">Message</a></button>
                                </div>
                                <button class="main-btn-sm w-100" style="white-space: nowrap;" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"
                                    onclick="runModelCalendar({{ $userdata_val->user_id }},{{ $userdata_val->hourly_rate }},'{{ url('/') }}/images/{{ $userdata_val->profile_img }}','{{ $userdata_val->first_name . ' ' . $userdata_val->last_name }}')">Book
                                    a trial
                                    lesson</button>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif --}}
                    {{-- <div class="teacher-card-div mb-3">
                        <div class="teacher-card--header">

                            <div class="teacher-card--header-text w-100 align-items-start">
                                <div class=" d-flex align-items-start flex-md-row flex-column mb-md-0 mb-3">
                                    <div class="online-image">
                                        <img src="{{ url('newAssets') }}/assets/images/ppp.png" alt="">
                    <div class="online"></div>
                </div>
                <div class="profile-data-text">
                    <div class="d-flex align-items-sm-center flex-sm-row flex-column align-items-start">
                        <h1 class="mb-0 pb-0">Hanna Baptista</h1>
                        <div class="d-flex align-items-center mt-sm-0 mt-2">
                            <img src="{{ url('newAssets') }}/assets/images/star.svg" alt="" class="ms-sm-3 ms-0 me-1">
                            <h3 class="mb-0 pb-0">5.0</h3>
                            <span>(33 review)</span>
                        </div>
                    </div>
                    <div class=" mb-2">
                        <!-- <h2 class="mb-0 pb-0">English teacher</h2> -->
                        <div class="d-flex align-items-lg-center mt-3 flex-wrap align-items-start">
                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                            <h2 class="text-primary me-2 ps-0">English teacher</h2>

                        </div>

                        <div class="d-flex align-items-center  mt-2">
                            <img src="{{ url('newAssets') }}/assets/images/flag.png" alt="" class="me-1">
                            <p class="mb-0 pb-0">United State</p>
                        </div>
                    </div>
                    <div>
                        <p class="mb-0 pb-0 mt-2 mb-2">
                            <span>Speaks:</span> English (Native) German (Advanced)
                            Lithuanian
                            (Native)
                        </p>
                    </div>

                </div>
            </div>
            <div class="profile-price flex-shrink-0">
                <h2 class="mb-0 pb-0">$105.00</h2>
                <p class="mb-0 pb-0">50-min lesson</p>
            </div>
        </div>
        </div>
        <div class="teacher-card-body">
            <p>
                English tutor with over 5 years of teaching experience Hi! I'm Ugne. Originally I am
                from Lithuania, however, I have completed my high school education in an American
                International School and my bachelor's degree at a university in London, UK. I have
                quite a few interests and creative hobbies, however my favorite thing to do whenever
                I have the time is traveling as much as possible.

            </p>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-md-row flex-column ">
            <div class="mb-md-0 mb-3">
                <img src="{{ url('newAssets') }}/assets/images/veri.svg" alt="">
            </div>
            <div class="d-flex align-items-center flex-md-row flex-column sm-100 ">
                <div class="d-flex align-items-center w-100 mb-md-0 mb-3">
                    <div class="like">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path
                                d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                fill="#FF6C0B" fill-opacity="0.15" />
                            <path class="like-fill "
                                d="M18.6356 12.9894L18.6468 13.0001L18.6583 13.0104C19.0273 13.3404 19.505 13.5228 20 13.5228C20.495 13.5228 20.9727 13.3404 21.3417 13.0104L21.3535 12.9998L21.365 12.9888C22.2116 12.1818 23.8293 11 26 11C27.5801 11 28.7855 11.6184 29.6199 12.6803C30.4752 13.7688 31 15.4045 31 17.5C31 18.7417 30.4893 20.1505 29.5891 21.6176C28.696 23.073 27.467 24.5082 26.1492 25.7806C24.8327 27.0516 23.4532 28.1356 22.2806 28.895C21.6935 29.2752 21.1737 29.5641 20.7514 29.754C20.297 29.9584 20.0599 30 20 30C19.9401 30 19.703 29.9584 19.2486 29.754C18.8263 29.5641 18.3065 29.2752 17.7194 28.895C16.5468 28.1356 15.1673 27.0516 13.8508 25.7806C12.533 24.5082 11.304 23.073 10.4109 21.6176C9.51066 20.1505 9 18.7417 9 17.5C9 15.4045 9.52485 13.7688 10.3801 12.6803C11.2145 11.6184 12.4199 11 14 11C16.169 11 17.7883 12.183 18.6356 12.9894Z"
                                stroke="#FF6C0B" stroke-width="2" />
                        </svg>
                    </div>
                    <button class="main-btn-blank-sm w-100 mx-3">Message</button>
                </div>
                <button class="main-btn-sm w-100" style="white-space: nowrap;">Book a trial
                    lesson</button>
            </div>
        </div>
        </div> --}}




                    {{-- <div class="pagination mt-4">

                        <div class="hide-sm">
                                <img class="arrow" src="{{ url('newAssets') }}/assets/images/images/arrow-left.svg"
        alt="">
        <a class="prev" href="#">Previous</a>
        </div>
        <ul class="pg-ul">
            <li id="pg-1" class="pg-list"><a href="#">1</a></li>
            <li class="pg-list"><a href="#">2</a></li>
            <li class="pg-list"><a href="#">3</a></li>
            <li class="pg-list">...</li>
            <li class="pg-list"><a href="#">8</a></li>
            <li class="pg-list"><a href="#">9</a></li>
            <li class="pg-list"><a href="#">10</a></li>
        </ul>
        <div class="hide-sm">
            <a class="next" href="#">Next</a>
            <img class="arrow" src="{{ url('newAssets') }}/assets/images/images/arrow-right.svg" alt="">
        </div>
        </div> --}}

        <div class="row mb-3 card-main-section">
            <div class="col-xl-8 ">
                <div class="teacher-card-div">
                    <div class="teacher-card--header">

                        <div class="teacher-card--header-text w-100 align-items-start">
                            <div class=" d-flex align-items-start flex-md-row flex-column mb-md-0 mb-3">
                                <div class="online-image">
                                    <img src="{{ url("") }}/newAssets/assets/images/ppp.png" alt="">
                                    <div class="online"></div>
                                </div>
                                <div class="profile-data-text">
                                    <div
                                        class="d-flex align-items-sm-center flex-sm-row flex-column align-items-start">
                                        <h1 class="mb-0 pb-0">Hanna Baptista</h1>
                                        <div class="d-flex align-items-center mt-sm-0 mt-2">
                                            <img src="{{ url("") }}/newAssets/assets/images/star.svg" alt="" class="ms-sm-3 ms-0 me-1">
                                            <h3 class="mb-0 pb-0">5.0</h3>
                                            <span>(33 review)</span>
                                        </div>
                                    </div>
                                    <div class=" mb-2">
                                        <!-- <h2 class="mb-0 pb-0">English teacher</h2> -->
                                        <div
                                            class="d-flex align-items-lg-center mt-3 flex-wrap align-items-start">
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>

                                        </div>

                                        <div class="d-flex align-items-center  mt-2">
                                            <img src="{{ url("") }}/newAssets/assets/images/flag.png" alt="" class="me-1">
                                            <p class="mb-0 pb-0">United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0 pb-0 mt-2 mb-2">
                                            <span>Speaks:</span> English (Native) German (Advanced)
                                            Lithuanian
                                            (Native)
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="profile-price flex-shrink-0">
                                <h2 class="mb-0 pb-0">$105.00</h2>
                                <p class="mb-0 pb-0">50-min lesson</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card-body">
                        <p>
                            English tutor with over 5 years of teaching experience Hi! I'm Ugne. Originally I am
                            from Lithuania, however, I have completed my high school education in an American
                            International School and my bachelor's degree at a university in London, UK. I have
                            quite a few interests and creative hobbies, however my favorite thing to do whenever
                            I have the time is traveling as much as possible.

                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center flex-md-row flex-column ">
                        <div class="mb-md-0 mb-3">
                            <img src="{{ url("") }}/newAssets/assets/images/veri.svg" alt="">
                        </div>
                        <div class="d-flex align-items-center flex-md-row flex-column sm-100 ">
                            <div class="d-flex align-items-center w-100 mb-md-0 mb-3">
                                <div class="like">
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
                                <button class="main-btn-blank-sm w-100 mx-3">Message</button>
                            </div>
                            <button class="main-btn-sm w-100" style="white-space: nowrap;">Book a trial
                                lesson</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4  card-detail-section">
                <div class="right-p-part-content">
                    <div class="side-card">

                        <div class="side-card-arrow">
                            <svg width="11" height="17" viewBox="0 0 11 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.23432 9.83135C0.535517 9.06722 0.535516 7.89605 1.23432 7.13192L7.0241 0.800865C8.25583 -0.546015 10.5 0.32541 10.5 2.15058L10.5 14.8127C10.5 16.6379 8.25583 17.5093 7.0241 16.1624L1.23432 9.83135Z"
                                fill="#F9F9FB" />
                        </svg>
                        </div>

                        <video controls>
                            <source src="{{ url("") }}/newAssets/assets/images/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <div class="world-div mt-1">
                            <img src="{{ url('') }}/newAssets/assets/images/images/world.svg"
                                alt="" class="me-2">
                            <p class="mb-0 pb-0">Times are shown in your local timezone</p>
                        </div>
                        <div class="grid-container">
                            <div class="grid-item"></div>
                            <div class="grid-item day-name">Mon</div>
                            <div class="grid-item day-name">Tue</div>
                            <div class="grid-item day-name">Wed</div>
                            <div class="grid-item day-name">Thu</div>
                            <div class="grid-item day-name">Fri</div>
                            <div class="grid-item day-name">Sat</div>
                            <div class="grid-item"></div>
                            <div class="grid-item"><span class="day">Morning</span><br><span
                                    class="time">06:00-12:00</span>
                            </div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"><span class="day">Afternoon</span><br><span
                                    class="time">12:00-18:00</span>
                            </div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item"><span class="day">Evening</span><br><span
                                    class="time">18:00-20:00</span>
                            </div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="assets/images/images/tick-mark.svg" alt=""></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"><span class="day">Night</span><br><span
                                    class="time">00:00-16:00</span></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                        </div>

                        <button class="schedule-btn mt-3 mb-1">View full schedule</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 card-main-section">
            <div class="col-xl-8 ">
                <div class="teacher-card-div">
                    <div class="teacher-card--header">

                        <div class="teacher-card--header-text w-100 align-items-start">
                            <div class=" d-flex align-items-start flex-md-row flex-column mb-md-0 mb-3">
                                <div class="online-image">
                                    <img src="{{ url("") }}/newAssets/assets/images/ppp.png" alt="">
                                    <div class="online"></div>
                                </div>
                                <div class="profile-data-text">
                                    <div
                                        class="d-flex align-items-sm-center flex-sm-row flex-column align-items-start">
                                        <h1 class="mb-0 pb-0">Hanna Baptista</h1>
                                        <div class="d-flex align-items-center mt-sm-0 mt-2">
                                            <img src="{{ url("") }}/newAssets/assets/images/star.svg" alt="" class="ms-sm-3 ms-0 me-1">
                                            <h3 class="mb-0 pb-0">5.0</h3>
                                            <span>(33 review)</span>
                                        </div>
                                    </div>
                                    <div class=" mb-2">
                                        <!-- <h2 class="mb-0 pb-0">English teacher</h2> -->
                                        <div
                                            class="d-flex align-items-lg-center mt-3 flex-wrap align-items-start">
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>
                                            <h2 class="text-primary me-2 ps-0">English teacher</h2>

                                        </div>

                                        <div class="d-flex align-items-center  mt-2">
                                            <img src="{{ url("") }}/newAssets/assets/images/flag.png" alt="" class="me-1">
                                            <p class="mb-0 pb-0">United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0 pb-0 mt-2 mb-2">
                                            <span>Speaks:</span> English (Native) German (Advanced)
                                            Lithuanian
                                            (Native)
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="profile-price flex-shrink-0">
                                <h2 class="mb-0 pb-0">$105.00</h2>
                                <p class="mb-0 pb-0">50-min lesson</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card-body">
                        <p>
                            English tutor with over 5 years of teaching experience Hi! I'm Ugne. Originally I am
                            from Lithuania, however, I have completed my high school education in an American
                            International School and my bachelor's degree at a university in London, UK. I have
                            quite a few interests and creative hobbies, however my favorite thing to do whenever
                            I have the time is traveling as much as possible.

                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center flex-md-row flex-column ">
                        <div class="mb-md-0 mb-3">
                            <img src="{{ url("") }}/newAssets/assets/images/veri.svg" alt="">
                        </div>
                        <div class="d-flex align-items-center flex-md-row flex-column sm-100 ">
                            <div class="d-flex align-items-center w-100 mb-md-0 mb-3">
                                <div class="like">
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
                                <button class="main-btn-blank-sm w-100 mx-3">Message</button>
                            </div>
                            <button class="main-btn-sm w-100" style="white-space: nowrap;">Book a trial
                                lesson</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4  card-detail-section">
                <div class="right-p-part-content">
                    <div class="side-card">

                        <div class="side-card-arrow">
                            <svg width="11" height="17" viewBox="0 0 11 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.23432 9.83135C0.535517 9.06722 0.535516 7.89605 1.23432 7.13192L7.0241 0.800865C8.25583 -0.546015 10.5 0.32541 10.5 2.15058L10.5 14.8127C10.5 16.6379 8.25583 17.5093 7.0241 16.1624L1.23432 9.83135Z"
                                fill="#F9F9FB" />
                        </svg>
                        </div>

                        <video controls>
                            <source src="{{ url("") }}/newAssets/assets/images/2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <div class="world-div mt-1">
                            <img src="{{ url('') }}/newAssets/assets/images/images/world.svg"
                                alt="" class="me-2">
                            <p class="mb-0 pb-0">Times are shown in your local timezone</p>
                        </div>
                        <div class="grid-container">
                            <div class="grid-item"></div>
                            <div class="grid-item day-name">Mon</div>
                            <div class="grid-item day-name">Tue</div>
                            <div class="grid-item day-name">Wed</div>
                            <div class="grid-item day-name">Thu</div>
                            <div class="grid-item day-name">Fri</div>
                            <div class="grid-item day-name">Sat</div>
                            <div class="grid-item"></div>
                            <div class="grid-item"><span class="day">Morning</span><br><span
                                    class="time">06:00-12:00</span>
                            </div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"><span class="day">Afternoon</span><br><span
                                    class="time">12:00-18:00</span>
                            </div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item"><span class="day">Evening</span><br><span
                                    class="time">18:00-20:00</span>
                            </div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="assets/images/images/tick-mark.svg" alt=""></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"><span class="day">Night</span><br><span
                                    class="time">00:00-16:00</span></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                            <div class="grid-item tick"><img class="tick-img"
                                    src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                    alt=""></div>
                        </div>

                        <button class="schedule-btn mt-3 mb-1">View full schedule</button>
                    </div>
                </div>
            </div>
        </div>

                    @if (count($userdata))
                        @foreach ($userdata as $userdata_val)
                            <div class="row mb-3 card-main-section">
                                <div class="col-lg-8 ">
                                    <div class="teacher-card-div mb-3">
                                        <div class="teacher-card--header">

                                            <div class="teacher-card--header-text w-100 align-items-start">
                                                <div
                                                    class=" d-flex align-items-start flex-md-row flex-column mb-md-0 mb-3">
                                                    <div class="online-image">
                                                        <img src="{{ url('/') }}/images/{{ $userdata_val->profile_img }}"
                                                            alt="">
                                                        <div class="online"></div>
                                                    </div>
                                                    <div class="profile-data-text">
                                                        <div
                                                            class="d-flex align-items-sm-center flex-sm-row flex-column align-items-start">
                                                            <h1 class="mb-0 pb-0">
                                                                {{ $userdata_val->first_name . ' ' . $userdata_val->last_name }}
                                                            </h1>
                                                            <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                                <img src="assets/images/star.svg" alt=""
                                                                    class="ms-sm-3 ms-0 me-1">
                                                                <h3 class="mb-0 pb-0">5.0</h3>
                                                                <span>(33 review)</span>
                                                            </div>
                                                        </div>
                                                        <div class=" mb-2">
                                                            <!-- <h2 class="mb-0 pb-0">English teacher</h2> -->
                                                            <div
                                                                class="d-flex align-items-lg-center mt-3 flex-wrap align-items-start">
                                                                <?php
                                                                foreach ($subjectAll as $key => $value) {
                                                                    $medi_arr = explode(',', $userdata_val->subject);
                                                                    if (count($medi_arr) > 1) {
                                                                        if (in_array($value->id, $medi_arr)) {
                                                                            echo '<h2 class="text-primary me-2 ps-0">' . $value->subject . ' </h2>';
                                                                        }
                                                                    } else {
                                                                        if ($userdata_val->subject == $value->id) {
                                                                            echo '<h2 class="text-primary me-2 ps-0">' . $value->subject . '</h2>';
                                                                        }
                                                                    }
                                                                }
                                                                
                                                                ?>



                                                            </div>

                                                            <div class="d-flex align-items-center  mt-2">
                                                                <img src="assets/images/flag.png" alt=""
                                                                    class="me-1">
                                                                <?php 
                                            foreach ($countryAll as $key => $value) { 
                                              if($userdata_val->country==$value->id){
                                                 ?>
                                                                <span><img
                                                                        src="{{ url('/') }}/assets/frontpage_assets/flags/{{ Str::lower($value->iso) }}.png"
                                                                        alt=""></span>
                                                                <p class="mb-0 pb-0 ps-1">{{ $value->nicename }}</p>

                                                                <?php 
                                                 
                                             }
                                         }
                                         ?>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 pb-0 mt-2 mb-2">
                                                                <span>Speaks:</span> English (Native) German (Advanced)
                                                                Lithuanian
                                                                (Native)
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="profile-price flex-shrink-0">
                                                    <h2 class="mb-0 pb-0">${{ $userdata_val->hourly_rate }}</h2>
                                                    <p class="mb-0 pb-0">60-mins lesson</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="teacher-card-body">
                                            <p>
                                                {{ $userdata_val->desc_about }}

                                            </p>
                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-center flex-md-row flex-column ">
                                            <div class="mb-md-0 mb-3">
                                                <img src="{{ url('') }}/newAssets/assets/images/veri.svg"
                                                    alt="">
                                            </div>
                                            <div class="d-flex align-items-center flex-md-row flex-column sm-100 ">
                                                <div class="d-flex align-items-center w-100 mb-md-0 mb-3">
                                                    <div class="like">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                            height="40" viewBox="0 0 40 40" fill="none">
                                                            <path
                                                                d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
                                                                fill="#FF6C0B" fill-opacity="0.15" />
                                                            <path class="like-fill "
                                                                d="M18.6356 12.9894L18.6468 13.0001L18.6583 13.0104C19.0273 13.3404 19.505 13.5228 20 13.5228C20.495 13.5228 20.9727 13.3404 21.3417 13.0104L21.3535 12.9998L21.365 12.9888C22.2116 12.1818 23.8293 11 26 11C27.5801 11 28.7855 11.6184 29.6199 12.6803C30.4752 13.7688 31 15.4045 31 17.5C31 18.7417 30.4893 20.1505 29.5891 21.6176C28.696 23.073 27.467 24.5082 26.1492 25.7806C24.8327 27.0516 23.4532 28.1356 22.2806 28.895C21.6935 29.2752 21.1737 29.5641 20.7514 29.754C20.297 29.9584 20.0599 30 20 30C19.9401 30 19.703 29.9584 19.2486 29.754C18.8263 29.5641 18.3065 29.2752 17.7194 28.895C16.5468 28.1356 15.1673 27.0516 13.8508 25.7806C12.533 24.5082 11.304 23.073 10.4109 21.6176C9.51066 20.1505 9 18.7417 9 17.5C9 15.4045 9.52485 13.7688 10.3801 12.6803C11.2145 11.6184 12.4199 11 14 11C16.169 11 17.7883 12.183 18.6356 12.9894Z"
                                                                stroke="#FF6C0B" stroke-width="2" />
                                                        </svg>
                                                    </div>
                                                    <button class="main-btn-blank-sm w-100 mx-3"><a
                                                            href="{{ url('chat', $userdata_val->user_id) }}"
                                                            style="color: #FF6C0B"
                                                            class="text-decoration-none">Message</a></button>
                                                </div>
                                                <button class="main-btn-sm w-100" style="white-space: nowrap;"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                    onclick="runModelCalendar({{ $userdata_val->user_id }},{{ $userdata_val->hourly_rate }},'{{ url('/') }}/images/{{ $userdata_val->profile_img }}','{{ $userdata_val->first_name . ' ' . $userdata_val->last_name }}')">Book
                                                    a trial
                                                    lesson</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 ">
                                    <div class="right-p-part-content card-detail-section">
                                        <div class="side-card">

                                            <div class="side-card-arrow">
                                                <svg width="11" height="17" viewBox="0 0 11 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.23432 9.83135C0.535517 9.06722 0.535516 7.89605 1.23432 7.13192L7.0241 0.800865C8.25583 -0.546015 10.5 0.32541 10.5 2.15058L10.5 14.8127C10.5 16.6379 8.25583 17.5093 7.0241 16.1624L1.23432 9.83135Z"
                                                        fill="#F9F9FB" />
                                                </svg>
                                            </div>

                                            <video controls>
                                                <source
                                                    src="{{ url('') }}/videos/{{ $userdata_val->video_link }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>

                                            <div class="world-div mt-1">
                                                <img src="{{ url('') }}/newAssets/assets/images/images/world.svg"
                                                    alt="" class="me-2">
                                                <p class="mb-0 pb-0">Times are shown in your local timezone</p>
                                            </div>
                                            <div class="grid-container">
                                                <div class="grid-item"></div>
                                                <div class="grid-item day-name">Mon</div>
                                                <div class="grid-item day-name">Tue</div>
                                                <div class="grid-item day-name">Wed</div>
                                                <div class="grid-item day-name">Thu</div>
                                                <div class="grid-item day-name">Fri</div>
                                                <div class="grid-item day-name">Sat</div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"><span class="day">Morning</span><br><span
                                                        class="time">06:00-12:00</span>
                                                </div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"><span class="day">Afternoon</span><br><span
                                                        class="time">12:00-18:00</span>
                                                </div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item"><span class="day">Evening</span><br><span
                                                        class="time">18:00-20:00</span>
                                                </div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="assets/images/images/tick-mark.svg" alt=""></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"></div>
                                                <div class="grid-item"><span class="day">Night</span><br><span
                                                        class="time">00:00-16:00</span></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                                <div class="grid-item tick"><img class="tick-img"
                                                        src="{{ url('') }}/newAssets/assets/images/images/tick-mark.svg"
                                                        alt=""></div>
                                            </div>

                                            <button class="schedule-btn mt-3 mb-1">View full schedule</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Display pagination links -->
                    <div class="row">


                        <div class="col-lg-8 mt-4">
                            @if (!isset($filter))
                                {{ $userdata->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h2 class="heading text-lg-start text-center">
                        Student Testimonials
                    </h2>

                    <div id="carouselExampleIndicators" class="carousel slide testimonial-slider"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @if (count($Alltestimonial))
                                @php
                                    $t_count = 1;
                                @endphp
                                @foreach ($Alltestimonial as $Alltestimonial_val)
                                    @if ($t_count < 4)
                                        <div class="carousel-item {{ $t_count == 1 ? 'active' : '' }}">
                                            <p class="testimonial-text  text-lg-start text-center">
                                                <img src="{{ url('newAssets/assets/images/comma.svg') }}"
                                                    alt="">
                                                {{ $Alltestimonial_val->student_desc }}

                                            </p>
                                            <h4>{{ $Alltestimonial_val->student_name }} -
                                                {{ $Alltestimonial_val->field }}</h4>
                                        </div>
                                        @php
                                            $t_count++;
                                        @endphp
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center order-lg-2 order-1 mb-lg-0 mb-4">
                    <img src="{{ url('/') }}/images/{{ $Homepagedata[0]->s_t_file }}" alt=""
                        class="mx-auto img-fluid">
                </div>

            </div>
        </div>
    </section>


    <section class="language-training">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-flex justify-content-center  mb-lg-0 mb-4">
                    <img src="{{ url('/') }}/images/{{ $Homepagedata[0]->sec_3_file }}" alt=""
                        class="mx-auto img-fluid">
                </div>
                <div class="col-lg-6 pe-lg-5 ">
                    <h2 class="heading text-md-start">
                        <?php echo $Homepagedata[0]->sec_3_heading; ?>
                    </h2>
                    <p class="main-text2 text-md-start text-center text-gray mt-3"
                        style="color: rgba(44, 44, 44, 0.80);
                ;">
                        {{ $Homepagedata[0]->sec_3_dec }} </p>

                    <div
                        class="d-flex align-items-center justify-content-lg-start justify-content-center flex-md-row flex-column mt-3 pt-3 mb-3">
                        <button class="main-btn main-btn2 ">Join as a Tutor</button>
                        <button class="main-btn-blank ms-md-3 mt-md-0 mt-3">Join as a Student</button>
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
@if (isset($userdata_val))
    <!-- Container -->
    <form id="submitPrivateLesson" action="{{ route('private.charge') }}" method="post">
        @csrf
        <input type="number" name="tutor_id" id="tutor_bookTrial" value="" hidden>
        <input type="number" name="student_id" value="{{ auth()->check() ? auth()->user()->id : null }}" hidden>
        <input type="number" name="price" id="hourly_rate" value="" hidden>
        <input type="number" name="calendar_sch_id" id="calendar_sch_id" hidden>
        <input type="datetime" name="start" id="session_start" hidden>
        <input type="datetime" name="end" id="session_end" hidden>
    </form>
@endif

<!-- Footer Section -->
@include('/frontend/common/newFooter')


{{-- <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
    integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

{{-- <script src="{{ url('newAssets') }}/assets/js/app.js"></script> --}}
{{-- <script>
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
</script> --}}
{{-- <script type="text/javascript">
    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            margin: 10,
            loop: true,
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
</script> --}}
<script src="{{ url('/') }}/fullcalendar/lib/moment.min.js"></script>
<script src="{{ url('/') }}/fullcalendar/fullcalendar.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script> --}}
<script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
<script>
    // Get the client's time zone
    const clientTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

    function runModelCalendar(tutorId, hourly_rate, img, name) {
        document.querySelector("#modelTutorImage").src = img;
        document.querySelector("#modelTutorName").innerHTML = name;
        document.querySelector("#tutor_bookTrial").value = tutorId;
        document.querySelector("#hourly_rate").value = hourly_rate;
        $("#model-schedule-calendar").empty();
        setTimeout(() => {


            var calendarEl = document.getElementById('model-schedule-calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next',
                    right: 'title'
                },

                defaultView: 'timeGridWeek',
                selectable: true,
                editable: true,
                timeZone: clientTimeZone, // Use the client's time zone
                events: "{{ url('/') }}/fetchCalendarAvailability/" + tutorId,
                eventClick: function(eventClickInfo, jsEvent, view) {
                    // Reset the background color of all events to their default styling
                    calendar.getEvents().forEach(function(event) {
                        event.setProp('backgroundColor', event.extendedProps
                            .originalBackgroundColor || '');
                    });

                    // Set the background color of the clicked event
                    eventClickInfo.event.setProp('backgroundColor', '#fe6903');
                    eventID = eventClickInfo.el.fcSeg.eventRange.def.publicId;

                    $("#continueSubmitShcdulebtn").removeClass("disabled")
                    $("#session_start").val(moment(eventClickInfo.el.fcSeg.start).add(0, 'minute')
                        .format('YYYY-MM-DD HH:mm'))
                    $("#session_end").val(moment(eventClickInfo.el.fcSeg.end).add(0, 'minute')
                        .format(
                            'YYYY-MM-DD HH:mm'))
                    $("#calendar_sch_id").val(eventID);
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


            // fake dummy data
            // Static events
            var currentDate = new Date(); // Current date
            var formattedCurrentDate = currentDate.toISOString().slice(0, 10); // Format as 'YYYY-MM-DD'
            var staticEvents = [{
                    title: 'Static Event 1',
                    start: formattedCurrentDate + 'T08:00:00',
                    end: formattedCurrentDate + 'T10:00:00',

                },
                {
                    title: 'Static Event 2',
                    start: formattedCurrentDate + 'T14:00:00',
                    end: formattedCurrentDate + 'T16:00:00',

                },
                // Add more static events as needed
            ];

            staticEvents.forEach(function(eventData) {
                var event = calendar.addEvent(eventData);
            });
        }, 400);
    }

    function submitStudentSchedule() {
        if ($("#session_start").val() != '' && $("#session_end").val() != '' && $("#calendar_sch_id").val() != '') {
            $('#submitPrivateLesson').submit();
        }
    }


    function changeCalendarContent(videoSource) {
        document.querySelector('#tutorVideo').src = '/videos/' + videoSource;
    }
</script>
<script>
    // jQuery code
    $(document).ready(function() {
        $(".teacher-card-div").each(function() {
            // Find the "like" button within the current teacher card
            var $likeButton = $(this).find(".like");

            // Add a click event listener to the found "like" button
            $likeButton.click(function() {
                // Find the corresponding ".like-fill" element within the current teacher card
                var $likeFill = $(this).closest(".teacher-card-div").find(".like-fill");

                // Toggle the "liked" class for the targeted ".like-fill" element
                $likeFill.toggleClass("liked");
            });
        });
    });
</script>
<script>
    const carousel = new bootstrap.Carousel(document.getElementById('carouselExampleIndicators'), {
        interval: false // Disable auto-advancing
    });

    const prevButton = document.querySelector('.carousel-control-prev');
    const nextButton = document.querySelector('.carousel-control-next');

    carousel._element.addEventListener('slide.bs.carousel', (e) => {
        // Get the current slide index from the event
        const currentIndex = e.to;
        console.log(e.to)
        // Get the total number of slides
        const totalSlides = carousel._items.length - 1;

        // Add or remove 'disabled' class based on the current slide
        if (currentIndex === 0) {
            console.log("hi")
            prevButton.classList.add('disabled');
            nextButton.classList.remove('disabled');
        } else if (currentIndex === totalSlides) {
            nextButton.classList.add('disabled');
            prevButton.classList.remove('disabled');
        } else {
            prevButton.classList.remove('disabled');
            nextButton.classList.remove('disabled');
        }
    });
</script>