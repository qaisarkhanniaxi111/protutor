@include('/tutor/common/header')
@include('/tutor/common/sidebar')
@include('tutor.common.styles')

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
        bottom: 10px;
        /* Adjust the distance from the bottom as needed */
        left: 50%;
        transform: translateX(-50%);
        background-color: #FF6C0B;
        /* Customize button background color */
        color: #fff;
        /* Customize button text color */
        padding: 8px 12px;
        border-radius: 4px;
        text-decoration: none;
        opacity: 0;
        /* Initially, hide the button */
        transition: opacity 0.3s;
        /* Add a transition effect to the button */
    }

    .image-label:hover .view-button {
        opacity: 1;
        /* Show the button on hover */
    }

    .view-button:hover {
        background-color: #FFA545;
        /* Customize button background color on hover */
    }


    .row {
        display: flex;
        justify-content: space-between;
        /* Optional, to evenly space the columns */
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


    <!-- Side-bar -->

    <!-- Container -->
    <section class="wrapper">
        <div class="page-title">
            <h1>Group Lessons</h1>
        </div>

        <div>

            @include('tutor.GroupLesson.header')

            <div class="tab-content pt-3">

             <div class="tab-pane fade show active" id="tab-1">

                        <div class="box">



                            <div class="table-responsive">
                                <table class="table quiz-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Class / Grade</th>
                                            <th>Course</th>
                                            <th>Start Date & Time</th>
                                            <th>End Date & Time</th>
                                            <th>Total Students</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($groupLessons as $groupLesson)
                                            <tr valign='middle'>
                                                <td>{{ $groupLesson['title'] }}</td>
                                                @foreach ($teaches_levels as $teach_level)
                                                    @if ($groupLesson['teach_level_id'] == $teach_level->id)
                                                        <td>{{ $teach_level->teaches_level }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($subjects as $subject)
                                                    @if ($groupLesson['subject_id'] == $subject->id)
                                                        <td>{{ $subject->subject }}</td>
                                                    @endif
                                                @endforeach
                                                <td>{{ $groupLesson['class_start_date'] }}</td>
                                                <td>{{ $groupLesson['class_end_date'] }}</td>
                                                <td>{{ $groupLesson['participants'] }}</td>
                                                <td>
                                                    <a href="{{ route('show.groupLesson', $groupLesson['id']) }}"
                                                        class="border-0 bg-transparent"><i
                                                            class="fa-solid fa-eye fs-4 text-primary"></i></a>
                                                    <a href="{{ route('edit.groupLesson', $groupLesson['id']) }}"
                                                        class="border-0 bg-transparent"><i
                                                            class="fa-solid fa-pen-to-square fs-4  mx-3 text-primary"></i></a>
                                                    <a href="{{ route('delete.groupLesson', $groupLesson['id']) }}"
                                                        class="border-0 bg-transparent"><i
                                                            class="fa-solid fa-trash fs-4 text-danger"></i></a>
                                                </td>
                                            </tr>
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



    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/custom.js"></script>
    @include('tutor.common.scripts')

</body>

</html>

{{-- @include('/tutor/common/footer') --}}
