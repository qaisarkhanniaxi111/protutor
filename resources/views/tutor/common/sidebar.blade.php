<?php $data = Session::get('tutordata');
$parts = explode("/", $_SERVER['REQUEST_URI']);
$getVal =  end($parts);
 ?>

<section class="side-bar">
  <ul>
    <li><a class="<?php echo ($getVal =='dashboard') ? 'active' : '' ?>" href="/dashboard"><span><i class="fa-brands fa-hive"></i></span> <span>Home</span></a></li>
    <li><a class="<?php echo ($getVal =='profile') ? 'active' : '' ?>" href="/profile/about'"><span><i class="fa-solid fa-user"></i></span> <span>Profile</span></a></li>

    <li><a href="library.html"><span><i class="fa-solid fa-book-bookmark"></i></span> <span>Library</span></a></li>
    <?php if(isset($data->role) && $data->role ==3){ ?>
      <li><a href="calendar.html"><span><i class="fa-solid fa-calendar-days"></i></span> <span>Calendar</span></a></li>
    <?php } ?>

    <li><a  class="<?php echo ($getVal =='tutorquiz') ? 'active' : '' ?>" href="/tutorquiz"><span><i class="fa-solid fa-square-poll-horizontal"></i></span> <span>Quiz</span></a></li>
    <li><a  class="<?php echo ($getVal =='tutorgrouplessons') ? 'active' : '' ?>" href="/tutorgrouplessons"><span><i class="fa-solid fa-square-poll-horizontal"></i></span> <span>Group Lessons</span></a></li>
    <li><a href="teaching-orders.html"><span><i class="fa-solid fa-chalkboard-user"></i></span> <span>Teaching Orders</span></a></li>
    <li><a href="{{ route('chatify') }}"><span><i class="fa-solid fa-message"></i></span> <span>Chat</span></a></li>

      <li><a href="{{ route('tutor.earnings.index') }}"><span><i class="fa-solid fa-sack-dollar"></i></span> <span>Earnings</span></a></li>

  </ul>
  <hr>
  <ul>
    <li><a href="support.html"><span><i class="fa-solid fa-circle-question"></i></span> <span>Support</span></a></li>
    <li><a href="settings.html"><span><i class="fa-solid fa-gear"></i></span> <span>Settings</span></a></li>
    <li><a href="{{url('/tutorlogout')}}"><span><i class="fa-solid fa-arrow-right-from-bracket"></i></span> <span>Logout</span></a></li>
    <li><a href="info.html"><span><i class="fa-solid fa-circle-info"></i></span> <span>Info</span></a></li>
  </ul>
</section>
