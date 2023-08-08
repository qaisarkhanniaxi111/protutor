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
    </div>
</div>


<div class="container" id="lesson_details_container">
    <div class="row">
        <div class="col-12">
            @if ($groupLesson)
                <table class="table" id="lesson_details_table">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <td>{{ $groupLesson ? $groupLesson->title: '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Tutor</th>
                        <td>{{ $tutor ? $tutor->fullname: '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Teach Level</th>
                        <td>{{ $teachLevel ? $teachLevel->teaches_level: '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Subject</th>
                        <td>{{ $subject ? $subject->subject: '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Participants</th>
                        <td>{{ $groupLesson ? $groupLesson->participants: '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Price per student</th>
                        <td>{{ $groupLesson ? number_format($groupLesson->price, 2): '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Registration Start Date</th>
                        <td>{{ $groupLesson ? date('d-m-Y', strtotime($groupLesson->registration_start_date)): '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Registration End Date</th>
                        <td>{{ $groupLesson ? date('d-m-Y', strtotime($groupLesson->registration_end_date)): '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Class Start Date</th>
                        <td>{{ $groupLesson ? date('d-m-Y', strtotime($groupLesson->class_start_date)): '' }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Class End Date</th>
                        <td>{{ $groupLesson ? date('d-m-Y', strtotime($groupLesson->class_end_date)): '' }}</td>
                    </tr>

                    </tbody>
                </table>

                <h6 class="mt-3">Course Thumbnail</h6>
                <img src="{{ $gallery ? $gallery->image: '' }}" alt="course img"><br><br>


                <div class="row">
                    <div class="text-center">
                        <form action="{{ route('payment') }}">
                            <input type="number" name="price" value="{{ number_format($groupLesson->price, 0) }}" hidden>
                            <input type="number" name="group_lesson_id" value="{{ $groupLesson->id }}" hidden>
                            <button class="btn btn-primary btn-lg">Pay with Stripe</button>
                        </form>
                    </div>
                </div>

            @else
                <h3 class="text-danger text-center">No lesson found.</h3>
            @endif
        </div>
    </div>
</div>


@endsection
