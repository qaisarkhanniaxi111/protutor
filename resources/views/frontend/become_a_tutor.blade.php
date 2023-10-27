@include('/frontend/common/newHeader')


{{-- new code  --}}
<main>
	<section class="hero-section">
			<div class="container">
					<div class="row align-items-center">
							<div class="col-lg-7 order-md-1 order-2">
									<h1 class="main-heading  pt-md-3 mb-3 mt-4 text-start">
										{{ $contentAll[0]->sec_1_heading }}
									</h1>
									<p class="py-lg-3 py-2 main-text mb-3 text-start ">
										{{ $contentAll[0]->sec_1_dec }}
									</p>

									<ul class="hero-list">
											<li class="main-text">
													<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
													Steady stream of new students
											</li>
											<li class="main-text">
													<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
													Smart calendar
											</li>
											<li class="main-text">
													<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
													Interactive classroom
											</li>
											<li class="main-text">
													<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
													Convenient payment methods
											</li>
											<li class="main-text">
													<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
													Professional development webinars
											</li>
											<li class="main-text">
													<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
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
															<a href=""> <img src="{{ url('') }}/newAssets/assets/images/google.svg" alt="" class="me-3"></a>
															<a href=""><img src="{{ url('') }}/newAssets/assets/images/fb2.svg" alt="" class="me-3"></a>
															<a href=""><img src="{{ url('') }}/newAssets/assets/images/apple.svg" alt=""></a>
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
										{{ $contentAll[0]->sec_5_mainHeading }}
									</h2>
							</div>

							<div class="col-lg-4 mt-3">
									<div class="comfort-card justify-content-start">
											<img src="{{ url('/') }}/images/{{ $contentAll[0]->sec_5_c1_file }}" alt="" class="">
										 <div>
											<h3 class="mb-2 ">{{ $contentAll[0]->sec_5_c1_heading }}</h3>
											<p class="mb-0 pb-0">{{ $contentAll[0]->sec_5_c1_dec }}</p>
										 </div>
									</div>
							</div>

							<div class="col-lg-4 mt-3">
									<div class="comfort-card">
											<img src="{{ url('/') }}/images/{{ $contentAll[0]->sec_5_c2_file }}" alt="">
											<h3 class="mb-2">{{ $contentAll[0]->sec_5_c2_heading }}</h3>
											<p class="mb-0 pb-0">{{ $contentAll[0]->sec_5_c2_dec }}</p>
									</div>
							</div>

							<div class="col-lg-4 mt-3">
									<div class="comfort-card">
											<img src="{{ url('/') }}/images/{{ $contentAll[0]->sec_5_c3_file }}" alt="">
											<h3 class="mb-2">{{ $contentAll[0]->sec_5_c3_heading }}</h3>
											<p class="mb-0 pb-0">{{ $contentAll[0]->sec_5_c3_dec }}</p>
									</div>
							</div>

					</div>

			</div>
	</section>

	<section class="comfort-zone">
			<div class="container">
					<div class="row align-items-center">
						 
							<div class="col-lg-5 d-flex justify-content-center mb-lg-0 mb-4">
									<img src="{{ url('/') }}/images/{{ $contentAll[0]->sec_2_file }}" alt="" class="mx-auto img-fluid">
							</div>
							<div class="col-lg-7 ">
									<h2 class="heading text-start">
										{{ $contentAll[0]->sec_2_heading }}
									</h2>
									<p class="testimonial-text  text-start">
										{{ $contentAll[0]->sec_2_dec }}
							
											<div class="row p-0 mt-3">
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
																	Steady stream of new students
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
																	Professional development webinars
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
																	Smart calendar
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
																	Supportive tutor community
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
																	Interactive classroom
															</div>
													</div>
													<div class="col-lg-6">
															<div class="main-text2 mb-2 " style="color: #2C2C2C;">
																	<img src="{{ url('') }}/newAssets/assets/images/list-dot.svg" alt="" class="me-2">
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
										{{ $contentAll[0]->sec_3_heading }}
									</h2>
									<p class="testimonial-text  text-lg-start text-center">
										{!! $contentAll[0]->sec_3_dec !!}</p>
											<a href="{{ url('/become-a-tutor') }}" class="text-decoration-none"><button class="main-btn main-btn2 mt-4 mx-lg-0 mx-auto">Join as a Tutor</button></a> 
											
							</div>
							<div class="col-lg-6 d-flex justify-content-center order-lg-2 order-1 mb-lg-0 mb-4">
									<img src="{{ url('/') }}/images/{{ $contentAll[0]->sec_3_file }}" alt="" class="mx-auto img-fluid">
							</div>

					</div>
			</div>
	</section>


	<section class="language-training">
			<div class="container">
					<div class="row align-items-center">
							<div class="col-lg-6 d-flex justify-content-center  mb-lg-0 mb-4">
									<img src="{{ url('/') }}/images/{{ $contentAll[0]->sec_4_file }}" alt="" class="mx-auto img-fluid">
							</div>
							<div class="col-lg-6 pe-lg-5 ">
									<h2 class="heading text-md-start">
										{{ $contentAll[0]->sec_4_heading }}
									</h2>
									<p class="main-text2 text-md-start text-center text-gray mt-3" style="color: rgba(44, 44, 44, 0.80);
									;">
										{{ $contentAll[0]->sec_4_dec }} </p>

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
											<h2 class="accordion-header" id="headingTwo">
													<button type="button" class="accordion-button" data-bs-toggle="collapse"
															data-bs-target="#collapseTwo">Can I change my plan later?</button>
											</h2>
											<div id="collapseTwo" class="accordion-collapse collapse show"
													data-bs-parent="#myAccordion">
													<div class="card-body">
															<p class="main-text2  text-gray mt-3"
																	style="color: rgba(44, 44, 44, 0.80);
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
											<h2 class="accordion-header" id="headingOne">
													<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
															data-bs-target="#collapseOne">Is there a free trial available?</button>
											</h2>
											<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
													<div class="card-body">
															<p class="main-text2  text-gray mt-3"
																	style="color: rgba(44, 44, 44, 0.80);
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
															<p class="main-text2  text-gray mt-3"
																	style="color: rgba(44, 44, 44, 0.80);
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
											<h2 class="accordion-header" id="heading4">
													<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
															data-bs-target="#collapse4">Can other info be added to an invoice?</button>
											</h2>
											<div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
													<div class="card-body">
															<p class="main-text2  text-gray mt-3"
																	style="color: rgba(44, 44, 44, 0.80);
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
											<h2 class="accordion-header" id="heading5">
													<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
															data-bs-target="#collapse5">How does billing work?</button>
											</h2>
											<div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
													<div class="card-body">
															<p class="main-text2  text-gray mt-3"
																	style="color: rgba(44, 44, 44, 0.80);
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
@include('/frontend/common/newFooter')