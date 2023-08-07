<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontpage_assets/css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontpage_assets/css/lessons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontpage_assets/css/search.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontpage_assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontpage_assets/css/sliderCard.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontpage_assets/css/testimonials.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontpage_assets/css/footer.css') }}">

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <a href="#"><img src="{{ asset('assets/frontpage_assets/images/logo-dark.svg') }}" alt="Logo"></a>
    </div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="toggling">
      <div class="navbar-links">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Find Tutors</a></li>
          <li><a href="#">Enterprise</a></li>
          <li><a href="#">Become a tutor</a></li>
        </ul>
      </div>
      <div class="login-section">
        <form class="nav-form">
          <select id="english-USD" name="top-form">
            <option value="USD" selected>English, USD</option>
            <option value="PKR">English, PKR</option>
          </select>
        </form>
        <div class="login-btns">
          <button class="refer-text"><a href="#">Refer a friend</a></button>
          <button class="login-text"><a href="#">Log in</a></button>
        </div>
      </div>
    </div>
  </nav>


  @yield('content')


  <!-- footer secton -->
  <div class="main-section">
    <div class="section-container">
      <div class="section section-1">
        <div class="footer-logo">
          <a href="#"><img src="{{ asset('assets/frontpage_assets/images/logo.svg') }}" alt="Social Icon 1"></a>
        </div>
        <h3 class="text-logo">We take care of your health with regular and fun exercise</h3>
        <div class="social-icons">
          <a href="#"><img src="{{ asset('assets/frontpage_assets/images/social media/fb.svg') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ asset('assets/frontpage_assets/images/social media/twi.svg') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ asset('assets/frontpage_assets/images/social media/insta.svg') }}" alt="Inatagram"></a>
          <a href="#"><img src="{{ asset('assets/frontpage_assets/images/social media/YT.svg') }}" alt="Youtube"></a>
        </div>
      </div>
      <div class="section section-2">
        <h2>Top Subjects</h2>
        <div class="links">
          <ul>
            <li> <a href="#">English</a></li>
            <li> <a href="#">German</a></li>
            <li> <a href="#">Arabic</a></li>
            <li> <a href="#">Spanish</a></li>
          </ul>
        </div>
      </div>
      <div class="section section-2">
        <h2>About</h2>
        <div class="links">
          <ul>
            <li> <a href="#">Home</a></li>
            <li> <a href="#">Find tutor</a></li>
            <li> <a href="#">Enterprise</a></li>
            <li> <a href="#">Become a tutor</a></li>
          </ul>
        </div>
      </div>
      <div class="section section-2">
        <h2>Help</h2>
        <div class="links">
          <ul>
            <li> <a href="#">About Us</a></li>
            <li> <a href="#">Cookies Policy</a></li>
            <li> <a href="#">Privacy Policy</a></li>
            <li> <a href="#">Support</a></li>
          </ul>
        </div>
      </div>
      <div class="section section-2">
        <h2>Contact</h2>
        <div class="links">
          <ul>
            <li> <a href="#">Demo@gmail.com</a></li>
            <li> <a href="#">+154515544854</a></li>
          </ul>
        </div>
      </div>
      <!-- Repeat Section 3, 4, and 5 here with the same structure as Section 2 -->
    </div>
    <hr class="line-footer">
    <div class="copyright">
      <p class="cp">
        Copyright © 2023 all right reserved ProTutor
      </p>
    </div>
  </div>
  <!-- JavaScript are arranged -->
  <script src="./JavaScript/searchBtnScript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

  <script src="./JavaScript/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      // slick_slider..... used for slick slider.
      $(".slick_slider").slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<i class="fa-solid fa-angle-left slick-prev" style="color: #f08c00;"></i>',
        nextArrow: '<i class="fa-solid fa-angle-right slick-next" style="color: #fa9e00;"></i>',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: false,
              dots: false,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    });
  </script>
</body>
</html>
