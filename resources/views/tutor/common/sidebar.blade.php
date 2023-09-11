<?php $data = Session::get('tutordata');
$parts = explode("/", $_SERVER['REQUEST_URI']);
$getVal =  end($parts);
 ?>

<section class="side-bar">
  <ul>
    <li><a class="<?php echo ($getVal =='tutordashboard') ? 'active' : '' ?>" href="/tutordashboard"><span><i class="fa-brands fa-hive"></i></span> <span>Home</span></a></li>
    <li><a class="<?php echo ($getVal =='about' || $getVal =='video' || $getVal =='photo' || $getVal =='description' || $getVal =='background') ? 'active' : '' ?>" href="{{url('/')}}/tutor/profile/about"><span><i class="fa-solid fa-user"></i></span> <span>Profile</span></a></li>

    <li><a href="javascript:void(0)"><span><i class="fa-solid fa-book-bookmark"></i></span> <span>Library</span></a></li>
    <?php if(isset($data->role) && $data->role ==3){ ?>
      <li><a class="<?php echo ($getVal =='calendar') ? 'active' : '' ?>" href="{{ route('calendar.index') }}"><span><i class="fa-solid fa-calendar-days"></i></span> <span>Calendar</span></a></li>
    <?php } ?>

    <li><a  class="<?php echo ($getVal =='tutorquiz') ? 'active' : '' ?>" href="/tutorquiz"><span><i class="fa-solid fa-square-poll-horizontal"></i></span> <span>Quiz</span></a></li>
    <li><a class="{{ request()->is('tutorgrouplessons*') ? 'active': '' }}" href="/tutorgrouplessons"><span><i class="fa-solid fa-square-poll-horizontal"></i></span> <span>Group Lessons</span></a></li>
    <li><a class="<?php echo ($getVal =='teachingorders') ? 'active' : '' ?>" href="{{ route('tutor.orders') }}"><span><i class="fa-solid fa-chalkboard-user"></i></span> <span>Teaching Orders</span></a></li>
    <li><a class="<?php echo ($getVal =='chat') ? 'active' : '' ?> " href="{{ route('chat') }}"><span><i class="fa-solid fa-message"></i></span> <span>Chat</span></a></li>

      <li><a class="<?php echo ($getVal =='earnings') ? 'active' : '' ?>" href="{{ route('tutor.earnings.index') }}"><span><i class="fa-solid fa-sack-dollar"></i></span> <span>Earnings</span></a></li>

  </ul>
  <hr>
  <ul>
    <li><a href="{{ url('group') }}"><span><i class="fas fa-book-open"></i></span> <span>Public Lessons</span></a></li>
    <li><a class="<?php echo ($getVal =='support') ? 'active' : '' ?>" href="{{ route('tutor.support') }}"><span><i class="fa-solid fa-circle-question"></i></span> <span>Support</span></a></li>
    <li><a class="<?php echo ($getVal =='settings') ? 'active' : '' ?>" href="{{ route('tutor.settings') }}"><span><i class="fa-solid fa-gear"></i></span> <span>Settings</span></a></li>
    <li><a href="{{url('/tutorlogout')}}"><span><i class="fa-solid fa-arrow-right-from-bracket"></i></span> <span>Logout</span></a></li>
    <li><a href="javascript:void(0)"><span><i class="fa-solid fa-circle-info"></i></span> <span>Info</span></a></li>
  </ul>
</section>
