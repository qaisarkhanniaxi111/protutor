@extends('layouts.site')

@section('title', 'Group Lesson Details')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontpage_assets/css/common.css') }}">
@endsection

@section('content')
    <!-- start page title -->
    <div class="page-title">
        <div class="container">
            <h1>Group Lesson Details</h1>

            <div class="mt-2">
                @if (auth()->check())
                    @if (auth()->user()->role == 4)

                        @if ($paymentStatus == 'paid')
                            <h3><span class="badge bg-success">Paid</span></h3>
                        @elseif ($paymentStatus == 'unpaid' || $paymentStatus == '')
                            @if (groupLessonParticipantsReached($groupLesson->id) == true)
                                <h3><span class="badge bg-danger">Limit Reached</span></h3>
                            @else
                                <h3><span class="badge bg-danger">Unpaid</span></h3>
                            @endif
                        @endif

                    @endif
                @endif
            </div>

        </div>
    </div>


    <div class="container" id="lesson_details_container">
        <div class="">
            <div class="col-12">
                @if ($groupLesson)

                    <div class="text-center">
                        <img src="{{ $gallery ? $gallery->image : '' }}" alt="course img" style="width: 60%; height:40%; object-fit:contain;">
                    </div>

                    <div class="row">
                        <table class="table" id="lesson_details_table" style="margin-top: 5%;">
                            <thead>
                                <tr>
                                    <th scope="col">Rating</th>
                                    <td>
                                        <span>{{ number_format($groupLessonRating, 1) }}</span>
                                        @for ($i = 0; $i < floor($groupLessonRating); $i++)
                                            <span class="fa fa-star" style='color:yellow'></span>
                                        @endfor
                                        @if (floor($groupLessonRating) != $groupLessonRating)
                                            <span class="fa-solid fa-star-half" style='color:yellow'></span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Title</th>
                                    <td>{{ $groupLesson ? $groupLesson->title : '' }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Tutor</th>
                                    <td>{{ $tutor ? $tutor->fullname : '' }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Teach Level</th>
                                    <td>{{ $teachLevel ? $teachLevel->teaches_level : '' }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Subject</th>
                                    <td>{{ $subject ? $subject->subject : '' }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Participants</th>
                                    <td>{{ $groupLesson ? $groupLesson->participants : '' }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Price per student</th>
                                    <td>{{ config('protutor.currency') }}{{ $groupLesson ? $groupLesson->price : '' }} /
                                        Class</td>
                                </tr>

                                <tr>
                                    <th scope="col">Registration Start Date</th>
                                    <td>{{ $groupLesson ? date('m-d-Y', strtotime($groupLesson->registration_start_date)) : '' }}
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="col">Registration End Date</th>
                                    <td>{{ $groupLesson ? date('m-d-Y', strtotime($groupLesson->registration_end_date)) : '' }}
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="col">Class Start Date</th>
                                    <td>{{ $groupLesson ? date('m-d-Y', strtotime($groupLesson->class_start_date)) : '' }}
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="col">Class End Date</th>
                                    <td>{{ $groupLesson ? date('m-d-Y', strtotime($groupLesson->class_end_date)) : '' }}
                                    </td>
                                </tr>

                                </tbody>
                        </table>
                    </div>
                @else
                    <h3 class="text-danger text-center">No lesson found.</h3>
                @endif



            </div>
        </div>
    </div>

    <div class="container">

        @if ($groupLessonPlan ? true : false)
            <h1 class="h1-responsive">Group Lesson Plan</h1>
            <div class="row mt-4 mb-5">
                <div class="col-lg-9 mx-auto table-responsive">
                    <table class="table table-warning table-striped">
                        <tr>
                            <th>Sr.No</th>
                            <th>Type</th>
                            <th>Time</th>
                            <th>Date</th>
                        </tr>

                        @php
                            $i = 0;
                        @endphp
                        @foreach ($groupLessonPlan as $planItem)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $planItem ? $planItem['type'] : '' }}</td>
                                <td>{{ $planItem ? $planItem['time'] : '' }}</td>
                                <td>{{ $planItem ? $planItem['date'] : '' }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        @endif


        @if ($paymentStatus == 'paid')
            <div class="text-center">
                <a href="{{ url('chat/' . $tutor->id) }}" class="btn" style="background: #FF6C0B; color:white">Chat with
                    {{ $groupLesson->tutor ? $groupLesson->tutor->fullname : '' }}</a>
            </div>
        @elseif($paymentStatus == 'unpaid')
            @if (groupLessonParticipantsReached($groupLesson->id) == true)
                <h3 class="text-center"><span class="badge bg-danger">Limit Reached</span></h3>
            @else
                <div class="row">
                    <div class="splitscreen">
                        <div class="left">
                            <a href="{{ url('chat/' . $tutor->id) }}" class="btn"
                                style="background: #FF6C0B; color:white">Chat with
                                {{ $groupLesson->tutor ? $groupLesson->tutor->fullname : '' }}</a>
                        </div>
                        <div class="right">
                            <form method="post"
                                action="{{ route('payments.charge', $groupLesson ? $groupLesson->id : '') }}">
                                @csrf
                                <input type="hidden" name="student_id" value="{{ $student ? $student->id : null }}">
                                <input type="hidden" name="tutor_id" value="{{ $tutor->id }}">
                                <input type="number" name="price" value="{{ number_format($groupLesson->price, 0) }}"
                                    hidden>
                                <input type="number" name="group_lesson_id" value="{{ $groupLesson->id }}" hidden>
                                <button class="btn btn-primary">Enroll into the course</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        <div class="row text-center mt-5">
            <span id="error-msg" class="text-danger error-msgs"></span>
        </div>
    </div>


    @if ($ratingStatus)
        @if (auth()->check())
            @if ($enrolledIntoGroupLesson)
                <div class="container p-2 mb-5">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h3 class="mb-2">Leave a Review</h3>
                            <form action="{{ route('submit.review') }}" method="post">
                                @csrf
                                <input type="number" name="group_lesson_id" value="{{ $groupLesson->id }}" hidden>
                                <input type="number" name="student_id"
                                    value="{{ auth()->user() ? auth()->user()->id : '' }}" hidden>
                                <input type="number" name="rating" id="student_rating" value="" hidden>
                                <div class="rating fs-2">
                                    <span class="fa fa-star" id="r1" onclick="setRatting(1)"></span>
                                    <span class="fa fa-star" id="r2" onclick="setRatting(2)"></span>
                                    <span class="fa fa-star" id="r3" onclick="setRatting(3)"></span>
                                    <span class="fa fa-star" id="r4" onclick="setRatting(4)"></span>
                                    <span class="fa fa-star" id="r5" onclick="setRatting(5)"></span>

                                    @error('rating')
                                        <small class="text-danger fs-6">Click on Star For Ratting</small>
                                    @enderror
                                </div>
                                <textarea name="review" rows="4" placeholder="Write your review" class="form-control mt-2 ">{{ old('review') }}</textarea>
                                @error('review')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <button type="submit" class="btn btn-primary btn-lg mt-3">Submit Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endif


@endsection

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    function setRatting(ratting) {
        for (let index = 0; index < 5; index++) {
            e = index + 1;
            document.querySelector(`#r${e}`).style.color = "#5c6067";
        }
        for (let index = 0; index < ratting; index++) {
            e = index + 1;
            document.querySelector(`#r${e}`).style.color = "yellow";
        }
        document.querySelector("#student_rating").value = ratting;
    }
</script>
