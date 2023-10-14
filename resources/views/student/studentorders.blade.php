@include('/dashboard/common/header')
@include('/dashboard/common/sidebar')
<?php 
use Carbon\Carbon;
?>
<style>
  .rating {
        position: relative;
        background: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .rating__result {
        font-size: 14px;
        font-weight: 500;
        color: black;
        pointer-events: none;
    }

    .rating__star {
        font-size: 1.3em;
        cursor: pointer;
        color: #dabd18b2;
        transition: filter linear .3s;
    }

    .rating__star:hover {
        filter: drop-shadow(1px 1px 4px gold);
    }

    .feedback-textarea {
        border: 1px solid rgb(143, 136, 136);
        border-radius: 4px;
        width: 100%;
        padding: 15px;
    }
</style>
<!-- Container -->
<section class="wrapper">
  <div class="page-title">
    <h1>Teaching Orders </h1>
  </div>
  <span style="color: red;">
    @if(session('success_msg'))  
    <div class="alert alert-success alert-dismissible"> 
      {{session('success_msg')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert"><span aria-hidden="true"></span>
      </button>
    </div>
    @elseif(session('error_msg'))
    <div class="alert alert-danger alert-dismissible"> 
      {{session('error_msg')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert"><span aria-hidden="true"></span>
      </button>
    </div>
    @endif 
  </span>

  <?php 

  if(isset($_GET['tab']) and $_GET['tab']!=''){  
    $tab = $_GET['tab'];
  }elseif(isset($_GET['tab1']) and $_GET['tab1']!=''){
   $tab = $_GET['tab1'];

 }else{
  $tab = '1';
}
?>

<div>
  <ul class="nav tab-nav"> 
    <li class="nav-item">
      <button class="<?php if($tab=='1'){ echo "active"; } ?> " data-bs-toggle="tab" data-bs-target="#tab-1">
        <span><i class="fa-solid fa-angles-up"></i></span> Upcoming Lessons
      </button>
    </li>
    <li class="nav-item">
      <button class="<?php if($tab=='2'){ echo "active"; } ?> " data-bs-toggle="tab" data-bs-target="#tab-2">
        <span><i class="fa-solid fa-check-double"></i></span> Completed Lessons
      </button>
    </li>
    <li class="nav-item">
      <button class="<?php if($tab=='3'){ echo "active"; } ?>" data-bs-toggle="tab" data-bs-target="#tab-3">
        <span><i class="fa-solid fa-circle-xmark"></i></span> Cancelled Lessons
      </button>
    </li>
  </ul>

  <div class="tab-content pt-3">

    <div class="tab-pane fade <?php if($tab=='1'){ echo "show active"; } ?> " id="tab-1">
      <div class="box" style="position: relative;">

        <div class="accordion teaching-accordion" id="accordionExample">

          <?php
          if(count($teachingorders)>0){

            $alldate=array();
            $datewithid=array();
            foreach ($teachingorders as $key => $value) {

              $alldate[date("d-m-Y", strtotime($value->start_date))] = date("d-m-Y", strtotime($value->start_date));

              $datewithid[]= array(date("d-m-Y", strtotime($value->start_date))=>$value->order_id);
            }

            ?>
            <?php 
            $i=1;
            $alldate1 = array_reverse($alldate);          
            foreach ($alldate1 as $alldate_key => $alldate_value) {



              ?>
              <div class="accordion-single">
                <h2 class="accordion-header">
                  <button class="accordion-button <?php if($i!=1){ echo "collapsed"; } ?> " type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                    <?php echo date("D-M d,Y", strtotime($alldate_value))?>
                  </button>
                </h2>
                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if($i=='1'){ echo "show"; } ?>">
                  <div class="accordion-cont">

                    <?php 
                    foreach ($datewithid as $datewithid_key => $datewithid_value) {

                      $getdate= array_keys($datewithid_value);

                      if($getdate[0]==$alldate_value){
                        $datewithid_value = array_values($datewithid_value); 
                        $getorderid = $datewithid_value[0];  

                        $getData='SELECT `order`.id as order_id,`order`.user_id,`order`.teacher_id,`order`.calender_sch_id,`order`.order_type,`order`.items,`order`.total ,`order`.discount,`order`.transaction_fee,`order`.net_total,`order`.payment_id,`order`.payment_status,`order`.status,`order`.zoom_meeeting_url,calendars.* FROM `order` LEFT JOIN `calendars` ON `order`.calender_sch_id = calendars.id WHERE `order`.id="'.$getorderid.'"';
                        $alldataget = DB::select($getData);
                        $id=$alldataget[0]->order_id;
                        $checkreview=DB::select("SELECT * FROM `ratings` WHERE order_id=$id");
                        $zoom_meeeting_url = $alldataget[0]->zoom_meeeting_url;
                        $student_no = $alldataget[0]->student_no;
                        $subject = $alldataget[0]->subject;
                        $start_date = $alldataget[0]->start_date;
                        $end_date = $alldataget[0]->end_date;

                        $teachergetData = DB::table('users')->where('id',$student_no)->get(); 

                        $fullname = $teachergetData[0]->first_name.' '.$teachergetData[0]->last_name;

                        $getsubject = DB::table('subjects')->where('id',$subject)->get();
                        $subject = $getsubject[0]->subject; 


                        $startTime = Carbon::parse($start_date);
                        $finishTime = Carbon::parse($end_date);
                        $totalDuration = $finishTime->diff($startTime);
                        $totalDuration1 = $totalDuration->h.'H: '.$totalDuration->i.'M: '." 00S"; 
                        ?>

                        <div class="accordion-event">
                          <div class="accordion-event-left">
                            <p class="time-stamp"><?php echo date("h:i", strtotime($start_date))?></p>
                          </div>
                          <div class="accordion-event-right">
                            <h2><?php echo $subject; ?> session with <?php echo $fullname; ?>.</h2>
                            <p>Session will start at <?php echo date("h:ia", strtotime($start_date))?> and will ends at <?php echo date("h:ia", strtotime($end_date)); ?></p>
                            <div class="row mt-4">
                              <div class="col-6">
                                <div class="join-session">
                                  <a target="_blank" href="<?php echo $zoom_meeeting_url; ?>"><button>Join Session</button></a>
                                  <h6><?php echo $totalDuration1; ?></h6>
                                </div>
                              </div>
                              @if (!isset($checkreview[0]))
                              @if ($finishTime->lt(now()))
                                  
                              
                              <div class="col-6">
                                  <div class="join-session">
                                      <button class="alt open-res" onclick="giveFeedback({{ $alldataget[0]->order_id }})">Leave a Review</button>
                                      <h6>{{ $totalDuration1 }}</h6>
                                  </div>
                              </div>

                              @endif
                          @endif
                          
                            </div>
                          </div>
                        </div>

                      <?php } } ?>


                    </div>
                  </div>
                </div>

                <?php $i++; } ?>

              <?php }else{

                echo "No Upcoming Lessons Found.";

              }?>

            </div>

            <div class="res-center">
              <span class="res-center-close"></span>
              <h2 class="pb-3">Feedback</h2>
              <div class="col-lg-12 mt-4">
          
                <div class="box">
                        <div class="page-title mb-0 pb-0">
                            
                            <p class="mb-0 pb-0" style="color: #84818A;
                          font-size: 16px;">Give your
                                Feedback.</p>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="rating">
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
    
                                <div class="ms-4">
                                    <span class="rating__result"></span>
                                </div>
                            </div>
                        </div>
    
                        <form action="{{ route('submit.review') }}" method="post">
                            @csrf
                            <input type="number" name="order_id" id="order_id" value="" hidden>
                            <input type="number" name="student_id" value="{{ auth()->user() ? auth()->user()->id : '' }}"
                                hidden>
                            <input type="number" name="rating" id="student_rating" value="" hidden>
                            <textarea name="review" id="" rows="5" class="feedback-textarea" placeholder="Type here..."></textarea>
                            <div class="text-end pt-3">
                                <button class="theme-btn green">Submit</button>
                            </div>
                        </form>
                    </div>

                    
            </div>
            </div>

          </div>
        </div>

        <div class="tab-pane fade <?php if($tab=='2'){ echo "show active"; } ?> " id="tab-2">
          <div class="box">
            <div class="table-responsive">
             <table class="table quiz-table">
              <thead>
                <tr>
                  <th>
                    <span class="table-title">S.NO</span>
                  </th>

                  <th>
                    <span class="table-title">Tutor Name</span>
                  </th>
                  <th>
                    <span class="table-title">Schedule Title</span>
                  </th>
                  <th>
                    <span class="table-title">Subject</span>
                  </th>
                  <th>
                    <span class="table-title">Lesson Booked on</span>
                  </th>
                  <th>
                    <span class="table-title">Completed on</span>
                  </th>
                  <th class="table-title">
                    <span class="table-title">Lesson Duration</span>
                  </th>
                  <th class="text-center">
                    <span class="table-title">Action</span>
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php if(isset($completeorder) && !empty($completeorder)){ ?> 
                  @php
                  $i = 1; 
                  @endphp
                  @foreach($completeorder as $data)
                  <?php
                  $user_data= DB::table('users')->where('id',$data->teacher_id)->get();
                  $fullname= $user_data[0]->first_name.' '.$user_data[0]->last_name;

                  $calendar_data= DB::table('calendars')->where('id',$data->calender_sch_id)->get();
                  $subjectid= $calendar_data[0]->subject;
                  $start_date= $calendar_data[0]->start_date;
                  $end_date= $calendar_data[0]->end_date;
                  $note= $calendar_data[0]->note;

                  $subjects= DB::table('subjects')->where('id',$subjectid)->get();
                  $subjectname= $subjects[0]->subject;

                  $startTime = Carbon::parse($start_date);
                  $finishTime = Carbon::parse($end_date);
                  $totalDuration = $finishTime->diff($startTime);
                  $totalDuration1 = $totalDuration->h.'H: '.$totalDuration->i.'M: '." 00S"; 

                  ?>
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$fullname}}</td>
                    <td>{{$note}}</td>  
                    <td>{{$subjectname}}</td>
                    <td>
                      @php echo date('M, jS Y h:i:s A',strtotime($data->created_at)); @endphp
                    </td>
                    <td>
                      @php echo date('M, jS Y h:i:s A',strtotime($data->updated_at)); @endphp
                    </td>
                    <td><?php echo $totalDuration1; ?></td>
                    <td>
                    <a class="tableLink green" style="margin-bottom: 3px;" href="{{url('/tutor/')}}/{{$data->teacher_id}}">Reorder</a><br>
                    <a class="tableLink yellow" href="" data-bs-toggle="modal" data-bs-target="#reView">Review</a></td>
                  </tr>
                  @php
                  $i++;
                  @endphp
                  @endforeach
                  <?php 
                }
                if(count($completeorder) =="0"){
                  echo "<tr><td style='text-align: left;' colspan='8'>Record not found</td></tr>";
                }
                ?>

              </tbody>
              <tfoot>
                <tr>
                  <th colspan="8">   

                    <?php 
                    echo $completeorder->appends($params)->render("pagination::bootstrap-4")  ;
                    ?> 
                  </th> 
                </tr>
              </tfoot>
            </table>

          </div>
        </div>
      </div>

      <div class="tab-pane fade <?php if($tab=='3'){ echo "show active"; } ?> " id="tab-3">
        <div class="box">
          <div class="table-responsive">
            <table class="table quiz-table">
              <thead>
                <tr>
                  <th>
                    <span class="table-title">S.NO</span>
                  </th>

                  <th>
                    <span class="table-title">Tutor Name</span>
                  </th>
                  <th>
                    <span class="table-title">Schedule Title</span>
                  </th>
                  <th>
                    <span class="table-title">Subject</span>
                  </th>
                  <th>
                    <span class="table-title">Lesson Booked on</span>
                  </th>
                  <th>
                    <span class="table-title">Cancelled on</span>
                  </th>
                  <th class="text-center">
                    <span class="table-title">Cancelled by</span>
                  </th>
                  <th class="text-center">
                    <span class="table-title">Refund Status</span>
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php if(isset($cancelorder) && !empty($cancelorder)){ ?> 
                  @php
                  $i = 1; 
                  @endphp
                  @foreach($cancelorder as $data)
                  <?php
                  $user_data= DB::table('users')->where('id',$data->teacher_id)->get();
                  $fullname= $user_data[0]->first_name.' '.$user_data[0]->last_name;

                  $calendar_data= DB::table('calendars')->where('id',$data->calender_sch_id)->get();
                  $subjectid= $calendar_data[0]->subject;
                  $start_date= $calendar_data[0]->start_date;
                  $end_date= $calendar_data[0]->end_date;
                  $note= $calendar_data[0]->note;

                  $subjects= DB::table('subjects')->where('id',$subjectid)->get();
                  $subjectname= $subjects[0]->subject;

                  ?>
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$fullname}}</td>
                    <td>{{$note}}</td>  
                    <td>{{$subjectname}}</td>
                    <td>
                      @php echo date('M, jS Y h:i:s A',strtotime($data->created_at)); @endphp
                    </td>
                    <td>@php echo date('M, jS Y h:i:s A',strtotime($data->updated_at)); @endphp</td>
                    <td><?php echo $data->cancelled_by; ?></td>
                    <td><?php echo $data->payment_status; ?></td>
                  </tr>
                  @php
                  $i++;
                  @endphp
                  @endforeach
                  <?php 
                }
                if(count($cancelorder) =="0"){
                  echo "<tr><td style='text-align: left;' colspan='8'>Record not found</td></tr>";
                }
                ?>

              </tbody>
              <tfoot>
                <tr>
                  <th colspan="8">   

                    <?php 
                    echo $cancelorder->appends($cancelorder_params)->render("pagination::bootstrap-4")  ;
                    ?> 
                  </th> 
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Container -->

<div class="modal common-modal fade" id="resStep-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="txt-orange">Resolution Center</h5>
        <h6 class="txt-green">Reschedule Lesson</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="inp-group mt-0">
          <label for=""><i class="fa-regular fa-circle-question"></i> Reason to reschedule lesson</label>
          <textarea class="inp" name="" placeholder="Please explain why you need to reschedule this lesson"></textarea>
        </div>
        
        <div class="inp-group mt-0">
          <div class="row">
            <div class="col-lg-6">
              <div class="inp-group">
                <label for=""><i class="fa-regular fa-clock"></i> Select Time</label>
                <select class="inp" name="" id="">
                  <option value="">Select Date</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="inp-group">
                <label for="">&nbsp;</label>
                <select class="inp" name="" id="">
                  <option value="">Select Time</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round green">Submit</button>
      </div>
    </div>
  </div>
</div>


<div class="modal common-modal fade" id="cancelStep-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="txt-orange">Resolution Center</h5>
        <h6 class="txt-green">Reschedule Lesson</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center"><strong>Are you sure you want to cancel this lesson? If you will proceed it will cost you a cancelation penalty fee. You can only perform 3 cancelation per month</strong></p>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-toggle="modal" data-bs-target="#cancelStep-2" class="theme-btn btn-round green">Proceed</button>
      </div>
    </div>
  </div>
</div>

<div class="modal common-modal fade" id="cancelStep-2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="txt-orange">Resolution Center</h5>
        <h6 class="txt-green">Reschedule Lesson</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="inp-group mt-0">
          <label for=""><i class="fa-regular fa-circle-question"></i> Reason to reschedule lesson</label>
          <textarea class="inp" name="" placeholder="Please explain why you need to reschedule this lesson"></textarea>
        </div>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-toggle="modal" data-bs-target="#cancelStep-3" class="theme-btn btn-round green">Proceed</button>
      </div>
    </div>
  </div>
</div>

<div class="modal common-modal fade" id="cancelStep-3">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="txt-orange">Resolution Center</h5>
        <h6 class="txt-green">Reschedule Lesson</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center">Are you sure you want to cancel this lesson? If you will proceed it will cost you a cancelation penalty fee. You can only perform 3 cancelation per month</p>
        <h5 class="text-center pt-3"><strong>Cancelation 1 of 3</strong></h5>
      </div>
      <div class="modal-footer center">
        <button type="button" data-bs-dismiss="modal" class="theme-btn btn-round green">Proceed</button>
      </div>
    </div>
  </div>
</div>


<div class="modal common-modal modal-res fade" id="reView">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="txt-orange">Tutor Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="tutor-img"><img src="https://images.pexels.com/photos/1040881/pexels-photo-1040881.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
         <div class="tutor-rate text-center">
          <h2>Amanda Johnson</h2>
          <h3>Rate the lesson provided October 12, 2021</h3>
          <ul class="pt-4">
            <li>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span class="star-disable"><i class="fa-solid fa-star"></i></span>
            </li>
          </ul>
          <div class="block-inp-wrap">
            <textarea style="height: 200px;" placeholder="Additional Comments…." class="block-inp" name="" id=""></textarea>
          </div>
         </div>
      </div>
      <div class="modal-footer center d-block">
        <div class="submit-rev-btn">
          <div class="row">
            <div class="col-6">
              <button class="theme-btn bdr red">Not Now</button>
            </div>
            <div class="col-6">
              <button class="theme-btn bdr teal">Submit Review</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const ratingStars = [...document.getElementsByClassName("rating__star")];
  const ratingResult = document.querySelector(".rating__result");

  printRatingResult(ratingResult);

  function executeRating(stars, result) {
      const starClassActive = "rating__star fas fa-star";
      const starClassUnactive = "rating__star far fa-star";
      const starsLength = stars.length;
      let i;
      stars.map((star) => {
          star.onclick = () => {
              i = stars.indexOf(star);

              if (star.className.indexOf(starClassUnactive) !== -1) {
                  printRatingResult(result, i + 1);
                  for (i; i >= 0; --i) stars[i].className = starClassActive;
              } else {
                  printRatingResult(result, i);
                  for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
              }
          };
      });
  }

  function printRatingResult(result, num = 0) {
      result.textContent = `${num}/5`;
      document.querySelector("#student_rating").value = num;
  }

  executeRating(ratingStars, ratingResult);
</script>

@include('/dashboard/common/footer')  


<script>
  function giveFeedback(order_id){
    $("#order_id").val(order_id)
  }
</script>