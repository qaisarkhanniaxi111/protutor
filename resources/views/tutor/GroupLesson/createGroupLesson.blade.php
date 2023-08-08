{{-- Create Group Lessons  --}}
@if ($errors->any())
    <div class="tab-pane fade show active" id="tab-3">
    @else
        <div class="tab-pane fade" id="tab-3">
@endif

<div id="q-new1">
    <br>
    <div class="box">
        <form action="{{ route('store.groupLesson') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">

                        <div class="quiz-inp-wrap">
                            <input type="file" name="image" id="groupimage" placeholder="Total Participants">
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
                            <input class="quiz-inp" type="number" name="total_Participants" id="totalparticipants"
                                placeholder="Total Participants" value="{{ old('total_Participants') }}">
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
                                placeholder="Price per Person in dollars (e.g 15.0, 17)" value="{{ old('price') }}">

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
                            <input class="quiz-inp" type="date" name="register_Start_Date" id="registerstartdate"
                                placeholder="Start Date and Time" value="{{ old('register_Start_Date') }}">
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
                            <input class="quiz-inp" type="date" name="register_End_Date" id="registerenddate"
                                placeholder="End Date and Time" value="{{ old('register_End_Date') }}">

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
                            <input class="quiz-inp" type="date" name="class_Start_Date" id="classstartdate"
                                placeholder="Start Date and Time" value="{{ old('class_Start_Date') }}">

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
                            <input class="quiz-inp" type="date" name="class_End_Date" id="classenddate"
                                placeholder="End Date and Time" value="{{ old('class_End_Date') }}">

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
