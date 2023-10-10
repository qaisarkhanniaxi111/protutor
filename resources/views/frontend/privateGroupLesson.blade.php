@php
    $lightNavbar = true;
@endphp
@include('/frontend/common/header')
<link rel="stylesheet" href="{{ url('newAssets/assets/css/private-lessons.css') }}">
<style>
  p{
    text-align: unset;
  }
</style>
    <main>



        <section class="hero ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-lg-1 order-2">
                        <div class="left-hero">
                            <div class="btn-hero">
                                <button id="btn-hero-1" class="btns-hero">Private lessons</button>
                                <a href="{{ route('public.lessons') }}" class="text-decoration-none"> <button id="btn-hero-2" class="btns-hero" style="color: #FF6C0B">Group Lessons</button></a>
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
                            <img src="{{ url('newAssets/assets/images/images/hero.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <div class="">
            <div class="container">
                <div class="row select-section">
                    <div class="col-lg-3">
                        <div class="slc">
                            <label for="">I want to learn</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select </option>
                                <option value="English">English</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Italian">Italian</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="slc">
                            <label for="">price per lesson</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>$1-$40</option>
                                <option value="$1-$40">$1-$40</option>
                                <option value="$1-$40">$1-$40</option>
                                <option value="$1-$40">$1-$40</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="slc">
                            <label for="">Country of birth</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Any country </option>
                                <option value="English">English</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Italian">Italian</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="slc border-0">
                            <label for="">I’m available</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Any time</option>
                                <option value="English" style="margin: 0px 20px !important;">English</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Italian">Italian</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row filter-search align-items-center">
                    <div class="col-xl-6 d-flex align-items-center flex-md-row flex-column">
                        <div class="dropdown my-3 mx-2">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Specialist
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li class="more-heading">
                                    <h2 class="">
                                        English Specialist
                                    </h2>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mathmatics
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Computer
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Chemistry
                                        </label>
                                    </div>
                                </li>
                                <li class="more-heading">
                                    <h2 class="">
                                        More Specialist
                                    </h2>
                                </li>

                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="dropdown my-3 mx-2">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Also Speak
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mathmatics
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Computer
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="dropdown my-3 mx-2">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Nation speaker
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mathmatics
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Computer
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mathmatics
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Computer
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Englis
                                        </label>
                                    </div>

                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Urdu
                                        </label>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex align-items-center flex-md-row flex-column">
                        <div class="sort ms-auto d-flex align-items-center mb-md-0 mb-3">
                            <p class="mb-0 pb-0">
                                sort by:
                            </p>
                            <div class="d-flex align-items-md-center flex-md-row flex-column ">
                                <select class="form-select text-dark "
                                    aria-label="Default select example ">
                                    <option selected style="color: black;">Our top picks</option>
                                    <option value="1" style="color: black;">English, EUR</option>
                                    <option value="2" style="color: black;">English, USD</option>
                                    <option value="3" style="color: black;">English, USD</option>
                                </select>

                            </div>
                        </div>
                        <div class="search">
                            <input type="text" placeholder="Search by name or keyword">
                            <img src="{{ url('newAssets') }}/assets/images/search.svg" alt="" class="search-icon">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="teacher-section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="teacher-heading mb-3">
                            15,544 English teachers available
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="teacher-card-div mb-3">
                            <div class="teacher-card--header">

                                <div class="teacher-card--header-text w-100 align-items-start">
                                    <div class=" d-flex align-items-start flex-md-row flex-column mb-md-0 mb-3">
                                        <div class="online-image">
                                            <img src="{{ url('newAssets') }}/assets/images/ppp.png" alt="">
                                            <div class="online"></div>
                                        </div>
                                        <div class="profile-data-text">
                                            <div
                                                class="d-flex align-items-sm-center flex-sm-row flex-column align-items-start">
                                                <h1 class="mb-0 pb-0">Hanna Baptista</h1>
                                                <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                    <img src="{{ url('newAssets') }}/assets/images/star.svg" alt="" class="ms-sm-3 ms-0 me-1">
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
                        <div class="teacher-card-div mb-3">
                            <div class="teacher-card--header">

                                <div class="teacher-card--header-text w-100 align-items-start">
                                    <div class=" d-flex align-items-start flex-md-row flex-column mb-md-0 mb-3">
                                        <div class="online-image">
                                            <img src="{{ url('newAssets') }}/assets/images/ppp.png" alt="">
                                            <div class="online"></div>
                                        </div>
                                        <div class="profile-data-text">
                                            <div
                                                class="d-flex align-items-sm-center flex-sm-row flex-column align-items-start">
                                                <h1 class="mb-0 pb-0">Hanna Baptista</h1>
                                                <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                    <img src="{{ url('newAssets') }}/assets/images/star.svg" alt="" class="ms-sm-3 ms-0 me-1">
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
                        <div class="pagination mt-4">
                            <div class="hide-sm">
                                <img class="arrow" src="{{ url('newAssets') }}/assets/images/images/arrow-left.svg" alt="">
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
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="right-p-part-content">
                            <div class="side-card">
                                <video controls>
                                    <source src="{{ url('newAssets') }}/assets/images/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                                <div class="world-div mt-1">
                                    <img src="{{ url('newAssets') }}/assets/images/images/world.svg" alt="" class="me-2">
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
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item"><span class="day">Evening</span><br><span
                                            class="time">18:00-20:00</span>
                                    </div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item"></div>
                                    <div class="grid-item"></div>
                                    <div class="grid-item"><span class="day">Night</span><br><span
                                            class="time">00:00-16:00</span></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                    <div class="grid-item tick"><img class="tick-img"
                                            src="{{ url('newAssets') }}/assets/images/images/tick-mark.svg" alt=""></div>
                                </div>

                                <button class="schedule-btn mt-3 mb-1">View full schedule</button>
                            </div>
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
                                <div class="carousel-item active">
                                    <p class="testimonial-text  text-lg-start text-center">
                                        <img src="{{ url('newAssets') }}/assets/images/comma.svg" alt="">
                                        In my experience all the teachers are very supportive and friendly and the
                                        placement process has been very smooth. it’s also no issue talk about whatever
                                        you want to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                        placeat fugiat earum?

                                    </p>
                                    <h4>Sherina Munir - Designer</h4>
                                </div>
                                <div class="carousel-item">
                                    <p class="testimonial-text  text-lg-start text-center">
                                        <img src="{{ url('newAssets') }}/assets/images/comma.svg" alt="">
                                        In my experience all the teachers are very supportive and friendly and the
                                        placement process has been very smooth. it’s also no issue talk about whatever
                                        you want to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                        placeat fugiat earum?

                                    </p>
                                    <h4>Sherina Munir - Designer</h4>
                                </div>
                                <div class="carousel-item">
                                    <p class="testimonial-text  text-lg-start text-center">
                                        <img src="{{ url('newAssets') }}/assets/images/comma.svg" alt="">
                                        In my experience all the teachers are very supportive and friendly and the
                                        placement process has been very smooth. it’s also no issue talk about whatever
                                        you want to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                        placeat fugiat earum?

                                    </p>
                                    <h4>Sherina Munir - Designer</h4>
                                </div>
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
                        <img src="{{ url('newAssets') }}/assets/images/testimonials.png" alt="" class="mx-auto img-fluid">
                    </div>

                </div>
            </div>
        </section>


        <section class="language-training">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-flex justify-content-center  mb-lg-0 mb-4">
                        <img src="{{ url('newAssets') }}/assets/images/lang.png" alt="" class="mx-auto img-fluid">
                    </div>
                    <div class="col-lg-6 pe-lg-5 ">
                        <h2 class="heading text-md-start">
                            Corporate language training for business
                        </h2>
                        <p class="main-text2 text-md-start text-center text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
                ;">
                            ProTutor corporate training is designed for teams and businesses offering personalized
                            language learning with online tutors. Book a demo to learn more.
                            Want your employer to pay for your lessons? Refer your company! </p>

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
                                        <p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
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
                                        <p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
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
                                        <p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
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
                                        <p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
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
                                        <p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
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


  <!-- Footer Section -->
@include('/frontend/common/footer')

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ url('newAssets') }}/assets/js/app.js"></script>
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
        $(function () {
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

    </script>
