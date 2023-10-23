@include('/dashboard/common/header')
@include('/dashboard/common/sidebar')
<!-- Container -->
<section class="wrapper">
    <div class="page-title">
        <h1>Home</h1>
    </div>
    <div class="home-section">
        <div class="home-left">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box stat-link">
                        <ul>
                            <li>
                                <a href="">
                                    <div class="stat-icon"><i class="fa-solid fa-book-open"></i></div>
                                    <h5>Scheduled Lessons</h5>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="stat-icon"><i class="fa-solid fa-book-tanakh"></i></div>
                                    <h5>Saved Lessons</h5>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="stat-icon"><i class="fa-solid fa-comment-dots"></i></div>
                                    <h5>Teachers Comments</h5>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="stat-icon"><i class="fa-solid fa-file-video"></i></div>
                                    <h5>Saved Lesson Videos</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box coming-clock">
                        <h2>Next Coming Session in</h2>
                        <div class="clock" id="timer">
                            <p>0D <span>:</span> 0H <span>:</span> 0M <span>:</span> 0S</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box home-quiz">
                <div class="box-title">
                    <div class="box-title-left">
                        <h2>Quiz</h2>
                        <h3>All Quiz</h3>
                    </div>
                    <div class="box-title-right">
                        <div class="filter-select">
                            <div class="dropdown">
                                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span>Filters</span>
                                    <i class="fa-solid fa-filter"></i>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Filter-1</a></li>
                                    <li><a class="dropdown-item" href="#">Filter-2</a></li>
                                    <li><a class="dropdown-item" href="#">Filter-3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quiz-table">
                    <div class="table-responsive">
                        <table class="table theme-table">
                            @foreach ($quizes as $quiz)
                                <tr>
                                    <td>{{ $quiz->quiztitle }}</td>
                                    <td>{{ $quiz->teaches_level }}</td>
                                    <td>{{ $quiz->subject }}</td>
                                    {{-- <td>Quiz Type</td> --}}
                                    <td>{{ $quiz->startdate }}</td>
                                    <td>{{ $quiz->enddate }}</td>
                                    <td>
                                        @if ($currentDateTime < $quiz->startdate)
                                            <span class="table-link" href="">Upcoming</span>
                                        @else
                                            <span class="table-link completed" href="">Completed</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>

            <div class="box home-quiz">
                <div class="box-title">
                    <div class="box-title-left">
                        <h2>Accounting</h2>
                        <h3>Overall Earnings</h3>
                    </div>
                    <div class="box-title-right">
                        <span class="tag-sort">Sort by:</span>
                        <div class="filter-select">
                            <select class="simple" name="" id="sortByGraph">
                                <option value="Monthly">Monthly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="Weekly">Weekly</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="year-chart">
                    <canvas id="myChart2"></canvas>
                </div>

            </div>

        </div>
        <div class="home-right">
            <div class="box inbox">
                <div class="box-title">
                    <div class="box-title-left">
                        <h2 class="small">Inbox</h2>
                    </div>
                    <div class="box-title-right">
                        <a class="link" href="{{ url('chat/') }}">View All</a>
                    </div>
                </div>
                <div class="inbox-list">
                    <ul>
                        @foreach ($tutorData as $tutor_data)
                            <li>
                                <a href="{{ url('chat/' . $tutor_data->id) }}" class="text-capitalize">
                                    <h5>{{ $tutor_data->first_name }} {{ $tutor_data->last_name }}</h5>
                                    <h6><span>{{ $tutor_data->body }}</span> <span><i class="fa-regular fa-clock"></i></span></h6>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="box today">
                <div class="box-title">
                    <div class="box-title-left">
                        <h2 class="small">Today | Sep 22, 2021</h2>
                    </div>
                </div>
                <div class="date-scroll">
                    <ul>
                        <li>
                            <div class="date-scroll-single">
                                <h5>20</h5>
                                <h6>Mon</h6>
                            </div>
                        </li>
                        <li>
                            <div class="date-scroll-single">
                                <h5>21</h5>
                                <h6>Tue</h6>
                            </div>
                        </li>
                        <li>
                            <div class="date-scroll-single active">
                                <h5>22</h5>
                                <h6>Wed</h6>
                            </div>
                        </li>
                        <li>
                            <div class="date-scroll-single">
                                <h5>23</h5>
                                <h6>Thu</h6>
                            </div>
                        </li>
                        <li>
                            <div class="date-scroll-single">
                                <h5>24</h5>
                                <h6>Fri</h6>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="date-list">
                    <div class="date-list-single">
                        <div class="date-list-left">08 AM</div>
                        <div class="date-list-right">
                        </div>
                    </div>
                    <div class="date-list-single">
                        <div class="date-list-left">09 AM</div>
                        <div class="date-list-right">
                        </div>
                    </div>
                    <div class="date-list-single">
                        <div class="date-list-left">10 AM</div>
                        <div class="date-list-right">
                        </div>
                    </div>
                    <div class="date-list-single">
                        <div class="date-list-left">11 AM</div>
                        <div class="date-list-right">
                            <div class="date-invite">
                                <span><i class="fa-solid fa-video"></i></span>
                                <p>Video Session With Malik Start 10 AM - End 11 AM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Container -->
@include('/dashboard/common/footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    // Fetch the target datetime from the PHP variable
    var targetDatetime = "{{ $startDateTimeForTimer }}";
    if(targetDatetime==''){
    console.log("no upcomping session");
  }else{
    // Calculate the time remaining
    function updateTimer() {
        var now = moment();
        var target = moment(targetDatetime);
        var duration = moment.duration(target.diff(now));

        var days = Math.floor(duration.asDays());
        duration.subtract(moment.duration(days, 'days'));

        var hours = duration.hours();
        var minutes = duration.minutes();
        var seconds = duration.seconds();

        // Format the timer as "2D : 24H : 3M : 4S"
        var timerText = "<p>" + days + "D : " + hours + "H : " + minutes + "M : " + seconds + "S" + "</p>";
        document.getElementById('timer').innerHTML = timerText;

        // Update the timer every second
        setTimeout(updateTimer, 1000);
    }

    // Initial call to start the timer
    updateTimer();
}
</script>
<script type="text/javascript">
    labels = @json($GraphDates);
    data = @json($GraphValues);
    createBarChart(labels, data)

    function createBarChart(labelsArray, dataArray) {


        // chart-2 Bar chart
        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var gradient = ctx2.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(251, 133, 0, 1)');
        gradient.addColorStop(1, 'rgba(255, 183, 3, 1)');
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            fillOpacity: 1,
            data: {
                labels: labelsArray,
                datasets: [{
                    label: "",
                    backgroundColor: gradient,
                    borderColor: "none",
                    pointBorderColor: "#CFEECE",
                    borderWidth: 0,
                    pointRadius: 4,
                    pointHoverRadius: 4,
                    pointBackgroundColor: "#FFF",
                    data: dataArray
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                bezierCurve: false,
                elements: {
                    line: {
                        tension: 0
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        },
                        categoryPercentage: 3 / 10
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            color: "rgba(0, 148, 68, 0.2)"
                        }
                    }]
                },

                tooltips: {
                    custom: function(tooltip) {
                        if (!tooltip) return;
                        // disable displaying the color box;
                        tooltip.displayColors = false;
                    },
                    callbacks: {
                        // use label callback to return the desired label
                        label: function(tooltipItem, data) {
                            return "$" + tooltipItem.yLabel;
                        },
                        // remove title
                        title: function(tooltipItem, data) {
                            return;
                        }
                    },
                    backgroundColor: "#FFF",
                    borderColor: "rgba(0, 0, 0, 0.09)",
                    borderWidth: 1,
                    bodyFontColor: "rgba(0, 0, 0, 1)",
                    bodyAlign: 'center',
                    bodyFontSize: 14,
                    bodyFontStyle: 500
                },
                legend: {
                    align: 'end',
                    labels: {
                        boxWidth: 12,
                        fontColor: "#A4A7B0"
                    }
                }
            }
        });
        // chart-2 Bar chart
    }

    $("#sortByGraph").on('change', () => {
        sort = sortByGraph.value;

        $.ajax({
            url: "/getSortByStudentGraphData?sortBy=" + sort, // URL to your Laravel route
            type: "GET",
            dataType: "json",
            success: function(data) {
                labels = data.labels;
                data = data.data;
                createBarChart(labels, data)
                // Data received as a JavaScript array
                var jsArray = data;

                // Use the data in your JavaScript code
                console.log(jsArray);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    })
</script>
