@include('/tutor/common/header')
@include('/tutor/common/sidebar')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>Teachers Portal : Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
  <style>



.image-label {
  position: relative;
  overflow: hidden;
  text-align: center;
  flex-grow: 1;
}

.image-container {
  display: inline-block;
}

.view-button {
  position: absolute;
  bottom: 10px; /* Adjust the distance from the bottom as needed */
  left: 50%;
  transform: translateX(-50%);
  background-color: #FF6C0B; /* Customize button background color */
  color: #fff; /* Customize button text color */
  padding: 8px 12px;
  border-radius: 4px;
  text-decoration: none;
  opacity: 0; /* Initially, hide the button */
  transition: opacity 0.3s; /* Add a transition effect to the button */
}

.image-label:hover .view-button {
  opacity: 1; /* Show the button on hover */
}

.view-button:hover {
  background-color: #FFA545; /* Customize button background color on hover */
}


  .row {
  display: flex;
  justify-content: space-between; /* Optional, to evenly space the columns */
}

.checkbox-container {

  position: relative;
  display: flex;
  align-items: center;

}

.checkbox-container label {
  margin-top: auto;
  margin-bottom: auto;
}
</style>
  <body>

 <div class="site-wrap">

  <!-- Side-bar -->

  <!-- Container -->
  <section class="wrapper">
    <div class="page-title">
      <h1>Quiz</h1>
    </div>

    <div>
      <ul class="nav tab-nav">

        <span class="active" data-bs-toggle="tab" data-bs-target="#tab-1"></span>

        <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-2">
            <span><i class="fa-solid fa-square-poll-horizontal"></i></span> Quizzes <small id="totalQuizzes">{{count($quizes)}}</small>
        </button>
        </li>
        <li class="nav-item">
          <button id="createQuiz" data-bs-toggle="tab" data-bs-target="#tab-3">
            <span><i class="fa-solid fa-plus"></i></span> Create Quiz
        </button>
        </li>
        <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-4">
            <span><i class="fa-solid fa-envelope-open"></i></span> Drafts <small id="draftsQuizes">{{count($drafts)}}</small>
        </button>
        </li>
        <li class="nav-item">
          <button id="upcomingbutton" data-bs-toggle="tab" data-bs-target="#tab-5">
            <span><i class="fa-solid fa-angles-up"></i></span> Upcoming <small id="upcomingQuizes">{{count($upcoming)}}</small>
        </button>
        </li>

        <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-7">
            <span><i class="fa-solid fa-check-double"></i></span> Expired <small id="expiredQuizes">{{count($expired)}}</small>
        </button>
        </li>
      </ul>
      <div class="tab-content pt-3">
        <div class="tab-pane fade show active" id="tab-1">
          <div class="box">
            <div class="tab-title">
              <h2>Quiz Activity</h2>
              <h3>Recent Quiz Activities</h3>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <tr>
                  <td>Quiz Title</td>
                  <td>Class / Grade</td>
                  <td>Course</td>
                  <td>Start Date & Time</td>
                  <td>End Date & Time</td>
                  <td>Total Students</td>
                  <td>Total Attended</td>
                  <td>Results in %</td>
                  <td>
                    <span class="table-tag">Upcoming</span>
                  </td>
                </tr>
                <tr>
                  <td>Quiz Title</td>
                  <td>Class / Grade</td>
                  <td>Course</td>
                  <td>Start Date & Time</td>
                  <td>End Date & Time</td>
                  <td>Total Students</td>
                  <td>Total Attended</td>
                  <td>Results in %</td>
                  <td>
                    <span class="table-tag">Upcoming</span>
                  </td>
                </tr>
                <tr>
                  <td>Quiz Title</td>
                  <td>Class / Grade</td>
                  <td>Course</td>
                  <td>Start Date & Time</td>
                  <td>End Date & Time</td>
                  <td>Total Students</td>
                  <td>Total Attended</td>
                  <td>Results in %</td>
                  <td>
                    <span class="table-tag">Upcoming</span>
                  </td>
                </tr>
                <tr>
                  <td>Quiz Title</td>
                  <td>Class / Grade</td>
                  <td>Course</td>
                  <td>Start Date & Time</td>
                  <td>End Date & Time</td>
                  <td>Total Students</td>
                  <td>Total Attended</td>
                  <td>Results in %</td>
                  <td>
                    <span class="table-tag">Upcoming</span>
                  </td>
                </tr>
                <tr>
                  <td>Quiz Title</td>
                  <td>Class / Grade</td>
                  <td>Course</td>
                  <td>Start Date & Time</td>
                  <td>End Date & Time</td>
                  <td>Total Students</td>
                  <td>Total Attended</td>
                  <td>Results in %</td>
                  <td>
                    <span class="table-tag">Upcoming</span>
                  </td>
                </tr>
                <tr>
                  <td>Quiz Title</td>
                  <td>Class / Grade</td>
                  <td>Course</td>
                  <td>Start Date & Time</td>
                  <td>End Date & Time</td>
                  <td>Total Students</td>
                  <td>Total Attended</td>
                  <td>Results in %</td>
                  <td>
                    <span class="table-tag">Upcoming</span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-2">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Quizzes</h2>
                <h3>All Tutor's Quizzes</h3>
              </div>
              <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i></div>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <thead>
                  <tr>
                    <th>
                      <span class="table-title">Quiz Title <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input id="search_all_quiz_title" type="text" placeholder="Enter Quiz Title to Search"  onkeyup="allQuizFilter()"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="search_teaches_level_all_quiz" onchange="allQuizFilter()">
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
                        <select name="" id="search_subject_all_quiz"  onchange="allQuizFilter()">
                          <option value="Select Course">Select Course</option>
                          @foreach($subjects as $t)
                          <option value="{{$t->subject}}">{{$t->subject}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>

                    <th>
                      <span class="table-title">Quiz Status <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <span class="table-inp">
                          <select name="" id="search_status_all_quiz" onchange="allQuizFilter()">
                            <option value="Select Quiz Status">Select Quiz Status</option>
                            <option value="Upcoming">Upcoming</option>
                            <option value="Drafts">Drafts</option>
                            <option value="Expired">Expired</option>
                          </select>
                        </span>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody id="allQuizes">
                  @foreach($quizes as $q)
                  <tr id="allQuizes_{{$q->quizid}}">
                    <td>{{$q->quiztitle}}</td>
                    <td>{{$q->teaches_level}}</td>
                    <td>{{$q->subject}}</td>
                    <?php
                    if($q->status=="Upcoming")
                    {
                      $currentDateTime = date('Y-m-d H:i:s');
                      if($q->enddate>$currentDateTime)
                      {
                        $status= "Upcoming";
                      }
                      else {
                        $status="Expired";
                      }
                    }
                    else {
                      $status=$q->status;
                    }
                     ?>
                    <td>{{$status}}</td>

                    <td>
                      <a class="tableLink" onclick="viewQuizAll({{$q->quizid}})"><i class="fa-solid fa-eye"></i></a>
                      <a class="tableLink" onclick="editQuizAll({{$q->quizid}})"><i class="fa-regular fa-pen-to-square"></i></a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="tab-7">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Quizzes</h2>
                <h3>Expired Quizzes</h3>
              </div>
              <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i></div>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <thead>
                  <tr>
                    <th>
                      <span class="table-title">Quiz Title <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Quiz Title to Search"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="">
                          <option value="">Select Grade / Class</option>
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="">
                          <option value="">Select Course</option>
                        </select>
                      </span>
                    </th>

                    <th>
                      <span class="table-title">Start Date <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="">
                          <option value="">Select Start Date</option>
                        </select>
                      </span>
                    </th>

                    <th>
                      <span class="table-title">End Date <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="">
                          <option value="">Select End Date</option>
                        </select>
                      </span>
                    </th>

                    <th>
                      <span class="table-title">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody id="expiredQuizes">
                  @foreach($expired as $q)
                  <tr id="expiredQuizes_{{$q->quizid}}">
                    <td id="quiztitle_activate_{{$q->quizid}}">{{$q->quiztitle}}</td>
                    <td id="teaches_level_activate_{{$q->quizid}}">{{$q->teaches_level}}</td>
                    <td id="subject_activate_{{$q->quizid}}">{{$q->subject}}</td>
                    <td><input type="datetime-local" name="" id="startdate_activate_{{$q->quizid}}" value="{{$q->startdate}}"></td>
                    <td><input  type="datetime-local" name="" id="enddate_activate_{{$q->quizid}}" value="{{$q->enddate}}"></td>
                    <td>
                      <label class="switch status_change">
                        <input type="checkbox" id="activatequiz_{{$q->quizid}}" onchange="activateQuiz({{$q->quizid}})">
                        <span class="slider round"></span>
                      </label>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
    <div class="tab-pane fade" id="tab-3">

                                      <div  id="q-new1" style="display:none">
                                        <br>
                                        <div class="box">
                                        <div class="container">
                                          <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                        <div class="quiz-inp-wrap mt-0">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
                                          <input class="quiz-inp" type="text" name="" id="quiztitle" placeholder="Enter Quiz Name / Title">
                                        </div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-star"></i></span>
                                          <select required class="quiz-inp" name="" id="teaches_level">
                                            @foreach($teaches_levels as $t)
                                            <option value="{{$t->teaches_level}}">{{$t->teaches_level}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-book-bookmark"></i></span>
                                          <select class="quiz-inp" name="" id="subjectt">
                                            @foreach($subjects as $sub)
                                            <option value="{{$sub->subject}}">{{$sub->subject}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <br>
                                        <div class="row"><div class="col-lg-4"></div><div class="col-lg-4 quiz-inp-wrap"><label>Start date and time</label></div></div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                          <input class="quiz-inp" type="datetime-local" name="" id="startdate" placeholder="Start Date and Time">
                                        </div>
                                        <br>
                                        <div class="row"><div class="col-lg-4"></div><div class="col-lg-4 quiz-inp-wrap"><label>End date and time</label></div></div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                          <input class="quiz-inp" type="datetime-local" name="" id="enddate" placeholder="End Date and Time">
                                        </div>

                                        <div class="create-btn">
                                          <a class="theme-btn grey"><i class="fa-solid fa-angle-left"></i> Back</a>
                                          <a class="theme-btn grey" id="firstStepNext">Next <i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                    </div>
                                  </div>


                                      <div id="q-new2" style="display:none">
                                        <br>
                                        <div class="box">
                                        <div class="container">
                                          <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                        <div class="">
                                          <div class="quiz-inp-wrap mt-0">
                                            <label for=""><i class="fa-solid fa-scale-balanced"></i> Type in Instructions for Quiz</label>
                                            <textarea class="quiz-inp" name="" id="instructionsforquiz"></textarea>
                                          </div>
                                          <div class="create-btn">
                                            <a class="theme-btn grey" id="q-back2"><i class="fa-solid fa-angle-left"></i> Back</a>
                                            <a class="theme-btn grey" id="secondStepNext">Next <i class="fa-solid fa-angle-right"></i></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                      </div>
                                    </div>

                                      <div  id="q-new3" style="display:none">
                                        <div class="container">
                                          <br>
                                          <div class="box">
                                          <div class="row justify-content-center">
                                            <div class="col-lg-7">

                                              <div class="create-btn" id="showQuestions" style="display:none">
                                                <a class="theme-btn grey" id="viewQuestion_back" style="display:none"><i class="fa-solid fa-angle-left"></i></a>
                                                <a class="theme-btn blue" id="viewQuestionClick" style="display:none"><i  id="viewQuestionButton" class="fa-regular fa-eye"></i></a>
                                                <a class="theme-btn green" id="viewQuestionSave" style="display:none"><i class="fa-regular fa-save"></i></a>
                                                <a class="theme-btn red" id="viewQuestionDelete" style="display:none"><i class="fa-regular fa-trash-alt"></i></a>
                                                <a class="theme-btn grey" id="viewQuestion_next" style="display:none"><i class="fa-solid fa-angle-right"></i></a>
                                                <br>
                                              </div>
                                              <br>
                                          <div class="quiz-inp-wrap mt-0">
                                            <span class="quiz-inp-icon"><i class="fa-solid fa-file-invoice"></i></span>
                                            <select class="quiz-inp" name="" id="selectQuestionType">
                                              <option value="Select Question Type">Select Question Type</option>
                                              <option value="Multiple Choice Questions">Multiple Choice Questions</option>
                                              <option value="True / False">True / False</option>
                                              <option value="Fill-in-the-Blanks">Fill-in-the-Blanks</option>
                                              <option value="Multiple Answers">Multiple Answers</option>
                                              <option value="Numerical Answer">Numerical Answer</option>
                                              <option value="Short Answer">Short Answer</option>
                                              <option value="Long Answer">Long Answer</option>
                                            </select>
                                          </div>
                                          <div id="fillQuestion">
                                          </div>
                                          <p class="pt-3 text-end"><strong id="quizQuestionsNumber">1 of 1 Quiz Question</strong></p>
                                          <div class="create-btn">
                                            <a class="theme-btn grey" id="q-back3"><i class="fa-solid fa-angle-left"></i> Back</a>
                                            <a class="theme-btn" id="addQuestion"><i class="fa-solid fa-plus"></i> Add Question</a>
                                            <a class="theme-btn grey" id="q-next3">Next <i class="fa-solid fa-angle-right"></i></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>



                              <div  id="q-new4" style="display:none">
                                <div class="container">
                                  <br>
                                  <div class="box">
                                  <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                  <div class="qt-fill for-settings">
                                    <div class="row">
                                      <div class="col-lg-4"><b>Quiz Template</b></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-lg-1"></div>
              <div class="col-lg-3 checkbox-container">
                <label>
                  <input type="radio" checked name="xgame" id="quiztemplate1"> <b>None</b>
                </label>
              </div>
              <div class="col-lg-4 checkbox-container">
                <input type="radio" name="xgame" id="quiztemplate2"><span class="checkmark"></span>
                <label class="image-label" for="quiztemplate3">
                  <div class="image-container">
                    <img src="game/theme1.png" width="200px" height="200px" alt="No pic">
                  </div>
                  <a href="/game1" target="_blank" class="view-button">View</a>
                </label>
              </div>

              <div class="col-lg-4 checkbox-container">
                <input type="radio" name="xgame" id="quiztemplate3"><span class="checkmark"></span>
                <label class="image-label" for="quiztemplate3">
                  <div class="image-container">
                    <img src="game2/theme1.png" width="200px" height="200px" alt="No pic">
                  </div>
                  <a href="/gamet" target="_blank" class="view-button">View</a>
                </label>
              </div>

            </div>

                                    <ul>

                                      <li>
                                        <div class="qt-fill-left">
                                          <span><input class="qt-fill-inp ps-0" type="text" value="Quiz Progress Bar" readonly></span>
                                        </div>
                                        <div class="qt-fill-right">
                                          <label class="radio-field ms-2">
                                            <input type="checkbox" name="x1" id="quizprogressbar">
                                            <span class="checkmark"></span>
                                          </label>
                                          <!-- <div class="ms-2">Show a progress bar under your quiz</div> -->
                                        </div>
                                      </li>
                                      <li>
                                        <div class="qt-fill-left">
                                          <span><input class="qt-fill-inp ps-0" type="text" value="Randomize Questions" readonly></span>
                                        </div>
                                        <div class="qt-fill-right">
                                          <label class="radio-field">
                                            <input type="checkbox" id="randomizequestions" name="x1">
                                            <span class="checkmark"></span>
                                          </label>
                                          <!-- <div class="ms-2">Show questions in a random order</div> -->
                                        </div>
                                      </li>
                                      <li>
                                        <div class="qt-fill-left">
                                          <span><input class="qt-fill-inp ps-0" type="text" value="Quiz Timer" readonly></span>
                                        </div>
                                        <div class="qt-fill-right">
                                          <span style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#quiztimerr"><i class="fa-solid fa-gear"></i></span>
                                          <label class="radio-field ms-2">
                                            <input type="checkbox" name="x1" id="quiztimer">
                                            <span class="checkmark"></span>
                                          </label>
                                          <!-- <div class="ms-2">Show a back button under your quiz</div> -->
                                        </div>
                                      </li>
                                      <li>
                                        <div class="qt-fill-left">
                                          <span><input class="qt-fill-inp ps-0" type="text" value="Auto Advance" readonly></span>
                                        </div>
                                        <div class="qt-fill-right">
                                          <label class="radio-field">
                                            <input type="checkbox" id="autoadvance" name="x1">
                                            <span class="checkmark"></span>
                                          </label>
                                          <!-- <div class="ms-2">Automatically advance to the next question</div> -->
                                        </div>
                                      </li>
                                      <li>
                                        <div class="qt-fill-left">
                                          <span><input class="qt-fill-inp ps-0" type="text" value="Quiz Tries" readonly></span>
                                        </div>
                                        <div class="qt-fill-right">
                                          <span style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#quiztriess"><i class="fa-solid fa-gear"></i></span>
                                          <label class="radio-field ms-2">
                                            <input type="checkbox" name="x1" id="quiztries">
                                            <span class="checkmark"></span>
                                          </label>
                                          <!-- <div class="ms-2">Will allow students to attempt quiz multiple times</div> -->
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="create-btn">
                                    <a class="theme-btn grey" id="q-back4"><i class="fa-solid fa-angle-left"></i> Back</a>
                                    <a class="theme-btn grey" id="q-next4">Next <i class="fa-solid fa-angle-right"></i></a>
                                  </div>
                                </div>
                              </div></div></div>
                            </div>



                              <div id="q-new5" style="display:none">
                                <div class="container">
                                  <br>
                                  <div class="box">
                                  <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                  <h2 class="text-center"><i class="fa-solid fa-file-invoice"></i> Quiz Generated</h2>
                                  <div class="create-btn">
                                    <a class="theme-btn grey" id="q-back5"><i class="fa-solid fa-angle-left"></i> Back</a>
                                    <a class="theme-btn blue" id="previewQuiz" data-bs-toggle="modal" data-bs-target="#exampleModal">Preview</a>
                                    <a class="theme-btn red" data-bs-toggle="modal" data-bs-target="#delQuiz">Delete</a>
                                    <a class="theme-btn green" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
                                  </div>
                                </div>
                            </div>
                          </div></div>

</div>
                                  </div>




        <div class="tab-pane fade" id="tab-4">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Quizzes</h2>
                <h3>Draft's Quizzes</h3>
              </div>
              <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i></div>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <thead>
                  <tr>
                    <th>
                      <span class="table-title">Quiz Title <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Quiz Title to Search" id="search_drafts_quiz_title" onkeyup="filterDrafts()"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="search_teaches_level_drafts_quiz" onchange="filterDrafts()">
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
                        <select name="" id="search_subject_drafts_quiz"  onchange="filterDrafts()">
                          <option value="Select Course">Select Course</option>
                          @foreach($subjects as $t)
                          <option value="{{$t->subject}}">{{$t->subject}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody id="draftsQuizesbody">
                  @foreach($drafts as $u)
                  <tr id="drafts_{{$u->quizid}}">
                    <td>{{$u->quiztitle}}</td>
                    <td>{{$u->teaches_level}}</td>
                    <td>{{$u->subject}}</td>
                    <td>
                      <a class="tableLink" onclick="editQuizAll({{$u->quizid}})"><i class="fa-regular fa-pen-to-square"></i></a>
                    </td>
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
                      <span class="table-inp"><input type="text" placeholder="Enter Quiz Title to Search" id="upcoming_quiz_title_filter" onkeyup="upcomingFilter()"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="upcoming_class_filter" onchange="upcomingFilter()">
                          <option value="Select Class / Grade">Select Grade / Class</option>
                          @foreach($teaches_levels as $t)
                          <option value="{{$t->teaches_level}}">{{$t->teaches_level}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="upcoming_subject_filter" onchange="upcomingFilter()">
                          <option value="Select Course">Select Course</option>
                          @foreach($subjects as $s)
                          <option value="{{$s->subject}}">{{$s->subject}}</option>
                          @endforeach
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Start Date <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="date" placeholder="Enter Name to Search" id="upcoming_start_date_filter" onchange="upcomingFilter()"></span>
                    </th>
                    <th>
                      <span class="table-title">End Date <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="date" id="upcoming_end_date_filter" onchange="upcomingFilter()" placeholder="Enter Name to Search"></span>
                    </th>
                    <th>
                      <span class="table-title">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody id="upcomingquiz">
                  @foreach($upcoming as $u)
                  <?php ?>
                  <tr id="upcomingquiz_{{$u->quizid}}">
                    <td>{{$u->quiztitle}}</td>
                    <td>{{$u->teaches_level}}</td>
                    <td>{{$u->subject}}</td>
                    <td>{{$u->startdate}}</td>
                    <td>{{$u->enddate}}</td>
                    <td>
                      <a class="tableLink" onclick="viewQuizAll({{$u->quizid}})"><i class="fa-regular fa-eye"></i></a>
                      <a class="tableLink grey" onclick="editQuizAll({{$u->quizid}})"><i class="fa-regular fa-pen-to-square"></i></a>
                      <a class="tableLink yellow" href=""><i class="fa-brands fa-firstdraft"></i></a>
                    </td>
                  </tr>
                  <tr>
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
                      <span class="table-inp"><input type="text" placeholder="Enter Quiz Title to Search"></span>
                    </th>
                    <th>
                      <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="">
                          <option value="">Select Grade / Class</option>
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <select name="" id="">
                          <option value="">Select Course</option>
                        </select>
                      </span>
                    </th>
                    <th>
                      <span class="table-title">Completed on & Time <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp"><input type="text" placeholder="Enter Name to Search"></span>
                    </th>
                    <th>
                      <span class="table-title">Actions</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Quiz Title</td>
                    <td>Class / Grade</td>
                    <td>Course</td>
                    <td>20-10-2021 | 10:00 PM</td>
                    <td>
                      <a class="tableLink" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                      <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a class="tableLink green" href=""><i class="fa-regular fa-clock"></i></a>
                      <a class="tableLink blue" href=""><i class="fa-solid fa-pen-clip"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Quiz Title</td>
                    <td>Class / Grade</td>
                    <td>Course</td>
                    <td>20-10-2021 | 10:00 PM</td>
                    <td>
                      <a class="tableLink" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                      <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a class="tableLink green" href=""><i class="fa-regular fa-clock"></i></a>
                      <a class="tableLink blue" href=""><i class="fa-solid fa-pen-clip"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Quiz Title</td>
                    <td>Class / Grade</td>
                    <td>Course</td>
                    <td>20-10-2021 | 10:00 PM</td>
                    <td>
                      <a class="tableLink" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                      <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a class="tableLink green" href=""><i class="fa-regular fa-clock"></i></a>
                      <a class="tableLink blue" href=""><i class="fa-solid fa-pen-clip"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Quiz Title</td>
                    <td>Class / Grade</td>
                    <td>Course</td>
                    <td>20-10-2021 | 10:00 PM</td>
                    <td>
                      <a class="tableLink" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                      <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a class="tableLink green" href=""><i class="fa-regular fa-clock"></i></a>
                      <a class="tableLink blue" href=""><i class="fa-solid fa-pen-clip"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Quiz Title</td>
                    <td>Class / Grade</td>
                    <td>Course</td>
                    <td>20-10-2021 | 10:00 PM</td>
                    <td>
                      <a class="tableLink" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                      <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a class="tableLink green" href=""><i class="fa-regular fa-clock"></i></a>
                      <a class="tableLink blue" href=""><i class="fa-solid fa-pen-clip"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Quiz Title</td>
                    <td>Class / Grade</td>
                    <td>Course</td>
                    <td>20-10-2021 | 10:00 PM</td>
                    <td>
                      <a class="tableLink" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                      <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a class="tableLink green" href=""><i class="fa-regular fa-clock"></i></a>
                      <a class="tableLink blue" href=""><i class="fa-solid fa-pen-clip"></i></a>
                    </td>
                  </tr>
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
                  <p class="text-large text-center" id="previewQuizInstructions"></p>
                </div>
              </div>
              <div class="tab-btn-group">
                <div id="viewpart1">
                <a class="theme-btn red" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Delete</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
              </div>
                <a class="theme-btn grey" id="nextPreviewButton2">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
            </div>

            <div class="tab-pane fade" id="menu1">
              <div class="quiz-head"><h5><i class="fa-solid fa-file-invoice"></i> <span id="previewQuestionNo"></span></h5></div>
              <div id="previewQuestionArea"></div>
              <div class="tab-btn-group">
                <a class="theme-btn grey" id="previousPreviewButton2"><i class="fa-solid fa-angle-left"></i> Back</a>
                <div id="viewpart2">
                <a class="theme-btn red" href="" data-bs-toggle="modal" data-bs-target="#delQuiz">Delete</a>
                <a class="theme-btn green" href="" data-bs-toggle="modal" data-bs-target="#pubQuiz">Publish</a>
              </div>
                <a class="theme-btn grey" id="nextPreviewButton">Next <i class="fa-solid fa-angle-right"></i></a>
              </div>
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
        <h5>Delete Quiz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure, you want to delete this Quiz</p>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round blue">Close</button>
        <button type="button" data-bs-dismiss="modal" id="deleteQuiz" class="theme-btn btn-round red">Delete</button>
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
        <button type="button" data-bs-dismiss="modal" id="publishQuiz" class="theme-btn btn-round green">Publish</button>
      </div>
    </div>
  </div>
</div>



<div class="modal common-modal fade" id="quiztimerr">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Quiz Timer Configure</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="inp-group mt-0">
          <label for="">Time Allowed for Each Question</label>
          <input class="inp" type="text" id="quiztimeinseconds" placeholder="Enter in Seconds">
        </div>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round green">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal common-modal fade" id="quiztriess">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Quiz Tries</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="inp-group mt-0">
          <label for="">How many times student can try to answer same question</label>
          <input class="inp" type="text" id="noofquiztries" placeholder="Enter Tries (1-3)">
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



  var allQuestions=[]
  var runPreview=-1;
  var mode=""
  var quizid=0;
  var progressbar=""
  var seconds=""
  var activeQuiz=[]

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

  $("#selectQuestionType").change(function(){
    var type=$("#selectQuestionType").val()
    if(type=="Multiple Choice Questions")
    {
    txt='<div class="qt-fill">\
                                  <ul>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                        <span><input class="qt-fill-inp" id="mcqquestion" type="text" placeholder="Enter Quiz Question"></span>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                        <span><input class="qt-fill-inp" id="mcqquestionoption1" type="text" placeholder="Enter Option 1"></span>\
                                      </div>\
                                      <div class="qt-fill-right">\
                                        <label class="radio-field">\
                                          <input id="mcqquestionoptioncorrect1" type="radio" name="x1">\
                                          <span class="checkmark"></span>\
                                        </label>\
                                        <div class="ms-2">Correct Answer</div>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                        <span><input class="qt-fill-inp" id="mcqquestionoption2" type="text" placeholder="Enter Option 2"></span>\
                                      </div>\
                                      <div class="qt-fill-right">\
                                        <label class="radio-field">\
                                          <input type="radio" id="mcqquestionoptioncorrect2" name="x1">\
                                          <span class="checkmark"></span>\
                                        </label>\
                                        <div class="ms-2">Correct Answer</div>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                        <span><input class="qt-fill-inp" type="text" id="mcqquestionoption3" placeholder="Enter Option 3"></span>\
                                      </div>\
                                      <div class="qt-fill-right">\
                                        <label class="radio-field">\
                                          <input type="radio" id="mcqquestionoptioncorrect3" name="x1">\
                                          <span class="checkmark"></span>\
                                        </label>\
                                        <div class="ms-2">Correct Answer</div>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                        <span><input class="qt-fill-inp" id="mcqquestionoption4" type="text" placeholder="Enter Option 4"></span>\
                                      </div>\
                                      <div class="qt-fill-right">\
                                        <label class="radio-field">\
                                          <input type="radio" id="mcqquestionoptioncorrect4" name="x1">\
                                          <span class="checkmark"></span>\
                                        </label>\
                                        <div class="ms-2">Correct Answer</div>\
                                      </div>\
                                    </li>\
                                  </ul>\
                                </div>'
    }
    else if(type=="True / False")
    {
      txt='<div class="qt-fill">\
        <ul>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
              <span><input class="qt-fill-inp" id="truefalsequestion" type="text" placeholder="Enter Quiz Question"></span>\
            </div>\
          </li>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
              <span><input id="trueanswer" class="qt-fill-inp" type="text" value="True"></span>\
            </div>\
            <div class="qt-fill-right">\
              <label class="radio-field">\
                <input type="radio" id="trueanswercorrect" name="x1">\
                <span class="checkmark"></span>\
              </label>\
              <div class="ms-2">Correct Answer</div>\
            </div>\
          </li>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
              <span><input class="qt-fill-inp" id="falseanswer" type="text" value="False"></span>\
            </div>\
            <div class="qt-fill-right">\
              <label class="radio-field">\
                <input type="radio" id="falseanswercorrect" name="x1">\
                <span class="checkmark"></span>\
              </label>\
              <div class="ms-2">Correct Answer</div>\
            </div>\
          </li>\
        </ul>\
      </div>'
    }
    else if(type=="Multiple Answers")
    {
      txt='  <div class="qt-fill">\
          <ul>\
            <li>\
              <div class="qt-fill-left">\
                <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                <span><input class="qt-fill-inp" id="multiplequestion" type="text" placeholder="Enter Quiz Question"></span>\
              </div>\
            </li>\
            <li>\
              <div class="qt-fill-left">\
                <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                <span><input class="qt-fill-inp" id="multiplequestionoption1" type="text" placeholder="Enter Option 1"></span>\
              </div>\
              <div class="qt-fill-right">\
                <label class="radio-field">\
                  <input type="checkbox" id="multiplequestionoptioncorrect1" name="x1">\
                  <span class="checkmark"></span>\
                </label>\
                <div class="ms-2">Correct Answer</div>\
              </div>\
            </li>\
            <li>\
              <div class="qt-fill-left">\
                <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                <span><input class="qt-fill-inp" id="multiplequestionoption2" type="text" placeholder="Enter Option 2"></span>\
              </div>\
              <div class="qt-fill-right">\
                <label class="radio-field">\
                  <input type="checkbox" id="multiplequestionoptioncorrect2" name="x1">\
                  <span class="checkmark"></span>\
                </label>\
                <div class="ms-2">Correct Answer</div>\
              </div>\
            </li>\
            <li>\
              <div class="qt-fill-left">\
                <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                <span><input class="qt-fill-inp" type="text" id="multiplequestionoption3" placeholder="Enter Option 3"></span>\
              </div>\
              <div class="qt-fill-right">\
                <label class="radio-field">\
                  <input type="checkbox" id="multiplequestionoptioncorrect3" name="x1">\
                  <span class="checkmark"></span>\
                </label>\
                <div class="ms-2">Correct Answer</div>\
              </div>\
            </li>\
            <li>\
              <div class="qt-fill-left">\
                <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                <span><input class="qt-fill-inp" id="multiplequestionoption4" type="text" placeholder="Enter Option 4"></span>\
              </div>\
              <div class="qt-fill-right">\
                <label class="radio-field">\
                  <input type="checkbox" id="multiplequestionoptioncorrect4" name="x1">\
                  <span class="checkmark"></span>\
                </label>\
                <div class="ms-2">Correct Answer</div>\
              </div>\
            </li>\
          </ul>\
        </div>'
    }
    else if(type=="Numerical Answer")
    {
      txt='<div class="qt-fill">\
                                  <ul>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                        <span><input class="qt-fill-inp" type="text" placeholder="Enter Quiz Question"></span>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                        <span>\
                                          <select class="qt-fill-inp" name="" id="" style="width: 100%;">\
                                            <option value="">Select Type of Numerical Answer</option>\
                                          </select>\
                                        </span>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                        <span><input class="qt-fill-inp" type="text" value="Right Answer" readonly></span>\
                                      </div>\
                                      <div class="qt-fill-right">\
                                        <div class="ms-2">Only Visible to Tutor</div>\
                                      </div>\
                                    </li>\
                                  </ul>\
                                </div>'
    }
    else if(type=="Short Answer")
    {
      txt='<div class="qt-fill">\
                                <ul>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                    <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                      <span><input class="qt-fill-inp" id="shortquestion" type="text" placeholder="Enter Quiz Question"></span>\
                                    </div>\
                                  </li>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                      <span><input class="qt-fill-inp" type="text" id="shortquestionrightanswer" value="Right Answer"></span>\
                                    </div>\
                                    <div class="qt-fill-right">\
                                      <div class="ms-2">Only Visible to Tutor</div>\
                                    </div>\
                                  </li>\
                                </ul>\
                              </div>'
    }

    else if(type=="Long Answer")
    {
      txt='<div class="qt-fill">\
              <ul>\
                <li>\
                  <div class="qt-fill-left">\
                    <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                    <span><input class="qt-fill-inp" type="text" id="longquestion" placeholder="Enter Quiz Question"></span>\
                  </div>\
                </li>\
                <li>\
                  <div class="qt-fill-left">\
                    <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                    <span><input class="qt-fill-inp" type="text" id="longquestionrightanswer" value=""></span>\
                  </div>\
                  <div class="qt-fill-right">\
                    <div class="ms-2">Only Visible to Tutor</div>\
                  </div>\
                </li>\
              </ul>\
            </div>'
    }
    else if(type=="Fill-in-the-Blanks")
    {
      txt='                            <div class="qt-fill">\
                                    <ul>\
                                      <li>\
                                        <div class="qt-fill-left">\
                                          <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                          <span><input class="qt-fill-inp" type="text" id="fillintheblanksquestion" placeholder="Enter Quiz Question"></span>\
                                        </div>\
                                      </li>\
                                      <li>\
                                        <div class="qt-fill-left">\
                                          <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                          <span><input class="qt-fill-inp" type="text" id="fillintheblanksrightanswer" value="Right Answer"></span>\
                                        </div>\
                                        <div class="qt-fill-right">\
                                          <div class="ms-2">Only Visible to Tutor</div>\
                                        </div>\
                                      </li>\
                                    </ul>\
                                  </div>'
    }
    else {
      txt=""
    }
    $("#fillQuestion").html(txt)
  })
  function addQuestion()
  {

    var type=$("#selectQuestionType").val()
    if(type=="Multiple Choice Questions")
    {
      var question=$("#mcqquestion").val()
      var option1=$("#mcqquestionoption1").val()
      var option2=$("#mcqquestionoption2").val()
      var option3=$("#mcqquestionoption3").val()
      var option4=$("#mcqquestionoption4").val()
      if($("#mcqquestionoptioncorrect1").is(":checked"))
      {
        var correctAnswer=option1
      }
      else if($("#mcqquestionoptioncorrect2").is(":checked"))
      {
        var correctAnswer=option2
      }
      if($("#mcqquestionoptioncorrect3").is(":checked"))
      {
        var correctAnswer=option3
      }
      if($("#mcqquestionoptioncorrect4").is(":checked"))
      {
        var correctAnswer=option4
      }
      var q=[question,option1,option2,option3,option4,correctAnswer]
      submitQuestion(quizid,"Multiple Choice Questions",question,option1,option2,option3,option4,correctAnswer,function(data){
      allQuestions.push(["Multiple Choice Questions",q,data])
      clean()
      })

    }
    else if(type=="True / False")
    {
      var question=$("#truefalsequestion").val()
      if($("#trueanswercorrect").is(":checked"))
      {
        var answer="true"
      }
      else {
        var answer="false"
      }

     q=[question,"","","","",answer]
     submitQuestion(quizid,"True / False",question,"True","False","","",answer,function(data){
    allQuestions.push(["True / False",q,data])
    clean()
     })

    }
    else if(type=="Fill-in-the-Blanks")
    {
      var question=$("#fillintheblanksquestion").val()
      var rightAnswer=$("#fillintheblanksrightanswer").val()
      q=[question,"","","","",rightAnswer]
      var id=submitQuestion(quizid,"Fill-in-the-Blanks",question,"","","","",rightAnswer)
      allQuestions.push(["Fill-in-the-Blanks",q,id])
      clean()
    }
    else if(type=="Multiple Answers")
    {
      var question=$("#multiplequestion").val()
      var option1=$("#multiplequestionoption1").val()
      var option2=$("#multiplequestionoption2").val()
      var option3=$("#multiplequestionoption3").val()
      var option4=$("#multiplequestionoption4").val()
      var answer=[]
      var correct=""
      if($("#multiplequestionoptioncorrect1").is(":checked"))
      {
        answer.push(option1)
        correct+=option1+"**"
      }
      if($("#multiplequestionoptioncorrect2").is(":checked"))
      {
        answer.push(option2)
        correct+=option2+"**"
      }
      if($("#multiplequestionoptioncorrect3").is(":checked"))
      {
        answer.push(option3)
        correct+=option3+"**"
      }
      if($("#multiplequestionoptioncorrect4").is(":checked"))
      {
        answer.push(option4)
        correct+=option4+"**"
      }
      q=[question,option1,option2,option3,option4,correct]
      submitQuestion(quizid,"Multiple Answers",question,option1,option2,option3,option4,correct,function(data){
      allQuestions.push(["Multiple Answers",q,data])
      clean()
      })
    }
    else if(type=="Short Answer")
    {
      var question=$("#shortquestion").val()
      var answer=$("#shortquestionrightanswer").val()
      q=[question,"","","","",answer]
      submitQuestion(quizid,"Short Answer",question,"","","","",answer,function(data){
      allQuestions.push(["Short Answer",q,data])
      clean()
      })

    }
    else if(type=="Long Answer")
    {
      var question=$("#longquestion").val()
      var answer=$("#longquestionrightanswer").val()
      q=[question,"","","","",answer]
      var id=submitQuestion(quizid,"Long Answer",question,"","","","",answer,function(data){
      allQuestions.push(["Long Answer",q,data])
      clean()

      })
    }


  }

  function clean()
  {
    showQuestionView()
    $("#selectQuestionType").val("Select Question Type")
    $("#fillQuestion").html("")
    $("#quizQuestionsNumber").text((allQuestions.length+1)+" of "+(allQuestions.length+1)+" Quiz Question")
  }

  function editQuestion(questionid)
  {
    var type=$("#selectQuestionType").val()
    if(type=="Multiple Choice Questions")
    {
      var question=$("#mcqquestion").val()
      var option1=$("#mcqquestionoption1").val()
      var option2=$("#mcqquestionoption2").val()
      var option3=$("#mcqquestionoption3").val()
      var option4=$("#mcqquestionoption4").val()
      if($("#mcqquestionoptioncorrect1").is(":checked"))
      {
        var correctAnswer=option1
      }
      else if($("#mcqquestionoptioncorrect2").is(":checked"))
      {
        var correctAnswer=option2
      }
      if($("#mcqquestionoptioncorrect3").is(":checked"))
      {
        var correctAnswer=option3
      }
      if($("#mcqquestionoptioncorrect4").is(":checked"))
      {
        var correctAnswer=option4
      }
      var q=[question,option1,option2,option3,option4,correctAnswer]
      var questions=editSubmitQuestion(questionid,"Multiple Choice Questions",question,option1,option2,option3,option4,correctAnswer)
    }
    else if(type=="True / False")
    {
      var question=$("#truefalsequestion").val()
      if($("#trueanswercorrect").is(":checked"))
      {
        var answer="true"
      }
      else {
        var answer="false"
      }

     q=[question,answer]
     var questions=editSubmitQuestion(questionid,"True / False",question,"True","False","","",answer)

    }
    else if(type=="Fill-in-the-Blanks")
    {
      var question=$("#fillintheblanksquestion").val()
      var rightAnswer=$("#fillintheblanksrightanswer").val()
      q=[question,rightAnswer]
      var questions=editSubmitQuestion(questionid,"Fill-in-the-Blanks",question,"","","","",rightAnswer)

    }
    else if(type=="Multiple Answers")
    {
      var question=$("#multiplequestion").val()
      var option1=$("#multiplequestionoption1").val()
      var option2=$("#multiplequestionoption2").val()
      var option3=$("#multiplequestionoption3").val()
      var option4=$("#multiplequestionoption4").val()
      var answer=[]
      var correct=""
      if($("#multiplequestionoptioncorrect1").is(":checked"))
      {
        answer.push(option1)
        correct+=option1+"**"
      }
      if($("#multiplequestionoptioncorrect2").is(":checked"))
      {
        answer.push(option2)
        correct+=option2+"**"
      }
      if($("#multiplequestionoptioncorrect3").is(":checked"))
      {
        answer.push(option3)
        correct+=option3+"**"
      }
      if($("#multiplequestionoptioncorrect4").is(":checked"))
      {
        answer.push(option4)
        correct+=option4+"**"
      }
      q=[question,option1,option2,option3,option4,answer]
      var questions=editSubmitQuestion(questionid,"Multiple Answers",question,option1,option2,option3,option4,correct)

    }
    else if(type=="Short Answer")
    {
      var question=$("#shortquestion").val()
      var answer=$("#shortquestionrightanswer").val()
      q=[question,answer]
      var questions=editSubmitQuestion(questionid,"Short Answer",question,"","","","",answer)

    }
    else if(type=="Long Answer")
    {
      var question=$("#longquestion").val()
      var answer=$("#longquestionrightanswer").val()
      q=[question,answer]
      var questions=editSubmitQuestion(questionid,"Long Answer",question,"","","","",answer)

    }
    return questions;
  }

  $("#addQuestion").click(function(){
  addQuestion()
  showQuestionView()

  })

  $("#nextProcess").click(function(){
    if($("#selectQuestionType").val()!="Select Question Type")
    {
    addQuestion()
  }
    hideAllShow1(4)
    //$("#qt-11").css("display","block")
  })

  $("#publishQuiz").click(function(){
    var quiztitle=$("#quiztitle").val()
    var quiztitle=$("#teaches_level").val()
    var quiztitle=$("#subjectt").val()
    var quiztitle=$("#instructionsforquiz").val()
    if($("#quizprogressbar").is(":checked"))
    {
      var quizprogressbar="y"
    }
    else {

     var quizprogressbar="n"
    }

    if($("#randomizequestions").is(":checked"))
    {
      var randomizequestions="y"
    }
    else {
     var randomizequestions="n"
    }

    if($("#quiztimer").is(":checked"))
    {
      var quiztimer="y"
    }
    else {
     var quiztimer="n"
    }

    if($("#autoadvance").is(":checked"))
    {
      var autoadvance="y"
    }
    else {
     var autoadvance="n"
    }

    if($("#quiztries").is(":checked"))
    {
      var quiztries="y"
    }
    else {
     var quiztries="n"
    }

    var quiztimeinseconds=$("#quiztimeinseconds").val()
    var quiztimeinseconds=$("#noofquiztries").val()

  })

  $("#nextPreviewButton").click(function(){
runPreview++
if(seconds==""&&progressbar=="")
{
if($("#quiztimer").is(":checked"))
{
  seconds=$("#quiztimeinseconds").val()
}
else {
  seconds=""
}
if($("#quizprogressbar").is(":checked"))
{
  progressbar="y"
}
else {
  progressbar="n"
}
}
  previewQuestions(allQuestions,runPreview,seconds,progressbar)
  })

  $("#nextPreviewButton2").click(function(){
    runPreview=0
    if(seconds==""&&progressbar=="")
    {
    if($("#quiztimer").is(":checked"))
    {
      seconds=$("#quiztimeinseconds").val()
    }
    else {
      seconds=""
    }
    if($("#quizprogressbar").is(":checked"))
    {
      progressbar="y"
    }
    else {
      progressbar="n"
    }
  }
  previewQuestions(allQuestions,runPreview,seconds,progressbar)
  $('a[href="#menu1"]').tab('show');
  })

  $("#previousPreviewButton2").click(function(){
    if(runPreview<=0)
    {
      $('a[href="#home"]').tab('show');
    }
    else {
      runPreview--
      if(seconds==""&&progressbar=="")
      {
      if($("#quiztimer").is(":checked"))
      {
        seconds=$("#quiztimeinseconds").val()
      }
      else {
        seconds=""
      }
      if($("#quizprogressbar").is(":checked"))
      {
        progressbar="y"
      }
      else {
        progressbar="n"
      }
    }
      previewQuestions(allQuestions,runPreview,seconds,progressbar)
    }
  })


function previewQuestions(allQuestions,runPreview,seconds,progressbar)
{
  var question=allQuestions[runPreview]
  var type=question[0]

  $("#previewQuestionNo").html((runPreview+1)+" of "+allQuestions.length+" Question")

  if(type=="Multiple Choice Questions")
  {
    var question2=question[1]
    var q='<div class="questions-list">\
      <ul>\
        <li><span>?</span> '+question2[0]+'</li>'
        var runIndex=0
        var indexes=['A','B','C','D']
        for(i=1;i<=4;i++)
        {
          if(question2[i]!="")
          {
          q+='<li><span>'+indexes[runIndex]+'</span> '+question2[i]+'</li>'
          }
        }
        q+='</ul>\
    </div>\
    <div class="select-ans">\
      <p>Select correct answer</p>\
      <div class="opt-ans">\
          <label for="">\
            <span class="num">A</span>\
            <input type="radio" name="1">\
            <span class="checkmark"></span>\
          </label>\
          <label for="">\
            <span class="num">B</span>\
            <input type="radio" name="1">\
            <span class="checkmark"></span>\
          </label>\
          <label for="">\
            <span class="num">C</span>\
            <input type="radio" name="1">\
            <span class="checkmark"></span>\
          </label>\
          <label for="">\
            <span class="num">D</span>\
            <input type="radio" name="1">\
            <span class="checkmark"></span>\
          </label>\
      </div>\
    </div><p class="pt-2">Select one of the option form the given ones</p>'
  }
  else if(type=="True / False")
      {
        var question2=question[1]
        var q='<div class="questions-list">\
          <ul>\
            <li><span>?</span> '+question2[0]+'</li>'

              q+='<li><span>A</span> True</li>'
              q+='<li><span>A</span> False</li>'

            q+='</ul>\
        </div>\
        <div class="select-ans">\
          <p>Select correct answer</p>\
          <div class="opt-ans">\
              <label for="">\
                <span class="num">A</span>\
                <input type="radio" name="1">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">B</span>\
                <input type="radio" name="1">\
                <span class="checkmark"></span>\
              </label>\
          </div>\
        </div><p class="pt-2">Select one of the option form the given ones</p>'
      }
      else if(type=="Multiple Answers")
      {
        var question2=question[1]
        var q='<div class="questions-list">\
          <ul>\
            <li><span>?</span> '+question2[0]+'</li>'
            var runIndex=0
            var indexes=['A','B','C','D']
            for(i=1;i<=4;i++)
            {
              if(question2[i]!="")
              {
              q+='<li><span>'+indexes[runIndex]+'</span> '+question2[i]+'</li>'
              }
            }
            q+='</ul>\
        </div>\
        <div class="select-ans">\
          <p>Select correct answer</p>\
          <div class="opt-ans">\
              <label for="">\
                <span class="num">A</span>\
                <input type="checkbox" name="1">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">B</span>\
                <input type="checkbox" name="1">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">C</span>\
                <input type="checkbox" name="1">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">D</span>\
                <input type="checkbox" name="1">\
                <span class="checkmark"></span>\
              </label>\
          </div>\
        </div><p class="pt-2">Select multiple options</p>'
      }
      else if(type=="Short Answer")
      {
        var question2=question[1]
        var q='<div class="questions-list">\
                        <ul>\
                          <li><span>?</span> '+question2[0]+'</li>\
                        </ul>\
                      </div>\
                      <div class="select-ans auto">\
                        <p class="pb-2">Enter Correct Answer</p>\
                        <div class="opt-ans half">\
                          <textarea class="inpTxt" name="" id="" placeholder="Enter Correct Answer Here"></textarea>\
                        </div>\
                      </div>\
                      <p class="pt-2">Type short answer in the given space</p>\
                    </div>\
                  </div>\
                </div>\
              </div>\
            </div>'
      }
      else if(type=="Fill-in-the-Blanks")
          {
            var question2=question[1]
            var q='<div class="questions-list">\
              <ul>\
                <li><span>?</span> '+question2[0]+'</li>'

            q+='</ul></div>\
            <div class="select-ans">\
              <p>Enter Correct Answer</p>\
              <div class="opt-ans half">\
                  <input class="inpTxt" type="text" name="" id="" placeholder="Enter Correct Answer Here">\
              </div>\
            </div>\
            <p class="pt-2">Type one or two words answer in the given space</p>\
            </div>\
          </div>\
        </div>\
      </div>\
    </div>'
          }
      else if(type=="Long Answer")
      {
        var question2=question[1]
        var q='<div class="questions-list">\
                        <ul>\
                          <li><span>?</span> '+question2[0]+'</li>\
                        </ul>\
                      </div>\
                      <div class="select-ans auto">\
                        <p class="pb-2">Enter Correct Answer</p>\
                        <div class="opt-ans half">\
                            <textarea class="inpTxt-alt" name="" id="" placeholder="Enter Correct Answer Here"></textarea>\
                          </div>\
                      </div>\
                      <p class="pt-2">Type elaborative answer in the given space</p>\
                    </div>\
                  </div>\
                </div>\
              </div>\
            </div>'
      }

if(seconds!="")
{
  var questionTime='<div class="questions-time"><i class="fa-solid fa-clock"></i> '+seconds+' S</div>'
}
else {
  var questionTime='<div class="questions-time"></div>'
}

  txt='<div class="container">\
    <div class="container-in">\
      <div class="row justify-content-center">\
        <div class="col-lg-7">\
          <div class="questions">'
  txt+=questionTime+q

if(progressbar=="y")
{
  var percentage=((runPreview+1)/allQuestions.length)*100
          txt+='<div class="question-progress">\
              <span class="pro-percentage">'+percentage+'%</span>\
              <div class="question-progress-bar" style="width: ' + percentage.toFixed(0) + '%;"></div>\
            </div>\
          </div>\
        </div>\
      </div>\
    </div>\
  </div>'
}
$("#previewQuestionArea").html(txt)
}
  $("#previewQuiz").click(function(){
    $('a[href="#home"]').tab('show');
    $("#previewQuizInstructions").html($("#instructionsforquiz").val())
  })

  $("#createQuiz").click(function(){

    clearAll()
    editMode()
    hideAllShow1(1)
    mode="creating quiz"
  })

   function hideAllShow1(show)
   {
     for(t=1;t<=5;t++)
     {
       if(t==show)
       {
         $("#q-new"+t).css("display","block")
       }
       else
       {
         $("#q-new"+t).css("display","none")
       }
     }
   }

   $("#q-back2").click(function(){
     hideAllShow1(1)
   })
   $("#q-back3").click(function(){
     hideAllShow1(2)
   })
   $("#q-back4").click(function(){
     hideAllShow1(3)
   })

   $("#q-next3").click(function(){
     addQuestion()
     hideAllShow1(4)
   })

   $("#q-next4").click(function(){
     saveQuizSettings()
   })

  $("#firstStepNext").click(function(){

    if(quizid==0)
    {
      var quiztitle=$("#quiztitle").val()
      var teaches_level=$("#teaches_level").val()
      if(teaches_level=="")
      {
        Swal.fire("Please select the Education level","","error")
        return
      }
      var subject=$("#subjectt").val()
      if(subject=="")
      {
        Swal.fire("Please select the Subject","","error")
        return
      }
      var startDate=$("#startdate").val()
      if(startDate=="")
      {
        Swal.fire("Please select the Quiz Start Date","","error")
        return
      }
      var endDate=$("#enddate").val()
      if(endDate=="")
      {
        Swal.fire("Please select the Quiz End Date","","error")
        return
      }

    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
});
$.ajax({
   type:'post',
   url:'createQuiz',
   data:{quiztitle:quiztitle,teaches_level:teaches_level,subject:subject,quizid:quizid,startdate:startDate,enddate:endDate},
   success:function(data) {

   quizid=data;
   hideAllShow1(2)
   }
 });
}
else {

  hideAllShow1(2)
}
  })

  $("#secondStepNext").click(function(){
    //hideAllShow
      var instructionsforquiz=$("#instructionsforquiz").val()
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
});
$.ajax({
   type:'post',
   url:'createQuizInstructions',
   data:{quizid:quizid,instructions:instructionsforquiz},
   success:function(data) {
  showQuestionView()
   addQuestion()

   hideAllShow1(3)
   }
 });
  })

  function submitQuestion(quizid,type,question,option1,option2,option3,option4,correct,callback)
  {
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
});
$.ajax({
   type:'post',
   url:'submitQuestion',
   data:{quizid:quizid,type:type,question:question,option1:option1,option2:option2,option3:option3,option4:option4,correct:correct},
   success:function(data) {
   callback(data)
   }
 });
  }

  function editSubmitQuestion(questionid,type,question,option1,option2,option3,option4,correct)
  {
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
});
$.ajax({
   type:'post',
   url:'editSubmitQuestion',
   data:{quizid:quizid,questionid:questionid,type:type,question:question,option1:option1,option2:option2,option3:option3,option4:option4,correct:correct},
   success:function(data) {
     allQuestions=[]
     var questions=data
      for(i=0;i<questions.length;i++)
      {
        var q=[questions[i].question,questions[i].option1,questions[i].option2,questions[i].option3,questions[i].option4,questions[i].correctanswer]
        allQuestions.push([questions[i].type,q,questions[i].id])
      }
      Swal.fire("Question updated","","success")
    return data;
   }
 });
  }


function saveQuizSettings()
{
  var templateUsed=0
  if($("#quiztemplate1").is(":checked"))
  {
    templateUsed=0
  }
  if($("#quiztemplate2").is(":checked"))
  {
    templateUsed=1
  }
  if($("#quiztemplate3").is(":checked"))
  {
    templateUsed=2
  }

  if($("#quizprogressbar").is(":checked"))
  {
    var quizprogressbar="y"
  }
  else {
   var quizprogressbar="n"
  }

  if($("#randomizequestions").is(":checked"))
  {
    var randomizequestions="y"
  }
  else {
   var randomizequestions="n"
  }

  if($("#quiztimer").is(":checked"))
  {
    var quiztimer="y"
  }
  else {
   var quiztimer="n"
  }

  if($("#autoadvance").is(":checked"))
  {
    var autoadvance="y"
  }
  else {
   var autoadvance="n"
  }

  if($("#quiztries").is(":checked"))
  {
    var quiztries="y"
  }
  else {
   var quiztries="n"
  }

  var quiztimeinseconds=$("#quiztimeinseconds").val()
  var quiznooftries=$("#noofquiztries").val()
  if(quiztimeinseconds=="")
  {
    quiztimeinseconds=0
  }
  if(quiznooftries=="")
  {
    quiznooftries=0
  }

  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
}
});
$.ajax({
 type:'post',
 url:'submitQuizSettings',
 data:{quizid:quizid,quizprogressbar:quizprogressbar,randomizequestions:randomizequestions,quiztimer:quiztimer,autoadvance:autoadvance,quiztries:quiztries,quiztimeinseconds:quiztimeinseconds,quiznooftries:quiznooftries,templateUsed:templateUsed},
 success:function(data) {
   alert(data)
  hideAllShow1(5)
 }
});

}
  $("#generateQuiz").click(function(){


  })

  $("#publishQuiz").click(function(){
    if(mode=="creating quiz")
    {
      $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
    }
  });
  $.ajax({
     type:'post',
     url:'publishQuiz',
     data:{quizid:quizid},
     success:function(data) {
      if(data=="")
      {
        Swal.fire("Quiz published","","success")
        var txt=""
        txt+='<tr id="upcomingquiz_'+quizid+'">\
          <td>'+$("#quiztitle").val()+'</td>\
          <td>'+$("#teaches_level").val()+'</td>\
          <td>'+$("#subjectt").val()+'</td>\
          <td>'+$("#startdate").val()+'</td>\
          <td>'+$("#enddate").val()+'</td>\
          <td>\
            <a class="tableLink" onclick="viewQuizAll('+quizid+')"><i class="fa-regular fa-eye"></i></a>\
            <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>\
            <a class="tableLink yellow" href=""><i class="fa-brands fa-firstdraft"></i></a>\
            <a class="tableLink blue" href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>\
          </td>\
        </tr>'
        if($("#upcomingquiz_"+quizid).text()=="")
        {
        $("#upcomingquiz").append(txt)
        var total=$("#upcomingQuizes").text()
        total=parseInt(total)+1;
        $("#upcomingQuizes").text(total)
      }
        txt=""
        txt+='<tr id="allQuizes_'+quizid+'">\
          <td>'+$("#quiztitle").val()+'</td>\
          <td>'+$("#teaches_level").val()+'</td>\
          <td>'+$("#subjectt").val()+'</td>\
          <td>Upcoming</td>\
          <td>\
            <a class="tableLink" onclick="viewQuizAll('+quizid+')"><i class="fa-solid fa-eye"></i></a>\
            <a class="tableLink" onclick="editQuizAll('+quizid+')"><i class="fa-regular fa-pen-to-square"></i></a>\
          </td></tr>'

          if($("#allQuizes_"+quizid).text()=="")
          {
        $("#allQuizes").append(txt)
        var total=$("#totalQuizzes").text()
        total=parseInt(total)+1;
        $("#totalQuizzes").text(total)
          }

        if(activeQuiz[0].status=="Drafts")
        {
        $("#drafts_"+quizid).remove()
        var total=$("#draftsQuizes").text()
        total=parseInt(total)-1;
        $("#draftsQuizes").text(total)
        }

        clearAll()
        //$('a[href="#tab-5"]').tab('show');
        var button = document.getElementById("upcomingbutton");
        button.click();

      }
      else {
        Swal.fire("Quiz not published","","error")
      }
     }
   });

    }
  })

  $("#deleteQuiz").click(function(){
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
});
$.ajax({
   type:'post',
   url:'deleteQuiz',
   data:{quizid:quizid},
   success:function(data) {
    if(data=="")
    {
      Swal.fire("Quiz deleted","","success")
       clearAll()
      hideAllShow1(1)
    //  var button = document.getElementById("createQuiz");
    //  button.click();
    }
    else{
      Swal.fire("Quiz can not be deleted","","info")
    }
  }
  })
});

function clearAll()
{
  $("#quiztitle").val("")
  $("#teaches_level").prop("selectedIndex", 0);
  $("#subjectt").prop("selectedIndex", 0);
  $("#instructionsforquiz").val("")
  $("#quiztemplate1").prop("checked",true)
  $("#quizprogressbar").prop("checked",false)
  $("#randomizequestions").prop("checked",false)
  $("#quiztimer").prop("checked",false)
  $("#autoadvance").prop("checked",false)
  $("#quiztries").prop("checked",false)
  $("#quiztimeinseconds").val("")
  $("#noofquiztries").val("")
  $("#startdate").val("")
  $("#enddate").val("")
  allQuestions=[]
  activeQuiz=[]
  quizid=0
  progressbar=""
  seconds=""
  hideQuestionView()
}

function viewQuizAll(id)
{
  clearAll()
  viewMode()
  getQuizQuestions(id)
  $('a[href="#home"]').tab('show');
  $("#exampleModal").modal("toggle")
}

function getQuizQuestions(quizid)
{
  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
}
});
$.ajax({
 type:'post',
 url:'getQuizQuestions',
 data:{quizid:quizid},
 success:function(data) {
 var questions=data[0]
 var quizes=data[1]
 activeQuiz=quizes
 allQuestions=[]
 runPreview=0;
 for(i=0;i<questions.length;i++)
 {

   var q=[questions[i].question,questions[i].option1,questions[i].option2,questions[i].option3,questions[i].option4,questions[i].correctanswer]
   allQuestions.push([questions[i].type,q,questions[i].id])
 }


 $("#previewQuizInstructions").text(quizes[0].instructions)
 progressbar="n"
 seconds=""
 if(quizes[0].quizprogressbar=="y")
 {
   progressbar="y"
 }
 if(quizes[0].quiztimer=="y")
 {
   seconds=quizes[0].quiztimeinseconds
 }
}
})
}


function getQuizAndFillQuestions(id)
{
  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
}
});
$.ajax({
 type:'post',
 url:'getQuizQuestions',
 data:{quizid:id},
 success:function(data) {
   quizid=id
 var questions=data[0]
 var quizes=data[1]
 activeQuiz=quizes
 allQuestions=[]
 runPreview=0;
 for(i=0;i<questions.length;i++)
 {

   var q=[questions[i].question,questions[i].option1,questions[i].option2,questions[i].option3,questions[i].option4,questions[i].correctanswer]
   allQuestions.push([questions[i].type,q,questions[i].id])

 }
$("#quizQuestionsNumber").html((allQuestions.length+1)+" of "+(allQuestions.length+1)+" Question")
 progressbar="n"
 seconds=""
 $("#quiztitle").val(quizes[0].quiztitle)
 $("#teaches_level").val(quizes[0].teaches_level)
 $("#subjectt").val(quizes[0].subject)
 $("#startdate").val(quizes[0].startdate)
 $("#enddate").val(quizes[0].enddate)
 $("#instructionsforquiz").val(quizes[0].instructions)
 if(quizes[0].quizprogressbar=="y")
 {
   $("#quizprogressbar").prop("checked",true)
 }
 if(quizes[0].randomizequestions=="y")
 {
   $("#randomizequestions").prop("checked",true)
 }
 if(quizes[0].quiztimer=="y")
 {
   $("#quiztimer").prop("checked",true)
 }
 if(quizes[0].autoadvance=="y")
 {
   $("#autoadvance").prop("checked",true)
 }
 if(quizes[0].quiztries=="y")
 {
   $("#quiztries").prop("checked",true)
 }

if(quizes[0].quiztemplate==0||quizes[0].quiztemplate==null)
{
  $("#quiztemplate1").prop("checked",true)
}
if(quizes[0].quiztemplate==1)
{
  $("#quiztemplate2").prop("checked",true)
}
if(quizes[0].quiztemplate==2)
{
  $("#quiztemplate3").prop("checked",true)
}

$("#quiztimeinseconds").val(quizes[0].quiztimeinseconds)
$("#noofquiztries").val(quizes[0].noofquiztries)
}
})
}

function viewMode()
{
  $("#viewpart1").css("display","none")
  $("#viewpart2").css("display","none")
}
function editMode()
{
  $("#viewpart1").css("display","block")
  $("#viewpart2").css("display","block")
  seconds=""
  progressbar=""
}

function editQuizAll(id)
{
  //clearAll()

  var button=document.getElementById("createQuiz")
  button.click()
  getQuizAndFillQuestions(id)
 //$("ul.nav-tabs2 li.nav-item:nth-child(2) a.nav-link").addClass("active");
  //  $("div.tab-content #qt-1").addClass("show active");
}

$("#q-back5").click(function()
{
  hideAllShow1(4)
})


function showQuestionView()
{
  if(allQuestions.length>0)
  {
   $("#showQuestions").css("display","inline")
   $("#viewQuestionClick").css("display","inline-block")

  }
}

function hideQuestionView()
{
   $("#viewQuestion_next").css("display","none")
   $("#viewQuestion_back").css("display","none")
   $("#viewQuestionSave").css("display","none")
   $("#viewQuestionDelete").css("display","none")
   $("#viewQuestionSave").removeAttr("onclick");
   $("#viewQuestionDelete").removeAttr("onclick");
}

$("#viewQuestionClick").click(function(){
  $("#viewQuestion_next").css("display","inline")
  $("#viewQuestion_back").css("display","inline")
  $("#viewQuestionSave").css("display","inline-block")
  $("#viewQuestionDelete").css("display","inline-block")

  var viewQuestionButton = $("#viewQuestionButton");

if (viewQuestionButton.hasClass("fa-eye")) {
  viewQuestionButton.removeClass("fa-eye").addClass("fa-pen-to-square");
  if(allQuestions.length>=0)
  {
    runningIndex=0
  showQuestionWithIndex(runningIndex)
  }
} else if (viewQuestionButton.hasClass("fa-pen-to-square")) {
  viewQuestionButton.removeClass("fa-pen-to-square").addClass("fa-eye");
  hideQuestionView()
  $("#fillQuestion").html("")
  $("#selectQuestionType").val("Select Question Type")
  $("#quizQuestionsNumber").text((allQuestions.length+1)+" of "+(allQuestions.length+1)+" Quiz Questions")
}


})

$("#viewQuestion_next").click(function(){
  runningIndex++;
  if(runningIndex<=(allQuestions.length-1))
  {
    showQuestionWithIndex(runningIndex)
  }
})

$("#viewQuestion_back").click(function(){
  runningIndex--;
  if(runningIndex>=0)
  {
    showQuestionWithIndex(runningIndex)
  }
})

function showQuestionWithIndex(index)
{
  var q=allQuestions[index]

  if(q[2]!="")
  {
  var type=q[0]
  var qn=q[1]
  var id=q[2]
  var question=qn[0]
  var option1=qn[1]
  var option2=qn[2]
  var option3=qn[3]
  var option4=qn[4]
  var correct=qn[5]
  $("#viewQuestionSave").attr("onclick", "saveme("+id+")");
  $("#viewQuestionDelete").attr("onclick", "delme("+id+")");
  showQuestionForEdit(type,question,option1,option2,option3,option4,correct);
}
else {
  $("#viewQuestionClick").click()
}
  $("#quizQuestionsNumber").text((index+1)+" of "+(allQuestions.length)+" Quiz Questions")
}

function showQuestionForEdit(type,question,option1,option2,option3,option4,correct)
{
  $("#selectQuestionType").val(type)

  if(type=="Multiple Choice Questions")
  {
  txt='<div class="qt-fill">\
                                <ul>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                      <span><input class="qt-fill-inp" id="mcqquestion" type="text" placeholder="Enter Quiz Question" value="'+question+'"></span>\
                                    </div>\
                                  </li>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                      <span><input class="qt-fill-inp" id="mcqquestionoption1" type="text" placeholder="Enter Option 1" value="'+option1+'"></span>\
                                    </div>\
                                    <div class="qt-fill-right">\
                                      <label class="radio-field">'
                                      if(option1.toLowerCase()==correct.toLowerCase())
                                      {
                                      txt+='<input id="mcqquestionoptioncorrect1" type="radio" checked name="x1">'
                                      }
                                      else {
                                      txt+='<input id="mcqquestionoptioncorrect1" type="radio" name="x1">'
                                      }
                                        txt+='<span class="checkmark"></span>\
                                      </label>\
                                      <div class="ms-2">Correct Answer</div>\
                                    </div>\
                                  </li>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                      <span><input class="qt-fill-inp" id="mcqquestionoption2" type="text" placeholder="Enter Option 2" value="'+option2+'"></span>\
                                    </div>\
                                    <div class="qt-fill-right">\
                                      <label class="radio-field">'
                                      if(option2.toLowerCase()==correct.toLowerCase())
                                      {
                                      txt+='<input id="mcqquestionoptioncorrect2" type="radio" checked name="x1">'
                                      }
                                      else {
                                      txt+='<input id="mcqquestionoptioncorrect2" type="radio" name="x1">'
                                      }
                                      txt+='<span class="checkmark"></span>\
                                      </label>\
                                      <div class="ms-2">Correct Answer</div>\
                                    </div>\
                                  </li>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                      <span><input class="qt-fill-inp" type="text" id="mcqquestionoption3" placeholder="Enter Option 3"  value="'+option3+'"></span>\
                                    </div>\
                                    <div class="qt-fill-right">\
                                      <label class="radio-field">'
                                      if(option3.toLowerCase()==correct.toLowerCase())
                                      {
                                      txt+='<input id="mcqquestionoptioncorrect3" type="radio" checked name="x1">'
                                      }
                                      else {
                                      txt+='<input id="mcqquestionoptioncorrect3" type="radio" name="x1">'
                                      }
                                      txt+=' <span class="checkmark"></span>\
                                      </label>\
                                      <div class="ms-2">Correct Answer</div>\
                                    </div>\
                                  </li>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                      <span><input class="qt-fill-inp" id="mcqquestionoption4" type="text" placeholder="Enter Option 4"  value="'+option4+'"></span>\
                                    </div>\
                                    <div class="qt-fill-right">\
                                      <label class="radio-field">'
                                      if(option4.toLowerCase()==correct.toLowerCase())
                                      {
                                      txt+='<input id="mcqquestionoptioncorrect4" type="radio" checked name="x1">'
                                      }
                                      else {
                                      txt+='<input id="mcqquestionoptioncorrect4" type="radio" name="x1">'
                                      }
                                      txt+='<span class="checkmark"></span>\
                                      </label>\
                                      <div class="ms-2">Correct Answer</div>\
                                    </div>\
                                  </li>\
                                </ul>\
                              </div>'
  }
  else if(type=="True / False")
  {
    if(correct==0)
    {
      correct=""
    }
    txt='<div class="qt-fill">\
      <ul>\
        <li>\
          <div class="qt-fill-left">\
            <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
            <span><input class="qt-fill-inp" id="truefalsequestion" type="text" placeholder="Enter Quiz Question" value="'+question+'"></span>\
          </div>\
        </li>\
        <li>\
          <div class="qt-fill-left">\
            <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
            <span><input id="trueanswer" class="qt-fill-inp" type="text" value="True"></span>\
          </div>\
          <div class="qt-fill-right">\
            <label class="radio-field">'

            if(option1.toLowerCase()==correct.toLowerCase())
            {
            txt+='<input id="trueanswercorrect" type="radio" checked name="x1">'
            }
            else {
            txt+='<input id="trueanswercorrect" type="radio" name="x1">'
            }

            txt+='<span class="checkmark"></span>\
            </label>\
            <div class="ms-2">Correct Answer</div>\
          </div>\
        </li>\
        <li>\
          <div class="qt-fill-left">\
            <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
            <span><input class="qt-fill-inp" id="falseanswer" type="text" value="False"></span>\
          </div>\
          <div class="qt-fill-right">\
            <label class="radio-field">'
            if(option2.toLowerCase()==correct.toLowerCase())
            {
            txt+='<input id="falseanswercorrect" type="radio" checked name="x1">'
            }
            else {
            txt+='<input id="falseanswercorrect" type="radio" name="x1">'
            }
            txt+='<span class="checkmark"></span>\
            </label>\
            <div class="ms-2">Correct Answer</div>\
          </div>\
        </li>\
      </ul>\
    </div>'

  }
  else if(type=="Multiple Answers")
  {

    var abc=correct.split("**")

    txt='  <div class="qt-fill">\
        <ul>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
              <span><input class="qt-fill-inp" id="multiplequestion" type="text" placeholder="Enter Quiz Question" value="'+question+'"></span>\
            </div>\
          </li>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
              <span><input class="qt-fill-inp" id="multiplequestionoption1" type="text" placeholder="Enter Option 1" value="'+option1+'"></span>\
            </div>\
            <div class="qt-fill-right">\
              <label class="radio-field">'
              if(abc.includes(option1)&&option1!="")
              {
              txt+='<input id="multiplequestionoptioncorrect1" type="checkbox" checked name="x1">'
              }
              else {
              txt+='<input id="multiplequestionoptioncorrect1" type="checkbox" name="x1">'
              }

              txt+='<span class="checkmark"></span>\
              </label>\
              <div class="ms-2">Correct Answer</div>\
            </div>\
          </li>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
              <span><input class="qt-fill-inp" id="multiplequestionoption2" type="text" placeholder="Enter Option 2" value="'+option2+'"></span>\
            </div>\
            <div class="qt-fill-right">\
              <label class="radio-field">'
              if(abc.includes(option2)&&option2!="")
              {
              txt+='<input id="multiplequestionoptioncorrect2" type="checkbox" checked name="x1">'
              }
              else {
              txt+='<input id="multiplequestionoptioncorrect2" type="checkbox" name="x1">'
              }

              txt+='<span class="checkmark"></span>\
              </label>\
              <div class="ms-2">Correct Answer</div>\
            </div>\
          </li>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
              <span><input class="qt-fill-inp" type="text" id="multiplequestionoption3" placeholder="Enter Option 3" value="'+option3+'"></span>\
            </div>\
            <div class="qt-fill-right">\
              <label class="radio-field">'
              if(abc.includes(option3)&&option3!="")
              {
              txt+='<input id="multiplequestionoptioncorrect3" type="checkbox" checked name="x1">'
              }
              else {
              txt+='<input id="multiplequestionoptioncorrect3" type="checkbox" name="x1">'
              }

              txt+='<span class="checkmark"></span>\
              </label>\
              <div class="ms-2">Correct Answer</div>\
            </div>\
          </li>\
          <li>\
            <div class="qt-fill-left">\
              <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
              <span><input class="qt-fill-inp" id="multiplequestionoption4" type="text" placeholder="Enter Option 4" value="'+option4+'"></span>\
            </div>\
            <div class="qt-fill-right">\
              <label class="radio-field">'
              if(abc.includes(option4)&&option4!="")
              {
              txt+='<input id="multiplequestionoptioncorrect4" type="checkbox" checked name="x1">'
              }
              else {
              txt+='<input id="multiplequestionoptioncorrect4" type="checkbox" name="x1">'
              }

              txt+='<span class="checkmark"></span>\
              </label>\
              <div class="ms-2">Correct Answer</div>\
            </div>\
          </li>\
        </ul>\
      </div>'
  }
  else if(type=="Numerical Answer")
  {
    txt='<div class="qt-fill">\
                                <ul>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                      <span><input class="qt-fill-inp" type="text" placeholder="Enter Quiz Question"></span>\
                                    </div>\
                                  </li>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                      <span>\
                                        <select class="qt-fill-inp" name="" id="" style="width: 100%;">\
                                          <option value="">Select Type of Numerical Answer</option>\
                                        </select>\
                                      </span>\
                                    </div>\
                                  </li>\
                                  <li>\
                                    <div class="qt-fill-left">\
                                      <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                      <span><input class="qt-fill-inp" type="text" value="Right Answer" readonly></span>\
                                    </div>\
                                    <div class="qt-fill-right">\
                                      <div class="ms-2">Only Visible to Tutor</div>\
                                    </div>\
                                  </li>\
                                </ul>\
                              </div>'
  }
  else if(type=="Short Answer")
  {
    txt='<div class="qt-fill">\
                              <ul>\
                                <li>\
                                  <div class="qt-fill-left">\
                                  <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                    <span><input class="qt-fill-inp" id="shortquestion" type="text" placeholder="Enter Quiz Question" value="'+question+'"></span>\
                                  </div>\
                                </li>\
                                <li>\
                                  <div class="qt-fill-left">\
                                    <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                    <span><input class="qt-fill-inp" type="text" id="shortquestionrightanswer" value="'+correct+'"></span>\
                                  </div>\
                                  <div class="qt-fill-right">\
                                    <div class="ms-2">Only Visible to Tutor</div>\
                                  </div>\
                                </li>\
                              </ul>\
                            </div>'
  }

  else if(type=="Long Answer")
  {
    txt='<div class="qt-fill">\
            <ul>\
              <li>\
                <div class="qt-fill-left">\
                  <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                  <span><input class="qt-fill-inp" type="text" id="longquestion" placeholder="Enter Quiz Question" value="'+question+'"></span>\
                </div>\
              </li>\
              <li>\
                <div class="qt-fill-left">\
                  <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                  <span><input class="qt-fill-inp" type="text" id="longquestionrightanswer" value="'+correct+'"></span>\
                </div>\
                <div class="qt-fill-right">\
                  <div class="ms-2">Only Visible to Tutor</div>\
                </div>\
              </li>\
            </ul>\
          </div>'
  }
  else if(type=="Fill-in-the-Blanks")
  {
    txt='                            <div class="qt-fill">\
                                  <ul>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-question"></i></span>\
                                        <span><input class="qt-fill-inp" type="text" id="fillintheblanksquestion" placeholder="Enter Quiz Question" value="'+question+'"></span>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="qt-fill-left">\
                                        <span class="qt-fill-icon"><i class="fa-solid fa-sliders"></i></span>\
                                        <span><input class="qt-fill-inp" type="text" id="fillintheblanksrightanswer" value="'+correct+'"></span>\
                                      </div>\
                                      <div class="qt-fill-right">\
                                        <div class="ms-2">Only Visible to Tutor</div>\
                                      </div>\
                                    </li>\
                                  </ul>\
                                </div>'
  }
  else {
    txt=""
  }

  $("#fillQuestion").html(txt)
}


function saveme(id)
{
  if($("#selectQuestionType").val()!="Select Question Type")
  {
  var questions=editQuestion(id)
}

}
function delme(id)
{

  if($("#selectQuestionType").val()!="Select Question Type")
  {
  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
}
});
$.ajax({
 type:'post',
 url:'deleteQuestion',
 data:{quizid:quizid,questionid:id},
 success:function(data) {

   var questions=data
   allQuestions=[]

    for(i=0;i<questions.length;i++)
    {
      var q=[questions[i].question,questions[i].option1,questions[i].option2,questions[i].option3,questions[i].option4,questions[i].correctanswer]
      allQuestions.push([questions[i].type,q,questions[i].id])
    }

    if(allQuestions.length==0)
    {
      $("#viewQuestionButton").click()
      return;
    }
    else {
    if(runningIndex>=(allQuestions.length-1))
    {
      runningIndex=allQuestions.length-1
    }

    showQuestionWithIndex(runningIndex)

  }


    $("#quizQuestionsNumber").text((runningIndex+1)+" of "+(allQuestions.length)+" Quiz Questions")
    Swal.fire("Question deleted","","success")
  }
})
}
}

function activateQuiz(id)
{
  if($("#activatequiz_"+id).is(":checked"))
  {
  var startdate=$("#startdate_activate_"+id).val()
  var enddate=$("#enddate_activate_"+id).val()

  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
}
});
$.ajax({
 type:'post',
 url:'republishQuiz',
 data:{quizid:id,startdate:startdate,enddate:enddate},
 success:function(data) {

    if(data=="")
    {

      var txt=""
      txt+='<tr id="upcomingquiz_'+id+'">\
        <td>'+$("#quiztitle_activate_"+id).text()+'</td>\
        <td>'+$("#teaches_level_activate_"+id).text()+'</td>\
        <td>'+$("#subject_activate_"+id).text()+'</td>\
        <td>'+startdate+'</td>\
        <td>'+enddate+'</td>\
        <td>\
          <a class="tableLink" onclick="viewQuizAll('+id+')"><i class="fa-regular fa-eye"></i></a>\
          <a class="tableLink grey" href=""><i class="fa-regular fa-pen-to-square"></i></a>\
          <a class="tableLink yellow" href=""><i class="fa-brands fa-firstdraft"></i></a>\
          <a class="tableLink blue" href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>\
        </td>\
      </tr>'

      $("#upcomingquiz").append(txt)
      var total=$("#upcomingQuizes").text()
      total=parseInt(total)+1;
      $("#upcomingQuizes").text(total)

      var total=$("#expiredQuizes").text()
      total=parseInt(total)-1;
      $("#expiredQuizes").text(total)

      $("#expiredQuizes_"+id).remove()
      Swal.fire("Quiz republished","","success")
    }
    else {

      Swal.fire("Quiz is not republished for some reason","","error")
    }

  }
})

  }
}

function filterDrafts()
{
  var filter={
    "quiztitle":$("#search_drafts_quiz_title").val(),
    "teaches_level":$("#search_teaches_level_drafts_quiz").val(),
    "subject":$("#search_subject_drafts_quiz").val(),
    "status":"Drafts"
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
    <td>\
      <a class="tableLink" onclick="editQuizAll('+data[i].quizid+')"><i class="fa-regular fa-pen-to-square"></i></a>\
    </td></tr>'
 }
  $("#draftsQuizesbody").html(txt)
  var total=$("#draftsQuizes").text()
  total=data.length;
  $("#draftsQuizes").text(total)
});

}

function upcomingFilter()
{
  var filter = {
    "quiztitle": $("#upcoming_quiz_title_filter").val(),
    "teaches_level": $("#upcoming_class_filter").val(),
    "subject": $("#upcoming_subject_filter").val(),
    "status": 'Upcoming',
    "startdate": $("#upcoming_start_date_filter").val(),
    "enddate": $("#upcoming_end_date_filter").val()
  }

  getFilterData(filter,function(data) {
    txt=""
    var date=new Date()
    for(i=0;i<data.length;i++)
    {
    txt+='<tr id="upcomingquiz_'+data[i].quizid+'">\
      <td>'+data[i].quiztitle+'</td>\
      <td>'+data[i].teaches_level+'</td>\
      <td>'+data[i].subject+'</td>\
      <td>'+data[i].startdate+'</td>\
      <td>'+data[i].enddate+'</td>\
      <td>\
        <a class="tableLink" onclick="viewQuizAll('+data[i].quizid+')"><i class="fa-solid fa-eye"></i></a>\
        <a class="tableLink" onclick="editQuizAll('+data[i].quizid+')"><i class="fa-regular fa-pen-to-square"></i></a>\
        <a class="tableLink yellow" href=""><i class="fa-brands fa-firstdraft"></i></a>\
      </td></tr>'
    }
    $("#upcomingquiz").html(txt)
    var total=$("#upcomingQuizzes").text()
    total=data.length;
    $("#upcomingQuizzes").text(total)

  })

    return;
}

 function allQuizFilter()
 {
   var filter = {
     "quiztitle": $("#search_all_quiz_title").val(),
     "teaches_level": $("#search_teaches_level_all_quiz").val(),
     "subject": $("#search_subject_all_quiz").val(),
     "status": $("#search_status_all_quiz").val(),
   }

   getFilterData(filter,function(data) {
     txt=""
     var date=new Date()
     for(i=0;i<data.length;i++)
     {
       var date2=new Date(data[i].enddate)

       if(data[i].status=="Upcoming")
       {
         if(date<date2)
         {
           var status="Upcoming"
         }
         else {
           var status="Expired"
         }
       }
       else {
         var status=data[i].status
       }
     txt+='<tr id="allQuizes_'+data[i].quizid+'">\
       <td>'+data[i].quiztitle+'</td>\
       <td>'+data[i].teaches_level+'</td>\
       <td>'+data[i].subject+'</td>\
       <td>'+status+'</td>\
       <td>\
         <a class="tableLink" onclick="viewQuizAll('+data[i].quizid+')"><i class="fa-solid fa-eye"></i></a>\
         <a class="tableLink" onclick="editQuizAll('+data[i].quizid+')"><i class="fa-regular fa-pen-to-square"></i></a>\
       </td></tr>'
     }
     $("#allQuizes").html(txt)
     var total=$("#totalQuizzes").text()
     total=data.length;
     $("#totalQuizzes").text(total)

   })

     return;
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
  url:'filterData',
  data:{filter:filter},
  success:function(data) {

    callback(data)
   }
 })
 }
  </script>
  </body>
</html>

@include('/tutor/common/footer')
