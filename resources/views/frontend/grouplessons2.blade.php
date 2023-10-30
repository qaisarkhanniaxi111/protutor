@php
    $lightNavbar = true;
@endphp
@include('frontend.common.newHeader')
<link rel="stylesheet" href="{{ url('newAssets/assets/css/private-lessons.css') }}">
<!-- slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<main>
    <section class="hero ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-lg-1 order-2">
                    <div class="left-hero">
                        <div class="btn-hero">
                            <a href="{{ route('private.lessons') }}" id="btn-hero-2" class="btns-hero text-dark "
                                style="text-decoration:none;">Private lessons</a>
                            <button id="btn-hero-1" class="btns-hero">Group Lessons</button>
                        </div>
                        <h1 class="main-heading text-dark mt-5">
                            Online English classes to practice speaking together
                        </h1>
                        <p class="main-text text-dark">Looking for an online English tutor? ProTutor is the leading
                            online
                            language learning platform worldwide.</p>


                    </div>
                </div>

            </div>
        </div>


    </section>
    <div class="">
        <form id="filter-form">
            <div class="container">
                <div class="row select-section justify-content-xl-around justify-content-center">
                    
                    <div class="filter-main-div mb-xl-0 mb-3" id="active-filter">
                        <img src="{{ url('') }}/newAssets/assets/images/group-icons/level.svg" alt=""
                            class="">
                        <select class="form-select" aria-label="Default select example" name="teaches_level"
                            onchange="submit_filter()">
                            <option value="" selected>Teaches level</option>
                            @foreach ($teaches_levels as $teach_level)
                                {{-- <a onclick="teaches_level_btn.innerText=this.innerText;teaches_level_filter.value=Number(this.id);"
                                    id={{ $teach_level['id'] }}>{{ $teach_level['teaches_level'] }}</a> --}}
                                <option value="{{ $teach_level['id'] }}">{{ $teach_level['teaches_level'] }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="filter-main-div mb-xl-0 mb-3">
                        <img src="{{ asset('assets/frontpage_assets/images/topic.svg') }}" alt=""
                            class="">
                        <select class="form-select" aria-label="Default select example" name="subject"
                            onchange="submit_filter()">
                            <option value="" selected>Subject</option>
                            @foreach ($subjects as $subject)
                                {{-- <a onclick="subject_btn.innerText=this.innerText;subject_filter.value=Number(this.id);"
                                    id="{{ $subject['id'] }}">{{ $subject['subject'] }}</a> --}}
                                <option value="{{ $subject['id'] }}">{{ $subject['subject'] }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="filter-main-div mb-xl-0 mb-3">
                        <img src="{{ url('') }}/newAssets/assets/images/group-icons/price.svg" alt=""
                            class="">
                        <select class="form-select" aria-label="Default select example" name="price"
                            onchange="submit_filter()">
                            <option value="" selected>Price</option>
                            <option value="1-5">1$-5$</option>
                            <option value="6-10">6$-10$</option>
                            <option value="11-15">11$-15$</option>
                            <option value="16-20">16$-20$</option>
                            <option value="21-25">21$-25$</option>
                            <option value="26-30">26$-30$</option>
                            <option value="31-35">31$-35$</option>
                            <option value="36-40">36$-40$</option>
                            <option value="40+">40$+</option>

                        </select>
                    </div>
                    <div class="filter-main-div mb-xl-0 mb-3">
                        <img src="{{ url("") }}/newAssets/assets/images/group-icons/day.svg" alt="" class="">
                        {{-- <input class="form-control" type="date" name="date" id="date_filter"
                            onchange="submit_filter()"> --}}
                            
                            <input type="date"  placeholder="Date" required="" name="date" onchange="submit_filter()">

                            {{-- ispy apni backend apply kr lien --}}
                    </div>
                    {{-- <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="{{ url("") }}/newAssets/assets/images/group-icons/price.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Price</option>
                      <option value="English" style="margin: 0px 20px !important;">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div> --}}
                    {{-- <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="{{ url("") }}/newAssets/assets/images/group-icons/format.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Format</option>
                      <option value="English" style="margin: 0px 20px !important;">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div> --}}
                    <div class="filter-main-div mb-xl-0 mb-3">
                        <img src="{{ asset('assets/frontpage_assets/images/Sortby.svg') }}" alt=""
                            class="">
                        <select class="form-select" aria-label="Default select example" name="sort_by"
                            onchange="submit_filter()">
                            <option value="" selected>Sort by</option>
                            <option value="ascending">Ascending</option>
                            <option value="descending">Descending</option>

                        </select>
                    </div>
                    <div class="filter-btn-div px-0 py-0 ps-lg-2  ">
                        <button type="button" class="filter-btn flex-grow-1" onclick="location.reload()">Clear
                            Filter</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <section class=" today-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-4 text-start">
                        Starting today
                    </div>
                </div>
                <div class="col-12 row" id="filter-today-cards-id">
                <div class="col-lg-3 col-md-6 mb-3 ">
                    <div class="group-card ">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/image 150.png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                    amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                    assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="group-card ">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (1).png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                    amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                    assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="group-card ">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (2).png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                    amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                    assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (count($todayGroupLessons) > 0)
                    @foreach ($todayGroupLessons as $groupLesson)
                        
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            @if ($gallery = $groupLesson->gallery)
                                        @if ($gallery->image)
                                            <img class="card-image" alt="Image"
                                                src="{{ $gallery->image }}">
                                                @endif
                                                @else
                                                <img class="card-image" alt="Image"
                                                    src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} " />
                                                    @endif
                                        </div>
                                    </figure>
                                </a>
        
                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">{{ remainingGroupLessonParticipants($groupLesson->id) }} 
                                                </h2>
                                            
                                            <span> Seats are left</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>{{ Str::limit($groupLesson->title, 40) }}</h1>
                                    </div>
        
                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            @if ($groupLesson->tutorDetails)
                                            @if ($groupLesson->tutorDetails->profile_img != null)
                                            <img src="{{ url("") }}/images/{{ $groupLesson->tutorDetails->profile_img }}"
                                                alt="">
                                                @else
                                                        <img class="-person-image" alt="Image"
                                                            style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                                            src="{{ asset('assets/student/images/user-img.jpg') }}" />
                                                            @endif
                                                            @endif
                                            <p class="mb-0 pb-0 ms-2">{{ $groupLesson->tutor->fullname }}</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">{{ getLessonAverageRating($groupLesson->id) }}</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('group.details', $groupLesson->id) }}" class="text-decoration-none"><div class="group-card-price"> {{ config('protutor.currency') }}{{ $groupLesson->price }} / Class</div></a>
        
                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
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
        </div>
    </section>
    <section class=" today-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-4 text-start">
                        Build confidence for work conversations
                    </div>
                    <div class="group-card-slider owl-theme owl-carousel">
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/image 150.png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (1).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (2).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (5).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (6).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
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
    <section class=" today-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-4 text-start">
                        Boost your conversation skills with speaking clubs
                    </div>
                    <div class="group-card-slider owl-theme owl-carousel">
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/image 150.png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (1).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (2).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (5).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            <img class="card-image" alt="Image"
                                                src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (6).png">
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">B2-C2</h2>
                                            <span class="px-3">|</span>
                                            <span>Likely to sell out</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Accusantium ratione voluptas
                                            assumenda autem nisi expedita aliquam voluptatem dolores ex odit.</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="group-card-price">$5.00 / Class</div>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
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
    <section class="all-classes ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-4 text-start">
                        All group classes
                    </div>

                </div>
                <div class="col-12 row" id="filter-cards-id">
                <div class="col-lg-4 col-md-6">
                    <div class="group-card mb-3">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/image 150.png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Accusantium ratione voluptas assumenda autem nisi
                                    expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="group-card mb-3">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436.png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Accusantium ratione voluptas assumenda autem nisi
                                    expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="group-card mb-3">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (1).png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Accusantium ratione voluptas assumenda autem nisi
                                    expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="group-card mb-3">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (2).png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Accusantium ratione voluptas assumenda autem nisi
                                    expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="group-card mb-3">
                        <a href="listing.html" class="carousel__slide-1">
                            <figure>
                                <div>
                                    <img class="card-image" alt="Image"
                                        src="{{ url('') }}/newAssets/assets/images/group-icons/Rectangle 4436 (5).png">
                                </div>
                            </figure>
                        </a>

                        <div class="group-card-content">
                            <div class="d-flex align-items-center">
                                <div class="group-card-category d-flex align-items-center">
                                    <h2 class="m-0 p-0">B2-C2</h2>
                                    <span class="px-3">|</span>
                                    <span>Likely to sell out</span>
                                </div>
                            </div>
                            <div class="group-card-heading my-3">
                                <h1>Let's Socialize in English! Explore Health, Welln Lorem ipsum dolor sit amet
                                    consectetur, adipisicing elit. Accusantium ratione voluptas assumenda autem nisi
                                    expedita aliquam voluptatem dolores ex odit.</h1>
                            </div>

                            <div class="group-card-profile d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <p class="mb-0 pb-0 ms-2">Jordyn Ekst Ab Divillar is there on</p>
                                </div>
                                <span class="px-1">|</span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                        alt="">
                                    <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                </div>
                            </div>
                            <hr class="group-card-line">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="group-card-price">$5.00 / Class</div>

                                <div class="group-review-profile">
                                    <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                        alt="">
                                    <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                        alt="">
                                    <div class="group-review-profile-number">120</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (count($groupLessons) > 0)
                    @foreach ($groupLessons as $groupLesson)
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="group-card mb-3">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            @if ($gallery = $groupLesson->gallery)
                                                @if ($gallery->image)
                                                    <img class="card-image" alt="Image"
                                                        src="{{ url($gallery->image) }}">
                                                @endif
                                            @else
                                                <img class="card-image" alt="Image"
                                                    src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} " />
                                            @endif
                                        </div>
                                    </figure>
                                </a>

                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">
                                                {{ remainingGroupLessonParticipants($groupLesson->id) }} Seats are
                                                left </h2>
                                            <span class="px-3">|</span>
                                            <span>Grab your seat now</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>{{ Str::limit($groupLesson->title, 80) }}</h1>
                                    </div>

                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            @if ($groupLesson->tutorDetails)
                                                @if ($groupLesson->tutorDetails->profile_img != null)
                                                    <img src="{{ url('') }}/images/{{ $groupLesson->tutorDetails->profile_img }}"
                                                        alt="">
                                                @else
                                                    <img class="-person-image" alt="Image"
                                                        style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                                        src="{{ asset('assets/student/images/user-img.jpg') }}" />
                                                @endif
                                            @endif
                                            <p class="mb-0 pb-0 ms-2">{{ $groupLesson->tutor->fullname }}</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">{{ getLessonAverageRating($groupLesson->id) }}
                                            </h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('group.details', $groupLesson->id) }}" class="text-decoration-none">
                                        <div class="group-card-price">
                                            {{ config('protutor.currency') }}{{ $groupLesson->price }} / Class</div></a>

                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">120</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-4">
                                {{ $groupLessons->links() }}
                               
                            </div>
                        </div>
                    </div>
                @else
                    <h4 class="text-danger text-center">No lesson uploaded yet</h4>
                @endif
            </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="mt-4">
                        {{ $groupLessons->links() }}
                       
                    </div>
                </div>
            </div> --}}
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
                            @if ($t_count < 4) <div class="carousel-item {{ $t_count == 1 ? 'active' : '' }}">
                                <p class="testimonial-text  text-lg-start text-center ps-lg-3 ps-1">
                                    <img src="{{ url('newAssets/assets/images/comma.svg') }}" alt="" style="z-index:2;">
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
                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span> -->
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span> -->
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
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne">Is there a free trial
                                    available?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
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
                                <button type="button" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree">What is your
                                    cancellation policy?</button>
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
                                <button type="button" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse4">Can other info be added to
                                    an invoice?</button>
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
                                <button type="button" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse5">How does billing
                                    work?</button>
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


@include('frontend.common.newFooter')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- slick -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        // Owl Carousel
        var owl = $(".group-card-slider");
        owl.owlCarousel({
            margin: 10,
            loop: false,
            nav: true,
            dots: false,
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
                1100: {
                    items: 3,
                },
                1350: {
                    items: 4,

                }
            }

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


<script>
    function reset_filter() {
        $('#filter-form')[0].reset();
        // ascending.value = '';
        // price_filter.value = '';
        // subject_filter.value = '';
        // teaches_level_filter.value = '';
        // date_filter.value = '';
        // teaches_level_btn.innerText = "Teaches Level";
        // subject_btn.innerText = "Subject";
        // price_btn.innerText = "Price";
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
                } else {
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
                } else {
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
