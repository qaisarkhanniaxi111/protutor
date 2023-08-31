@include('/dashboard/common/header')
@include('/dashboard/common/sidebar')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>Students Portal : Quiz</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/css/custom.css"> --}}
  </head>
  <body>

 {{-- <div class="site-wrap"> --}}

  <!-- Header -->
  <!-- Side-bar -->

  <!-- Container -->
  <section class="wrapper" style="background: #ECECEC">
    <div class="page-title">
      <h1>Quiz</h1>
    </div>

    <div>
      <ul class="nav tab-nav">
        <li class="nav-item">
          <button class="active" data-bs-toggle="tab" data-bs-target="#tab-2">
            <span><i class="fa-solid fa-square-poll-horizontal"></i></span> Join Quiz
        </button>
        </li>

        <!-- <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-3">
            <span><i class="fa-solid fa-plus"></i></span> Create Quiz
        </button>
        </li> -->

        <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-4">
            <span><i class="fa-solid fa-angles-up"></i></span> Upcoming <small id="upcomingCount">{{count($upcoming)}}</small>
        </button>
        </li>
        <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-5">
            <span><i class="fa-solid fa-hourglass-start"></i></span> Started Quiz <small id="startedCount">{{$started}}</small>
        </button>
        </li>
        <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-6">
            <span><i class="fa-solid fa-check-double"></i></span> Completed <small id="completedCount">{{$completed}}</small>
        </button>
        </li>
      </ul>
      <div class="tab-content pt-3">
        <div class="tab-pane fade show active" id="tab-2">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Join Quiz</h2>
                <h3>Join Upcoming Quiz</h3>
              </div>
            </div>

            <div>
              <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                  <div class="upcoming-left">
                    <div class="quiz-inp-wrap mt-0">
                      <span class="quiz-inp-icon"><i class="fa-solid fa-link"></i></span>
                      <input class="quiz-inp" type="text" name="" id="joinQuiz" placeholder="Enter Quiz Link Provided by Your Tutor">
                    </div>
                    <div class="text-center pt-3">
                      <button class="theme-btn green" id="joinQuizButton">Join Quiz</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="upcoming-right">
                    <h2>Quiz Joining Instructions</h2>
                    <ul>
                      <li>1. Step 1 to join quiz</li>
                      <li>2. Step 2 to join quiz</li>
                      <li>3. Step 3 to join quiz</li>
                      <li>4. Step 4 to join quiz</li>
                      <li>5. Step 5 to join quiz</li>
                      <li>6. Step 6 to join quiz</li>
                    </ul>
                    <h2 class="pt-4">Quiz Joining Instructions' Video</h2>
                    <div class="join-video">
                      <div class="video-btn"><i class="fa-solid fa-play"></i></div>
                    </div>
                    <p class="text-center"><strong>Click the play button to watch How to join quiz.</strong></p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="tab-pane fade" id="tab-4">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Upcoming Quizzes</h2>
                <h3>All Published & Scheduled Quizzes List</h3>
              </div>
              <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i></div>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <thead>
                  <tr>
                    <th>
                      <span class="table-title">Quiz Title <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" id="upcoming_quiz_title_filter" onkeyup="upcomingFilterChange()" placeholder="Enter Quiz Title to Search"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="upcoming_class_filter" onchange="upcomingFilterChange()">

                          <option value="Select Class / Grade">Select Class / Grade</option>
                          @foreach($teaches_levels as $t)
                          <option value="{{$t->teaches_level}}">{{$t->teaches_level}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="upcoming_subject_filter"  onchange="upcomingFilterChange()">
                          <option value="Select Course">Select Course</option>
                          @foreach($subjects as $s)
                          <option value="{{$s->subject}}">{{$s->subject}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Tutor's Name <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" id="tutor_name_upcoming_filter" onkeyup="upcomingFilterChange()" placeholder="Enter Name to Search"></span>
                    </th>
                    <th>
                      <span class="table-title">Start Date & Time <i class="fa-solid fa-sort"></i></span>
                    </th>
                    <th class="text-center">
                      <span class="table-title">End Date & Time <i class="fa-solid fa-sort"></i></span>
                    </th>
                  </tr>
                </thead>
                <tbody id="upcomingQuizesBody">
                  @foreach($upcoming as $u)
                  <tr>
                    <td>{{$u->quiztitle}}</td>
                    <td>{{$u->teaches_level}}</td>
                    <td>{{$u->subject}}</td>
                    <td>{{$u->first_name}} {{$u->last_name}}</td>
                    <td>{{$u->startdate}}</td>
                    <td class="text-center">{{$u->enddate}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>


        <div class="tab-pane fade" id="tab-5">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Started Quizzes</h2>
                <h3>All Published & Scheduled Quizzes List</h3>
              </div>
              <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i></div>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <thead>
                  <tr>
                    <th>
                      <span class="table-title">Quiz Title <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Quiz Title to Search" id="started_quiz_title_filter" onkeyup="startedFilter()"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="started_class_filter" onchange="startedFilter()">
                          <option value="Select Class / Grade">Select Class / Grade</option>
                          @foreach($teaches_levels as $t)
                          <option value="{{$t->teaches_level}}">{{$t->teaches_level}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="started_subject_filter" onchange="startedFilter()">
                          <option value="Select Course">Select Course</option>
                          @foreach($subjects as $s)
                          <option value="{{$s->subject}}">{{$s->subject}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Tutor's Name <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Name to Search" id="tutor_name_started_filter" onkeyup="startedFilter()"></span>
                    </th>
                    <th>
                      <span class="table-title">Questions</span>
                    </th>
                    <th>
                      <span class="table-title">End Date & Time <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Name to Search"></span>
                    </th>
                    <th>
                      <span class="table-title">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody id="startedQuizesBody">
                  @foreach($results as $r)
                  @if($r->status=="started")
                  <tr>
                    <td>{{$r->quiztitle}}</td>
                    <td>{{$r->teaches_level}}</td>
                    <td>{{$r->subject}}</td>
                    <td>{{$r->first_name}} {{$r->last_name}}</td>
                    <td>{{$r->totalquestions}}</td>
                    <td>{{$r->enddate}}</td>
                    <td>
                      <a class="tableLink" href="/attemptquiz?quizid={{$r->quizid}}"><i class="fa-regular fa-pen-to-square"></i></a>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>



        <div class="tab-pane fade" id="tab-6">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Completed Quizzes</h2>
                <h3>All Completed Quizzes List</h3>
              </div>
              <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i></div>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <thead>
                  <tr>
                    <th>
                      <span class="table-title">Quiz Title <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Quiz Title to Search" id="completed_quiz_title_filter" onkeyup="completedFilter()"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="completed_class_filter" onchange="completedFilter()">
                          <option value="Select Class / Grade">Select Class / Grade</option>
                          @foreach($teaches_levels as $t)
                          <option value="{{$t->teaches_level}}">{{$t->teaches_level}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="completed_subject_filter" onchange="completedFilter()">
                          <option value="Select Course">Select Course</option>
                          @foreach($subjects as $s)
                          <option value="{{$s->subject}}">{{$s->subject}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Tutor's Name <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Name to Search" id="tutor_name_completed_filter" onkeyup="completedFilter()"></span>
                    </th>
                    <th>
                      <span class="table-title">Questions Attempted</span>
                    </th>
                    <th>
                      <span class="table-title">Result</span>
                    </th>
                    <th>
                      <span class="table-title">Status</span>
                    </th>
                    <th>
                      <span class="table-title">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody id="completedQuizesBody">
                  @foreach($results as $r)
                  @if($r->status=="closed")
                  <tr>
                    <td>{{$r->quiztitle}}</td>
                    <td>{{$r->teaches_level}}</td>
                    <td>{{$r->subject}}</td>
                    <td>{{$r->first_name}} {{$r->last_name}}</td>
                    <td>{{$r->attempted}} of {{$r->totalquestions}}</td>
                    <td></td>
                    <td>Not Marked</td>
                    <td>
                      <a class="tableLink"><i class="fa-regular fa-eye"></i></a>
                    </td>
                  </tr>
                  @endif
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- Container -->

  <!-- Footer -->
  <footer class="site-footer">
     <div class="container-fluid">
        <div class="row">
          <div class="col-xl-4">
            <p>+00 000 000 000 <span>support@tutorsonline.com</span></p>
          </div>
          <div class="col-xl-4">
            <p class="text-center">All Rights Reserved by Tutors Online</p>
          </div>
          <div class="col-xl-4">
            <p class="text-end">Designed & Developed With Love by Coding Pro</p>
          </div>
        </div>
     </div>
  </footer>
  <!-- Footer -->

</div>


<div class="modal common-modal modal-full" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header center">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
      </div>

      <div class="modal-body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" style="display: none;">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#home"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu1"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu2"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu3"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu4"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu5"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu6"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu7"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#menu8"></a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="quiz-head"><h5><i class="fa-solid fa-scale-balanced"></i> Quiz Instructions</h5></div>
              <div class="container">
                <div class="container-in">
                  <p class="text-large text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
              <div class="tab-btn-group">
                <!-- <a class="theme-btn red" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Delete</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a> -->
                <a class="btnNext theme-btn grey">Start Quiz</a>
              </div>
            </div>

            <div class="tab-pane fade" id="menu1">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 1 of 8 Quiz Question</h5></div>
              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-time"><i class="fa-solid fa-clock"></i> 13 M : 20 S</div>
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> Name of the Current American President?</li>
                            <li><span>A</span> George Washington</li>
                            <li><span>B</span> James K. Polk</li>
                            <li><span>C</span> Joseph R. Biden Jr.</li>
                            <li><span>D</span> Herbert Hoover</li>
                          </ul>
                        </div>
                        <div class="select-ans">
                          <p>Select correct answer</p>
                          <div class="opt-ans">
                              <label for="">
                                <span class="num">A</span>
                                <input type="radio" name="1">
                                <span class="checkmark"></span>
                              </label>
                              <label for="">
                                <span class="num">B</span>
                                <input type="radio" name="1">
                                <span class="checkmark"></span>
                              </label>
                              <label for="">
                                <span class="num">C</span>
                                <input type="radio" name="1">
                                <span class="checkmark"></span>
                              </label>
                              <label for="">
                                <span class="num">D</span>
                                <input type="radio" name="1">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                        </div>
                        <p class="pt-2">Select one of the option form the given ones</p>
                        <div class="question-progress">
                          <span class="pro-percentage">0%</span>
                          <div class="question-progress-bar"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn grey">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>

            <div class="tab-pane fade" id="menu2">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 2 of 8 Quiz Question</h5></div>
              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> Is two plus two equals to four?</li>
                            <li><span>A</span> True</li>
                            <li><span>B</span> False</li>
                          </ul>
                        </div>
                        <div class="select-ans">
                          <p>Select correct answer</p>
                          <div class="opt-ans">
                              <label for="">
                                <span class="num">A</span>
                                <input type="radio" name="1">
                                <span class="checkmark"></span>
                              </label>
                              <label for="">
                                <span class="num">B</span>
                                <input type="radio" name="1">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                        </div>
                        <p class="pt-2">Select one of the option form the given ones</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn grey">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>


            <div class="tab-pane fade" id="menu3">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 3 of 8 Quiz Question</h5></div>

              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> Name of the Current American President?</li>
                            <li><span>A</span> George Washington</li>
                            <li><span>B</span> James K. Polk</li>
                            <li><span>C</span> Joseph R. Biden Jr.</li>
                            <li><span>D</span> Herbert Hoover</li>
                          </ul>
                        </div>
                        <div class="select-ans">
                          <p>Select correct answer</p>
                          <div class="opt-ans">
                              <label for="">
                                <span class="num">A</span>
                                <input type="radio" name="2">
                                <span class="checkmark"></span>
                              </label>
                              <label for="">
                                <span class="num">B</span>
                                <input type="radio" name="2">
                                <span class="checkmark"></span>
                              </label>
                              <label for="">
                                <span class="num">C</span>
                                <input type="radio" name="2">
                                <span class="checkmark"></span>
                              </label>
                              <label for="">
                                <span class="num">D</span>
                                <input type="radio" name="2">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                        </div>
                        <p class="pt-2">Select one of the option form the given ones</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn grey">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>


            <div class="tab-pane fade" id="menu4">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 4 of 8 Quiz Question</h5></div>

              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> Name of the Current American President?</li>
                          </ul>
                        </div>
                        <div class="select-ans">
                          <p>Enter Correct Answer</p>
                          <div class="opt-ans half">
                              <input class="inpTxt" type="text" name="" id="" placeholder="Enter Correct Answer Here">
                          </div>
                        </div>
                        <p class="pt-2">Type one or two words answer in the given space</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn grey">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>

            <div class="tab-pane fade" id="menu5">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 5 of 8 Quiz Question</h5></div>

              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> When America was discovered?</li>
                          </ul>
                        </div>
                        <div class="select-ans">
                          <p>Enter Correct Answer</p>
                          <div class="opt-ans half">
                              <input class="inpTxt" type="text" name="" id="" placeholder="Enter Correct Answer Here">
                          </div>
                        </div>
                        <p class="pt-2">Type your answer in date format eg. MM DD YYYY</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn grey">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>

            <div class="tab-pane fade" id="menu6">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 6 of 8 Quiz Question</h5></div>

              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> What is Human-Centered Design?</li>
                          </ul>
                        </div>
                        <div class="select-ans auto">
                          <p class="pb-2">Enter Correct Answer</p>
                          <div class="opt-ans half">
                            <textarea class="inpTxt" name="" id="" placeholder="Enter Correct Answer Here"></textarea>
                          </div>
                        </div>
                        <p class="pt-2">Type short answer in the given space</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn grey">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>

            <div class="tab-pane fade" id="menu7">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 7 of 8 Quiz Question</h5></div>

              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> What is Human-Centered Design?</li>
                          </ul>
                        </div>
                        <div class="select-ans auto">
                          <p class="pb-2">Enter Correct Answer</p>
                          <div class="opt-ans half">
                            <textarea class="inpTxt" name="" id="" placeholder="Enter Correct Answer Here"></textarea>
                          </div>
                        </div>
                        <p class="pt-2">Type short answer in the given space</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn grey">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>

            <div class="tab-pane fade" id="menu8">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> 8 of 8 Quiz Question</h5></div>

              <div class="container">
                <div class="container-in">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="questions">
                        <div class="questions-list">
                          <ul>
                            <li><span>?</span> What is Human-Centered Design?</li>
                          </ul>
                        </div>
                        <div class="select-ans auto">
                          <p class="pb-2">Enter Correct Answer</p>
                          <div class="txt-opt">
                            <span><strong>B</strong></span> <span><em>I</em></span> <span><u>U</u></span>
                          </div>
                          <div class="opt-ans half">
                            <textarea class="inpTxt-alt" name="" id="" placeholder="Enter Correct Answer Here"></textarea>
                          </div>
                        </div>
                        <p class="pt-2">Type elaborative answer in the given space</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-btn-group">
                <a class="btnPrevious theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                <a class="theme-btn blue" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Skip</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                <a class="btnNext theme-btn red" data-bs-dismiss="modal">Close</a>
              </div>
            </div>

          </div>
      </div>

      <div class="modal-footer"></div>

    </div>
  </div>
</div>



<div class="modal common-modal fade" id="delQuiz">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Skip Quiz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure, you want to Skip this Quiz</p>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round red">Close</button>
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round blue">Skip</button>
      </div>
    </div>
  </div>
</div>

<div class="modal common-modal fade" id="pubQuiz">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Publish Quiz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure, you want to Publish this quiz</p>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round blue">Close</button>
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round green">Publish</button>
      </div>
    </div>
  </div>
</div>



<div class="modal common-modal fade" id="quiztimer">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Quiz Timer Configure</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="inp-group mt-0">
          <label for="">Time Allowed for Each Question</label>
          <input class="inp" type="text" placeholder="Enter in Seconds">
        </div>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round green">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal common-modal fade" id="quiztries">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Quiz Tries</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="inp-group mt-0">
          <label for="">How many times student can try to answer same question</label>
          <input class="inp" type="text" placeholder="Enter Tries (1-3)">
        </div>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round green">Save</button>
      </div>
    </div>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="./assets/js/custom.js"></script>
  <script>
    $(".sliderN")
  .on("initialized.owl.carousel changed.owl.carousel", function(e) {
    if (!e.namespace) {
      return;
    }
    $("#counter").text(
      e.relatedTarget.relative(e.item.index) + 1 + "/" + e.item.count
    );
  })
  .owlCarousel({
    items: 4,
    margin: 30,
    loop: true,
    nav: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
  });

  $("#joinQuizButton").click(function(){
    var quizLink=$("#joinQuiz").val()
    if(quizLink!="")
    {
       window.open(quizLink, '_blank');
   }
  })

  function upcomingFilterChange()
  {
    var filter={
      "quiztitle":$("#upcoming_quiz_title_filter").val(),
      "teaches_level":$("#upcoming_class_filter").val(),
      "subject":$("#upcoming_subject_filter").val(),
      "tutor":$("#tutor_name_upcoming_filter").val(),
      "status":"Upcoming"
    }
    getFilterData(filter,function(data) {

    txt=""
    var date=new Date()
    for(i=0;i<data.length;i++)
    {

        var status=data[i].status

    txt+='<tr id="drafts_'+data[i].quizid+'">\
      <td>'+data[i].quiztitle+'</td>\
      <td>'+data[i].teaches_level+'</td>\
      <td>'+data[i].subject+'</td>\
      <td>'+data[i].first_name+' '+data[i].last_name+'</td>\
      <td>'+data[i].startdate+'</td>\
      <td>'+data[i].enddate+'</td>\
      </tr>'
   }
    $("#upcomingQuizesBody").html(txt)
    var total=$("#upcomingCount").text()
    total=data.length;
    $("#upcomingCount").text(total)
  });

  }

  function startedFilter()
  {
    var filter={
      "quiztitle":$("#started_quiz_title_filter").val(),
      "teaches_level":$("#started_class_filter").val(),
      "subject":$("#started_subject_filter").val(),
      "tutor":$("#tutor_name_started_filter").val(),
      "status":"started"
    }
    getFilterData(filter,function(data) {

    txt=""
    var date=new Date()
    for(i=0;i<data.length;i++)
    {
      txt+='<tr>\
        <td>'+data[i].quiztitle+'</td>\
        <td>'+data[i].teaches_level+'</td>\
        <td>'+data[i].subject+'</td>\
        <td>'+data[i].first_name+' '+data[i].last_name+'</td>\
        <td>'+data[i].totalquestions+'</td>\
        <td>'+data[i].enddate+'</td>\
        <td>\
          <a class="tableLink" href="/attemptquiz?quizid='+data[i].quizid+'"><i class="fa-regular fa-pen-to-square"></i></a>\
        </td>\
      </tr>'
   }
    $("#startedQuizesBody").html(txt)
    var total=$("#startedCount").text()
    total=data.length;
    $("#startedCount").text(total)
  });

  }

  function completedFilter()
  {
    var filter={
      "quiztitle":$("#completed_quiz_title_filter").val(),
      "teaches_level":$("#completed_class_filter").val(),
      "subject":$("#completed_subject_filter").val(),
      "tutor":$("#tutor_name_completed_filter").val(),
      "status":"closed"
    }
    getFilterData(filter,function(data) {

    txt=""
    var date=new Date()
    for(i=0;i<data.length;i++)
    {
      txt+='<tr>\
        <td>'+data[i].quiztitle+'</td>\
        <td>'+data[i].teaches_level+'</td>\
        <td>'+data[i].subject+'</td>\
        <td>'+data[i].first_name+' '+data[i].last_name+'</td>\
        <td>'+data[i].attempted+' of '+data[i].totalquestions+'</td>\
        <td></td><td>Not Marked</td>\
        <td>\
          <a class="tableLink"><i class="fa-regular fa-eye"></i></a>\
        </td>\
      </tr>'
   }
    $("#completedQuizesBody").html(txt)
    var total=$("#completedCount").text()
    total=data.length;
    $("#completedCount").text(total)
  });

  }

  function getFilterData(filter,callback)
  {
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
  });
  $.ajax({
   type:'post',
   url:'filterDataStudentQuiz',
   data:{filter:filter},
   success:function(data) {

     callback(data)
    }
  })
  }
  </script>
  </body>
</html>
@include('/dashboard/common/footer')
