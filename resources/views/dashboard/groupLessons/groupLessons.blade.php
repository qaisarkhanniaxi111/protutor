@include('/dashboard/common/header')
@include('/dashboard/common/sidebar')
<style>
        
  /* ==========================================group lesson */
  .group-lessons{ height: 100%;}
  .group-lessons ul{ display: flex; flex-wrap: wrap; margin-right: -10px; margin-left: -10px;}
  .group-lessons ul li{ padding: 10px; width: 100%;   max-width: 100%;}
  .group-lessons ul li a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 10px;
    padding: 15px;
    width: 100%;
    background-color: #F6F7F8;
    border: 1px solid transparent;
  }
  .group-lessons ul li a:hover{
      box-shadow: 0px 3px 6px #00000029;
    border: 1px solid #009444;
  }
  .group-lessons ul li a h3 {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 20px;
    font-weight: 500;
    color: var(--orange);
    text-align: start;
  }
  .group-lessons-img{
    height: auto!important;
    width: 300px !important;
    border-radius: 4px;
  }
  .group-lessons-detail{
    display: flex;
    align-items: center;
  }
  .group-lessons-detail h4{
  font-size: 16px;
  font-weight: 500;
  color: #2B3044;
  min-width: 120px;
  }
  .group-lessons-detail h5{
    font-size: 16px;
    font-weight: 500;
    color: #2B3044;
  
    }
    
    @media only screen and (max-width:768px){
      .group-lessons  li a{
        flex-direction: column;
      }
      .group-lessons-img{
        height: auto !important;
        width: 100% !important;
        border-radius: 4px;
        margin-left: 0px !important;
        margin-bottom: 15px;
      }
    }
      </style>



 <!-- Container -->
 @php
     $enrolledLessons=[];
   @endphp
 @foreach ($enrolled as $enrolledLesson)
   @php
     $enrolledLessons[$enrolledLesson['group_lesson_id']]=$enrolledLesson['group_lesson_id'];
   @endphp
 @endforeach
 <section class="wrapper">
  <div class="page-title">
      <h1>Group Lessons</h1>
      <p style="color: #84818A;
font-size: 16px;">Your All Enrolled Lessons</p>
  </div>
  <div class="home-section ">
      <div class="row  ">
          <div class="col-lg-12">
              <div class="box  group-lessons w-100">
                  <ul>
                    @foreach ($AllLessons as $Lesson )
                      
                   @if (isset($enrolledLessons[$Lesson['id']]))
                       
                  
                      <li>
                          <a href="{{ route('student.groupLessons.details',$Lesson['id']) }}">
                              <div class="order-md-1 order-2">
                                  <h3>{{ $Lesson ? $Lesson['title'] : '' }}</h3>
                                  <div class="row  mt-3">
                                      <div class=" col-lg-12 ">
                                          <div class="group-lessons-detail mb-2 pb-1">
                                              <div class="group-lessons-detail">
                                                  <h4>Tutor Name :&nbsp;</h4>
                                                  <h5>{{ $Lesson ? $Lesson['tutor']['first_name'] : '' }}{{ $Lesson ? $Lesson['tutor']['last_name'] : '' }}</h5>
                                              </div>
                                          </div>
                                          <div class="group-lessons-detail mb-2 pb-1">
                                              <div class="group-lessons-detail">
                                                  <h4>Participants :&nbsp;</h4>
                                                  <h5>{{ $Lesson ? $Lesson['participants'] : '' }}</h5>
                                              </div>
                                          </div>

                                          <div class="group-lessons-detail mb-2 pb-1">
                                              <div class="group-lessons-detail">
                                                  <h4>Start Date :&nbsp;</h4>
                                                  <h5>{{ $Lesson ? date('m-d-Y', strtotime($Lesson['class_start_date'])) : '' }}</h5>
                                              </div>
                                          </div>
                                          <div class="group-lessons-detail ">
                                              <div class="group-lessons-detail">
                                                  <h4>End Date :&nbsp;</h4>
                                                  <h5>{{ $Lesson ? date('m-d-Y', strtotime($Lesson['class_end_date'])) : '' }}</h5>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <img src="{{ isset($Lesson['gallery']['image']) ? $Lesson['gallery']['image'] : "" }}" alt=""
                                  class="group-lessons-img ms-3 order-md-2 order-1">
                          </a>
                      </li>
                      @endif
                      @endforeach
                  </ul>
              </div>
          </div>

      </div>

  </div>
</section>
<!-- Container -->


@include('/dashboard/common/footer')