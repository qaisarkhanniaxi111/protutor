<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ url('assets/frontpage_assets/images/favicon.png') }}">
    <title>
        @if (!empty($PageTitle)) {{ $PageTitle }}
        @else
            ProTutor | Home @endif
    </title>
    {{-- old code  --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('assets/frontpage_assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontpage_assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css"
        rel="stylesheet"> --}}
    

    {{-- new code  --}}
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
          <!-- slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="{{ url('newAssets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('newAssets/assets/css/responsive.css') }}">
</head>

<body>


    {{-- <header class="cont-space site-header">
        <div class="header-in">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ url('assets/frontpage_assets/images/logo-dark.svg') }}"
                        alt=""></a>
                <div class="mobClick">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="site-nav">
                <ul>
                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/find-a-tutor') }}">Find tutors</a></li>
                    <li><a href="">Enterprise</a></li>
                    <li><a href="{{ url('/become-a-tutor') }}">Become a tutor</a></li>
                    <li><a href="{{ url('/group') }}">Group Lesson</a></li>
                    <li
                        style="background: #ff6c0b;margin-right: 5px;font-family: 'Inter', sans-serif;border-radius: 5px;color: white !important;">
                        <a style="color: white !important;" href="{{ url('/signup') }}">Sign Up</a></li>
                    <li><a
                            href="
          @if (auth()->user()) @if (auth()->user()->role == 3)
                  {{ url('/tutordashboard') }}
              @elseif (auth()->user()->role == 4)
                  {{ url('/dashboard') }}
              @else
                  {{ url('/login') }} @endif
@else
{{ url('/login') }}
          @endif
          ">{{ auth()->check() ? 'Dashboard' : 'Login' }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </header> --}}

    <header>
        <nav class="navbar navbar-expand-xl  {{ isset($lightNavbar) ? "navbar-light" : "navbar-dark" }}  top-navbar-div {{ isset($lightNavbar) ? "light-nav" : "" }}">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url( isset($lightNavbar) ? "newAssets/assets/images/logo-dark.png" : "newAssets/assets/images/image 2.png") }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 top-navbar d-flex {{ isset($lightNavbar) ? "top-navbar-light" : "" }}">
                        <li class="nav-item">
                            <a class="nav-link active-nav" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/find-a-tutor') }}">Find Tutors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Enterprise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/become-a-tutor') }}">Become a tutor</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/group') }}">Group Lesson</a></li>
                    </ul>
                    <div class="d-flex align-items-md-center flex-md-row flex-column">
                        <select class="form-select {{ isset($lightNavbar) ? "header-select-dark" : "header-select" }} mb-md-0 mb-3" style="{{ isset($lightNavbar) ? "" : "color: rgba(255, 255, 255, 0.80);" }}"
                            aria-label="Default select example ">
                            <option selected style="color: black;">English, USD</option>
                            <option value="1" style="color: black;">English, EUR</option>
                            <option value="2" style="color: black;">English, USD</option>
                            <option value="3" style="color: black;">English, USD</option>
                        </select>
                        <button class="main-btn-blank ms-3 mb-md-0 mb-3 w-auto">Refer a friend</button>

                        @if (auth()->user())
                            @if (auth()->user()->role == 3)
    
                            @elseif (auth()->user()->role == 4)
                               
                            @else
                            <a href="{{url('/signup')}}" class="main-btn ms-3 w-auto">SignUp</a>
                            @endif
                        @else
                            <a href="{{url('/signup')}}" class="main-btn ms-3 w-auto">SignUp</a>
                          @endif
                            <a href="
                      @if (auth()->user()) @if (auth()->user()->role == 3)
                              {{ url('/tutordashboard') }}
                          @elseif (auth()->user()->role == 4)
                              {{ url('/dashboard') }}
                          @else
                              {{ url('/login') }} @endif
@else
{{ url('/login') }}
                      @endif"
                                class="main-btn ms-3 w-auto">{{ auth()->check() ? 'Dashboard' : 'Login' }}</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
