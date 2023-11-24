@php
    $lightNavbar = true;
@endphp
<link rel="stylesheet" href="/assets/dashboard_assets/css/custom.css">
@include('frontend/common/header')
<link rel="stylesheet" href="{{ url('/') }}/assets/frontpage_assets/css/tutor-signup.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="{{ url('/') }}/multiDropdown/multiselect_dropdown.js"></script> --}}
<style>
    #nextPhotoBtn {
        pointer-events: none
    }

    #nextVideoBtn {
        pointer-events: none
    }

    .move {
        pointer-events: auto !important
    }

    .multiselect-dropdown-list label {
        display: inline;
    }

    .menuDisabled {
        pointer-events: none !important;
    }
</style>
<div class="sign-step">
    <div class="sign-step-top" style="padding-top: 100px !important">
        <div class="container pt-5">
            <ul class="nav nav-tabs">

                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">
                        <span class="circle">1</span>
                        <span class="circle-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="circle-txt">About</span>
                        <span class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                </li>

                <li class="nav-item menuDisabled" id="descriptionDisabled">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                        <span class="circle">2</span>
                        <span class="circle-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="circle-txt">Description</span>
                        <span class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                </li>

                <li class="nav-item menuDisabled" id="photoDisabled">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                        <span class="circle">3</span>
                        <span class="circle-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="circle-txt">Photo</span>
                        <span class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                </li>

                <li class="nav-item menuDisabled" id="videoDisabled">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                        <span class="circle">4</span>
                        <span class="circle-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="circle-txt">Video</span>
                        <span class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                </li>

                <li class="nav-item " id="workAndEduDisabled">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-6">
                        <span class="circle">5</span>
                        <span class="circle-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="circle-txt">Education</span>
                        <span class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                </li>
                <li class="nav-item " id="workAndEduDisabled">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-7">
                        <span class="circle">5</span>
                        <span class="circle-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="circle-txt">Experience</span>
                        <span class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                </li>

                <li class="nav-item menuDisabled" id="lastDisabled">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                        <span class="circle">7</span>
                        <span class="circle-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="circle-txt">Done</span>
                        <span class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                    </a>
                </li>


            </ul>
        </div>
    </div>

    <form action="{{ url('/submit_tutor_signup') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="sign-step-cont">
            <div class="container">
                <span style="color: red;">
                    @if (session('success_msg'))
                        <div class="alert alert-success alert-dismissible">
                            {{ session('success_msg') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                    @elseif(session('error_msg'))
                        <div class="alert alert-danger alert-dismissible">
                            {{ session('error_msg') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                    @endif
                </span>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="inp-wrap mt-0">
                                    <label for="">First Name <span style="color: red;">*</span></label>
                                    <input class="inp" type="hidden" name="userid" value="{{ $userid }}">
                                    <input class="inp" type="text" value="{{ old('first_name') }}"
                                        name="first_name" id="" placeholder="">
                                    <span style="color: red;">
                                        @if ($errors->has('first_name'))
                                            {{ $errors->first('first_name') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inp-wrap mt-0 alt">
                                    <label for="">Last name <span style="color: red;">*</span></label>
                                    <input class="inp" type="text" value="{{ old('last_name') }}"
                                        name="last_name" placeholder="">
                                    <span style="color: red;">
                                        @if ($errors->has('last_name'))
                                            {{ $errors->first('last_name') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inp-wrap">
                                    <label for="">Email <span style="color: red;">*</span></label>
                                    <input class="inp" type="email" value="{{ $email }}" name="email"
                                        readonly>
                                    <span style="color: red;">
                                        @if ($errors->has('email'))
                                            {{ $errors->first('email') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inp-wrap">
                                    <label for="">Country of origin <span style="color: red;">*</span></label>
                                    <select class="inp" name="country" id="">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $countries_data)
                                            <option {{ old('country') == $countries_data->id ? 'selected' : '' }}
                                                value="{{ $countries_data->id }}">{{ $countries_data->nicename }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <span style="color: red;">
                                    @if ($errors->has('country'))
                                        {{ $errors->first('country') }}
                                    @endif
                                </span>


                            </div>
                            <div class="col-sm-6">
                                <div class="inp-wrap">
                                    <label for="">Native Language<span style="color: red;">*</span></label>
                                    <select class="inp nativeLanguage customDropdown" name="native_language[]" multiple>

                                        @foreach ($spoken_languages as $spoken_languages_data)
                                            <option
                                                {{ old('native_language') == $spoken_languages_data->id ? 'selected' : '' }}
                                                value="{{ $spoken_languages_data->id }}">
                                                {{ $spoken_languages_data->spoken_language }}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red;">
                                        @if ($errors->has('native_language'))
                                            {{ $errors->first('native_language') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inp-wrap">
                                    <label for="">Languages spoken <span style="color: red;">*</span></label>
                                    <select class="inp" name="languages[]" multiple data-allow-clear="1">
                                        @foreach ($spoken_languages as $spoken_languages_data)
                                            <option
                                                {{ in_array($spoken_languages_data->id, old('languages') ?: []) ? 'selected' : '' }}
                                                value="{{ $spoken_languages_data->id }}">
                                                {{ $spoken_languages_data->spoken_language }}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red;">
                                        @if ($errors->has('languages'))
                                            {{ $errors->first('languages') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inp-wrap">
                                    <label for="">Level to teach <span style="color: red;">*</span></label>
                                    <select class="inp" name="level[]" id="" multiple
                                        data-allow-clear="1">

                                        @foreach ($teaches_levels as $teaches_levels_data)
                                            <option {{ old('level') == $teaches_levels_data->id ? 'selected' : '' }}
                                                value="{{ $teaches_levels_data->id }}">
                                                {{ $teaches_levels_data->teaches_level }}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red;">
                                        @if ($errors->has('level'))
                                            {{ $errors->first('level') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="inp-wrap">
                                    <label for="">Subject to teach <span style="color: red;">*</span></label>
                                    <select class="inp" name="subject[]" multiple data-allow-clear="1">
                                        @foreach ($subject as $subject_data)
                                            <option
                                                {{ in_array($subject_data->id, old('subject') ?: []) ? 'selected' : '' }}
                                                value="{{ $subject_data->id }}">{{ $subject_data->subject }}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red;">
                                        @if ($errors->has('subject'))
                                            {{ $errors->first('subject') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="inp-wrap">
                                    <label for="">Hourly rate($) <span style="color: red;">*</span></label>
																		<input type="number" name="hourly_rate" class="inp">
                                    {{-- <select class="inp" name="hourly_rate" id="">
                                        <option value="">Select Hourly Rate</option>
                                        @foreach ($hourly_rate as $hourly_rate_data)
                                            <option {{ old('hourly_rate') == $hourly_rate_data->id ? 'selected' : '' }}
                                                value="{{ $hourly_rate_data->id }}">
                                                {{ $hourly_rate_data->hourly_rate }}
                                            </option>
                                        @endforeach
                                    </select> --}}

                                    <span style="color: red;">
                                        @if ($errors->has('hourly_rate'))
                                            {{ $errors->first('hourly_rate') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
														<div class="col-lg-6">
                            <div class="inp-wrap">
                                <label for="">Phone number (optional)</label>
                                <input class="inp" type="text" value="{{ old('phone_number') }}"
                                    name="phone_number" id="" placeholder="">
                            </div>
														</div>
                            <div class="inp-wrap">
                                <label class="custom-check">I confirm I’m over 18
                                    <input type="checkbox" name="over_18">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>
                        <div class="tab-next">
                            <a class="site-link btnNext">Next</a>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="tab-2">
                        <div class="">
                            <h2>Profile description</h2>
                            <p class="pt-2">Update or create a new profile headline and description. It will appear
                                on your tutor card on the “Find tutors” page.</p>
                            <h3 class="pt-5">Description for English-speaking students</h3>

                            <div class="profile-desc">
                                <div class="profile-desc-img"><img
                                        src="{{ url('/') }}/assets/frontpage_assets/images/user.jpg"
                                        alt=""></div>
                                <div class="profile-desc-txt">
                                    <div class="inp-wrap mt-0">
                                        <label for="">Profile Headline<span
                                                style="color: red;">*</span></label>
                                        <input class="inp" type="text" value="{{ old('desc_first_last') }}"
                                            name="desc_first_last" id="" placeholder="Your Headline">
                                        <span style="color: red;">
                                            @if ($errors->has('desc_first_last'))
                                                {{ $errors->first('desc_first_last') }}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="inp-wrap">
                                        <label for="">Profile description <span
                                                style="color: red;">*</span></label>
                                        <textarea class="inp" placeholder="Your description" name="desc_about" id="" minlength="">{{ old('desc_about') }}</textarea>
                                        <span style="color: red;">
                                            @if ($errors->has('desc_about'))
                                                {{ $errors->first('desc_about') }}
                                            @endif
                                        </span>
                                       
                                    </div>
                                    <div class="tab-next">
                                        <a class="site-link btnNext"
                                            onclick="document.getElementById('descriptionDisabled').classList.remove('menuDisabled')">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <h2>Profile photo <span style="color: red;">*</span></h2>
                                <p class="pt-2">Make a great first impression. Photo must be lower than 3MB</p>
                                

                                <div class="inp-wrap">
                                    <div class="upBtn">
                                        <a class="site-link">Upload Picture </a>
                                        <input type="file" name="your_picture"
                                            onchange="loadFile(event);document.getElementById('nextPhotoBtn').classList.add('move')"
                                            accept="image/*" id="tutorPhoto">
                                        <span style="color: red;">
                                            @if ($errors->has('your_picture'))
                                                {{ $errors->first('your_picture') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>



                                <div class="photo-area">
                                    <img id="output" />
                                    <!--  <input type="file" name="your_photo"> -->
                                </div>

                                <div class="tab-next">
                                    <a class="site-link btnNext" id="nextPhotoBtn"
                                        onclick="document.getElementById('photoDisabled').classList.remove('menuDisabled')">Next</a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="photo-list-wrap">
                                    <div class="photo-list">
                                        <h3>Tips for an amazing profile photo</h3>
                                        <ul>
                                            <li>
                                                <div class="photo-list-single"><img
                                                        src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt=""></div>
                                            </li>
                                            <li>
                                                <div class="photo-list-single"><img
                                                        src="https://images.pexels.com/photos/6976943/pexels-photo-6976943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt=""></div>
                                            </li>
                                            <li>
                                                <div class="photo-list-single"><img
                                                        src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt=""></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="photo-list-txt">
                                        <ul>
                                            <li>Smile and look at the camera</li>
                                            <li>Frame your head and shoulders</li>
                                            <li>Your photo is centered and upright</li>
                                            <li>Use neutral lighting and background</li>
                                            <li>Your face and eyes are fully visible (except for religious reasons)</li>
                                            <li>Avoid logos or contact information</li>
                                            <li>You are the only person in the photo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-4">
                        <div class="row">
                            <div class="col-lg-7">
                                <h2>Video introduction <span style="color: red;">*</span></h2>
                                <p class="pt-2">Choose a video file to upload. Make sure it follows our guidelines and size should be lower than 5MB
                                </p>

                                <div class="inp-wrap">
                                    <div class="upBtn">
                                        <a class="site-link">Upload Video</a>
                                        <input type="file" name="upload_video" class="file_multi_video"
                                            accept="video/*" id="tutorVideo">
                                        <span style="color: red;">
                                            @if ($errors->has('upload_video'))
                                                {{ $errors->first('upload_video') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-3">Or</div>
                                <div class="mt-3">
                                    <div class="" style="max-width:500px">

                                        <input type="url" name="upload_video" class="form-control"
                                            placeholder="Enter the video Url">
                                        <span style="color: red;">
                                            @if ($errors->has('upload_video'))
                                                {{ $errors->first('upload_video') }}
                                            @endif
                                        </span>
                                    </div>
                                </div>

                                <div class="photo-area">
                                    <!-- <input type="file" name="drag_and_drop_video"> -->
                                    <video width="400" controls>
                                        <source src="mov_bbb.mp4" id="video_here">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>

                                <div class="tab-next">
                                    <a class="site-link btnNext" id="nextVideoBtn"
                                        onclick="document.getElementById('videoDisabled').classList.remove('menuDisabled');document.getElementById('lastDisabled').classList.remove('menuDisabled')">Next</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="photo-list-wrap">
                                    <div class="photo-list-txt">
                                        <h3>Tips for an amazing introduction video</h3>
                                        <video src="{{ url('') }}/videos/exampleVideo.mp4" controls
                                            class='w-100 rounded my-3'></video>
                                        <h3 class="pt-4">Technical</h3>
                                        <ul class="pt-2">
                                            <li>Keep your video between 30 seconds and 2 minutes long</li>
                                            <li>Record in a horizontal mode</li>
                                            <li>Position the camera at eye level</li>
                                            <li>Use neutral lighting and background</li>
                                            <li>Your face and eyes are fully visible (except for religious reasons)</li>
                                            <li>No logos, links or contact details</li>
                                            <li>No slideshows or presentations</li>
                                        </ul>
                                        <h3 class="pt-4">Content</h3>
                                        <ul class="pt-2">
                                            <li>Greet your students warmly</li>
                                            <li>Highlight any teaching certification</li>
                                            <li>Present your tutoring experience</li>
                                            <li>Invite students to book a lesson</li>
                                        </ul>
                                        <h3 class="pt-4">Example</h3>
                                        <ul class="pt-2">
                                            <li>Profile introduction video example</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-6">
											
											
											<div class="field_wrapper">
																	<div class="row p-3">
																			<div class="col-lg-6 p-2 mb-3">
                                    <div class="block-inp-wrap">
                                        <label for="">University</label>
                                        <input class="block-inp" name="university_name[]" type="text" required>
                                    </div>
																	</div>
																	<div class="col-lg-6 p-2 mb-3">
                                    <div class="block-inp-wrap">
                                        <label for="">Degree</label>
                                        <input class="block-inp" name="degree_name[]" type="text" required>
                                    </div>
																	</div>
																	<div class="col-lg-6 p-2 mb-3">
                                    <div class="block-inp-wrap">
                                        <label for="">Degree Type</label>
                                        <input type="text" name="degree_type[]" class="block-inp" required>
                                    </div>
																	</div>
																	<div class="col-lg-6 p-2 mb-3">
                                    <div class="block-inp-wrap">
                                        <label for="">Specialization</label>
                                        <input class="block-inp" name="specialization[]" type="text" required>
                                    </div>
																	</div>
																		
                                    <div class="block-inp-wrap mb-5">
                                        <label for="">Year of Study</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <select class="block-inp" name="year_of_study[]" required>
                                                    <option value="">Start Year</option>
                                                    <?php
                                                    $firstYear = (int) date('Y') - 63;
                                                    $lastYear = $year = date('Y');
                                                    for ($i = $firstYear; $i <= $lastYear; $i++) {
                                                        echo '<option value=' . $i . '>' . $i . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select class="block-inp" name="year_of_study_end[]" required>
                                                    <option value="">End Year</option>
                                                    <?php
                                                    $firstYear = (int) date('Y') - 63;
                                                    $lastYear = $year = date('Y');
                                                    for ($i = $firstYear; $i <= $lastYear; $i++) {
                                                        echo '<option value=' . $i . '>' . $i . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
																		

                                    <div class="block-inp-wrap">
                                        <div class="verify-stat gery">
                                            <div class="verify-stat-icon"><i class="fa-solid fa-file-lines"></i></div>
                                            <div class="verify-stat-txt">
                                                <h5>Degree Verification</h5>
                                                <p>Upload most recent degree/certificate for profile verification</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="up-image">
                                        <p class="txt-blue"><i class="fa-solid fa-upload"></i></p>
                                        <p class="txt-green">JPG or PNG format maximum size of 20MB <br> <span>UPLOAD
                                                IMAGE</span></p>
                                        <input type="file" name="degree_verification_pic[]"
                                            class="degree_verification_pic" required>
                                    </div><br />
                                    <div class="degree_verification_pic_out"> </div>
																	</div>
																	
																	
																	
																</div>
																<div class="add-btn add_button"><i class="fa-solid fa-circle-plus  "></i> Add Education</div>
															<div class="tab-next text-center">
																<a class="site-link btnNext move" id="nextVideoBtn"
																		onclick="document.getElementById('videoDisabled').classList.remove('menuDisabled');document.getElementById('lastDisabled').classList.remove('menuDisabled')">Next</a>
														</div>
                    </div>
                    <div class="tab-pane fade" id="tab-7">
											
											
											<div class="field_wrapper_experience">
																	<div class="row p-3">
																			
						
																			<div class="col-lg-6 p-2 mb-3">
                                    <div class="block-inp-wrap">
                                        <label for="">Company</label>
                                        <input class="block-inp" type="text" name="company_name[]" required>
                                    </div>
																	</div>
																	<div class="col-lg-6 p-2 mb-3">
                                    <div class="block-inp-wrap">
                                        <label for="">Position</label>
                                        <input class="block-inp" type="text" name="position[]" required>
                                    </div>
																	</div>
                                    <div class="block-inp-wrap">
                                        <label for="">Period of Employment</label>
																			<div class="row">
																				<div class="col-lg-6 mb-3">
																				
																			
                                        <div class="block-inp-wrap">
                                            <select class="block-inp" name="period_of_employment[]" required>
                                                <option value="">Start Year</option>
                                                <?php
                                                $firstYear = (int) date('Y') - 43;
                                                $lastYear = $year = date('Y');
                                                for ($i = $firstYear; $i <= $lastYear; $i++) {
                                                    echo '<option value=' . $i . '>' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
																			</div>
																			<div class="col-lg-6 mb-3">
                                        <div class="block-inp-wrap">
                                            <select class="block-inp" name="period_of_employment_end[]" required>
                                                <option value="">End Year</option>
                                                <?php
                                                $firstYear = (int) date('Y') - 43;
                                                $lastYear = $year = date('Y');
                                                for ($i = $firstYear; $i <= $lastYear; $i++) {
                                                    echo '<option value=' . $i . '>' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
																			</div>
																			</div>

                                    
                                </div>
															</div>
														</div>
														<div class="add-btn add_button_experience"><i class="fa-solid fa-circle-plus"></i> Add another Experience</div>
														<div class="tab-next text-center">
																<a class="site-link btnNext move" id="nextVideoBtn"
																		onclick="document.getElementById('videoDisabled').classList.remove('menuDisabled');document.getElementById('lastDisabled').classList.remove('menuDisabled')">Next</a>
														</div>
                    </div>
                    <div class="tab-pane fade" id="tab-5">
                        <div class="success">
                            <h2>Please Submit This From</h2>
                            <p class="pt-3 text-center">We Will Review Your Profile For Approval Within The Next 24
                                Hours</p>

                            <button type="submit" class="site-link mt-4">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>
@include('frontend/common/footer')

<script type="text/javascript">
    $(function() {
        $('select').each(function() {
            $(this).select2({
                theme: 'bootstrap4',
                width: 'style',
                placeholder: $(this).attr('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        });
    });
</script>
<script type="text/javascript">
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
        var photoInput = document.getElementById('tutorPhoto');
        if (photoInput.files.length > 0) {
            var photoSize = photoInput.files[0].size; // in bytes
            var maxSize = 3 * 1024 * 1024; // 3MB in bytes
            if (photoSize > maxSize) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Photo size exceeds the maximum limit of 3MB.!",

                });
                // alert('Photo size exceeds the maximum limit of 3MB.');
                document.getElementById('nextPhotoBtn').classList.remove('move');

            } else {
                document.getElementById('nextPhotoBtn').classList.add('move');
            }
        }

    };

    var checkTutorVideoSize = () => {
        var videoInput = document.getElementById('tutorVideo');
        if (videoInput.files.length > 0) {
            var videoSize = videoInput.files[0].size; // in bytes
            var maxSize = 5 * 1024 * 1024; // 5MB in bytes
            if (videoSize > maxSize) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Video size exceeds the maximum limit of 5MB.!",

                });
                // alert('Video size exceeds the maximum limit of 5MB.');
                document.getElementById('nextVideoBtn').classList.remove('move');
                return false;
            } else {

                document.getElementById('nextVideoBtn').classList.add('move');
                return true;
            }
        }
    }

    $(document).on("change", ".file_multi_video", function(evt) {
        if (checkTutorVideoSize()) {


            var $source = $('#video_here');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        }
    });


    $("body").delegate(".degree_verification_pic", "change", function() {
        $(".degree_verification_pic_out").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $(".degree_verification_pic_out").append('<img src="' + window.URL.createObjectURL(this.files[i]) +
                '" />');
        }
    });

// 		var placeholder = "select";
// $(".nativeLanguage").select2({
//     data: data,
//     placeholder: placeholder,
//     allowClear: false,
//     minimumResultsForSearch: 5
// });




				
</script>
<script type="text/javascript">
	$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $("body").delegate(".degree_verification_pic_"+x+"", "change", function(){
            	$(".degree_verification_pic_out_"+x+"").html('');
            	for (var i = 0; i < $(this)[0].files.length; i++) {
            		$(".degree_verification_pic_out_"+x+"").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" style="width:100%;height:200px;"/>');
            	}
            });
            $(wrapper).append('<div class="field_wrapper"><div class="row p-3"><div class="col-lg-6 p-2 mb-3"><div class="block-inp-wrap"><label for="">University</label><input class="block-inp" name="university_name[]" required type="text"></div></div><div class="col-lg-6 p-2 mb-3"><div class="block-inp-wrap"><label for="">Degree</label><input class="block-inp" name="degree_name[]" type="text" required></div></div><div class="col-lg-6 p-2 mb-3"><div class="block-inp-wrap"><label for="">Degree Type</label><input type="text" name="degree_type[]" class="block-inp" required></div></div><div class="col-lg-6 p-2 mb-3"><div class="block-inp-wrap"><label for="">Specialization</label><input class="block-inp" name="specialization[]" type="text" required></div></div></div><div class="block-inp-wrap"><label for="">Year of Study</label><div class="row"><div class="col-6"><select class="block-inp" name="year_of_study[]" required><option value="">Start Year</option><?php 
            	$firstYear = (int)date('Y') - 43;
            	$lastYear = $year = date("Y"); 
            	for($i=$firstYear;$i<=$lastYear;$i++)
            	{
            		echo '<option value='.$i.'>'.$i.'</option>';
            	}
            	?></select></div><div class="col-6"><select class="block-inp" name="year_of_study_end[]"  required><option value="">End Year</option><?php 
            	$firstYear = (int)date('Y') - 43;
            	$lastYear = $year = date("Y"); 
            	for($i=$firstYear;$i<=$lastYear;$i++)
            	{
            		echo '<option value='.$i.'>'.$i.'</option>';
            	}
    ?></select></div></div></div><div class="block-inp-wrap"><div class="verify-stat gery"><div class="verify-stat-icon"><i class="fa-solid fa-file-lines"></i></div><div class="verify-stat-txt"><h5>Degree Verification</h5><p>Upload most recent degree/certificate for profile verification</p></div></div></div><div class="up-image"><p class="txt-blue"><i class="fa-solid fa-upload"></i></p><p class="txt-green">JPG or PNG format maximum size of 20MB <br> <span>UPLOAD IMAGE</span></p><input type="file" name="degree_verification_pic[]" class="degree_verification_pic_'+x+'" required></div><div class="degree_verification_pic_out_'+x+'" > </div><button class="remove_button_education btn btn-danger btn-sm" style="float: right;margin: 10px;">Remove</button></div>'); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_education', function(e){
    	e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    }); 


    var maxField2 = 10; //Input fields increment limitation
    var addButton2 = $('.add_button_certificate'); //Add button selector
    var wrapper2 = $('.field_wrapper_certificate'); //Input field wrapper
    
    var y = 1; 

    $(addButton2).click(function(){
    	if(y < maxField2){ 
    		y++; 

    		$("body").delegate(".certificate_verified_pic_"+y+"", "change", function(){
    			$("#certificate_verified_pic_out_"+y+"").html('');
    			for (var i = 0; i < $(this)[0].files.length; i++) {
    				$("#certificate_verified_pic_out_"+y+"").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" style="width:100%;height:200px;" />');
    			}
    		}); 
    		$(wrapper2).append('<div class="field_wrapper_certificate"><div class="block-inp-wrap"><label for="">Certificate</label><input class="block-inp" type="text" name="certificate_name[]" required></div><div class="block-inp-wrap"><label for="">Description</label><input class="block-inp" type="text" name="description[]" required></div><div class="block-inp-wrap"><label for="">Issued By</label><input class="block-inp" type="text" name="issued_by[]" required></div><div class="block-inp-wrap"><label for="">Year of Study</label><div class="row"><div class="col-6"><select class="block-inp" name="year_of_study[]" required><option value="">Start Year</option><?php 
    			$firstYear = (int)date('Y') - 43;
    			$lastYear = $year = date("Y"); 
    			for($i=$firstYear;$i<=$lastYear;$i++)
    			{
    				echo '<option value='.$i.'>'.$i.'</option>';
    			}
    			?></select></div><div class="col-6"><select class="block-inp" name="year_of_study_end[]" required><option value="">End Year</option><?php 
    			$firstYear = (int)date('Y') - 43;
    			$lastYear = $year = date("Y"); 
    			for($i=$firstYear;$i<=$lastYear;$i++)
    			{
    				echo '<option value='.$i.'>'.$i.'</option>';
    			}
    			?></select></div></div></div><div class="block-inp-wrap"><div class="verify-stat gery"><div class="verify-stat-icon"><i class="fa-solid fa-file-lines"></i></div><div class="verify-stat-txt"><h5>Get a "Certificate Verified" Badge</h5><p>Upload your certificate to increase the credibility of your profile. </p></div></div></div><div class="up-image"><p class="txt-blue"><i class="fa-solid fa-upload"></i></p><p class="txt-green">JPG or PNG format maximum size of 20MB <br> <span>UPLOAD Certificate</span></p><input type="file" name="certificate_verified_pic[]" class="certificate_verified_pic_'+y+'" required></div><div id="certificate_verified_pic_out_'+y+'" style="100%;250px!important;"></div><button class="remove_button_certificate btn btn-danger btn-sm" style="float: right;margin: 10px;">Remove</button></div>'); 
    	}
    });
    $(wrapper2).on('click', '.remove_button_certificate', function(e){
    	e.preventDefault();
    	$(this).parent('div').remove();
    	y--; 
    }); 

    var maxField1 = 10; //Input fields increment limitation
    var addButton1 = $('.add_button_experience'); //Add button selector
    var wrapper1 = $('.field_wrapper_experience'); //Input field wrapper
    var fieldHTML1 = '<div class="field_wrapper_experience"><div class="block-inp-wrap"><label for="">Company</label><input class="block-inp" type="text" name="company_name[]" required></div><div class="block-inp-wrap"><label for="">Position</label><input class="block-inp" type="text" name="position[]" required></div><div class="block-inp-wrap"><label for="">Period of Employment</label><div class="row"><div class="col-6"><select class="block-inp" name="period_of_employment[]" required><option value="">Start Year</option><?php 
    $firstYear = (int)date('Y') - 43;
    $lastYear = $year = date("Y"); 
    for($i=$firstYear;$i<=$lastYear;$i++)
    {
    	echo '<option value='.$i.'>'.$i.'</option>';
    }
    ?></select></div><div class="col-6"><select class="block-inp" name="period_of_employment_end[]" required><option value="">End Year</option><?php 
    $firstYear = (int)date('Y') - 43;
    $lastYear = $year = date("Y"); 
    for($i=$firstYear;$i<=$lastYear;$i++)
    {
    	echo '<option value='.$i.'>'.$i.'</option>';
    }
    ?></select></div></div></div> <button class="remove_button_experience btn btn-danger btn-sm" style="float: right;margin: 10px;">Remove</button></div>';

    var z = 1; 
    $(addButton1).click(function(){
    	if(z < maxField1){ 
    		z++; 
    		$(wrapper1).append(fieldHTML1); 
    	}
    });
    $(wrapper1).on('click', '.remove_button_experience', function(e){
    	e.preventDefault();
    	$(this).parent('div').remove();
    	z--; 
    });


    var maxField3 = 10; //Input fields increment limitation
    var addButton3 = $('.add_button_identity'); //Add button selector
    var wrapper3 = $('.field_wrapper_identity'); //Input field wrapper
    var j = 1; 
    $(addButton3).click(function(){
    	if(j < maxField3){ 
    		j++; 
    		$("body").delegate(".identity_document_front_"+j+"", "change", function(){
    			$(".identity_document_front_out_"+j+"").html('');
    			for (var i = 0; i < $(this)[0].files.length; i++) {
    				$(".identity_document_front_out_"+j+"").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" style="width:100%;height:200px;"/>');
    			}
    		});

    		$("body").delegate(".identity_document_back_"+j+"", "change", function(){
    			$(".identity_document_back_out_"+j+"").html('');
    			for (var i = 0; i < $(this)[0].files.length; i++) {
    				$(".identity_document_back_out_"+j+"").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" style="width:100%;height:200px;"/>');
    			}
    		});

    		$(wrapper3).append('<div class="field_wrapper_identity"><div class="block-inp-wrap"><label for="">Issued by Country</label><input class="block-inp" type="text" name="issued_by_country[]" required></div><div class="block-inp-wrap"><label for="">Type of Document</label><select class="block-inp" id="type_of_document" name="type_of_document[]" required><option value="">Type of Document</option><option value="1">Pan Card</option><option value="2" >Adhar Card</option><option value="3" >Driving License</option><option value="4" >Passport</option></select></div><div class="block-inp-wrap"><label for="">Document identification number</label><input class="block-inp" type="text" name="identification_number[]" required></div><div class="block-inp-wrap"><label for="">Document expiry date</label><div class="row"><div class="col-6"><select class="block-inp" name="expiry_date[]" required><option value="">Select Day</option><?php 
    			for($i=1;$i<=30;$i++)
    			{
    				echo '<option value='.$i.'>'.$i.'</option>';
    			}
    			?>
    			</select></div><div class="col-6"><select class="block-inp" name="expiry_date_end[]" required><option value="">Select Year</option><?php 
    			$firstYear = (int)date('Y') - 43;
    			$lastYear = $year = date("Y"); 
    			for($i=$firstYear;$i<=$lastYear;$i++)
    			{
    				echo '<option value='.$i.' >'.$i.'</option>';
    			}
    			?>
    			</select></div></div></div><div class="block-inp-wrap"><div class="verify-stat gery"><div class="verify-stat-icon"><i class="fa-solid fa-file-lines"></i></div><div class="verify-stat-txt"><h5>Identity Document</h5><p>Upload Identity Document for profile verification</p></div></div></div><div class="row"><div class="col-lg-6"><div class="up-image"><p class="txt-blue"><i class="fa-solid fa-upload"></i></p><p class="txt-green">JPG or PNG format maximum size of 20MB <br> <span>UPLOAD Front</span></p><input type="file" name="identity_document_front[]"  class="identity_document_front_'+j+'" required></div><br> <div class="identity_document_front_out_'+j+'"></div> </div><div class="col-lg-6"><div class="up-image"><p class="txt-blue"><i class="fa-solid fa-upload"></i></p><p class="txt-green">JPG or PNG format maximum size of 20MB <br> <span>UPLOAD Back</span></p><input type="file" name="identity_document_back[]" class="identity_document_back_'+j+'" required></div><br><div class="identity_document_back_out_'+j+'"></div></div></div><button class="remove_button_identity btn btn-danger btn-sm" style="float: right;margin: 10px;">Remove</button></div>'); 
    	}
    });
    $(wrapper3).on('click', '.remove_button_identity', function(e){
    	e.preventDefault();
    	$(this).parent('div').remove();
    	j--; 
    });
});

var isClicked = false;
var isClicked1 = false;
$('.educationBtn').on('click',function(){
	$('.educationDiv').toggle();
	if(isClicked == false){
		isClicked = true;
		$('.educationBtn').text('X');
	} else {
		isClicked = false;
		$('.educationBtn').text('Add Education');
	} 
})
$('.certificateBtn').on('click',function(){
	$('.certificateDiv').toggle();
	if(isClicked1 == false){
		isClicked1 = true;
		$('.certificateBtn').text('X');
	} else {
		isClicked1 = false;
		$('.certificateBtn').text('Add Certificate');
	} 
})
isClicked2 = false;
$('.experienceBtn').on('click',function(){
	$('.experienceDiv').toggle();
	if(isClicked2 == false){
		isClicked2 = true;
		$('.experienceBtn').text('X');
	} else {
		isClicked2 = false;
		$('.experienceBtn').text('Add Experience');
	} 
})
isClicked3 = false;
$('.identityBtn').on('click',function(){
	$('.identityDiv').toggle();
	if(isClicked3 == false){
		isClicked3 = true;
		$('.identityBtn').text('X');
	} else {
		isClicked3 = false;
		$('.identityBtn').text('Add Identity');
	} 
})




  /*$('document').ready(function(){
    $('.edit').on('click', function(event) {
     event.preventDefault();
     var post_id = $(this).data('id'); 
     $.ajax({
      headers: {
        'X-CSRF-TOKEN': '<?php //echo csrf_token() ?>'
      },
      type : 'POST',
      url : "{{ url('/admin/spoken_language/get_spoken_language') }}",
      data : {'id': post_id},
      
      dataType : 'json',
      success : function(result){ 
        $('#data_check_update').val(result.spoken_language);
        $('#data_check_update_id').val(result.id);
      }
    });     
   });
});*/ 



</script>
