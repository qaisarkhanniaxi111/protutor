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
            <span><i class="fa-solid fa-square-poll-horizontal"></i></span> Group Lessons <small id="totalQuizzes"></small>
        </button>
        </li>
        <li class="nav-item">
          <button id="createQuiz" data-bs-toggle="tab" data-bs-target="#tab-3">
            <span><i class="fa-solid fa-plus"></i></span> Create Group
        </button>
        </li>


        <li class="nav-item">
          <button data-bs-toggle="tab" data-bs-target="#tab-7">
            <span><i class="fa-solid fa-check-double"></i></span> Completed <small id="expiredQuizes"></small>
        </button>
        </li>
      </ul>
      <div class="tab-content pt-3">
        <div class="tab-pane fade show active" id="tab-1">
          <div class="box">
            <div class="tab-title">
              <h2>Group Lessons</h2>
              <h3>Recent Groups</h3>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <tr>
                  <td>Title</td>
                  <td>Class / Grade</td>
                  <td>Course</td>
                  <td>Start Date & Time</td>
                  <td>End Date & Time</td>
                  <td>Total Students</td>
                  <td>Total Registered</td>

                </tr>

              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-2">
          <div class="box">
            <div class="tab-title flex">
              <div>
                <h2>Group Lessons</h2>
                <h3>All Group Lessons</h3>
              </div>
              <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i></div>
            </div>
            <div class="table-responsive">
              <table class="table quiz-table">
                <thead>
                  <tr>
                    <th>
                      <span class="table-title">Title <i class="fa-solid fa-sort"></i></span>
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
                      <span class="table-title">Status <i class="fa-solid fa-sort"></i></span>
                      <span class="table-inp">
                        <span class="table-inp">
                          <select name="" id="search_status_all_quiz" onchange="allQuizFilter()">
                            <option value="Select Quiz Status">Select Quiz Status</option>
                            <option value="Upcoming">Upcoming</option>
                            <option value="Expired">Completed</option>
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
                      <span class="table-title">Title <i class="fa-solid fa-sort"></i></span>
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

                </tbody>
              </table>
            </div>
          </div>
        </div>
    <div class="tab-pane fade" id="tab-3">

                                      <div  id="q-new1">
                                        <br>
                                        <div class="box">
                                        <div class="container">
                                          <div class="row justify-content-center">
                                            <div class="col-lg-7">

                                              <div class="quiz-inp-wrap">
                                                <input type="file" name="" id="groupimage" placeholder="Total Participants">
                                              </div>
                                              <br>
                                        <div class="quiz-inp-wrap mt-0">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
                                          <input class="quiz-inp" type="text" name="" id="quiztitle" placeholder="Enter Title">
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
                                        <div class="quiz-inp-wrap mt-0">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-person"></i></span>
                                          <input class="quiz-inp" type="number" name="" id="totalparticipants" placeholder="Total Participants">
                                        </div>
                                        <br>
                                        <div class="quiz-inp-wrap mt-0">
                                          <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
                                          <input class="quiz-inp" type="text" name="" id="priceperperson" placeholder="Price per Person in dollars (e.g 15.0, 17)">
                                        </div>
                                        <br>
                                        <div class="row"><div class="col-lg-4 quiz-inp-wrap"><label>Register Start date</label></div></div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                          <input class="quiz-inp" type="date" name="" id="registerstartdate" placeholder="Start Date and Time">
                                        </div>
                                        <br>
                                        <div class="row"><div class="col-lg-4 quiz-inp-wrap"><label>Register End date</label></div></div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                          <input class="quiz-inp" type="date" name="" id="registerenddate" placeholder="End Date and Time">
                                        </div>
                                        <br>

                                        <div class="row"><div class="col-lg-4 quiz-inp-wrap"><label>Classes Start date</label></div></div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                          <input class="quiz-inp" type="date" name="" id="classstartdate" placeholder="Start Date and Time">
                                        </div>
                                        <br>
                                        <div class="row"><div class="col-lg-4 quiz-inp-wrap"><label>Classes End date</label></div></div>
                                        <div class="quiz-inp-wrap">
                                          <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                          <input class="quiz-inp" type="date" name="" id="classenddate" placeholder="End Date and Time">
                                        </div>

                                        <div class="create-btn">
                                          <div class="col-lg-1"></div>
                                          <a class="theme-btn green" id="create">Create</a>
                                        </div>
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

$("#create").click(function(){
  groupimage=$("#groupimage").val()
grouptitle=$("#grouptitle").val()
teaches_level=$("#teaches_level").val()
subjectt=$("#subjectt").val()
totalparticipants=$("#totalparticipants").val()
priceperperson=$("#priceperperson").val()
registerstartdate=$("#registerstartdate").val()
registerenddate=$("#registerenddate").val()
classstartdate=$("#classstartdate").val()
classenddate=$("#classenddate").val()
})
  </script>
  </body>
</html>

@include('/tutor/common/footer')
