@include('/tutor/common/header')
@include('/tutor/common/sidebar')
<?php 
use Carbon\Carbon;
?>
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
                              {{-- <div class="col-6">
                                <div class="join-session">
                                  <button class="alt open-res">Resolution Center</button>
                                  <h6><?php echo $totalDuration1; ?></h6>
                                </div>
                              </div> --}}
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
              <h2 class="pb-3">Resolution Center</h2>
              <h3>Resolutions can be made until <strong>00H : 20M : 00S</strong></h3>
              <div class="row mt-3">
                <div class="col-6">
                  <button data-bs-toggle="modal" data-bs-target="#resStep-1" class="theme-btn full bdr teal">Reschedule Lesson</button>
                </div>
                <div class="col-6">
                  <button data-bs-toggle="modal" data-bs-target="#cancelStep-1" class="theme-btn full bdr red">Cancel Lesson</button>
                </div>
              </div>
              <h3 class="mt-3"><strong class="txt-orange">Response</strong></h3>
              <div class="system-resp">
                <h5>System</h5>
                <div class="system-resp-txt">
                  <p>Your request to reschedule lesson is accepted by Student Name. The lesson is rescheduled now for October 20, 2021</p>
                </div>
                <p class="text-end pt-2">October 19, 2021 - 10:00</p>
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
                    <span class="table-title">Student Name</span>
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
                    <span class="table-title">Lesson start</span>
                  </th>
                  <th class="text-center">
                    <span class="table-title">Lesson end</span>
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
                  $user_data= DB::table('users')->where('id',$data->user_id)->get();
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
                    <td>@php echo date('M, jS Y h:i:s A',strtotime($start_date)); @endphp</td>
                    <td>@php echo date('M, jS Y h:i:s A',strtotime($end_date)); @endphp</td>
                  </tr>
                  @php
                  $i++;
                  @endphp
                  @endforeach
                  <?php 
                }
                if(count($completeorder) =="0"){
                  echo "<tr><td style='text-align: left;' colspan='7'>Record not found</td></tr>";
                }
                ?>

              </tbody>
              <tfoot>
                <tr>
                  <th colspan="7">   

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
                    <span class="table-title">Student Name</span>
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
                </tr>
              </thead>
              <tbody>

                <?php if(isset($cancelorder) && !empty($cancelorder)){ ?> 
                  @php
                  $i = 1; 
                  @endphp
                  @foreach($cancelorder as $data)
                  <?php
                  $user_data= DB::table('users')->where('id',$data->user_id)->get();
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
                    <td></td>
                    <td></td>
                  </tr>
                  @php
                  $i++;
                  @endphp
                  @endforeach
                  <?php 
                }
                if(count($cancelorder) =="0"){
                  echo "<tr><td style='text-align: left;' colspan='7'>Record not found</td></tr>";
                }
                ?>

              </tbody>
              <tfoot>
                <tr>
                  <th colspan="7">   

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


@include('/dashboard/common/footer')  
