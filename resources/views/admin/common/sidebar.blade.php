<?php
$parts = explode("/", $_SERVER['REQUEST_URI']);
$getVal =  end($parts);

?>
<div class="sidebar">
  <div class="accordion" id="sideNav">
    <div class="acc-item">
      <a class="full-link" href="{{url('/').'/admin/dashboard'}}"></a>
      <div class="acc-button" data-bs-toggle="collapse">
        <span class="nav-icon"><i class="fa-solid fa-box"></i></span>
        Dashboard
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed " data-bs-toggle="collapse" data-bs-target="#menu-1" aria-expanded="true">
        <span class="nav-icon"><i class="fa-solid fa-users"></i></span>
        Manage Users
      </div>
      <div id="menu-1" class="accordion-collapse collapse <?php echo ($getVal =='userlist' || $getVal =='studentlist' || $getVal =='teacherlist' || $getVal =='adminlist') ? 'show' : '' ?>" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="{{url('/').'/admin/userlist'}}" class="<?php echo ($getVal =='userlist') ? 'active' : '' ?>">Users</a></li>
            <li><a href="{{url('/').'/admin/studentlist'}}" class="<?php echo ($getVal =='studentlist') ? 'active' : '' ?>">Manage Students</a></li>
            <li><a href="{{url('/').'/admin/teacherlist'}}" class="<?php echo ($getVal =='teacherlist') ? 'active' : '' ?>">Manage Tutors</a></li>
            <!--<li><a href="tutors-review.html">Tutors Review</a></li>-->
            <li><a href="{{url('/').'/admin/adminlist'}}" class="<?php echo ($getVal =='adminlist') ? 'active' : '' ?>">Manage Admin Users</a></li>
          </ul>
        </div>
      </div>
    </div>

     <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-15" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-people-group"></i></span>
        Pages
      </div>
      <div id="menu-15" class="accordion-collapse collapse <?php echo ($getVal =='1' || $getVal =='add_content') ? 'show' : '' ?>" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="{{url('/').'/admin/edit-homepage/1'}}" class="<?php echo ($getVal =='1') ? 'active' : '' ?>">Home Page</a></li>
            <li><a href="{{url('/').'/admin/add_content'}}" class="<?php echo ($getVal =='add_content') ? 'active' : '' ?>">Add Content</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-14" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-people-group"></i></span>
        Student Testimonials
      </div>
      <div id="menu-14" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="{{url('/').'/admin/student-testimonials'}}">Testimonials</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-2" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-people-group"></i></span>
        Group Classes
      </div>
      <div id="menu-2" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="group-classess.html">Group Classess</a></li>
            <li><a href="package-classes.html">Package Classes</a></li>
            <li><a href="quiz.html">Quiz</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-3" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-file-lines"></i></span>
        Manage Orders
      </div>
      <div id="menu-3" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="all-orders.html">All Orders</a></li>
            <li><a href="lesson-orders.html">Lesson Orders</a></li>
            <li><a href="subscription-orders.html">Subscription Orders</a></li>
            <li><a href="classes-orders.html">Classes Orders</a></li>
            <li><a href="package-Orders.html">Package Orders</a></li>
            <li><a href="wallet-orders.html">Wallet Orders</a></li>
            <li><a href="gift-card-orders.html">Gift Card Orders</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-4" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-clipboard-list"></i></span>
        Report Logs
      </div>
      <div id="menu-4" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="report-logs.html">Report Logs</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-5" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-user-shield"></i></span>
        Tutor Preferences
      </div>
      <div id="menu-5" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>

            <li><a href="accents.html">Accents</a></li>
            <li><a href="{{url('/admin/teaches_level')}}">Teaches Level</a></li>
            <li><a href="learner-ages.html">Learner Ages</a></li>
            <li><a href="">Lesson Includes</a></li>
            <li><a href="{{url('/admin/subject')}}">Subjects</a></li>
            <li><a href="{{url('/admin/hourly_rate')}}">Hourly Rate</a></li>
            <li><a href="text-prepration.html">Text Prepration</a></li>
            <li><a href="{{url('/admin/spoken_language')}}">Spoken Language</a></li>
            <li><a href="teaching-language.html">Teaching Language</a></li>
            <li><a href="issues-report-option.html">Issues Report Option</a></li>
            <li><a href="price-slabs.html">Price Slabs</a></li>

          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-6" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-gear"></i></span>
        Settings
      </div>
      <div id="menu-6" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="general-settings.html">General Settings</a></li>
            <li><a href="pwa-settings.html">PWA Settings</a></li>
            <li><a href="meetings-tools.html">Meetings Tools</a></li>
            <li><a href="payment-methods.html">Payment Methods</a></li>
            <li><a href="social-platforms.html">Social Platforms</a></li>
            <li><a href="discount-coupons.html">Discount Coupons</a></li>
            <li><a href="commission-settings.html">Commission Settings</a></li>
            <li><a href="currency-management.html">Currency Management</a></li>
            <li><a href="themes-management.html">Themes Management</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-7" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-layer-group"></i></span>
        Manage CMS
      </div>
      <div id="menu-7" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="home-page-slide.html">Home Page Slide</a></li>
            <li><a href="content-pages.html">Content Pages</a></li>
            <li><a href="content-blocks.html">Content Blocks</a></li>
            <li><a href="navigation.html">Navigation</a></li>
            <li><a href="countries.html">Countries</a></li>
            <li><a href="videos-content.html">Videos Content</a></li>
            <li><a href="testimonials.html">Testimonials </a></li>
            <li><a href="language-label.html">Language Label</a></li>
            <li><a href="faqs-categories.html">FAQs Categories</a></li>
            <li><a href="manage-faqs.html">Manage FAQs</a></li>
            <li><a href="email-templates.html">Email Templates</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-8" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-blog"></i></span>
        Manage Blogs
      </div>
      <div id="menu-8" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="">Not Available</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-9" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-seedling"></i></span>
        Manage SEO
      </div>
      <div id="menu-9" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="">Not Available</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-10" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-chart-pie"></i></span>
        Report Performance
      </div>
      <div id="menu-10" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="lesson-top-subject.html">Lesson Top Subject</a></li>
            <li><a href="classes-top-subject.html">Classes Top Subject</a></li>
            <li><a href="tutor-performance.html">Tutor Performance</a></li>
            <li><a href="lesson-stats.html">Lesson Stats</a></li>
            <li><a href="sales-report.html">Sales Report</a></li>
            <li><a href="settlements.html">Settlements </a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="acc-item">
      <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-11" aria-expanded="false">
        <span class="nav-icon"><i class="fa-solid fa-flask"></i></span>
        Request Logs
      </div>
      <div id="menu-11" class="accordion-collapse collapse" data-bs-parent="#sideNav">
        <div class="acc-body">
          <ul>
            <li><a href="{{url('/').'/admin/tutor-request'}}">Tutor Request</a></li>
            <li><a href="withdrawal-request.html">Withdrawal Request</a></li>
            <li><a href="gdpr-Request.html">GDPR Request</a></li>
          </ul>
        </div>
      </div>
    </div>

                <!-- <div class="acc-item">
                    <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-12" aria-expanded="false">
                      <span class="nav-icon"><i class="fa-solid fa-user-tie"></i></span>
                      Manage Admin
                    </div>
                    <div id="menu-12" class="accordion-collapse collapse" data-bs-parent="#sideNav">
                      <div class="acc-body">
                        <ul>
                          <li><a href="">Not Available</a></li>
                        </ul>
                      </div>
                    </div>
                  </div> -->

                  <div class="acc-item">
                    <div class="acc-button collapsed" data-bs-toggle="collapse" data-bs-target="#menu-13" aria-expanded="false">
                      <span class="nav-icon"><i class="fa-solid fa-bullhorn"></i></span>
                      Affiliates
                    </div>
                    <div id="menu-13" class="accordion-collapse collapse" data-bs-parent="#sideNav">
                      <div class="acc-body">
                        <ul>
                          <li><a href="affiliates.html">Affiliates</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
