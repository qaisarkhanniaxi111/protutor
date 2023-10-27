@php
    $lightNavbar = true;
@endphp
@include('frontend.common.newHeader')
<link rel="stylesheet" href="{{ url('newAssets/assets/css/private-lessons.css') }}">

<main>
  <section class="hero ">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12 order-lg-1 order-2">
                  <div class="left-hero">
                      <div class="btn-hero">
                          <a href="private-lessons.html" id="btn-hero-2" class="btns-hero text-dark "
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
      <div class="container">
          <div class="row select-section select-section2 justify-content-xl-around justify-content-center">
              <div class="filter-main-div mb-xl-0 mb-3 active-filter">
                  <img src="assets/images/group-icons/level.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>English level</option>
                      <option value="English">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div>
              <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="assets/images/group-icons/topic.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Topic</option>
                      <option value="$1-$40">$1-$40</option>
                      <option value="$1-$40">$1-$40</option>
                      <option value="$1-$40">$1-$40</option>
                  </select>
              </div>
              <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="assets/images/group-icons/day.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected> Day</option>
                      <option value="English" style="margin: 0px 20px !important;">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div>
              <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="assets/images/group-icons/time.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Time</option>
                      <option value="English" style="margin: 0px 20px !important;">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div>
              <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="assets/images/group-icons/price.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Price</option>
                      <option value="English" style="margin: 0px 20px !important;">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div>
              <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="assets/images/group-icons/format.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Format</option>
                      <option value="English" style="margin: 0px 20px !important;">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div>
              <div class="filter-main-div mb-xl-0 mb-3">
                  <img src="assets/images/group-icons/sort.svg" alt="" class="">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Sort by</option>
                      <option value="English" style="margin: 0px 20px !important;">English</option>
                      <option value="Urdu">Urdu</option>
                      <option value="Italian">Italian</option>
                  </select>
              </div>
              <div class="filter-btn-div px-0 py-0 ps-lg-2  ">
                  <button class="filter-btn flex-grow-1">Clear Filter</button>
              </div>
          </div>

      </div>
  </div>
  <section class=" today-section mt-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="heading mb-4 text-start">
                      Starting today
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-3 ">
                  <div class="group-card ">
                      <a href="listing.html" class="carousel__slide-1">
                          <figure>
                              <div>
                                  <img class="card-image" alt="Image" src="assets/images/image 150.png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436 (1).png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436 (2).png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436 (5).png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
                                  <div class="group-review-profile-number">120</div>
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
                      Build confidence for work conversations
                  </div>
                  <div class="group-card-slider owl-theme owl-carousel">
                      <div>
                          <div class="group-card ">
                              <a href="listing.html" class="carousel__slide-1">
                                  <figure>
                                      <div>
                                          <img class="card-image" alt="Image" src="assets/images/image 150.png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (1).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (2).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (5).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (6).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                          <img class="card-image" alt="Image" src="assets/images/image 150.png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (1).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (2).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (5).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
                                              src="assets/images/group-icons/Rectangle 4436 (6).png">
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

                                  <div
                                      class="group-card-profile d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                                      </div>
                                      <span class="px-1">|</span>
                                      <div class="d-flex align-items-center">
                                          <img src="assets/images/group-icons/star.svg" alt="">
                                          <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                                      </div>
                                  </div>
                                  <hr class="group-card-line">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="group-card-price">$5.00 / Class</div>

                                      <div class="group-review-profile">
                                          <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                          <img src="assets/images/Rectangle 9317.png" alt="">
                                          <img src="assets/images/image 150.png" alt="">
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
              <div class="col-lg-4 col-md-6">
                  <div class="group-card mb-3">
                      <a href="listing.html" class="carousel__slide-1">
                          <figure>
                              <div>
                                  <img class="card-image" alt="Image" src="assets/images/image 150.png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436.png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436 (1).png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436 (2).png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436 (5).png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst Ab Divillar is there on</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
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
                                      src="assets/images/group-icons/Rectangle 4436 (6).png">
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
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <p class="mb-0 pb-0 ms-2">Jordyn Ekst</p>
                              </div>
                              <span class="px-1">|</span>
                              <div class="d-flex align-items-center">
                                  <img src="assets/images/group-icons/star.svg" alt="">
                                  <h3 class="m-0 p-0 ms-2">4.9 (220)</h3>
                              </div>
                          </div>
                          <hr class="group-card-line">
                          <div class="d-flex align-items-center justify-content-between">
                              <div class="group-card-price">$5.00 / Class</div>

                              <div class="group-review-profile">
                                  <img src="assets/images/woman-with-headset-video-call 1.png" alt="">
                                  <img src="assets/images/Rectangle 9317.png" alt="">
                                  <img src="assets/images/image 150.png" alt="">
                                  <div class="group-review-profile-number">120</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="pagination mt-4">
                      <div class="hide-sm">
                          <img class="arrow" src="assets/images/images/arrow-left.svg" alt="">
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
                          <img class="arrow" src="assets/images/images/arrow-right.svg" alt="">
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
                              <p class="testimonial-text  text-lg-start text-center ps-lg-3 ps-1">
                                  <img src="assets/images/comma.svg" alt="">
                                  In my experience all the teachers are very supportive and friendly and the
                                  placement process has been very smooth. it’s also no issue talk about whatever
                                  you want to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                  placeat fugiat earum?

                              </p>
                              <h4>Sherina Munir - Designer</h4>
                          </div>
                          <div class="carousel-item">
                              <p class="testimonial-text  text-lg-start text-center">
                                  <img src="assets/images/comma.svg" alt="">
                                  In my experience all the teachers are very supportive and friendly and the
                                  placement process has been very smooth. it’s also no issue talk about whatever
                                  you want to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                  placeat fugiat earum?

                              </p>
                              <h4>Sherina Munir - Designer</h4>
                          </div>
                          <div class="carousel-item">
                              <p class="testimonial-text  text-lg-start text-center">
                                  <img src="assets/images/comma.svg" alt="">
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
                  <img src="assets/images/testimonials.png" alt="" class="mx-auto img-fluid">
              </div>

          </div>
      </div>
  </section>
  <section class="language-training">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 d-flex justify-content-center  mb-lg-0 mb-4">
                  <img src="assets/images/lang.png" alt="" class="mx-auto img-fluid">
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


@include('frontend.common.newFooter')
<script type="text/javascript">
  $(function () {
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