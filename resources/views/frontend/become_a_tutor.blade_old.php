@include('/frontend/common/header')
<!-- start page title -->
<div class="page-title">
	<div class="container">
		<h1>Become a Tutor</h1>
	</div>
</div>
<!-- end page title -->

<!-- start become a author hero section -->
<section class="become-author-hero-section">
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
</section>
<!-- end become a author hero section -->

<!-- start services section -->
<section class="services-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 mt-3" data-aos="fade-up">
				<span>
					<img src="{{url('/')}}/public/assets/frontpage_assets/icons/fact_check.svg" alt="fast-check">
				</span>
				<h3 class="fw-blod text-dark my-3">
					Set your own rate
				</h3>
				<p class="fs-6 text-muted">
					Choose your hourly rate and change it anytime.On average, English tutors charge $15-25 per hour.
				</p>
			</div>
			<div class="col-lg-4 col-md-12 mt-3" data-aos="fade-up">
				<span>
					<img src="{{url('/')}}/public/assets/frontpage_assets/icons/schedule.svg" alt="schedule">
				</span>
				<h3 class="fw-blod text-dark my-3">
					Teach anytime, anywhere
				</h3>
				<p class="fs-6 text-muted">
					Decide when and how many hours you want to teach. No minimum time commitment or fixed schedule. Be your own boss!
				</p>
			</div>
			<div class="col-lg-4 col-md-12 mt-3" data-aos="fade-up">
				<span>
					<img src="{{url('/')}}/public/assets/frontpage_assets/icons/trend.svg" alt="trend">
				</span>
				<h3 class="fw-blod text-dark my-3">
					Grow professionally
				</h3>
				<p class="fs-6 text-muted">
					Attend professional development webinars and get tips to upgrade your skills. You’ll get all the help you need from our team to grow.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- end services section -->

<!-- start information section -->
<section class="information-section">
	<div class="cont-space">
		<div class="row">
			<div class="col-md-6 mt-3" data-aos="fade-up">
				<img class="info-img" src="{{url('/')}}/public/assets/frontpage_assets/images/img-1.jpg" alt="info-img">
			</div>
			<div class="col-md-6 info-right" data-aos="fade-up">
				<h1 class="mt-5 mt-md-3 fs-2 text-dark fw-bold">
					Why become a tutor At Pro Tutor?
				</h1>
				<!-- row 1 -->
				<div class="row mt-5">
					<div class="col-md-6" data-aos="fade-up">
						<h3 class="fs-5 text-dark mb-2">Teach on your own schedule</h3>
						<p class="text-muted fs-6">
							As a Tutor, you have the freedom to choose when you want to tutor students and the number of hours you want to teach.
						</p>
					</div>
					<div class="col-md-6" data-aos="fade-up">
						<h3 class="fs-5 text-dark mb-2 mt-md-0 mt-3">Set your hourly rate</h3>
						<p class="text-muted fs-6">
							Since you’re your own boss, you can set your own rate and maximize your earning potential while providing real value to the students.
						</p>
					</div>
				</div>
				<!-- row 2 -->
				<div class="row mt-5">
					<div class="col-md-6" data-aos="fade-up">
						<h3 class="fs-5 text-dark mb-2">Work Anywhere, Anytime</h3>
						<p class="text-muted fs-6">
							Flexibility to teach at home without wasting productive time.
						</p>
					</div>
					<div class="col-md-6" data-aos="fade-up">
						<h3 class="fs-5 text-dark mb-2 mt-md-0 mt-3">Find more students</h3>
						<p class="text-muted fs-6">
							Teach as many or as few students at your convenience.
						</p>
					</div>
				</div>
				<!-- row 3 -->
				<div class="row mt-5">
					<div class="col-md-6" data-aos="fade-up">
						<h3 class="fs-5 text-dark mb-2">Work Anywhere, Anytime</h3>
						<p class="text-muted fs-6">
							Flexibility to teach at home without wasting productive time.
						</p>
					</div>
					<div class="col-md-6" data-aos="fade-up">
						<h3 class="fs-5 text-dark mb-2 mt-md-0 mt-3">Find more students</h3>
						<p class="text-muted fs-6">
							Teach as many or as few students at your convenience.
						</p>
					</div>
				</div>
				<!-- single p element -->
				<p class="mt-3 text-muted fs-6">
					As a tutor on our platform, you’ll have the freedom to choose when you want to tutor students and the number of hours you want to teach.
				</p>
				<!-- button -->
				<a href="#"><button class="mt-3 info-btn">Apply Now</button></a>
			</div>
		</div>
	</div>
</section>
<!-- end information section -->

<!-- start qna section -->
<section class="qna-section">
	<div class="container">
		<h1 class="text-center text-dark fw-bold mb-5">
			Questions? We have Answers!
		</h1>
		<div class="row">
			<div class="col-lg-6 col-md-12" data-aos="fade-up" id="accordion">
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Profile Development
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							The Job Hunt
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Operative Mechanism
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Payment Procedures
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Dos and Don'ts
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
			</div>
			<div class="col-lg-6 col-md-12" data-aos="fade-up">
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							The Review System
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Cancelation Policy
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							How to create a good Self-introduction video
						</div>
						<div class="accordion-item-body">
							<div class="accordion-item-body-content">
								<p style="text-align: left;" class="text-muted fs-6 text-start">
									Once the student has selected a suitable tutor, he/she has to make the First Lesson Payment through our platform. The tutor will give his first lesson to the student against this payment, where the tutor would have to convince the student that he has made the right choice. After the First Lesson, if the student is satisfied with the tutor and he has decided to proceed with that particular tutor. The student will book a package offered by the tutor. The available lesson packages range from 5 hours to 20 hours. Choosing bigger packages is usually cost-effective. The students may book a package as per their desire or need. The tutor may start giving the lessons as soon as the package payment has been made. The lessons are scheduled in advance and are supposed to take place according to this schedule. In case the tutor wants to cancel or reschedule a lesson, he/she is required to do it 4 hours before the scheduled time otherwise, it will not be rescheduled. After the scheduled lesson has taken place, the platform will send the request for the confirmation of the lesson to the student. The tutor will receive the payment for this lesson only after the student has confirmed the lesson. In case a student has turned ON the auto-confirmation option for the confirmation of a lesson, the lesson will automatically be confirmed 72 hours after the lesson time. To report a lesson-based issue, the tutor is required to report it within 72 hours of the completion of the lesson.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Profile Optimization
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							Commission Norms
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
				<div class="accordion">
					<div class="accordion-item">
						<div class="accordion-item-header" id="change-color">
							How to setup group classes walkthrough video
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
			</div>
		</div>
		<p class="text-center text-dark fw-bold fs-5 mt-4">
			Have more questions? <a href="#"><span style="color:#FF6C0B;">Check our Help center <br></span></a> or <a href="#"><span style="color:#FF6C0B;">contact our support team</span></a>
		</p>
	</div>
</section>
<!-- end qna section -->

<!-- start get paid section -->
<section class="get-paid-section">
	<div class="get-paid-section-overlay">
		<div class="container">
			<div class="row">
				<div class="col" data-aos="fade-up">
					<h1 class="find-sec-title">
						Get paid to teach online
					</h1>
					<p class="find-sec-para">
						Connect with thousands of learners <br> around the world and teach from your <br> living room
					</p>
					<a href="#">
						<button class="find-tutor-btn">Get started</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end get paid section -->

<!-- start banner section -->
<section class="apps-banner">
	<div class="container">
		<div class="apps-banner-main">
			<div class="row align-items-center">
				<div class="col-lg-7" data-aos="fade-up">
					<div class="apps-banner-left">
						<h2>Manage yourself from your mobile device.</h2>
						<p class="mb-3 text-start">There are many variations of passages of Lorem Ipsum avail the majority have suffered alteration in some form, by injected or randomised words which don't look </p>
						<div class="button-group">
							<a class="" href=""><img src="{{url('/')}}/public/assets/frontpage_assets/images/app-store.png" alt=""></a>
							<a class="ms-md-3 ms-sm-0" href=""><img src="{{url('/')}}/public/assets/frontpage_assets/images/goole.png" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5" data-aos="fade-up">
					<div class="apps-banner-right"><img src="{{url('/')}}/public/assets/frontpage_assets/images/phone.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('/frontend/common/footer')