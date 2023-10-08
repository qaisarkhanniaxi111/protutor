  {{-- old code  --}}
  {{-- <footer class="site-footer">
   <div class="container">
    <div class="footer-top">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="footer-single first">
            <div class="footer-logo">
              <img src="assets/frontpage_assets/images/footer-logo.svg" alt="">
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
              <li><a href="{{url('/')}}">Home</a></li>
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
</footer> --}}

{{-- new code  --}}

<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 mb-lg-0 mb-4 d-flex flex-column align-items-md-start align-items-center">
              <img src="{{ url('newAssets/assets/images/image 2.png') }}" alt="">
              <p class="footer text">
                  We take care of your health with regular and fun exercise
              </p>
              <div class="d-flex align-items-center">
                  <a href="">
                      <img src="{{ url('newAssets/assets/images/fb.svg') }}" alt="" class="me-3">
                  </a>
                  <a href="">
                      <img src="{{ url('newAssets/assets/images/tw.svg') }}" alt="" class="me-3">
                  </a>
                  <a href="">
                      <img src="{{ url('newAssets/assets/images/insta.svg') }}" alt="" class="me-3">
                  </a>
                  <a href="">
                      <img src="{{ url('newAssets/assets/images/youtube.svg') }}" alt="">
                  </a>
              </div>
          </div>

          <div class="col-lg-2 col-md-6 ms-auto d-flex flex-column align-items-md-start align-items-center">
              <h2 class="mb-3">Top Subjects</h2>
              <ul class="ms-0 ps-0">
                  <li>
                      <a href="">English</a>
                  </li>
                  <li>
                      <a href="">German</a>
                  </li>
                  <li>
                      <a href="">Arabic</a>
                  </li>
                  <li>
                      <a href="">Spanish</a>
                  </li>
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
                      <a href="">Demo@gmail.com</a>
                  </li>
                  <li>
                      <a href="">+154515544854</a>
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
                  Copyright © 2023 all right reserved ProTutor
              </p>
          </div>
      </div>
  </div>
</footer>



{{-- old code  --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="{{ url('assets/frontpage_assets/js/custom.js') }}"></script>
<script src="{{ url('assets/frontpage_assets/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


{{-- new code  --}}
<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script> --}}
        
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url('newAssets/assets/js/app.js') }}"></script>

</body>
</html>
