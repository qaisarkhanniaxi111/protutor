@include("/frontend/common/header")

<link rel="stylesheet" href="assets/frontpage_assets/css/lessons.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
{{-- <link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/navbar.css"> --}}
<link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/lessons.css">
<link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/search.css">
<link rel="stylesheet" type="text/css" href="assets/frontpage_assets/css/slick.css">
<link rel="stylesheet" href="assets/frontpage_assets/css/sliderCard.css">
<link rel="stylesheet" href="assets/frontpage_assets/css/testimonials.css">
<link rel="stylesheet" href="{{ asset('assets/frontpage_assets/css/footer.css') }}">

<style>


    #english-USD {
  border: none;
  background-position: right center;
  padding-right: 2px;
  color: #2c2c2c;
  font-size: 14px;
}
#english-USD:hover {
  cursor: pointer;
}

.login-section {
  display: flex;
  flex-direction: row;
  gap: 10px;
  align-items: center;
}

button {
  border: none;
  text-decoration: none;
}

.footer{
  width: 100%;
height: 420px;
flex-shrink: 0;
background: #FFF9F5;
}
.footer-content{
  padding-top:60px;
  padding-left:120px;
  display:flex
}
.footer1{
  flex:1
}
.footer2{
flex:1;
padding-left:81px
}
.footer3{
  flex:1
}.footer4{
  flex:1
}.footer5{
  flex:1
}


.footer-top-heading{
  width: 160px;
  color: #2C2C2C;
font-feature-settings: 'clig' off, 'liga' off;
font-family: Poppins;
font-size: 22px;
font-style: normal;
font-weight: 500;
line-height: 30px; /* 136.364% */
padding-bottom:18px
}
.footer-heading-item{
  width: 123.711px;
  color: rgba(44, 44, 44, 0.50);
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 32px; /* 177.778% */
padding-bottom:8px
}

.footer-head{
  color: rgba(44, 44, 44, 0.80);
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 32px; /* 177.778% */
}

.copyright{
  color: rgba(44, 44, 44, 0.50);
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: normal;
letter-spacing: 0.28px;
}

body{
overflow-y: hidden;
}

</style>


 <div class="hero-container">
    <section class="lesson-btns">
      <div class="btns-box">
        <button class="private-lesson"><a href="">Private Lesson</a></button>
        <button class="group-classes"><a href="#">Group Classes</a></button>
      </div>
      <h1 class="text-online mt-5">Online English classes to practice speaking together</h1>
      <p class="tagline mt-4">Learn, speak and connect with a small group of students, guided by an expert tutor</p>
    </section>
  </div>
  <div class="search-container">
    <div class="search-menu">
      <div class="search-items">
        <ul>
          <li class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/english-level.svg') }}" />English level
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
            </button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="#about">About</a>
              <a href="#base">Base</a>
              <a href="#blog">Blog</a>
            </div>
          </li>
          <li class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/topic.svg') }}" />Topic
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
            </button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="#about">About</a>
              <a href="#base">Base</a>
              <a href="#blog">Blog</a>
            </div>
          </li>
          <li class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/days.svg') }}" />Day
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
            </button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="#about">About</a>
              <a href="#base">Base</a>
              <a href="#blog">Blog</a>
            </div>
          </li>
          <li class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/english-level.svg') }}" />Time
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
            </button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="#about">About</a>
              <a href="#base">Base</a>
              <a href="#blog">Blog</a>
            </div>
          </li>
          <li class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/price.svg') }}" />Price
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
            </button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="#about">About</a>
              <a href="#base">Base</a>
              <a href="#blog">Blog</a>
            </div>
          </li>
          <li class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/format.svg') }}" />Format
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
            </button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="#about">About</a>
              <a href="#base">Base</a>
              <a href="#blog">Blog</a>
            </div>
          </li>
          <li class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/Sortby.svg') }}" />Sort by
              <img class="icon-btn" alt="Svg xml" src="{{ asset('assets/frontpage_assets/images/vector.svg') }}" />
            </button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="#about">About</a>
              <a href="#base">Base</a>
              <a href="#blog">Blog</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- slider 1-->
  <section id="card-section">
    <div class="text-container">
      <h2 class="starting-today mt-3">Starting today</h2>
    </div>
    <div class="card-container">
      <!-- slick_slider will be used here -->
      <div class="cards-collection ">
        @if (count($groupLessons) > 0)
            @foreach ($groupLessons as $groupLesson)

            <div class="card-wrapper">
                <div class="slider-card">
                    {{-- {{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} --}}
                    @if ($gallery = $groupLesson->gallery)
                        @if ($gallery->image)
                            <img class="card-image" alt="Image" src="{{ $gallery->image }}" />
                        @endif
                    @else
                        <img class="card-image" alt="Image" src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} " />
                    @endif
                  <div class="b2-c2">
                    <div class="vl"></div>
                  </div>
                  <p class="paragraph">{{ $groupLesson->title }}.</p>

                  <div class="profile">
                    <div class="person-data">
                      <div class="person">

                        <img class="-person-image" alt="Image" style="width: 30px" src="{{ asset('assets/frontpage_assets/images/user-img.jpg') }}" />
                        <div class="text-wrapper-4">{{ $groupLesson->tutor->fullname }}</div>
                      </div>
                      <div class="vl"></div>
                    </div>
                    <hr width="100%" color="#e3e3e3" />
                    <div class="price-panal">
                      <button class="price-box">
                        <div class="price-wrapper">
                          <div class="price-elements">
                            <a href="{{ route('group.details', $groupLesson->id) }}">
                              <span class="span-priceText">{{ config('protutor.currency') }}{{ $groupLesson->price }}</span>
                              <span class="span-classtext">/ {{ $groupLesson->subject ? ucfirst(strtolower($groupLesson->subject->subject)): '' }}</span>
                            </a>
                          </div>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        @else

        <h4 class="text-danger text-center">No lesson uploaded yet</h4>

        @endif
      </div>
    </div>
  </section>

  <!-- slider 2-->
  {{-- <section id="card-section">
    <div class="text-container">
      <h2 class="starting-today">Build confidence for work conversations</h2>
    </div>
    <div class="card-container">
      <div class="cards-collection">
        <div class="card-wrapper ">
            <div class="slider-card ">
              <img class="card-image" alt="Image" src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }}" />
              <div class="b2-c2">
                <div class="b2c2text-wrapper">B2-C2</div>
                <div class="vl"></div>
                <div class="likely-tosell">Likely to sell out</div>
              </div>
              <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
              <div class="profile">
                <div class="person-data">
                  <div class="person">
                    <img class="-person-image" alt="Image" src="{{ asset('assets/frontpage_assets/images/Ellipse 2670.svg') }}" />
                    <div class="text-wrapper-4">Jordyn Ekst</div>
                  </div>
                  <div class="vl"></div>
                  <div class="reviews">
                    <div class="icon">
                      <img class="star" alt="Star" src="{{ asset('assets/frontpage_assets/images/Ico.svg') }}" />
                    </div>
                    <div class="rating">
                      <span class="span-text">4.9 (220)</span>
                    </div>
                  </div>
                </div>
                <hr width="100%" color="#e3e3e3" />
                <div class="price-panal">
                  <button class="price-box">
                    <div class="price-wrapper">
                      <div class="price-elements">
                        <a href="#">
                          <span class="span-priceText">$5.00 </span>
                          <span class="span-classtext">/ Class</span>
                        </a>
                      </div>
                    </div>
                  </button>
                  <div class="top-reviews">
                    <div class="reviews-box">
                      <img class="review-2" alt="Image" src="{{ asset('assets/frontpage_assets/images/Ellipse_2669.svg') }}" />
                      <img class="review-3" alt="Image" src="{{ asset('assets/frontpage_assets/images/Ellipse_2671.svg') }}" />
                      <img class="review-4" alt="Image" src="{{ asset('assets/frontpage_assets/images/Ellipse_2672.svg') }}" />
                      <img class="review-5" alt="Image" src="{{ asset('assets/frontpage_assets/images/Ellipse_2673.svg') }}" />
                      <div class="review-text">
                        <span>+120</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section> --}}


  <!-- testimonial Section -->
  <section class="test-card">
    <div class="container-testimonial">
      <section class="section-testimonial">
        <div class="text-testimonial">
          <h2>Student Testimonials</h2>
          <div class="double-cols">
            <q>In my experience all the teachers are very supportive and friendly and the placement process has been
              very
              smooth. it’s
              also no issue talk about whatever you want to.</q>
            <h6 class="name">Sherina Munir - Designer</h6>
          </div>
        </div>
        <div class="testimonial-image">
          <img src="{{ asset('assets/frontpage_assets/images/Testimonials.png') }}" alt="Person Image">
        </div>
      </section>
    </div>
  </section>

  <!-- Corporate language training for business -->
  <section class="test-card">
    <div class="corporate-language">
      <section class="section-carporate">
        <div class="corporate-image">
          <img src="{{ asset('assets/frontpage_assets/images/Corporate-language.png') }}" alt="Person Image">
        </div>
        <div class="text-corporate">
          <h2>Corporate language training for business</h2>
          <div class="double-cols">
            <p class="name">ProTutor corporate training is designed for teams and businesses offering personalized
              language learning
              with online
              tutors. Book a demo to learn more.
              Want your employer to pay for your lessons? Refer your company!</p>
            <div class="join-as">
              <button class="tutor"><a href="#"></a>Join as a Tutor</button>
              <button class="student"><a href="#"></a>Join as a Student</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

<!-- Footer Section -->
@include('/frontend/common/footer')
<script type="text/javascript">
  $(document).ready(function(){
    $(".redirect_tutor_url").click(function(){
        var id = $(this).attr("data-id");
        var APP_URL = {!! json_encode(url('/')) !!}
        var full_url = APP_URL+'/tutor-detail/'+id;
        window.location.href = full_url;
    });
  });
</script>

 {{-- wajid designed footer  --}}
  {{-- <div class="footer">
	<div class="footer-content">
		<div class="footer1" style="margin-right:81px"> <img src="groupp/image 2.png" style="width: 100px;height: 34px;flex-shrink: 0;">
			<br>
			<div class="footer-head">We take care of your health with regular and fun exercise</div>
		</div>
		<div class="footer1">
			<div class="footer-top-heading">Top Subjects</div>
			<div class="footer-heading-item"> English </div>
			<div class="footer-heading-item"> German </div>
			<div class="footer-heading-item"> Arabic </div>
			<div class="footer-heading-item"> Spanish </div>
		</div>
		<div class="footer1">
			<div class="footer-top-heading">About</div>
			<div class="footer-heading-item"> Home </div>
			<div class="footer-heading-item"> Find Tutor </div>
			<div class="footer-heading-item"> Enterprise </div>
			<div class="footer-heading-item"> Become a tutor </div>
		</div>
		<div class="footer1">
			<div class="footer-top-heading">Help</div>
			<div class="footer-heading-item"> About us </div>
			<div class="footer-heading-item"> Cookies Policy </div>
			<div class="footer-heading-item"> Privacy Police </div>
			<div class="footer-heading-item"> Support </div>
		</div>
		<div class="footer1">
			<div class="footer-top-heading">Contact</div>
			<div class="footer-heading-item"> demo@gmail.com </div>
			<div class="footer-heading-item"> +1234567 </div>
		</div>
	</div>
	<div class="copyright" style="margin-top:85px;margin-left:562px"> Copyright © 2023 all right reserved ProTutor </div>
  </div> --}}
