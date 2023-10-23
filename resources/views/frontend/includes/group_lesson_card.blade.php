@if (count($groupLessons) > 0)
    @foreach ($groupLessons as $groupLesson)
        <div class="">
            <div class="card-wrapper">
                <div class="slider-card ">
                    @if ($gallery = $groupLesson->gallery)
                        @if ($gallery->image)
                            <img class="card-image" alt="Image" src="{{ $gallery->image }}" />
                        @endif
                    @else
                        <img class="card-image" alt="Image"
                            src="{{ asset('assets/frontpage_assets/images/Rectangle_4436.png') }} " />
                    @endif
                    <div class="b2-c2">
                        {{-- <div class="b2c2text-wrapper"></div> --}}
                        {{-- <div class="vl"></div> --}}
                        <div class="likely-tosell">{{ remainingGroupLessonParticipants($groupLesson->id) }} Seats are
                            left, Grab your seat now</div>
                    </div>

                    <p class="paragraph text-start mt-3 mb-0 pb-0" style="min-height:62px">
                        {{ Str::limit($groupLesson->title, 40) }}</p>
                    <div class="profile mt-3"
                        style="background-color:transparent !important; box-shadow:none !importnat; padding:0px !important;">
                        <div class="person-data" style="box-shadow:none !importnat">
                            <div class="person" style="box-shadow:none !importnat">
                                @if ($groupLesson->tutorDetails)
                                    @if ($groupLesson->tutorDetails->profile_img != null)
                                        <img class="-person-image me-2" alt="Image"
                                            style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                            src="{{ url("") }}/images/{{ $groupLesson->tutorDetails->profile_img }}" />
                                    @else
                                        <img class="-person-image" alt="Image"
                                            style="height:30px; width:30px; border-radius:100%; object-fit:cover; box-shadow:none !important;"
                                            src="{{ asset('assets/student/images/user-img.jpg') }}" />
                                    @endif
                                @endif

                                <div class="text-wrapper-4"
                                    style="box-shadow:none !important; text-shadow:none !importnat;">
                                    {{ $groupLesson->tutor->fullname }}
                                </div>
                            </div>
                            <div class="vl"></div>
                            <div class="reviews">
                                <div class="icon pe-1">
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="rating">
                                    <span style="margin-left: 5px" class="span-text">{{ getLessonAverageRating($groupLesson->id) }}</span>
                                </div>
                            </div>
                        </div>
                        <hr width="100%" color="#E3E3E3" />
                        <div class="price-panal">
                            <button class="price-box">
                                <div class="price-wrapper">
                                    <div class="price-elements">
                                        <a href="{{ route('group.details', $groupLesson->id) }}">
                                            <span
                                                class="span-priceText">{{ config('protutor.currency') }}{{ $groupLesson->price }}
                                            </span>
                                            <span class="span-classtext">/
                                                Class</span>
                                        </a>
                                    </div>
                                </div>
                            </button>

                            <div class="top-reviews">
                                <div class="reviews-box">
                                    @foreach (groupLessonParticipants($groupLesson->id) as $key => $user)
                                        <img src="{{ $user->avatar }}" class="review-{{ 3 + $key }}"
                                            alt="Image"
                                            style="height:24px; width:24px; border-radius:100%; object-fit:cover" />
                                    @endforeach

                                </div>
                                <div class="review-text" style="margin-left: 40%">
                                    <span
                                        style="color: black; font-size: 12px">{{ totalEnrolledGroupLessonParticipants($groupLesson->id) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <h4 class="text-danger text-center">No lesson uploaded yet</h4>
@endif
