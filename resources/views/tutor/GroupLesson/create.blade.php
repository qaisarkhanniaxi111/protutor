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
                    <form action="{{ route('store.groupLesson') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">

                                    <div class="quiz-inp-wrap">
                                        <input type="file" name="image" id="groupimage"
                                            placeholder="">
                                        <p class="text-danger">
                                            @error('image')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <br>
                                    <div class="quiz-inp-wrap mt-0">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
                                        <input class="quiz-inp" type="text" name="title" id="quiztitle"
                                            placeholder="Enter Title" value="{{ old('title') }}">
                                        <p class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="quiz-inp-wrap">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-star"></i></span>
                                        <select required class="quiz-inp" name="teaches_level" id="teaches_level">
                                            <option value="" disabled selected>Choose Option</option>
                                            @foreach ($teaches_levels as $teach_level)
                                                <option value="{{ $teach_level->id }}">
                                                    {{ $teach_level->teaches_level }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <p class="text-danger">
                                            @error('teaches_level')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="quiz-inp-wrap">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-book-bookmark"></i></span>
                                        <select class="quiz-inp" name="subject" id="subjectt">
                                            <option value="" disabled selected>Choose Option</option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->subject }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">
                                            @error('subject')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <br>
                                    <div class="quiz-inp-wrap mt-0">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-person"></i></span>
                                        <input class="quiz-inp" type="number" name="total_Participants"
                                            id="totalparticipants" placeholder="Total Participants"
                                            value="{{ old('total_Participants') }}">
                                        <p class="text-danger">
                                            @error('total_Participants')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <br>
                                    <div class="quiz-inp-wrap mt-0">
                                        <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
                                        <input class="quiz-inp" type="number" name="price" id="priceperperson"
                                            placeholder="Price per Person in dollars (e.g 15.0, 17)"
                                            value="{{ old('price') }}">

                                        <p class="text-danger">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 quiz-inp-wrap"><label>Register Start date</label>
                                        </div>
                                    </div>
                                    <div class="quiz-inp-wrap">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                        <input class="quiz-inp" type="date" name="register_Start_Date"
                                            id="registerstartdate" placeholder="Start Date and Time"
                                            value="{{ old('register_Start_Date') }}">
                                        <p class="text-danger">
                                            @error('register_Start_Date')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 quiz-inp-wrap"><label>Register End date</label>
                                        </div>
                                    </div>
                                    <div class="quiz-inp-wrap">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                        <input class="quiz-inp" type="date" name="register_End_Date"
                                            id="registerenddate" placeholder="End Date and Time"
                                            value="{{ old('register_End_Date') }}">

                                        <p class="text-danger">
                                            @error('register_End_Date')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-lg-4 quiz-inp-wrap"><label>Classes Start date</label>
                                        </div>
                                    </div>
                                    <div class="quiz-inp-wrap">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                        <input class="quiz-inp" type="date" name="class_Start_Date"
                                            id="classstartdate" placeholder="Start Date and Time"
                                            value="{{ old('class_Start_Date') }}">

                                        <p class="text-danger">
                                            @error('class_Start_Date')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4 quiz-inp-wrap"><label>Classes End date</label>
                                        </div>
                                    </div>
                                    <div class="quiz-inp-wrap">
                                        <span class="quiz-inp-icon"><i class="fa-solid fa-calendar"></i></span>
                                        <input class="quiz-inp" type="date" name="class_End_Date"
                                            id="classenddate" placeholder="End Date and Time"
                                            value="{{ old('class_End_Date') }}">

                                        <p class="text-danger">
                                            @error('class_End_Date')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="create-btn">
                                        <div class="col-lg-1"></div>
                                        <button class="theme-btn green" id="create">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
