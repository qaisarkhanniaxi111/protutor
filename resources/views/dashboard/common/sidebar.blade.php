<?php $data = Session::get('userdata');
$parts = explode("/", $_SERVER['REQUEST_URI']);
$getVal =  end($parts);
 ?>

<section class="side-bar">
  <ul>
    <li><a class="<?php echo ($getVal =='dashboard') ? 'active' : '' ?>" href="{{url('/dashboard')}}"><span><i class="fa-brands fa-hive"></i></span> <span>Home</span></a></li>
    <li><a class="<?php echo ($getVal =='profile') ? 'active' : '' ?>" href="{{url('/profile/about')}}"><span><i class="fa-solid fa-user"></i></span> <span>Profile</span></a></li>
      <li><a href="#"><span><i class="fa-solid fa-user-group"></i></span> <span>Tutors</span></a></li>

    <li><a href="library.html"><span><i class="fa-solid fa-book-bookmark"></i></span> <span>Library</span></a></li>

    <li><a class="<?php echo ($getVal =='studentquiz') ? 'active' : '' ?>" href="/studentquiz"><span><i class="fa-solid fa-square-poll-horizontal"></i></span> <span>Quiz</span></a></li>
    <li><a href="teaching-orders.html"><span><i class="fa-solid fa-chalkboard-user"></i></span> <span>Teaching Orders</span></a></li>
    <li><a href="chat.html"><span><i class="fa-solid fa-message"></i></span> <span>Chat</span></a></li>

    <li><a href="spendings.html"><span><i class="fa-solid fa-sack-dollar"></i></span> <span>Spendings</span></a></li>

  </ul>
  <hr>
  <ul>
    <li><a href="support.html"><span><i class="fa-solid fa-circle-question"></i></span> <span>Support</span></a></li>
    <li><a href="settings.html"><span><i class="fa-solid fa-gear"></i></span> <span>Settings</span></a></li>
    <li><a href="/logout"><span><i class="fa-solid fa-arrow-right-from-bracket"></i></span> <span>Logout</span></a></li>
    <li><a href="info.html"><span><i class="fa-solid fa-circle-info"></i></span> <span>Info</span></a></li>
  </ul>
</section>
