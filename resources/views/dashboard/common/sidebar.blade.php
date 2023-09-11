<?php $data = Session::get('userdata');
$parts = explode("/", $_SERVER['REQUEST_URI']);
$getVal =  end($parts);
 ?>

<section class="side-bar">
  <ul>
    <li><a class="<?php echo ($getVal =='dashboard') ? 'active' : '' ?>" href="{{url('/dashboard')}}"><span><i class="fa-brands fa-hive"></i></span> <span>Home</span></a></li>
    <li><a class="<?php echo ($getVal =='profile') ? 'active' : '' ?>" href="{{url('/profile/about')}}"><span><i class="fa-solid fa-user"></i></span> <span>Profile</span></a></li>
    <li><a class="<?php echo ($getVal =='calendar') ? 'active' : '' ?>" href="{{url('/calendar')}}"><span><i class="fa-solid fa-user"></i></span> <span>Calendar</span></a></li>
      <li><a href="javascript:void(0)"><span><i class="fa-solid fa-user-group"></i></span> <span>Tutors</span></a></li>

    <li><a href="javascript:void(0)"><span><i class="fa-solid fa-book-bookmark"></i></span> <span>Library</span></a></li>

    <li><a class="<?php echo ($getVal =='studentquiz') ? 'active' : '' ?>" href="/studentquiz"><span><i class="fa-solid fa-square-poll-horizontal"></i></span> <span>Quiz</span></a></li>
    <li><a class="<?php echo ($getVal =='teachingorders') ? 'active' : '' ?>" href="{{ route('student.orders') }}"><span><i class="fa-solid fa-chalkboard-user"></i></span> <span>Teaching Orders</span></a></li>
    <li><a class="<?php echo ($getVal =='chat') ? 'active' : '' ?>" href="{{ route('chat') }}"><span><i class="fa-solid fa-message"></i></span> <span>Chat</span></a></li>

    <li><a class="<?php echo ($getVal =='spendings') ? 'active' : '' ?>" href="{{ route('student.spendings') }}"><span><i class="fa-solid fa-sack-dollar"></i></span> <span>Spendings</span></a></li>

  </ul>
  <hr>
  <ul>
    <li><a href="{{ url('group') }}"><span><i class="fas fa-book-open"></i></span> <span>Public Lessons</span></a></li>
    <li><a class="<?php echo ($getVal =='support') ? 'active' : '' ?>" href="{{ route('student.support') }}"><span><i class="fa-solid fa-circle-question"></i></span> <span>Suports</span></a></li>
    <li><a class="<?php echo ($getVal =='settings') ? 'active' : '' ?>" href="{{ route('student.settings') }}"><span><i class="fa-solid fa-gear"></i></span> <span>Settings</span></a></li>
    <li><a href="/logout"><span><i class="fa-solid fa-arrow-right-from-bracket"></i></span> <span>Logout</span></a></li>
    <li><a href="javascript:void(0)"><span><i class="fa-solid fa-circle-info"></i></span> <span>Info</span></a></li>
  </ul>
</section>
