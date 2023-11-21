@if (count($todayGroupLessons) > 0)
                    @foreach ($todayGroupLessons as $groupLesson)
                        
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="group-card ">
                                <a href="listing.html" class="carousel__slide-1">
                                    <figure>
                                        <div>
                                            @if ($gallery = $groupLesson->gallery)
                                        @if ($gallery->image)
                                            <img class="card-image" alt="Image"
                                                src="{{ $gallery->image }}">
                                                @endif
                                                @else
                                                <img class="card-image" alt="Image"
                                                    src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} " />
                                                    @endif
                                        </div>
                                    </figure>
                                </a>
        
                                <div class="group-card-content">
                                    <div class="d-flex align-items-center">
                                        <div class="group-card-category d-flex align-items-center">
                                            <h2 class="m-0 p-0">{{ remainingGroupLessonParticipants($groupLesson->id) }} 
                                                </h2>
                                            
                                            <span> Seats are left</span>
                                        </div>
                                    </div>
                                    <div class="group-card-heading my-3">
                                        <h1>{{ Str::limit($groupLesson->title, 40) }}</h1>
                                    </div>
        
                                    <div class="group-card-profile d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            @if ($groupLesson->tutorDetails)
                                            @if ($groupLesson->tutorDetails->profile_img != null)
                                            <img src="{{ url("") }}/images/{{ $groupLesson->tutorDetails->profile_img }}"
                                                alt="">
                                                @else
                                                        <img class="-person-image" alt="Image"
                                                            style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                                            src="{{ asset('assets/student/images/user-img.jpg') }}" />
                                                            @endif
                                                            @endif
                                            <p class="mb-0 pb-0 ms-2">{{ $groupLesson->tutor->fullname }}</p>
                                        </div>
                                        <span class="px-1">|</span>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('') }}/newAssets/assets/images/group-icons/star.svg"
                                                alt="">
                                            <h3 class="m-0 p-0 ms-2">{{ getLessonAverageRating($groupLesson->id) }}</h3>
                                        </div>
                                    </div>
                                    <hr class="group-card-line">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('group.details', $groupLesson->id) }}" class="text-decoration-none"><div class="group-card-price"> {{ config('protutor.currency') }}{{ $groupLesson->price }} / Class</div></a>
        
                                        <div class="group-review-profile">
                                            <img src="{{ url('') }}/newAssets/assets/images/woman-with-headset-video-call 1.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/Rectangle 9317.png"
                                                alt="">
                                            <img src="{{ url('') }}/newAssets/assets/images/image 150.png"
                                                alt="">
                                            <div class="group-review-profile-number">{{ totalEnrolledGroupLessonParticipants($groupLesson->id) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="text-danger text-center">No lesson uploaded yet</h4>
                @endif