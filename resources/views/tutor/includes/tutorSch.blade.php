@foreach ($tutorSch as $tutorSchs)
                        
                   
                    <div class="date-list-single">
                        <div class="date-list-left">{{ date('h:i A', strtotime($tutorSchs->start_date)) }}</div>
                        <div class="date-list-right">
                            <div class="date-invite" style="height: 75px">
                                <span><i class="fa-solid fa-video"></i></span>
                                <p>Video Session With {{ $tutorSchs->first_name.' '.$tutorSchs->last_name }} Start {{ date('h:i A', strtotime($tutorSchs->start_date)) }} - End {{ date('h:i A', strtotime($tutorSchs->end_date)) }}</p>
                            </div>
                        </div>
                    </div>
@endforeach