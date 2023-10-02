@include('/frontend/common/header')


{{-- new code  --}}
<main>
	<section class="hero-section">
			<div class="container">
					<div class="row align-items-center">
							<div class="col-lg-7 order-md-1 order-2">
									<h1 class="main-heading  pt-md-3 mb-3 mt-4 text-start">
											ATeach students from over 180 countries
									</h1>
									<p class="py-lg-3 py-2 main-text mb-3 text-start ">
											ProTutor tutors teach 800,000+ students globally. Join us and you’ll have everything you
											need to teach successfully.
									</p>

									<ul class="hero-list">
											<li class="main-text">
													<img src="assets/images/list-dot.svg" alt="" class="me-2">
													Steady stream of new students
											</li>
											<li class="main-text">
													<img src="assets/images/list-dot.svg" alt="" class="me-2">
													Smart calendar
											</li>
											<li class="main-text">
													<img src="assets/images/list-dot.svg" alt="" class="me-2">
													Interactive classroom
											</li>
											<li class="main-text">
													<img src="assets/images/list-dot.svg" alt="" class="me-2">
													Convenient payment methods
											</li>
											<li class="main-text">
													<img src="assets/images/list-dot.svg" alt="" class="me-2">
													Professional development webinars
											</li>
											<li class="main-text">
													<img src="assets/images/list-dot.svg" alt="" class="me-2">
													Supportive tutor community
											</li>
									</ul>
							</div>
							<div
									class="col-lg-5 mt-xl-0 mt-lg-4 mt-3 pt-lg-0  d-flex order-1  justify-content-center order-md-2 order-1">
									<div class="header-form">
											<form action="{{url('/become-a-tutor')}}">
												@csrf
													<h3 class="form-heading">Teach online</h3>
													<p class="form-text">Earn money on your schedule</p>

													<div class="mt-3 pt-2">
															<label>Email</label><br>
															<input type="email" name="email" placeholder="Enter your email">
															<span style="color: red;">
																@if($errors->has('email'))
																{{ $errors->first('email');}} 
																@endif
															</span>
													</div>
													<div class="mt-3 mb-1 pt-1 password">
															<label>Password</label><br>
															<input type="password" name="password" placeholder="Enter your password" id="id_password"> 
															<i class="far fa-eye"  id="togglePassword"></i>
														</div>
														<span style="color: red;">
															@if($errors->has('password'))
															{{ $errors->first('password');}} 
															@endif
														</span>
													<button class="mt-4 mb-2">Sign up with email</button>
													<hr class="mt-4 header-line">
													<h4 class="mx-auto">or continue with</h4>

													<div class="d-flex justify-content-center my-4">
															<a href=""> <img src="assets/images/google.svg" alt="" class="me-3"></a>
															<a href=""><img src="assets/images/fb2.svg" alt="" class="me-3"></a>
															<a href=""><img src="assets/images/apple.svg" alt=""></a>
													</div>

													<p class="form-footer">
															By signing up, you agree to ProTutor <a href="">Terms of Service</a> and <a
																	href="">Privacy Policy</a>
													</p>
											</form>
									</div>
							</div>
					</div>
			</div>
	</section>

	<section class="comfort-zone bg-white">
			<div class="container">
					<div class="row justify-content-center">
							<div class="col-lg-12 mb-lg-4 mb-3 pb-lg-2">
									<h2 class="heading ">
											We allowed you to make a living without leaving home!
									</h2>
							</div>

							<div class="col-lg-4 mt-3">
									<div class="comfort-card justify-content-start">
											<img src="{{ url("newAssets/assets/images/living-1.svg") }}" alt="" class="">
										 <div>
											<h3 class="mb-2 ">Set your own rate</h3>
											<p class="mb-0 pb-0">Choose your hourly rate and change it anytime. On average, English tutors charge $15-25 per hour.</p>
										 </div>
									</div>
							</div>

							<div class="col-lg-4 mt-3">
									<div class="comfort-card">
											<img src="{{ url("newAssets/assets/images/living-2.svg") }}" alt="">
											<h3 class="mb-2">Teach anytime, anywhere</h3>
											<p class="mb-0 pb-0">Decide when and how many hours you want to teach. No minimum time commitment or fixed schedule. Be your own boss!</p>
									</div>
							</div>

							<div class="col-lg-4 mt-3">
									<div class="comfort-card">
											<img src="{{ url("newAssets/assets/images/living-3.svg") }}" alt="">
											<h3 class="mb-2">Grow professionally</h3>
											<p class="mb-0 pb-0">Attend professional development webinars and get tips to upgrade your skills. You’ll get all the help you need from our team to grow.</p>
									</div>
							</div>

					</div>

			</div>
	</section>

	<section class="comfort-zone">
			<div class="container">
					<div class="row align-items-center">
						 
							<div class="col-lg-5 d-flex justify-content-center mb-lg-0 mb-4">
									<img src="{{ url("newAssets/assets/images/Image 1.png") }}" alt="" class="mx-auto img-fluid">
							</div>
							<div class="col-lg-7 ">
									<h2 class="heading text-start">
											Teach students from over 180 countries
									</h2>
									<p class="testimonial-text  text-start">
											ProTutor tutors teach 800,000+ students globally. Join us and you’ll have everything you need to teach successfully.
							
											<div class="row p-0 mt-3">
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="assets/images/list-dot.svg" alt="" class="me-2">
																	Steady stream of new students
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="assets/images/list-dot.svg" alt="" class="me-2">
																	Professional development webinars
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="assets/images/list-dot.svg" alt="" class="me-2">
																	Smart calendar
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="assets/images/list-dot.svg" alt="" class="me-2">
																	Supportive tutor community
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="assets/images/list-dot.svg" alt="" class="me-2">
																	Interactive classroom
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="assets/images/list-dot.svg" alt="" class="me-2">
																	Convenient payment methods
															</div>
													</div>
											</div>
					
							</div>

					</div>
			</div>
	</section>


	<section class="testimonials">
			<div class="container">
					<div class="row align-items-center">
							<div class="col-lg-6 order-lg-1 order-2">
									<h2 class="heading text-lg-start text-center">
											“ProTutor allowed me to make a living without leaving home!”
									</h2>
									<p class="testimonial-text  text-lg-start text-center">
											Eliza G. teaches English on ProTutor so<br class="d-md-block d-none"> she can spend more time with her son</p>
											<a href="{{ url('/become-a-tutor') }}" class="text-decoration-none"><button class="main-btn main-btn2 mt-4 mx-lg-0 mx-auto">Join as a Tutor</button></a> 
											
							</div>
							<div class="col-lg-6 d-flex justify-content-center order-lg-2 order-1 mb-lg-0 mb-4">
									<img src="{{ url('newAssets/assets/images/65013-english-teacher 1.png') }}" alt="" class="mx-auto img-fluid">
							</div>

					</div>
			</div>
	</section>


	<section class="language-training">
			<div class="container">
					<div class="row align-items-center">
							<div class="col-lg-6 d-flex justify-content-center  mb-lg-0 mb-4">
									<img src="{{ url("newAssets/assets/images/lang.png") }}" alt="" class="mx-auto img-fluid">
							</div>
							<div class="col-lg-6 pe-lg-5 ">
									<h2 class="heading text-md-start">
											Corporate language training for business
									</h2>
									<p class="main-text2 text-md-start text-center text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
									;">
											ProTutor corporate training is designed for teams and businesses offering personalized
											language learning with online tutors. Book a demo to learn more.
											Want your employer to pay for your lessons? Refer your company! </p>

									<div
											class="d-flex align-items-center justify-content-lg-start justify-content-center flex-md-row flex-column mt-3 pt-3 mb-3">
											<a href="{{ url('/become-a-tutor') }}" class="text-decoration-none"> <button class="main-btn main-btn2 ">Join as a Tutor</button></a>
                      <a href="{{ url('/student-signup') }}" class="text-decoration-none"><button class="main-btn-blank ms-md-3 mt-md-0 mt-3">Join as a Student</button></a>
									</div>
							</div>


					</div>
			</div>
	</section>


	<section class="testimonials">
			<div class="container">
					<div class="row align-items-center">
							<div class="col-lg-12">
									<h2 class="heading text-md-start">
											Find an Online English Teacher to Help You Master English
									</h2>
							</div>
							<div class="col-lg-6 pe-lg-5 ">


									<div class="accordion mt-3 faq-accordian" id="myAccordion">
											<div class="accordion-item">
													<h2 class="accordion-header" id="headingOne">
															<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapseOne">Is there a free trial available?</button>
													</h2>
													<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
															<div class="card-body">
																	<p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
																	;">
																			Live tutoring software enables tutors to teach students in real time
																			utilizing interactive
																			video conferencing features. As a Student or Parent, you can browse through
																			Tutor profiles
																			and their subject expertise, and thereafter book live lesson.
																	</p>
															</div>
													</div>
											</div>
											<div class="accordion-item">
													<h2 class="accordion-header" id="headingTwo">
															<button type="button" class="accordion-button" data-bs-toggle="collapse"
																	data-bs-target="#collapseTwo">Can I change my plan later?</button>
													</h2>
													<div id="collapseTwo" class="accordion-collapse collapse show"
															data-bs-parent="#myAccordion">
															<div class="card-body">
																	<p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
																	;">
																			Live tutoring software enables tutors to teach students in real time
																			utilizing interactive
																			video conferencing features. As a Student or Parent, you can browse through
																			Tutor profiles
																			and their subject expertise, and thereafter book live lesson.
																	</p>
															</div>
													</div>
											</div>
											<div class="accordion-item">
													<h2 class="accordion-header" id="headingThree">
															<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapseThree">What is your cancellation policy?</button>
													</h2>
													<div id="collapseThree" class="accordion-collapse collapse"
															data-bs-parent="#myAccordion">
															<div class="card-body">
																	<p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
																	;">
																			Live tutoring software enables tutors to teach students in real time
																			utilizing interactive
																			video conferencing features. As a Student or Parent, you can browse through
																			Tutor profiles
																			and their subject expertise, and thereafter book live lesson.
																	</p>
															</div>
													</div>
											</div>

											<div class="accordion-item">
													<h2 class="accordion-header" id="headingThree">
															<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapseThree">Can other info be added to an invoice?</button>
													</h2>
													<div id="collapseThree" class="accordion-collapse collapse"
															data-bs-parent="#myAccordion">
															<div class="card-body">
																	<p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
																	;">
																			Live tutoring software enables tutors to teach students in real time
																			utilizing interactive
																			video conferencing features. As a Student or Parent, you can browse through
																			Tutor profiles
																			and their subject expertise, and thereafter book live lesson.
																	</p>
															</div>

													</div>
											</div>

											<div class="accordion-item">
													<h2 class="accordion-header" id="headingThree">
															<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapseThree">How does billing work?</button>
													</h2>
													<div id="collapseThree" class="accordion-collapse collapse"
															data-bs-parent="#myAccordion">
															<div class="card-body">
																	<p class="main-text2  text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
																	;">
																			Live tutoring software enables tutors to teach students in real time
																			utilizing interactive
																			video conferencing features. As a Student or Parent, you can browse through
																			Tutor profiles
																			and their subject expertise, and thereafter book live lesson.
																	</p>
															</div>
													</div>
											</div>
									</div>





							</div>
							<div class="col-lg-6">

							</div>

					</div>
			</div>
	</section>

</main>



{{-- old code  --}}
<!-- start page title -->
{{-- <div class="page-title">
	<div class="container">
		<h1>Become a Tutor</h1>
	</div>
</div>
<style type="text/css">
	.get-paid-section{

		background: url('{{url('/')}}/public/images/{{$contentAll[0]->sec4_img}}') center center no-repeat !important;
	}
</style> --}}
<!-- end page title -->

<!-- start become a author hero section -->
{{-- <section class="become-author-hero-section">
	<div class="become-author-hero-section-overlay">
		<div class="container">
			<div class="become-author-hero-main" data-aos="fade-up">
				<div class="sine-up-page-area">
					<div class="row">
						<div class="col-md-12 my-5">
							<h1 class="fw-bold text-dark mb-3">Teach Online</h1>
							<span class="become-author-text">Sign up to earn money on you schedule</span>
							<!-- form -->
							<span style="color: red;">
								@if(session('success_msg'))  
								<div class="alert alert-success alert-dismissible"> 
									{{session('success_msg')}}
									<button type="button" class="btn-close" data-bs-dismiss="alert"><span aria-hidden="true">&times;</span>
									</button>
								</div>
								@elseif(session('error_msg'))
								<div class="alert alert-danger alert-dismissible"> 
									{{session('error_msg')}}
									<button type="button" class="btn-close" data-bs-dismiss="alert"><span aria-hidden="true">&times;</span>
									</button>
								</div>
								@endif 
							</span>

							<form action="{{url('/become-a-tutor')}}" class="form mt-2" method="post">
								@csrf()
								<div class="login-inp-wrap">
									<input class="login-inp" name="email" type="email" placeholder="Email">
									<span style="color: red;">
										@if($errors->has('email'))
										{{ $errors->first('email');}} 
										@endif
									</span>
								</div>
								<div class="login-inp-wrap">
									<input class="login-inp" name="password" id="password" type="password" placeholder="Password">
									<span class="inp-icon">
										<i class="fa-regular fa-eye" id="eye"></i>
									</span>
									<span style="color: red;">
										@if($errors->has('password'))
										{{ $errors->first('password');}} 
										@endif
									</span>
								</div>
								<div class="log-remember">
									<label class="custom-check">Remember me
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</div>
								<input class="form-btn" type="submit" value="Sign up">
							</form>

							<p class="sine-up-p fs-6">Already have an account? <strong style="color: #FF6C0B;" class="fs-6">
								<a href="{{url('/login')}}">Log in</a>
							</strong></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- end become a author hero section -->

<!-- start services section -->
{{-- <section class="services-section">
	<div class="container">
		<div class="row">
			<?php 
			$get_section1 = $contentAll[0]->sec_data1;
			$get_section_all = json_decode($get_section1);
			?>
			<?php 
			$sec1_count=1;
			foreach ($get_section_all as $key => $get_section_value) {
				?>
				<div class="col-lg-4 col-md-12 mt-3" data-aos="fade-up">
					<span>
						<img src="{{url('/')}}/public/images/{{$get_section_value->icon}}" alt="" width="100" height="100">
					</span>
					<h3 class="fw-blod text-dark my-3">
						{{$get_section_value->title}}
					</h3>
					<p class="fs-6 text-muted">
						{{$get_section_value->description}}
					</p>
				</div>
			<?php } ?>
		</div>
	</div>
</section> --}}
<!-- end services section -->

<!-- start information section -->
{{-- <section class="information-section">
	<div class="cont-space">
		<div class="row">
			<?php 
			$get_section2 = $contentAll[0]->sec_data2;
			$get_section2_all = json_decode($get_section2);
			?>
			<div class="col-md-6 mt-3" data-aos="fade-up">
				<img src="{{url('/')}}/public/images/{{$contentAll[0]->img_sec2}}">
			</div>
			<div class="col-md-6 info-right" data-aos="fade-up">
				<h1 class="mt-5 mt-md-3 fs-2 text-dark fw-bold">
					{{$contentAll[0]->main_title_sec2}}
				</h1>
				<!-- row 1 -->
				<div class="row mt-5">
					<?php 
					$sec2_count=1;
					foreach ($get_section2_all as $key => $get_section_values) {
						?>
						<div class="col-md-6" data-aos="fade-up">
							<h3 class="fs-5 text-dark mb-2">{{$get_section_values->title}}</h3>
							<p class="text-muted fs-6">
								{{$get_section_values->description}}
							</p>
						</div>
					<?php } ?>
				</div>

				<!-- single p element -->
				<p class="mt-3 text-muted fs-6">
					{{$contentAll[0]->content_sec2}}
				</p>
				<!-- button -->
				<a href="{{$contentAll[0]->url_sec2}}"><button class="mt-3 info-btn">Apply Now</button></a>
			</div>
		</div>
	</div>
</section> --}}
<!-- end information section -->

<!-- start qna section -->
{{-- <section class="qna-section">
	<div class="container">
		<h1 class="text-center text-dark fw-bold mb-5">
			Questions? We have Answers!
		</h1>
		<div class="row">
			<!-- <div class="col-lg-6 col-md-12" data-aos="fade-up" id="accordion">
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Getting Started (TUTOR)
						</div>
						<div class="accordion-item-body">
							<div class="accordion-item-body-content">
								<p class="text-muted fs-6 text-start">
									Once the student has selected a suitable tutor, he/she has to make the First Lesson Payment through our platform. The tutor will give his first lesson to the student against this payment, where the tutor would have to convince the student that he has made the right choice. After the First Lesson, if the student is satisfied with the tutor and he has decided to proceed with that particular tutor. The student will book a package offered by the tutor. The available lesson packages range from 5 hours to 20 hours. Choosing bigger packages is usually cost-effective. The students may book a package as per their desire or need. The tutor may start giving the lessons as soon as the package payment has been made. The lessons are scheduled in advance and are supposed to take place according to this schedule. In case the tutor wants to cancel or reschedule a lesson, he/she is required to do it 4 hours before the scheduled time otherwise, it will not be rescheduled. After the scheduled lesson has taken place, the platform will send the request for the confirmation of the lesson to the student. The tutor will receive the payment for this lesson only after the student has confirmed the lesson. In case a student has turned ON the auto-confirmation option for the confirmation of a lesson, the lesson will automatically be confirmed 72 hours after the lesson time. To report a lesson-based issue, the tutor is required to report it within 72 hours of the completion of the lesson.
								</p>
							</div>
						</div>
					</div>
				</div> 
			</div> --> 
			<?php 
			$get_section3 = $contentAll[0]->sec_data3;
			$get_section3_all = json_decode($get_section3);
			?>
			<?php 
			$sec3_count=1;
			foreach ($get_section3_all as $key => $get_section3_value) {
				?>
				<div class="col-lg-6" data-aos="fade-up">
					<div class="accordion">
						<div class="accordion-item">
							<div class="accordion-item-header" id="change-color">
								{{$get_section3_value->title}}
							</div>
							<div class="accordion-item-body">
								<div class="accordion-item-body-content">
									<p class="text-muted fs-6 text-start">
										{{$get_section3_value->description}}
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?> 

		</div>
		<p class="text-center text-dark fw-bold fs-5 mt-4">
			Have more questions? <a href="#"><span style="color:#FF6C0B;">Check our Help center <br></span></a> or <a href="#"><span style="color:#FF6C0B;">contact our support team</span></a>
		</p>
	</div>
</section> --}}
<!-- end qna section -->

<!-- start get paid section -->
{{-- <section class="get-paid-section">
	<div class="get-paid-section-overlay">
		<div class="container">
			<div class="row">
				<div class="col" data-aos="fade-up">
					<h1 class="find-sec-title">
						{{$contentAll[0]->sec4_title}}
					</h1>
					<p class="find-sec-para">
						{{$contentAll[0]->	sec4_desc}}
					</p>
					
					<a href="{{$contentAll[0]->	sec4_url}}">
						<button class="find-tutor-btn">Get started</button>
					</a>
					
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- end get paid section -->

<!-- start banner section -->
{{-- <section class="apps-banner">
	<div class="container">
		<div class="apps-banner-main">
			<div class="row align-items-center">
				<div class="col-lg-7" data-aos="fade-up">
					<div class="apps-banner-left">
						<h2>{{$contentAll[0]->sec5_heading}}</h2>
						<p class="mb-3 text-start"> {{$contentAll[0]->sec5_desc}} </p>
						<div class="button-group">
							<a class="" href="{{$contentAll[0]->sec5_apple_store_url}}"><img src="{{url('/')}}/public/assets/frontpage_assets/images/app-store.png" alt=""></a>
							<a class="ms-md-3 ms-sm-0" href="{{$contentAll[0]->sec5_play_store_url}}"><img src="{{url('/')}}/public/assets/frontpage_assets/images/goole.png" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5" data-aos="fade-up">
					<div class="apps-banner-right"><img src="{{url('/')}}/public/images/{{$contentAll[0]->sec5_file}}" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section> --}}



{{-- new code  --}}
<script>
	// Login
	const togglePassword = document.querySelector('#togglePassword');
	const password = document.querySelector('#id_password');

	togglePassword.addEventListener('click', function (e) {
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			this.classList.toggle('fa-eye-slash');
	});
</script>
@include('/frontend/common/footer')