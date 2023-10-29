@include('/tutor/common/header')
@include('/tutor/common/sidebar')
<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.png">
   

    {{-- DataTable CSS  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

</head>


<body>
    <div id="message">

    </div>

    <!-- Side-bar -->
    <!-- Modals Start -->
    <!-- View and Edit and Update Modal start -->
    <div class="modal fade" id="GroupLessonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="GroupLessonModalLabel">GroupLesson</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="groupLessonModalBody">

                </div>

            </div>
        </div>
    </div>
    <!-- View and Edit and Update Modal start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Create Plan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="plan-error"></div>
                    <div class="card mt-3 mb-5" style="min-height:500px">
                        <div class="card-header p-3">

                            <h5 class="mb-3">Add Classes/Quizes</h5>
                            <div class="row g-3 align-items-center">
                                <div class="col-xl-2">
                                    <div class="form-check-inline">

                                        <input type="radio" name="type" value="Class">
                                        <label for="" class="form-check-label">Class</label>
                                    </div>
                                    <div class="form-check-inline">

                                        <input type="radio" name="type" id="itemType" value="Quiz">
                                        <label for="" class="form-check-label">Quiz</label>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col">
                                            <input type="time" class="form-control" id="time">
                                        </div>
                                        <div class="col">
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <button type="button" id="planItemBtn" onclick="addOrUpdatePlanItem()"
                                        class="btn btn-success btn-sm">Add</button>
                                </div>
                            </div>






                        </div>
                        <div class="card-body">
                            <div class="table-responsive mb-4">
                                <table class="table quiz-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Time</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="planItemsList">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modals End -->

    <!-- Container -->
    <section class="wrapper">
        <div class="page-title">
            <h1>Group Lessons</h1>
        </div>

        <div>
            <ul class="nav tab-nav">

                <span class="active" data-bs-toggle="tab" data-bs-target="#tab-1"></span>


                <li class="nav-item">


                    <button id="createQuiz" data-bs-toggle="tab" data-bs-target="#tab-3">

                        <span><i class="fa-solid fa-plus"></i></span> Create Group
                    </button>
                </li>

                <li class="nav-item">

                    <button data-bs-toggle="tab" data-bs-target="#tab-2">

                        <span><i class="fa-solid fa-square-poll-horizontal"></i></span> Active <small
                            id="totalQuizzes"></small>
                    </button>
                </li>

                <li class="nav-item">
                    <button data-bs-toggle="tab" data-bs-target="#tab-7">
                        <span><i class="fa-solid fa-check-double"></i></span> Completed <small
                            id="expiredQuizes"></small>
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




                        {{-- first Table  --}}
                        <div class="table-responsive">
                            <table class="table quiz-table">
                                <thead>
                                    <tr>
                                        <td>Title</td>
                                        <td>Class / Grade</td>
                                        <td>Course</td>
                                        <td>Start Date & Time</td>
                                        <td>End Date & Time</td>
                                        <td>Total Students</td>
                                        <td>Total Registered</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($groupLessonsCompleted as $groupLesson)
                                        <tr valign='middle'>
                                            <td>{{ $groupLesson['title'] }}</td>
                                            <td>
                                            @foreach ($teaches_levels as $teach_level)
                                                @if ($groupLesson['teach_level_id'] == $teach_level->id)
                                                    {{ $teach_level->teaches_level }}
                                                @endif
                                            @endforeach
                                        </td>
                                            <td>
                                              
                                                @foreach ($allSubjects as $subject)
                                                
                                                @if ($groupLesson['subject_id'] == $subject->id)
                                                    {{ $subject->subject }} 
                                                @endif
                                            @endforeach
                                        </td>
                                            <td>{{ date('m-d-Y', strtotime($groupLesson['registration_start_date'])) }}
                                            </td>
                                            <td>{{ date('m-d-Y', strtotime($groupLesson['registration_end_date'])) }}
                                            </td>
                                            <td>{{ $groupLesson['participants'] }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {!! $groupLessonsCompleted->links() !!}
                            </div>
                        </div>
                    </div>
                </div>



                <div class="tab-pane fade" id="tab-2">

                    <div class="box">
                        <div class="tab-title flex">
                            <div>
                                <h2>Group Lessons</h2>
                                <h3>All Active Groups</h3>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table quiz-table DataTable" class="display">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="table-title">Title</span>

                                        </th>
                                        <th data-orderable="false">
                                            <span class="table-title">Class / Grade</span>

                                        </th>
                                        <th data-orderable="false">
                                            <span class="table-title">Course </span>

                                        </th>


                                        <th data-orderable="false" data-searchable="false">
                                            <span class="table-title">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="allUncompletedGroupLessons">




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-7">
                    <div class="box">
                        <div class="tab-title flex">
                            <div>
                                <h2>Group Lessons</h2>
                                <h3>Completed Groups</h3>
                            </div>

                        </div>




                        {{-- second Table  --}}
                        <div class="table-responsive">
                            <table class="table quiz-table DataTable">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="table-title">Title</span>

                                        </th>
                                        <th>
                                            <span class="table-title">Class / Grade </span>

                                        </th>
                                        <th>
                                            <span class="table-title">Course </span>

                                        </th>

                                        <th>
                                            <span class="table-title">Start Date</span>

                                        </th>

                                        <th>
                                            <span class="table-title">End Date </span>

                                        </th>

                                        <th data-orderable="false">
                                            <span class="table-title">Actions</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody id="allCompletedGroupLessons">




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





                {{-- Create Group Lessons  --}}

                <div class="tab-pane fade" id="tab-3">


                    <div id="q-new1">
                        <br>
                        <div class="box">
                            <form id="ajaxForm">

                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div id="createGroupLessonMsg">

                                            </div>

                                            <div class="quiz-inp-wrap">
                                                <input type="file" name="image" id="groupimage"
                                                    placeholder="Total Participants" class="form-control">
                                                <p class="text-danger error-msg" id="lesson_image">

                                                </p>
                                            </div>
                                            <br>
                                            <div class="quiz-inp-wrap mt-0">
                                                <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
                                                <input class="quiz-inp" type="text" name="title" id="quiztitle"
                                                    placeholder="Enter Title">
                                                <p class="text-danger error-msg" id="lesson_title">

                                                </p>
                                            </div>
                                            <div class="quiz-inp-wrap">
                                                <span class="quiz-inp-icon"><i class="fa-solid fa-star"></i></span>
                                                <select required class="quiz-inp" name="teaches_level"
                                                    id="teaches_level">
                                                    <option value="">Choose Option</option>
                                                    @foreach ($teaches_levels as $teach_level)
                                                        <option value="{{ $teach_level->id }}">
                                                            {{ $teach_level->teaches_level }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                <p class="text-danger error-msg" id="lesson_teaches_level">

                                                </p>
                                            </div>
                                            <div class="quiz-inp-wrap">
                                                <span class="quiz-inp-icon"><i
                                                        class="fa-solid fa-book-bookmark"></i></span>
                                                <select class="quiz-inp" name="subject" id="subjectt">
                                                    <option value="16">Choose Option</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">{{ $subject->subject }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <p class="text-danger error-msg" id="lesson_subject">

                                                </p>
                                            </div>
                                            <br>
                                            <div class="quiz-inp-wrap mt-0">
                                                <span class="quiz-inp-icon"><i class="fa-solid fa-person"></i></span>
                                                <input class="quiz-inp" type="number" name="total_Participants"
                                                    id="totalparticipants" placeholder="Total Participants">
                                                <p class="text-danger error-msg" id="lesson_total_Participants">

                                                </p>
                                            </div>
                                            <br>
                                            <div class="quiz-inp-wrap mt-0">
                                                <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
                                                <input class="quiz-inp" type="number" name="price"
                                                    id="priceperperson"
                                                    placeholder="Price per Person in dollars (e.g 15.0, 17)">

                                                <p class="text-danger error-msg" id="lesson_price">

                                                </p>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-4 quiz-inp-wrap"><label>Register Start date</label>
                                                </div>
                                            </div>
                                            <div class="quiz-inp-wrap mt-0">
                                                <span class="quiz-inp-icon"><i
                                                        class="fa-solid fa-calendar"></i></span>
                                                <input class="quiz-inp" type="date" name="register_Start_Date"
                                                    id="registerstartdate" placeholder="Start Date and Time" onchange="document.querySelector('#registerenddate').removeAttribute('disabled');document.querySelector('#registerenddate').min=this.value">
                                                <p class="text-danger error-msg" id="lesson_register_Start_Date">

                                                </p>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-4 quiz-inp-wrap"><label>Register End date</label>
                                                </div>
                                            </div>
                                            <div class="quiz-inp-wrap mt-0">
                                                <span class="quiz-inp-icon"><i
                                                        class="fa-solid fa-calendar"></i></span>
                                                <input class="quiz-inp" type="date" name="register_End_Date"
                                                    id="registerenddate" placeholder="End Date and Time" disabled  onchange="document.querySelector('#classStartDate').removeAttribute('disabled');document.querySelector('#classStartDate').min=this.value">

                                                <p class="text-danger error-msg" id="lesson_register_End_Date">

                                                </p>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-4 quiz-inp-wrap"><label>Classes Start date</label>
                                                </div>
                                            </div>
                                            <div class="quiz-inp-wrap mt-0">
                                                <span class="quiz-inp-icon"><i
                                                        class="fa-solid fa-calendar"></i></span>
                                                <input class="quiz-inp" type="date" name="class_Start_Date"
                                                    id="classStartDate" placeholder="Start Date and Time" disabled   onchange="document.querySelector('#classEndDate').removeAttribute('disabled');document.querySelector('#classEndDate').min=this.value">

                                                <p class="text-danger error-msg" id="lesson_class_Start_Date">

                                                </p>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-4 quiz-inp-wrap"><label>Classes End date</label>
                                                </div>
                                            </div>
                                            <div class="quiz-inp-wrap mt-0">
                                                <span class="quiz-inp-icon"><i
                                                        class="fa-solid fa-calendar"></i></span>
                                                <input class="quiz-inp" type="date" name="class_End_Date"
                                                    id="classEndDate" placeholder="End Date and Time" disabled>

                                                <p class="text-danger error-msg" id="lesson_class_End_Date">

                                                </p>

                                            </div>
                                            <div class="mt-5 d-flex align-items-center">
                                                <button type="button" class="btn btn-dark px-5"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    onclick="setRange()">Add</button>
                                                <b class="text-success p-3 error-msg" id="make_plan">
                                                    Add a Plan for this Group Lesson ( optional) 
                                                </b>
                                            </div>
                                            <div class="create-btn">
                                                <div class="col-lg-1"></div>
                                                <button type="button" class="theme-btn green"
                                                    id="submit">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                            <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table quiz-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="table-title">Quiz Title <i
                                                    class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp"><input type="text"
                                                    placeholder="Enter Quiz Title to Search"
                                                    id="search_drafts_quiz_title" onkeyup="filterDrafts()"></span>
                                        </th>
                                        <th>
                                            <span class="table-title">Class / Grade <i
                                                    class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp">
                                                <select name="" id="search_teaches_level_drafts_quiz"
                                                    onchange="filterDrafts()">
                                                    <option value="Select Class / Grade">Select Class / Grade
                                                    </option>
                                                    @foreach ($teaches_levels as $t)
                                                        <option value="{{ $t->teaches_level }}">
                                                            {{ $t->teaches_level }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </th>
                                        <th>
                                            <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp">
                                                <select name="" id="search_subject_drafts_quiz"
                                                    onchange="filterDrafts()">
                                                    <option value="Select Course">Select Course</option>
                                                    @foreach ($subjects as $t)
                                                        <option value="{{ $t->subject }}">{{ $t->subject }}
                                                        </option>
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
                            <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table quiz-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="table-title">Quiz Title <i
                                                    class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp"><input type="text"
                                                    placeholder="Enter Quiz Title to Search"
                                                    id="upcoming_quiz_title_filter" onkeyup="upcomingFilter()"></span>
                                        </th>
                                        <th>
                                            <span class="table-title">Class / Grade <i
                                                    class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp">
                                                <select name="" id="upcoming_class_filter"
                                                    onchange="upcomingFilter()">
                                                    <option value="Select Class / Grade">Select Grade / Class
                                                    </option>
                                                    @foreach ($teaches_levels as $t)
                                                        <option value="{{ $t->teaches_level }}">
                                                            {{ $t->teaches_level }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </th>
                                        <th>
                                            <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp">
                                                <select name="" id="upcoming_subject_filter"
                                                    onchange="upcomingFilter()">
                                                    <option value="Select Course">Select Course</option>
                                                    @foreach ($subjects as $s)
                                                        <option value="{{ $s->subject }}">{{ $s->subject }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </th>
                                        <th>
                                            <span class="table-title">Start Date <i
                                                    class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp"><input type="date"
                                                    placeholder="Enter Name to Search" id="upcoming_start_date_filter"
                                                    onchange="upcomingFilter()"></span>
                                        </th>
                                        <th>
                                            <span class="table-title">End Date <i class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp"><input type="date"
                                                    id="upcoming_end_date_filter" onchange="upcomingFilter()"
                                                    placeholder="Enter Name to Search"></span>
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
                            <div class="quiz-filter filter-action">Filters <i class="fa-solid fa-filter"></i>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table quiz-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="table-title">Quiz Title <i
                                                    class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp"><input type="text"
                                                    placeholder="Enter Quiz Title to Search"></span>
                                        </th>
                                        <th>
                                            <span class="table-title">Class / Grade <i
                                                    class="fa-solid fa-sort"></i></span>
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
                                            <span class="table-title">Completed on & Time <i
                                                    class="fa-solid fa-sort"></i></span>
                                            <span class="table-inp"><input type="text"
                                                    placeholder="Enter Name to Search"></span>
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
                                            <a class="tableLink" href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                                            <a class="tableLink grey" href=""><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a class="tableLink green" href=""><i
                                                    class="fa-regular fa-clock"></i></a>
                                            <a class="tableLink blue" href=""><i
                                                    class="fa-solid fa-pen-clip"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quiz Title</td>
                                        <td>Class / Grade</td>
                                        <td>Course</td>
                                        <td>20-10-2021 | 10:00 PM</td>
                                        <td>
                                            <a class="tableLink" href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                                            <a class="tableLink grey" href=""><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a class="tableLink green" href=""><i
                                                    class="fa-regular fa-clock"></i></a>
                                            <a class="tableLink blue" href=""><i
                                                    class="fa-solid fa-pen-clip"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quiz Title</td>
                                        <td>Class / Grade</td>
                                        <td>Course</td>
                                        <td>20-10-2021 | 10:00 PM</td>
                                        <td>
                                            <a class="tableLink" href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                                            <a class="tableLink grey" href=""><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a class="tableLink green" href=""><i
                                                    class="fa-regular fa-clock"></i></a>
                                            <a class="tableLink blue" href=""><i
                                                    class="fa-solid fa-pen-clip"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quiz Title</td>
                                        <td>Class / Grade</td>
                                        <td>Course</td>
                                        <td>20-10-2021 | 10:00 PM</td>
                                        <td>
                                            <a class="tableLink" href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                                            <a class="tableLink grey" href=""><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a class="tableLink green" href=""><i
                                                    class="fa-regular fa-clock"></i></a>
                                            <a class="tableLink blue" href=""><i
                                                    class="fa-solid fa-pen-clip"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quiz Title</td>
                                        <td>Class / Grade</td>
                                        <td>Course</td>
                                        <td>20-10-2021 | 10:00 PM</td>
                                        <td>
                                            <a class="tableLink" href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                                            <a class="tableLink grey" href=""><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a class="tableLink green" href=""><i
                                                    class="fa-regular fa-clock"></i></a>
                                            <a class="tableLink blue" href=""><i
                                                    class="fa-solid fa-pen-clip"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quiz Title</td>
                                        <td>Class / Grade</td>
                                        <td>Course</td>
                                        <td>20-10-2021 | 10:00 PM</td>
                                        <td>
                                            <a class="tableLink" href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
                                            <a class="tableLink grey" href=""><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a class="tableLink green" href=""><i
                                                    class="fa-regular fa-clock"></i></a>
                                            <a class="tableLink blue" href=""><i
                                                    class="fa-solid fa-pen-clip"></i></a>
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


    <div class="modal common-modal modal-full" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>
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
                            <div class="quiz-head">
                                <h5><i class="fa-solid fa-scale-balanced"></i> Quiz Instructions</h5>
                            </div>
                            <div class="container">
                                <div class="container-in">
                                    <p class="text-large text-center" id="previewQuizInstructions"></p>
                                </div>
                            </div>
                            <div class="tab-btn-group">
                                <div id="viewpart1">
                                    <a class="theme-btn red" href="" data-bs-toggle="modal"
                                        data-bs-target="#delQuiz">Delete</a>
                                    <a class="theme-btn green" href="" data-bs-toggle="modal"
                                        data-bs-target="#pubQuiz">Publish</a>
                                </div>
                                <a class="theme-btn grey" id="nextPreviewButton2">Next <i
                                        class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="menu1">
                            <div class="quiz-head">
                                <h5><i class="fa-solid fa-file-invoice"></i> <span id="previewQuestionNo"></span></h5>
                            </div>
                            <div id="previewQuestionArea"></div>
                            <div class="tab-btn-group">
                                <a class="theme-btn grey" id="previousPreviewButton2"><i
                                        class="fa-solid fa-angle-left"></i> Back</a>
                                <div id="viewpart2">
                                    <a class="theme-btn red" href="" data-bs-toggle="modal"
                                        data-bs-target="#delQuiz">Delete</a>
                                    <a class="theme-btn green" href="" data-bs-toggle="modal"
                                        data-bs-target="#pubQuiz">Publish</a>
                                </div>
                                <a class="theme-btn grey" id="nextPreviewButton">Next <i
                                        class="fa-solid fa-angle-right"></i></a>
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
                    <button type="button" data-bs-dismiss="modal" id="deleteQuiz"
                        class="theme-btn btn-round red">Delete</button>
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
                    <button type="button" data-bs-dismiss="modal" id="publishQuiz"
                        class="theme-btn btn-round green">Publish</button>
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

    {{-- DataTable JavaScript  --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        $("#create").click(function() {
            groupimage = $("#groupimage").val()
            grouptitle = $("#grouptitle").val()
            teaches_level = $("#teaches_level").val()
            subjectt = $("#subjectt").val()
            totalparticipants = $("#totalparticipants").val()
            priceperperson = $("#priceperperson").val()
            registerstartdate = $("#registerstartdate").val()
            registerenddate = $("#registerenddate").val()
            classstartdate = $("#classstartdate").val()
            classenddate = $("#classenddate").val()
        });
        let table = new DataTable('.DataTable', {
            responsive: true
        });


        // Data array to store plan items
        let planItems = [];
        let editingItemId = null; // Track the item being edited
        // set and Check Range 
        function setRange() {
            updatePlanList();
            if (checkRange()) {
                $("#plan-error").html('')
                date.min = classStartDate.value;
                date.max = classEndDate.value;
            } else {
                $("#plan-error").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Note!</strong> Please select classes start and end date before creating plan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`)
            }
        }

        function convertDateFormat(inputDate) {
            // Split the input date by "-"
            const parts = inputDate.split("-");

            // Rearrange the parts to "mm-dd-yy" format
            const outputDate = `${parts[1]}-${parts[2]}-${parts[0]}`;

            return outputDate;
        }

        function convertTimeFormat(inputTime) {
            const date = new Date(`2000-01-01 ${inputTime}`);
            const options = {
                hour: 'numeric',
                minute: '2-digit',
                hour12: true
            };
            const outputTime = date.toLocaleTimeString('en-US', options);
            return outputTime;
        }

        function checkRange() {
            if (classStartDate.value != '' && classEndDate.value != '') {

                return true;
            } else {
                return false;
            }

        }
        // Function to add plan items or update existing item
        function addOrUpdatePlanItem() {
            if (checkRange()) {


                const date = document.getElementById("date").value;
                const time = document.getElementById("time").value;
                const selectedType = document.querySelector('input[name="type"]:checked');
                const itemType = selectedType.value;

                if (editingItemId !== null) {
                    // Update existing item
                    const itemIndex = planItems.findIndex(item => item.id === editingItemId);
                    if (itemIndex !== -1) {
                        planItems[itemIndex].date = date;
                        planItems[itemIndex].time = time;
                        planItems[itemIndex].planItemType = itemType;
                    }
                    editingItemId = null; // Clear editing mode
                    planItemBtn.innerText = "Add"
                } else {
                    // Add new item
                    const newItem = {
                        id: Date.now(),
                        date: date,
                        time: convertTimeFormat(time),
                        planItemType: itemType
                    };
                    planItems.push(newItem);
                }

                updatePlanList();
                resetForm();
            } else {
                $("#plan-error").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Note!</strong> Please select classes start and end date before creating plan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`)
            }
        }
        // Function to reset the form
        function resetForm() {
            document.getElementById("date").value = "";
            document.getElementById("time").value = "";
            // Uncheck all radio buttons
            const typeRadios = document.querySelectorAll('input[name="type"]');
            typeRadios.forEach(radio => {
                radio.checked = false;
            });
        }

        // Function to update the plan items list in the HTML
        function updatePlanList() {
            const planList = document.getElementById("planItemsList");

            items = ''
            planItems.forEach(item => {
                items += `<tr>
                     <td>${item.planItemType}</td>
                     <td>${item.time}</td>
                      <td>${convertDateFormat(item.date)}</td>
                      <td>
                        <button  onclick="editPlanItems(${item.id})" type="button" class="border-0 bg-transparent"><i class="fa-solid fa-pen-to-square fs-4  mx-3 text-primary"></i></button>
                        <button  onclick="deletePlanItems(${item.id})" type="button" class="border-0 bg-transparent"><i class="fa-solid fa-trash fs-4 text-danger"></i></button>
                      </td>
                    </tr>`

            });
            planList.innerHTML = items;

        }
        // Function to edit plan items
        function editPlanItems(id) {
            planItemBtn.innerText = "Edit"
            editingItemId = id;
            const planItem = planItems.find(item => item.id === id);
            if (planItem) {
                document.getElementById("date").value = planItem.date;
                document.getElementById("time").value = planItem.time;
                // Check the appropriate radio button
                const typeRadio = document.querySelector(`input[name="type"][value="${planItem.planItemType}"]`);
                if (typeRadio) {
                    typeRadio.checked = true;
                }
            }
        }
        // Function to delete plan items
        function deletePlanItems(id) {
            planItems = planItems.filter(item => item.id !== id);
            updatePlanList();
            resetForm();
        }
        // create groupLesson Ajax 

        let formData = $('#ajaxForm')[0];

        $("#submit").click(function() {

            $(this).html(`Creating <div class="spinner-border text-light spinner-border-sm" role="status">
  <span class="sr-only">Loading...</span>
</div>`);
            $('.error-msg').html('');
            let form = new FormData(formData);
            console.log(planItems)
            planItemsJson = JSON.stringify(planItems);
            encodedPlanItems = encodeURIComponent(planItemsJson);
            console.log(encodeURIComponent);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({

                // url: '{{ route('store.groupLesson') }}/?plan=' + encodedPlanItems,
                url: '{{ route('store.groupLesson') }}',
                method: 'POST',
                processData: false,
                cache: false,
                contentType: false,
                data: form,
                success: function(result) {
                    console.log(result);
                    storePlanIntoDatabase(result.lessonId);
                    planItems = [];
                    $("#submit").html('Create');
                    fetchUncompletedGroupLessons();
                    $("#ajaxForm")[0].reset();
                    $("#createGroupLessonMsg").html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Created Successfully!</strong> New Group Lesson has been added.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`);

                },
                error: function(error) {
                    if (error) {

                        $("#createGroupLessonMsg").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Not Created Successfully!</strong> All fields are required , so , please fill up the remaining fields.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`)
                        $("#submit").html('Create');
                        console.log(error.responseJSON.errors);
                        $('#lesson_image').html(error.responseJSON.errors.image);
                        $('#lesson_price').html(error.responseJSON.errors.price);
                        $('#lesson_title').html(error.responseJSON.errors.title);
                        $('#lesson_teaches_level').html(error.responseJSON.errors.teaches_level);
                        $('#lesson_subject').html(error.responseJSON.errors.subject);
                        $('#lesson_total_Participants').html(error.responseJSON.errors
                            .total_Participants);
                        $('#lesson_register_Start_Date').html(error.responseJSON.errors
                            .register_Start_Date);
                        $('#lesson_register_End_Date').html(error.responseJSON.errors
                            .register_End_Date);
                        $('#lesson_class_Start_Date').html(error.responseJSON.errors.class_Start_Date);
                        $('#lesson_class_End_Date').html(error.responseJSON.errors.class_End_Date);
                        if (error.responseJSON.errors.plan) {
                            $('#make_plan').html(error.responseJSON.errors.plan);
                            $("#createGroupLessonMsg").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Not Created Successfully!</strong> .Please Make a Before Creating Group Lesson
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`)
                        }

                    }
                }
            });
        });


        // storePlanIntoDatabase 
        function storePlanIntoDatabase(lessonId){
            planItemsJson = JSON.stringify(planItems);
            encodedPlanItems = encodeURIComponent(planItemsJson);
            $.ajax({
                url: '{{ route('store.groupLesson.plan') }}/?lessonId=' + lessonId + '&plan=' + encodedPlanItems,
                method: 'GET',
                processData: false,
                cache: false,
                contentType: false,
                success: function(data){
                    console.log(data)
                }
            });

        }
        // Display Uncompleted GroupLessons Ajax 
        function fetchUncompletedGroupLessons() {
            $.ajax({
                url: '{{ route('uncomplete.groupLesson') }}',
                method: 'GET',
                processData: false,
                contentType: false,
                success: function(result) {

                    let groupLessons = '';
                    if (Array.isArray(result)) {
                        result.forEach((element, index) => {
                            groupLessons += `<tr valign='middle'>
                                            <td>${element['title']}</td>
                                            
                                            <td>${element['teach_level']['teaches_level']}</td>
                                               
                                            
                                            
                                                
                                             <td>${element['subject']['subject']}</td>
                                            

                                            <td>
                                                <a  type="button" data-bs-toggle="modal" data-bs-target="#GroupLessonModal" onclick="viewGroupLesson(${element['id']})"
                                                    class="border-0 bg-transparent"><i
                                                        class="fa-solid fa-eye fs-4 text-primary"></i></a>
                                                <a  type="button" data-bs-toggle="modal" data-bs-target="#GroupLessonModal" onclick="editGroupLesson(${element['id']})"
                                                    class="border-0 bg-transparent"><i
                                                        class="fa-solid fa-pen-to-square fs-4  mx-3 text-primary"></i></a>
                                                <a  onclick=" deleteGroupLesson(${element['id']})"
                                                    class="border-0 bg-transparent" style='cursor:pointer'><i
                                                        class="fa-solid fa-trash fs-4 text-danger"></i></a>
                                            </td>
                                        </tr>`;

                        });

                        $("#allUncompletedGroupLessons").html(groupLessons)
                    }
                },
                error: function(error) {
                    if (error) {
                        console.log("something is wrong")
                    }
                }
            });
        }
        fetchUncompletedGroupLessons();

        // Display Completed GroupLessons Ajax 
        function fetchCompletedGroupLessons() {
            $.ajax({
                url: '{{ route('complete.groupLesson') }}',
                method: 'GET',
                processData: false,
                contentType: false,
                success: function(result) {

                    let groupLessons = '';
                    if (Array.isArray(result)) {
                        result.forEach((element, index) => {
                            groupLessons += `<tr valign='middle'>
                                            <td>${element['title']}</td>
                                            
                                            <td>${element['teach_level']['teaches_level']}</td>
                                               
                                            
                                            
                                                
                                             <td>${element['subject']['subject']}</td>
                                             <td>${convertDateFormat(element['registration_start_date'])}</td>
                                             <td>${convertDateFormat(element['registration_end_date'])}</td>

                                            <td>
                                              <a  type="button" data-bs-toggle="modal" data-bs-target="#GroupLessonModal" onclick="viewGroupLesson(${element['id']})"
                                                    class="border-0 bg-transparent"><i
                                                        class="fa-solid fa-eye fs-4 text-primary"></i></a>
                                                <a  type="button" data-bs-toggle="modal" data-bs-target="#GroupLessonModal" onclick="editGroupLesson(${element['id']})"
                                                    class="border-0 bg-transparent"><i
                                                        class="fa-solid fa-pen-to-square fs-4  mx-3 text-primary"></i></a>
                                                <a  onclick=" deleteGroupLesson(${element['id']})"
                                                    class="border-0 bg-transparent" style='cursor:pointer'><i
                                                        class="fa-solid fa-trash fs-4 text-danger"></i></a>
                                            </td>
                                        </tr>`;

                        });

                        $("#allCompletedGroupLessons").html(groupLessons)
                    }
                },
                error: function(error) {
                    if (error) {
                        console.log("something is wrong")
                    }
                }
            });
        }
        fetchCompletedGroupLessons();

        function deleteGroupLesson(id) {
            $.ajax({
                url: `{{ route('delete.groupLesson', '') }}/${id}`,
                method: 'GET',
                processData: false,
                contentType: false,
                success: function(result) {
                    fetchUncompletedGroupLessons();
                    fetchCompletedGroupLessons();


                },
                error: function(error) {
                    if (error) {
                        console.log("something is wrong")
                    }
                }
            });
        }



        function viewGroupLesson(id) {
            $("#GroupLessonModalLabel").html("View Group Lesson");
            $.ajax({
                url: `{{ route('show.groupLesson', '') }}/${id}`,
                method: 'GET',
                processData: false,
                contentType: false,
                success: function(result) {
                    groupLessonModalBody.innerHTML = `<div class="row justify-content-center pb-5">
      <div class="col-lg-7">
        
          <img src="${result['gallery']['image']}" alt="" class="w-75 mx-auto d-block shadow">
          
          
          <div class="quiz-inp-wrap mt-3">
              <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
              <input class="quiz-inp" type="text" name="title" id="quiztitle"
                  placeholder="Enter Title" value="${result['title']}" readonly>
                  
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i class="fa-solid fa-star"></i></span>
              

                  <input class="quiz-inp" type="text" name="title" id="quiztitle"
                  placeholder="Enter Title" value="${result['teach_level']['teaches_level']}" readonly>
                  
                  
                  
              
              
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-book-bookmark"></i></span>
              
               
                  <input class="quiz-inp" type="text" name="title" id="quiztitle"
                  placeholder="Enter Title" value="${result['subject']['subject']}" readonly>
                   
                
              
              
          </div>
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa-solid fa-person"></i></span>
              <input class="quiz-inp" type="number" name="total_Participants"
                  id="totalparticipants" placeholder="Total Participants" value="${result['participants']}" readonly>
                  
          </div>
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
              <input class="quiz-inp" type="number" name="price"
                  id="priceperperson"
                  placeholder="Price per Person in dollars (e.g 15.0, 17)" value="${result['price']}" readonly>

                  
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Register Start date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
                      
              <input class="quiz-inp" type="date" name="register_Start_Date"
                  id="registerstartdate" placeholder="Start Date and Time" value="${result['registration_start_date']}" readonly>
                  
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Register End date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="register_End_Date"
                  id="registerenddate" placeholder="End Date and Time" value="${result['registration_end_date']}" readonly>

                  
          </div>
          <br>

          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Classes Start date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="class_Start_Date"
                  id="classstartdate" placeholder="Start Date and Time" value="${result['class_start_date']}" readonly>

                  
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap mt-3"><label>Classes End date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="class_End_Date"
                  id="classenddate" placeholder="End Date and Time" value="${result['class_end_date']}" readonly>

                  
          </div>

          
      </div>
  </div>`;

                },
                error: function(error) {
                    if (error) {
                        console.log("something is wrong")
                    }
                }
            });
        }




        function editGroupLesson(id) {
            $("#GroupLessonModalLabel").html("Update Group Lesson");
            $.ajax({
                url: `{{ route('edit.groupLesson', '') }}/${id}`,
                method: 'GET',
                processData: false,
                contentType: false,
                success: function(result) {

                    let subjects = ''
                    result['subjects'].forEach(element => {

                        if (result['groupLesson']['subject']['id'] != element['id']) {

                            subjects +=
                                `<option value="${element['id']}">${element['subject']}</option>`;
                        }
                    });
                    let teaches_levels = ''
                    result['teaches_levels'].forEach(element => {
                        if (result['groupLesson']['teach_level']['id'] != element['id']) {
                            teaches_levels +=
                                `<option value="${element['id']}">${element['teaches_level']}</option>`;
                        }
                    });

                    groupLessonModalBody.innerHTML = `<form id="updateGroupLessonForm">
@csrf
<div class="container">
  <div id="updateGroupLessonMsg"></div>
  <div class="row justify-content-center">
      <div class="col-lg-7">
        

          <br>
          <div class="row align-items-end mb-4 g-3">
            <div class="col-md"><img src="${result['groupLesson']['gallery']['image']}" alt="" class="shadow"></div>
            <div class="col-md"><input type="file" name="image" class="form-control"></div>
            <p class="text-danger" id="update_image"></p>
          </div>

          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
              <input class="quiz-inp" type="text" name="title" id="quiztitle"
                  placeholder="Enter Title" value="${result['groupLesson']['title']}">
                  <p class="text-danger" id="update_title"></p>
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i class="fa-solid fa-star"></i></span>
              <select required class="quiz-inp" name="teaches_level" id="teaches_level">
                  <option value="${result['groupLesson']['teach_level']['id']}" selected>${result['groupLesson']['teach_level']['teaches_level']}</option>
                  ${teaches_levels}

              </select>
              <p class="text-danger" id="update_teaches_level"></p>
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-book-bookmark"></i></span>
              <select class="quiz-inp" name="subject" id="subjectt">
                  <option value="${result['groupLesson']['subject']['id']}" selected>${result['groupLesson']['subject']['subject']}</option>
                 ${subjects}
              </select>
              <p class="text-danger" id="update_subject"></p>
          </div>
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa-solid fa-person"></i></span>
              <input class="quiz-inp" type="number" name="total_Participants"
                  id="totalparticipants" placeholder="Total Participants" value="${result['groupLesson']['participants']}">
                  <p class="text-danger" id="update_participants"></p>
          </div>
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
              <input class="quiz-inp" type="number" name="price"
                  id="priceperperson"
                  placeholder="Price per Person in dollars (e.g 15.0, 17)" value="${result['groupLesson']['price']}">

                  <p class="text-danger" id="update_price"></p>
          </div>
          <div class="quiz-inp-wrap mt-3">
              <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>

              <select class="quiz-inp" name="status" id="">
                <option value="${result['groupLesson']['is_completed']==1? 1 : 0}" selected>${result['groupLesson']['is_completed']==1?'Completed':'Active'}</option>
                <option value="${result['groupLesson']['is_completed']==1? 0 : 1}">${result['groupLesson']['is_completed']==1?'Active':'Completed'}</option>
                
                <p class="text-danger" id="update_status"></p>
               
               
              </select>


          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Register Start date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="register_Start_Date"
                  id="registerstartdate" placeholder="Start Date and Time" value="${result['groupLesson']['registration_start_date']}">
                  <p class="text-danger" id="update_registeration_start_date"></p>
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Register End date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="register_End_Date"
                  id="registerenddate" placeholder="End Date and Time" value="${result['groupLesson']['registration_end_date']}">

                  <p class="text-danger" id="update_registeration_end_date"></p>
          </div>
          <br>

          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Classes Start date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="class_Start_Date"
                  id="classstartdate" placeholder="Start Date and Time" value="${result['groupLesson']['class_start_date']}">

                  <p class="text-danger" id="update_class_start_date"></p>
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Classes End date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="class_End_Date"
                  id="classenddate" placeholder="End Date and Time" value="${result['groupLesson']['class_end_date']}">

                  <p class="text-danger" id="update_class_end_date"></p>
          </div>
          <input type="number" name="GroupLessonId" value="${id}" hidden>
          <div class="create-btn">
              <div class="col-lg-1"></div>
              <button type="button" class="theme-btn green" id="updateGroupLessonBtn" onclick="updateGroupLesson()">Update</button>
          </div>
      </div>
  </div>
</div>

</form>`

                },
                error: function(error) {
                    if (error) {
                        console.log("something is wrong")
                    }
                }
            });
        }

        // update groupLesson Ajax 


        function updateGroupLesson() {
            let updateFormData = $('#updateGroupLessonForm')[0];



            $("#updateGroupLessonBtn").html(`Updating`);
            $('.error-msg').html('');

            let form = new FormData(updateFormData);
            console.log(form)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('update.groupLesson') }}',
                method: 'POST',
                processData: false,
                cache: false,
                contentType: false,
                data: form,
                success: function(result) {

                    $("#updateGroupLessonBtn").html('Updated');
                    fetchUncompletedGroupLessons();
                    fetchCompletedGroupLessons();

                    $("#updateGroupLessonMsg").html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Updated Successfully!</strong> Group Lesson has been updated.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`)
                },
                error: function(error) {
                    if (error) {

                        $("#updateGroupLessonMsg").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Not Updated Successfully!</strong> All fields are required , so , please fill up the remaining fields.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`)
                        $("#updateGroupLessonBtn").html('Update');
                        console.log(error.responseJSON.errors);
                        $('#update_image').html(error.responseJSON.errors.image);
                        $('#update_price').html(error.responseJSON.errors.price);
                        $('#update_title').html(error.responseJSON.errors.title);
                        $('#update_teaches_level').html(error.responseJSON.errors.teaches_level);
                        $('#update_subject').html(error.responseJSON.errors.subject);
                        $('#update_participants').html(error.responseJSON.errors
                            .total_Participants);
                        $('#update_registeration_start_date').html(error.responseJSON.errors
                            .register_Start_Date);
                        $('#update_registeration_end_date').html(error.responseJSON.errors
                            .register_End_Date);
                        $('#update_class_start_date').html(error.responseJSON.errors.class_Start_Date);
                        $('#update_class_end_date').html(error.responseJSON.errors.class_End_Date);
                    }
                }
            });
        }
    </script>
</body>

</html>

@include('/tutor/common/footer')
