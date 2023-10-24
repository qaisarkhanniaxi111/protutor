
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
	<title>ProTutor: Tutor details</title>
	<!-- font awesome css cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	<!-- aos css cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
	<!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- google cdn -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
	<!-- custom css -->
	<link rel="stylesheet" href="{{ asset('assets/frontpage_assets/css/custom.css') }}">

    @yield('styles')
</head>
<body>
	<!-- start header -->
	<header class="cont-space site-header">
		<div class="header-in">
			<div class="logo">
				<a href="#"><img src="{{ asset('assets/frontpage_assets/images/logo-dark.svg') }}" alt="header-logo"></a>
				<div class="mobClick">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="site-nav">
				<ul>
					<li><a class="active" href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/group')}}">Find tutors</a></li>
                   
                    <li><a href="{{url('/become-a-tutor')}}">Become a tutor</a></li>
                  
                    <li style="background: #ff6c0b;margin-right: 5px;font-family: 'Inter', sans-serif;border-radius: 5px;color: white !important;"><a style="color: white !important;" href="{{url('/signup')}}">Sign Up</a></li>
                    <li><a href="{{url('/login')}}">{{ auth()->check() ? 'Dashboard': 'Login' }}</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- end header header -->

    @yield('content')

	<!-- start footer -->
	<footer class="site-footer">
		<div class="container">
		   	<div class="footer-top">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="footer-single first">
							<div class="footer-logo">
								<img src="../assets/images/footer-logo.svg" alt="">
							</div>
							<div class="footer-txt">
								<p class="text-start">Lorem Ipsum is simply dummy text of the printing and ndustry. Lorem Ipsum has been the</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="footer-single">
							<h3>ABOUT</h3>
							<ul>
								<li><a href="../index.html">Home</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="footer-single">
							<h3>Help</h3>
							<ul>
								<li><a href="">About Us</a></li>
								<li><a href="">Legal warning</a></li>
								<li><a href="">Cookies policy</a></li>
								<li><a href="">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="footer-single">
						<h3>Contact Us</h3>
							<ul>
								<li><a href="">Demo@gmai.com</a></li>
								<li><a href="">+460-507-6865</a></li>
								<li><a href="">Facebook</a></li>
								<li><a href="">Instragram</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<p>Copyright © 2023 all right reserved ProTutor</p>
			</div>
		</div>
	 </footer>
	<!-- end footer -->

	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- font awesome js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
	<!-- bootstrap js cdn -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- aos js cdn -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- tilt js cdn -->
	<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
	<!-- custom js -->

    @yield('scripts')

	<script src="../assets/js/custom.js"></script>
    <script src="../assets/js/app.js"></script>
</body>
</html>
