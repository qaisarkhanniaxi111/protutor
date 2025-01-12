@include('/frontend/common/header')
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
 <link rel="stylesheet" href="{{url('/')}}/public/assets/frontpage_assets/css/tutor-signup.css">
    <!-- start page title -->
    <div class="page-title">
        <div class="container">
            <h1>Myles Southen</h1>
        </div>
    </div>
    <!-- end page title -->

    <!-- start tutor details section -->
    <section class="tutor-details-section">
        <div class="cont-space clearfix">
            <div class="row">
                
                <div class="col-lg-12 col-xl-8">

                    <div class="proView">
                    <!-- card -->
                    <div class="profile">
                        <div class="profile-information">
                            <div class="profile-img">
                                <img src="{{url('/')}}/public/assets/frontpage_assets/images/profile-circle.png" alt="profile-picture">
                            </div>
                            <div class="profile-identity">
                                <div class="identity">
                                    <h3 class="name">Myels S.</h3>
                                    <img class="nationality" src="{{url('/')}}/public/assets/frontpage_assets/images/south.png" alt="language">
                                    <span class="verify"><i class="fa-solid fa-user-check"></i></span>
                                    <span class="status">
                                        <span class="active-badge">Online</span>
                                    </span>
                                </div>
                                <small class="collage-name">Bachelor's Degrees in English Studies and Spanish with 2+ years of experience</small>

                                <div class="tech-subject mt-3">
                                    <i class="fa-solid fa-graduation-cap fac"></i>
                                    <span class="fw-bold">Teaches</span>
                                    <span class="text-dark ms-3">English - Math - Chemistry</span>
                                </div>

                                <div class="tech-subject">
                                    <i class="fa-solid fa-message fac"></i>
                                    <span class="fw-bold">Speaks</span>
                                    <span class="ms-3">
                                        English 
                                        <span class="badge rounded-pill bg-success">Native</span> 
                                    </span>
                                    <span>
                                        Spanish 
                                        <span class="badge rounded-pill bg-primary">Advanced</span>
                                    </span>
                                </div>

                                <div class="tech-subject">
                                    <i class="fa-solid fa-book fac"></i>
                                    <span class="fw-bold">Lessons</span>
                                    <span class="ms-3">97</span>
                                </div>
                            </div>
                        </div>
                        <!-- profile nav -->
                        <div class="profile-nav">
                            <ul>
                                <li><a href="#about">About</a></li>
                                <li><a href="#schedule">Schedule</a></li>
                                <li><a href="#review">Review(1)</a></li>
                                <li><a href="#resume">Resume</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- tutor details info -->
                    <div class="profile-details-info">
                        <!-- Intro only visible less than 1200px -->
                        <div class="tutor-sec tutor-intro mt-5" id="about">
                            <h4 class="t-title fw-bold">Intro</h4>
                            <hr>
                            <div class="video-section-sm embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wr6_5qdakts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                                <div class="video-info">
                                    <div class="info-header d-flex flex-row justify-content-evenly mt-3">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <span><i class="fa-solid fa-star"></i> 5</span>
                                            <span> 1 Review </span>
                                        </div>
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <span> $ 15</span>
                                            <span> Per Hour </span>
                                        </div>
                                    </div>
                                    <div class="buttons d-flex flex-column align-items-center">
                                        <a href="#"><button class="custom-btn custom-btn-bg my-3">Book Trial Lesson</button></a>
                                        <a href="#"><button class="custom-btn">Send Message</button></a>
                                    </div>
                                    <div class="d-flex flex-row align-items-center my-3 p-3">
                                        <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                        <p class="ms-auto p-v-sm">4 Lessons booked in the last 48 hours</p>
                                    </div>
                                    <div class="video-info-footer d-flex flex-row p-3">
                                        <span><i class="fa-solid fa-star" id="v-star"></i></span>
                                        <div class="group ms-4">
                                            <strong>Super popular</strong>
                                            <br>
                                            <p class="text-start">16 students contacted this tutor in the last 48 hours</p>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <!-- about tutor -->
                        <div class="tutor-sec mt-5" id="about">
                            <h4 class="t-title fw-bold">About</h4>
                            <hr>
                            <p class="about-description">
                                Hi there! My name is Myles and I am originally from Wichita, Kansas, USA. I just graduated from university this past
                                May and I am in the process of moving to San Diego, California. I love to scuba dive, camp, write stories, cook interesting food, and learn about new cultures!
                                <br>
                                <br>
                                I have a cumulative 2+ years of experience teaching English as a Foreign Language to ages 4-5 and teaching ages 5-6 in general subjects (math, science, social studies, language arts).
                                <br>
                                <br>
                                I worked in a Dual Language Magnet school where all of the students either knew Spanish as their native language or English as their native language. I also volunteered with an elementary school in Quepos, Costa Rica as an English tutor for 4+ year olds.
                                <br>
                                <br>
                                I am currently working towards my TEFL certification and will be certified by November 2021.
                                <br>
                                <br>
                                I myself am bilingual and so I know how hard learning a new language can be. I am here to support you and give you realistic advice that I've learned from experience in learning a foreign language.
                                <br>
                                <br>
                                Growing up, both my parents were teachers, so I spent plenty of time in classrooms and around students of all ages. Growing up, both my parents were teachers, so I spent plenty of time in classrooms and around students of all ages. want to go. Teachers should be mentors, cheerleaders, listeners, and role models, which is what I want to be for my students.
                                <br>
                                <br>
                                My tutoring style and methods revolve around the fact that meaningful conversations allow for some of the best information retention. Expect to talk about your personal interests in sessions with me. With this, I think that reading materials are essential for information and language retention. We grow from what we choose to read, so I want students to pick materials that they're interested in to bring to class and discuss with me.
                                <br>
                                <br>
                                Let's book a trial! I want to chat with you and hear about your learning goals (and life goals)! In this trial you can expect a fun and energetic environment, as well as an obvious passion for learning. Let's explore where tutoring and  
                            </p>
                        </div>
                        <!-- tutor schedule -->
                        <div class="tutor-sec mt-5" id="schedule">
                            <h4 class="t-title fw-bold mb-2">Schedule</h4>
                            <div class="border"></div>
                            <div class="tutor-schedule">
                                <div class="calendar-head alt">
                                    <div class="calendar-head-left">
                                        <div class="calendar-btn"><i class="fa-solid fa-chevron-left"></i></div>
                                        <div class="calendar-btn"><i class="fa-solid fa-chevron-right"></i></div>
                                        <span class="today">Oct 16 - 22, 2021</span>
                                    </div>
                                    <div class="calendar-head-right">
                                        <select name="" id="">
                                            <option value="">Asia/Karachi GMT +5:00</option>
                                        </select>
                                        <div><small>The timings are displayed in your selected Timezone</small></div>
                                    </div>
                                </div>
            
                                <div class="table-responsive mt-3">
                                    <table class="table calendar-table">
                                      <tbody><tr>
                                        <th class="tab-bg"><span class="time-bdr"></span> Sat <br> <span class="time-circle">16</span> </th>
                                        <th><span class="time-bdr"></span> Sun <br> <span>17</span> </th>
                                        <th><span class="time-bdr"></span> Mon <br> <span>18</span> </th>
                                        <th><span class="time-bdr"></span> Tue <br> <span>19</span> </th>
                                        <th><span class="time-bdr"></span> Wed <br> <span>20</span> </th>
                                        <th><span class="time-bdr"></span> Thu <br> <span>21</span> </th>
                                        <th><span class="time-bdr"></span> Fri <br> <span>22</span> </th>
                                      </tr>
                                      <tr>
                                        <td><span class="time green-bdr" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#booking-screen">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time green-bdr" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#booking-screen">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time green-bdr" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#booking-screen">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time green-bdr" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#booking-screen">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time green-bdr" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#booking-screen">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span class="time green-bdr" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#booking-screen">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span class="time green-bdr" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#booking-screen">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span class="time">00:00</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span class="time clickable">00:00</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                    </tbody></table>
                                  </div>
            
                                  <div class="calendar-indicates"> 
                                    <ul>
                                        <li><span class="time green-bdr">12:00</span><span class="txt-green">Indicates available time slots for booking</span></li>
                                        <li><span class="time">12:00</span><span class="">Indicates time slots are booked by some other students</span></li>
                                    </ul>
                                  </div>
            
                            </div>
                        </div>
                        <!-- tutor review -->
                        <div class="tutor-sec mt-5" id="review">
                            <h4 class="t-title fw-bold">What Students Says</h4>
                            <hr>
                            <div class="review-info">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="review">
                                            <h1 class="review-rates">5</h1>
                                            <div class="review-stars">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p class="review-count">2 reviews</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="progresses">
                                            <div>5 stars</div>
                                            <div class="progress progress-color">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div>(2)</div>
                                        </div>
                                        <div class="progresses">
                                            <div>4 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div>(0)</div>
                                        </div>
                                        <div class="progresses">
                                            <div>3 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div>(0)</div>
                                        </div>
                                        <div class="progresses">
                                            <div>2 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div>(0)</div>
                                        </div>
                                        <div class="progresses">
                                            <div>1 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div>(0)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-12 r-border">
                                        <div class="review-comment">
                                            <h3 class="reviewer-name">
                                                Name of Student 
                                                <span><i class="fa-solid fa-star"></i>5</span>
                                            </h3>
                                            <div class="date ">
                                                October 10, 2023
                                            </div>
                                            <p class="comment">
                                                I am very happy to have found sarah as a teacher ! I have tested different teacher several times with no success! Sarah is a really friendly teacher and always in a good mood ! Her accent is clear and she has a wide range of different topics. She has also a lot of different ways and vocabulary which are helpling to improve my skills I really like the conversation and lessons with sarah. And i recognized too that teachers from other countries are cheaper than teacher from the UK, but believe me – you can notice the different and quality.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-12 r-border">
                                        <div class="review-comment">
                                            <h3 class="reviewer-name">
                                                Name of Student 
                                                <span><i class="fa-solid fa-star"></i>5</span>
                                            </h3>
                                            <div class="date ">
                                                October 10, 2023
                                            </div>
                                            <p class="comment">
                                                I am very happy to have found sarah as a teacher ! I have tested different teacher several times with no success! Sarah is a really friendly teacher and always in a good mood ! Her accent is clear and she has a wide range of different topics. She has also a lot of different ways and vocabulary which are helpling to improve my skills I really like the conversation and lessons with sarah. And i recognized too that teachers from other countries are cheaper than teacher from the UK, but believe me – you can notice the different and quality.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tutor resume -->
                        <div class="tutor-sec mt-5" id="resume">
                            <h4 class="t-title fw-bold">Resume</h4>
                            <hr>
                            <!-- education -->
                            <div class="education">
                                <h4 class="education-t"> Education </h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="education-seassion">2012-2015</p>
                                    </div>
                                    <div class="col-md-9 d-flex flex-column justify-content-center gap-2">
                                        <span class="clg-name">Cardiff University</span>
                                        <span class="clg-name-2">English Literature</span>
                                        <span class="text-success degree-name"><i class="fa-solid fa-check"></i> Degree verified by Tutors Online verification team</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- work Experience -->
                            <div class="work-experience">
                                <h4 class="education-t">Work Experience</h4>
                                <hr>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="education-seassion">
                                            2019-2019
                                        </p>
                                    </div>
                                    <div class="col-md-9 d-flex flex-column justify-content-center gap-2">
                                        <span class="clg-name">InLingua, Pesaro</span>
                                        <span class="clg-name-2">English Teacher and Cambridge Invigilator</span>
                                    </div>
                                </div>
                                <br>
                                <!-- row 2 -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="education-seassion">
                                            2019-Present
                                        </p>
                                    </div>
                                    <div class="col-md-9 d-flex flex-column justify-content-center gap-2">
                                        <span class="clg-name">British School, Vilanova</span>
                                        <span class="clg-name-2">English Teacher</span>
                                    </div>
                                </div>
                                <br>
                                <!-- row 3 -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="education-seassion">
                                            2018-2019
                                        </p>
                                    </div>
                                    <div class="col-md-9 d-flex flex-column justify-content-center gap-2">
                                        <span class="clg-name">British Institutes, Bologna</span>
                                        <span class="clg-name-2">English Teacher</span>
                                    </div>
                                </div>
                                <br>
                                <!-- row 4 -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="education-seassion">
                                            2017-2018
                                        </p>
                                    </div>
                                    <div class="col-md-9 d-flex flex-column justify-content-center gap-2">
                                        <span class="clg-name">Meddeas, Madrid</span>
                                        <span class="clg-name-2">Language Assistant</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- certification -->
                            <div class="work-experience">
                                <h4 class="education-t">Certification</h4>
                                <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="education-seassion">2019-2019</p>
                                        </div>
                                        <div class="col-md-9 d-flex flex-column justify-content-center gap-2">
                                            <span class="clg-name">TEFL 120 hours</span>
                                            <span class="clg-name-2">Online 120 hours</span>
                                            <span class="text-success degree-name"><i class="fa-solid fa-check"></i> Certificate verified by Tutors Online verification team</span>
                                        </div>
                                    </div>
                                <br>
                            </div>
                        </div>
                        <!-- button -->
                        
                    </div>

                    </div>

                    <button class="profile-btn ms-2 fs-6 mt-4 show-more">Show More</button>
                </div>
                <div class="col-lg-12 col-xl-4">
                    <!-- video section -->
                    <div class="video-section embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wr6_5qdakts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                        <div class="video-info">
                            <div class="info-header d-flex flex-row justify-content-evenly mt-3">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <span><i class="fa-solid fa-star"></i> 5</span>
                                    <span> 1 Review </span>
                                </div>
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <span> $ 15</span>
                                    <span> Per Hour </span>
                                </div>
                            </div>
                            <div class="buttons d-flex flex-column align-items-center">
                                <a href="#"><button class="custom-btn custom-btn-bg my-3">Book Trial Lesson</button></a>
                                <a href="#"><button class="custom-btn">Send Message</button></a>
                            </div>
                            <div class="d-flex flex-row align-items-center my-3 p-3">
                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                <p class="ms-auto">4 Lessons booked in the last 48 hours</p>
                            </div>
                            <div class="video-info-footer d-flex flex-row p-3">
                                <span class="star-bg"><i class="fa-solid fa-star" id="v-star"></i></span>
                                <div class="group ms-4">
                                    <strong>Super popular</strong>
                                    <br>
                                    <p class="text-start">16 students contacted this tutor in the last 48 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- end tutor details section -->

    <!-- text -->
    <h1 class="text-dark fw-bold fs-4 text-center mt-5">Find Tutors</h1>

    <!-- start banner section -->
    <section class="apps-banner">
        <div class="container">
            <div class="apps-banner-main">
                <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="apps-banner-left">
                        <h2>Manage yourself from your mobile device.</h2>
                        <p class="mb-3 text-start">There are many variations of passages of Lorem Ipsum avail the majority have suffered alteration in some form, by injected or randomised words which don't look </p>
                        <div class="button-group">
                            <a class="" href=""><img src="{{url('/')}}/public/assets/frontpage_assets/images/app-store.png" alt=""></a>
                            <a class="ms-md-3 ms-sm-0" href=""><img src="{{url('/')}}/public/assets/frontpage_assets/images/goole.png" alt=""></a>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-5">
                        <div class="apps-banner-right"><img src="{{url('/')}}/public/assets/frontpage_assets/images/phone.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
      </section>

@include('/frontend/common/footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>