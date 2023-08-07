@include('/tutor/common/header')
@include('/tutor/common/sidebar')

<div class="wrapper bg-light">




<div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="d-flex justify-content-between align-items-center mt-5">
        <h1 class="h1-responsive">View Group Lesson</h1>
        <a href="{{ route('index.groupLesson') }}" class="theme-btn green" id="create">back</a>
      </div>
          
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
              <input class="quiz-inp" type="text" name="title" id="quiztitle"
                  placeholder="Enter Title" value="{{ $showGroupLesson['title'] }}">
                  
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i class="fa-solid fa-star"></i></span>
              <select required class="quiz-inp" name="teaches_level" id="teaches_level">

                  @foreach ($teaches_levels as $teach_level)
                  @if ($teach_level->id==$showGroupLesson['teacher_level_id'])
                      
                  <option value="{{ $teach_level->id }}">{{ $teach_level->teaches_level }}
                  </option>
                  @endif
                                                                     
                  @endforeach
                  
              </select>
              
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-book-bookmark"></i></span>
              <select class="quiz-inp" name="subject" id="subjectt">
                  @foreach ($subj as $subject)
                  @if ($subject->id==$showGroupLesson['subject_id'])
                      <option value="{{ $subject->id }}">{{ $subject->subject }}
                      </option>
                  @endif
                  @endforeach
              </select>
              
          </div>
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa-solid fa-person"></i></span>
              <input class="quiz-inp" type="number" name="total_Participants"
                  id="totalparticipants" placeholder="Total Participants" value="{{ $showGroupLesson['participants'] }}">
                  
          </div>
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
              <input class="quiz-inp" type="number" name="price"
                  id="priceperperson"
                  placeholder="Price per Person in dollars (e.g 15.0, 17)" value="{{ $showGroupLesson['price'] }}">

                  
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Register Start date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="register_Start_Date"
                  id="registerstartdate" placeholder="Start Date and Time" value="{{ $showGroupLesson['registration_end_date'] }}">
                  
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Register End date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="register_End_Date"
                  id="registerenddate" placeholder="End Date and Time" value="{{ $showGroupLesson['registration_end_date'] }}">

                  
          </div>
          <br>

          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Classes Start date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="class_Start_Date"
                  id="classstartdate" placeholder="Start Date and Time" value="{{ $showGroupLesson['class_start_date'] }}">

                  
          </div>
          <br>
          <div class="row">
              <div class="col-lg-4 quiz-inp-wrap"><label>Classes End date</label>
              </div>
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i
                      class="fa-solid fa-calendar"></i></span>
              <input class="quiz-inp" type="date" name="class_End_Date"
                  id="classenddate" placeholder="End Date and Time" value="{{ $showGroupLesson['class_end_date'] }}">

                  
          </div>

          
      </div>
  </div>
</div>


</div>