@include('/tutor/common/header')
@include('/tutor/common/sidebar')


<div class="wrapper bg-light">

<form action="{{ route('update.groupLesson') }}" method="POST">
@csrf
<div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="d-flex justify-content-between align-items-center mt-5">
        <h1 class="h1-responsive">Edit Group Lesson</h1>
        <a href="{{ route('index.groupLesson') }}" class="theme-btn green" id="create">back</a>
      </div>
          
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa-solid fa-heading"></i></span>
              <input class="quiz-inp" type="text" name="title" id="quiztitle"
                  placeholder="Enter Title" value="{{ $editGroupLesson['title'] }}">
                  
          </div>
          <div class="quiz-inp-wrap">
              <span class="quiz-inp-icon"><i class="fa-solid fa-star"></i></span>
              <select required class="quiz-inp" name="teaches_level" id="teaches_level">

                  @foreach ($teaches_levels as $teach_level)
                  @if ($teach_level->id==$editGroupLesson['teach_level_id'])
                      
                  <option value="{{ $teach_level->id }}" selected>{{ $teach_level->teaches_level }}
                  </option>
                  @else
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
                  @if ($subject->id==$editGroupLesson['subject_id'])
                      <option value="{{ $subject->id }}" selected>{{ $subject->subject }}
                      </option>
                  @else
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
                  id="totalparticipants" placeholder="Total Participants" value="{{ $editGroupLesson['participants'] }}">
                  
          </div>
          <br>
          <div class="quiz-inp-wrap mt-0">
              <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
              <input class="quiz-inp" type="number" name="price"
                  id="priceperperson"
                  placeholder="Price per Person in dollars (e.g 15.0, 17)" value="{{ $editGroupLesson['price'] }}">

                  
          </div>
          <div class="quiz-inp-wrap mt-3">
              <span class="quiz-inp-icon"><i class="fa fa-tag"></i></span>
            
              <select class="quiz-inp" name="status" id="">
                @if ( $editGroupLesson['is_completed']==0 )
                    <option value="0">UnCompleted</option>
                    <option value="1">Completed</option>
                @else
                <option value="1">Completed</option>
                <option value="0">UnCompleted</option>
                @endif
              </select>

                  
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
                  id="registerstartdate" placeholder="Start Date and Time" value="{{ $editGroupLesson['registration_end_date'] }}">
                  
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
                  id="registerenddate" placeholder="End Date and Time" value="{{ $editGroupLesson['registration_end_date'] }}">

                  
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
                  id="classstartdate" placeholder="Start Date and Time" value="{{ $editGroupLesson['class_start_date'] }}">

                  
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
                  id="classenddate" placeholder="End Date and Time" value="{{ $editGroupLesson['class_end_date'] }}">

                  
          </div>
          <input type="number" name="GroupLessonId" value="{{ $id }}" hidden>
          <div class="create-btn">
              <div class="col-lg-1"></div>
              <button class="theme-btn green" id="create">Update</button>
          </div>
      </div>
  </div>
</div>

</form>

</div>