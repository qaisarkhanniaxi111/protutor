<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
  <meta name="csrf_token" content="{{csrf_token()}}">
  <link rel="shortcut icon" href="/assets/dashboard_assets/images/favicon.png">
  <title>@if(!empty($PageTitle )) {{$PageTitle}} @else ProTutor | Dashboard @endif</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/dashboard_assets/css/custom.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet">
</head>
<body>
  <?php
  $userid = Session::get('userid');
  $getData = DB::table('userdetails')->where('student_no',$userid)->get();
  ?>
  <div class="site-wrap">

    <!-- Header -->
    <section class="header">
      <div class="header-left">
        <div class="logo"><img src="/assets/dashboard_assets/images/logo.png" alt=""></div>
        <div class="nav-expand"><img src="/assets/dashboard_assets/images/nav.png" alt=""></div>
      </div>
      <div class="header-right">
        <div class="search">
          <input class="search-inp" type="text" placeholder="Search">
          <span class="inp-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
        </div>
        <div class="notific-bar">
          <div class="notific-bell">
            <i class="fa-solid fa-bell"></i>
            <span class="notific-dot"></span>
          </div>
          <div class="user-pic">
            <div class="user-thumb">
              <img src="{{ asset('assets/student/images/user-img.jpg') }}" alt="User Image"></div>
          </div>
        </div>
      </div>
    </section>
  <!-- Header -->
