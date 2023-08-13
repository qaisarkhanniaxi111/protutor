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
                            <h3><span class="badge bg-danger">Unpaid</span></h3>
                        @endif
                    @endif
                @endif
            </div>

        </div>
    </div>


    <div class="container" id="lesson_details_container">
        <div class="row">
            <div class="col-12">
                @if ($groupLesson)

                    <img src="{{ $gallery ? $gallery->image : '' }}" alt="course img" style="width: 100%; height:50%">

                    <div class="row">
                        <table class="table" id="lesson_details_table" style="margin-top: 5%">
                            <thead>
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
                                    <td>{{ $groupLesson ? number_format($groupLesson->price, 2) : '' }}</td>
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
                                    <td>{{ $groupLesson ? date('m-d-Y', strtotime($groupLesson->class_start_date)) : '' }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Class End Date</th>
                                    <td>{{ $groupLesson ? date('m-d-Y', strtotime($groupLesson->class_end_date)) : '' }}</td>
                                </tr>

                                </tbody>
                        </table>
                    </div>


                    @if (auth()->check())
                        @if (auth()->user()->role == 4)
                            @if ($paymentStatus == 'unpaid' || $paymentStatus == '')
                                <div class="row mt-5">
                                    <div class="text-center">
                                        <form action="{{ route('payment') }}">
                                            <input type="number" name="price"
                                                value="{{ number_format($groupLesson->price, 0) }}" hidden>
                                            <input type="number" name="group_lesson_id" value="{{ $groupLesson->id }}" hidden>
                                            <button class="btn btn-primary btn-lg">Pay with Stripe</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif
                @else
                    <h3 class="text-danger text-center">No lesson found.</h3>
                @endif
            </div>
        </div>
    </div>


@endsection
