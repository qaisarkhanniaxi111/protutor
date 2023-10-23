

{{-- new code  --}}
<?php
        $Footerdata =  DB::select('SELECT icon, title, email, contact, Copyright, top_subjects FROM `footer` where id=1;');
        $allSubjects =  DB::select('SELECT * FROM `subjects`;');
        $SocialPlatformrdata =  DB::select('SELECT title, url, user_status FROM `social_media_platform`;');

        ?>
<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 mb-lg-0 mb-4 d-flex flex-column align-items-md-start align-items-center">
              <img src="{{url('/')}}/images/{{$Footerdata[0]->icon}}" alt="">
              <p class="footer text">
                {{$Footerdata[0]->title}}
              </p>
              <div class="d-flex align-items-center">
                <?php foreach($SocialPlatformrdata as $data){
                  if($data->user_status == 1){
                    ?>
                    <a href="{{$data->url}}">
                      <img src="{{ url("") }}/images/{{$data->title}}" alt="" class="me-3">
                  </a>
                  
                <?php } } ?>
                 
              </div>
          </div>

          <div class="col-lg-2 col-md-6 ms-auto d-flex flex-column align-items-md-start align-items-center">
              <h2 class="mb-3">Top Subjects</h2>
              <ul class="ms-0 ps-0">
                <?php 
          $topSubjects = explode(',', $Footerdata[0]->top_subjects);
         
          ?>
                @foreach ($allSubjects as $subject)
                @if (in_array($subject->id,$topSubjects))
                    
                
                    
                <li>
                  <a href="{{ url('/private/group?') }}subject={{ $subject->id }}">{{ $subject->subject }}</a>
              </li>
              @endif
                @endforeach
                  
              </ul>
          </div>

          <div class="col-lg-2 col-md-6 d-flex flex-column align-items-md-start align-items-center">
              <h2 class="mb-3">About</h2>
              <ul class="ms-0 ps-0 d-flex flex-column align-items-md-start align-items-center">
                  <li>
                      <a href="index.html">Home</a>
                  </li>
                  <li>
                      <a href="">Find tutor</a>
                  </li>
                  <li>
                      <a href="">Enterprise</a>
                  </li>
                  <li>
                      <a href="become-tutor.html">Become a tutor</a>
                  </li>
              </ul>
          </div>

          <div class="col-lg-2 col-md-6 d-flex flex-column align-items-md-start align-items-center">
              <h2 class="mb-3">Help</h2>
              <ul class="ms-0 ps-0 d-flex flex-column align-items-md-start align-items-center">
                  <li>
                      <a href="">About Us</a>
                  </li>
                  <li>
                      <a href="">Cookies Policy</a>
                  </li>
                  <li>
                      <a href="">Privacy Policy</a>
                  </li>
                  <li>
                      <a href="">Support</a>
                  </li>
              </ul>
          </div>

          <div class="col-lg-2 col-md-6 d-flex flex-column align-items-md-start align-items-center">
              <h2 class="mb-3">Contact</h2>
              <ul class="ms-0 ps-0 d-flex flex-column align-items-md-start align-items-center">
                  <li>
                      <a href="mailto:{{$Footerdata[0]->email}}">{{$Footerdata[0]->email}}</a>
                  </li>
                  <li>
                      <a href="tel:{{$Footerdata[0]->contact}}">+{{$Footerdata[0]->contact}}</a>
                  </li>
                  <li>
                      <a href=""></a>
                  </li>
                  <li class="mt-4 pt-1">
                      <select class="form-select  mb-md-0 mb-3" style="border-radius: 6px;
                  border: 1px solid rgba(255, 108, 11, 0.20); color: rgba(44, 44, 44, 0.80);
                  ;" aria-label="Default select example ">
                          <option selected>English, USD</option>
                          <option value="1">English, EUR</option>
                          <option value="2">English, USD</option>
                          <option value="3">English, USD</option>
                      </select>
                  </li>
              </ul>
          </div>
      </div>
      <div class="row mt-4 pt-4">
          <div class="col-lg-12 py-4" style="border-top: 2px dashed #E1E1E1;">
              <p class="footer-text mb-0 pb-0  text-center" style="color: rgba(44, 44, 44, 0.50);
              ">
                  {{$Footerdata[0]->Copyright}}
              </p>
          </div>
      </div>
  </div>
</footer>






{{-- new code  --}}
<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url('newAssets/assets/js/app.js') }}"></script>

</body>
</html>