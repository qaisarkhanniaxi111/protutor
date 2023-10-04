@include('/dashboard/common/header')
@include('/dashboard/common/sidebar')

<style>
    .rating {
        position: relative;
        background: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .rating__result {
        font-size: 14px;
        font-weight: 500;
        color: black;
        pointer-events: none;
    }

    .rating__star {
        font-size: 1.3em;
        cursor: pointer;
        color: #dabd18b2;
        transition: filter linear .3s;
    }

    .rating__star:hover {
        filter: drop-shadow(1px 1px 4px gold);
    }

    .feedback-textarea {
        border: 1px solid rgb(143, 136, 136);
        border-radius: 4px;
        width: 100%;
        padding: 15px;
    }

    .sessions,
    li {
        list-style: none;
        padding: 0;
    }

    .sessions {
        border-radius: 12px;
        position: relative;
        padding: 20px;
        background: #fbfcfd;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    .session-details {
        background: #FFFFFF;
        box-shadow: 0 2px 2px 0 #eeeeee40;
        border-radius: 10px;
        padding: 15px;
    }

    .sessions li {
        padding-bottom: 1.5rem;
        border-left: 1px solid #abaaed;
        position: relative;
        padding-left: 20px;
        margin-left: 10px;

    }

    .sessions li:last-child {
        border: 0px;
        padding-bottom: 0;
    }

    .sessions li:before {
        content: '';
        width: 15px;
        height: 15px;
        background: white;
        border: 1px solid #4e5ed3;
        box-shadow: 3px 3px 0px #bab5f8;
        box-shadow: 3px 3px 0px #bab5f8;
        border-radius: 50%;
        position: absolute;
        left: -10px;
        top: 0px;
    }

    .complete-session {
        border-left: 1px solid #20C9AC !important;
    }

    .complete-session svg {
        color: #20C9AC !important;
    }

    .quiz-session svg {
        color: #FFA043 !important;
    }

    .complete-session:before {
        content: '';
        width: 15px;
        height: 15px;
        background: #20C9AC !important;
        border: 1px solid #20C9AC !important;
        box-shadow: 3px 3px 0px #20C9AC1A !important;
        box-shadow: 3px 3px 0px #20C9AC1A !important;
        border-radius: 50%;
        position: absolute;
        left: -10px;
        top: 0px;
    }

    .quiz-session {
        border-left: 1px solid #FFA043 !important;
    }

    .quiz-session:before {
        content: '';
        width: 15px;
        height: 15px;
        background: #FFA043 !important;
        border: 1px solid #FFA043 !important;
        box-shadow: 3px 3px 0px #FFA0431A !important;
        box-shadow: 3px 3px 0px #FFA0431A !important;
        border-radius: 50%;
        position: absolute;
        left: -10px;
        top: 0px;
    }

    .sessions .title {
        color: #2a2839;
        font-weight: 500;
        font-size: 16px;
    }

    .complete-session .session-details {
        background-color: #20C9AC1A !important;
    }


    .quiz-session .session-details {
        background-color: #FFA0431A !important;
    }
</style>
@php
    $classNo = 1;
    $quizNo = 1;
@endphp

<!-- Container -->
<section class="wrapper">
    <div class="page-title">
        <h1>Lesson Plan</h1>
    </div>
    <div class="">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <ul class="sessions   ">
                                @if ($completedPlans)
                                    @foreach ($completedPlans as $completedPlan)
                                        <li
                                            class="complete-session {{ $completedPlan['type'] == 'Class' ? 'complete-session' : 'quiz-session' }}">
                                            <div class="session-details">
                                                <div class="title">
                                                    {{ $completedPlan['type'] ? $completedPlan['type'] : '' }}
                                                    {{ $completedPlan['type'] == 'Class' ? $classNo++ : $quizNo++ }}
                                                </div>
                                                <p><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-clock-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg>
                                                    {{ $completedPlan['time'] }}</p>
                                                <p>
                                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                                    </svg>
                                                    {{ $completedPlan['date'] }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif

                                @if ($activePlans)
                                    @foreach ($activePlans as $activePlan)
                                        <li>
                                            <div class="session-details">
                                                <div class="title">
                                                    {{ $activePlan['type'] ? $activePlan['type'] : '' }}
                                                    {{ $activePlan['type'] == 'Class' ? $classNo++ : $quizNo++ }}</div>
                                                <p><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-clock-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg>
                                                    {{ $activePlan['time'] ? $activePlan['time'] : '' }}</p>
                                                <p>
                                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                                    </svg>
                                                    {{ $activePlan['date'] }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                                @if ($remainningPlans)
                                    @foreach ($remainningPlans as $remainningPlan)
                                        <li>
                                            <div class="session-details">
                                                <div class="title">
                                                    {{ $remainningPlan['type'] ? $remainningPlan['type'] : '' }}
                                                    {{ $remainningPlan['type'] == 'Class' ? $classNo++ : $quizNo++ }}
                                                </div>
                                                <p><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-clock-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg>
                                                    {{ $remainningPlan['time'] ? $remainningPlan['time'] : '' }}</p>
                                                <p>
                                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                                    </svg>
                                                    {{ $remainningPlan['date'] }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif


                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 mt-4">
                @if ($ratingStatus)
                    @if (!$ratingExists)

                    <div class="box">
                        <div class="page-title mb-0 pb-0">
                            <h1>Feedback</h1>
                            <p class="mb-0 pb-0" style="color: #84818A;
                          font-size: 16px;">Give your
                                Feedback.</p>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="rating">
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
                                <i class="rating__star far fa-star"></i>
    
                                <div class="ms-4">
                                    <span class="rating__result"></span>
                                </div>
                            </div>
                        </div>
    
                        <form action="{{ route('submit.review') }}" method="post">
                            @csrf
                            <input type="number" name="group_lesson_id" value="{{ $groupLesson_id }}" hidden>
                            <input type="number" name="student_id" value="{{ auth()->user() ? auth()->user()->id : '' }}"
                                hidden>
                            <input type="number" name="rating" id="student_rating" value="" hidden>
                            <textarea name="review" id="" rows="5" class="feedback-textarea" placeholder="Type here..."></textarea>
                            <div class="text-end pt-3">
                                <button class="theme-btn green">Submit</button>
                            </div>
                        </form>
                    </div>

                    @endif
                @endif
            </div>

        </div>

    </div>
</section>
<!-- Container -->
<script>
    const ratingStars = [...document.getElementsByClassName("rating__star")];
    const ratingResult = document.querySelector(".rating__result");

    printRatingResult(ratingResult);

    function executeRating(stars, result) {
        const starClassActive = "rating__star fas fa-star";
        const starClassUnactive = "rating__star far fa-star";
        const starsLength = stars.length;
        let i;
        stars.map((star) => {
            star.onclick = () => {
                i = stars.indexOf(star);

                if (star.className.indexOf(starClassUnactive) !== -1) {
                    printRatingResult(result, i + 1);
                    for (i; i >= 0; --i) stars[i].className = starClassActive;
                } else {
                    printRatingResult(result, i);
                    for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
                }
            };
        });
    }

    function printRatingResult(result, num = 0) {
        result.textContent = `${num}/5`;
        document.querySelector("#student_rating").value = num;
    }

    executeRating(ratingStars, ratingResult);
</script>
@include('/dashboard/common/footer')
