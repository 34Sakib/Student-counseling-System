@extends('user.layout.musterlayout')

@section('content')
<!-- Responsive Navigation (Web & Mobile) -->
<div class="responsive-navbar">
  <!-- Desktop View -->
  <div class="d-none d-lg-flex flex-column w-100">
    <div class="top-black-bar px-4 py-2 d-flex justify-content-end align-items-center gap-4">
      <a href="{{ route('related-articles') }}" class="top-link">News and articles</a>
      <a href="{{ route('event') }}" class="top-link">Events</a>
      <a href="#" class="top-link">Find us</a>
      <div class="dropdown">
        <a class="dropdown-toggle top-link" href="#" role="button" data-bs-toggle="dropdown">Social</a>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="#">Facebook</a></li>
          <li><a class="dropdown-item" href="#">Twitter</a></li>
        </ul>
      </div>
      <a href="#" class="top-link"><i class="bi bi-globe"></i> English</a>
      <a href="{{ route('login') }}" class="top-link">Sign in</a>
    </div>
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
      <a href="{{ url('/') }}" class="navbar-brand">
            <div class="logo-container">
                <div class="logo-circle">SC</div>
            </div>
        </a>
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('study-abroad') }}" id="studyAbroadDropdown" role="button" data-bs-toggle="dropdown">Study abroad steps</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('study-abroad') }}">Overview</a></li>
                <li><a class="dropdown-item" href="#">Step 1</a></li>
                <li><a class="dropdown-item" href="#">Step 2</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('destinations') }}" id="destinationsDropdown" role="button" data-bs-toggle="dropdown">Study destinations</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('destinations') }}">All Destinations</a></li>
                <li><a class="dropdown-item" href="#">USA</a></li>
                <li><a class="dropdown-item" href="#">UK</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('find-courses') }}" id="findCourseDropdown" role="button" data-bs-toggle="dropdown">Find a course</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('find-courses') }}">All Courses</a></li>
                <li><a class="dropdown-item" href="#">Engineering</a></li>
                <li><a class="dropdown-item" href="#">Business</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="ieltsDropdown" role="button" data-bs-toggle="dropdown">IELTS</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">IELTS Info</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('students-essentials') }}" id="essentialsDropdown" role="button" data-bs-toggle="dropdown">Student Essentials</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('students-essentials') }}">Overview</a></li>
                <li><a class="dropdown-item" href="#">Visa Help</a></li>
              </ul>
            </li>
          </ul>
          <a href="{{ route('counselling.booking') }}" class="btn btn-primary ms-auto btn-counselling">Avail FREE counselling</a>
          <div class="d-flex align-items-center gap-2 ms-3">
            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-signin-navbar">Sign in</a>
            <a href="#" class="btn btn-outline-secondary btn-navbar-icon">
              <i class="bi bi-search search-navbar-icon"></i>
            </a>
            <a href="{{ route('profile.shortlisted') }}" class="btn btn-navbar-icon btn-navbar-heart">
              <i class="bi bi-heart heart-navbar-icon"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>

  </div>

  <!-- Mobile View -->
  <div class="d-lg-none w-100">
    <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-white shadow-sm">
      <div>
      <a href="{{ url('/') }}" class="text-decoration-none">
                        <div class="d-flex align-items-center">
                            <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-weight: bold; font-size: 1.2rem;">
                                SC
                            </div>
                        </div>
      </a>
      </div> <!-- No logo as per instruction -->
      <div class="d-flex align-items-center gap-3">
        <a href="{{ route('login') }}" class="btn btn-link p-0"><i class="bi bi-person" style="font-size:1.7rem;"></i></a>
        <a href="#" class="btn btn-link p-0"><i class="bi bi-heart" style="font-size:1.7rem; color:#e1701a;"></i></a>
        <button class="btn btn-link p-0" id="hamburgerBtn" aria-label="Open menu"><i class="bi bi-list" style="font-size:2rem;"></i></button>
      </div>
    </div>
    <!-- Hamburger Drawer -->
    <div id="mobileDrawer" class="mobile-drawer">
      <div class="mobile-drawer-header d-flex justify-content-between align-items-center px-3 py-3">
        <span></span>
        <button class="btn btn-link p-0" id="drawerCloseBtn" aria-label="Close menu"><i class="bi bi-x-lg" style="font-size:1.6rem;"></i></button>
      </div>
      <ul class="mobile-drawer-list list-unstyled mb-0">
        <li class="drawer-dropdown">
          <a href="#" class="drawer-link" data-bs-toggle="collapse" data-bs-target="#drawerStudyAbroad" aria-expanded="false">Study abroad steps <i class="bi bi-chevron-down float-end"></i></a>
          <ul class="collapse" id="drawerStudyAbroad">
            <li><a class="drawer-sublink" href="{{ route('study-abroad') }}">Overview</a></li>
            <li><a class="drawer-sublink" href="#">Step 1</a></li>
            <li><a class="drawer-sublink" href="#">Step 2</a></li>
          </ul>
        </li>
        <li class="drawer-dropdown">
          <a href="#" class="drawer-link" data-bs-toggle="collapse" data-bs-target="#drawerDestinations" aria-expanded="false">Study destinations <i class="bi bi-chevron-down float-end"></i></a>
          <ul class="collapse" id="drawerDestinations">
            <li><a class="drawer-sublink" href="{{ route('destinations') }}">All Destinations</a></li>
            <li><a class="drawer-sublink" href="#">USA</a></li>
            <li><a class="drawer-sublink" href="#">UK</a></li>
          </ul>
        </li>
        <li class="drawer-dropdown">
          <a href="#" class="drawer-link" data-bs-toggle="collapse" data-bs-target="#drawerCourses" aria-expanded="false">Find a course <i class="bi bi-chevron-down float-end"></i></a>
          <ul class="collapse" id="drawerCourses">
            <li><a class="drawer-sublink" href="{{ route('find-courses') }}">All Courses</a></li>
            <li><a class="drawer-sublink" href="#">Engineering</a></li>
            <li><a class="drawer-sublink" href="#">Business</a></li>
          </ul>
        </li>
        <li class="drawer-dropdown">
          <a href="#" class="drawer-link" data-bs-toggle="collapse" data-bs-target="#drawerIELTS" aria-expanded="false">IELTS <i class="bi bi-chevron-down float-end"></i></a>
          <ul class="collapse" id="drawerIELTS">
            <li><a class="drawer-sublink" href="#">IELTS Info</a></li>
          </ul>
        </li>
        <li class="drawer-dropdown">
          <a href="#" class="drawer-link" data-bs-toggle="collapse" data-bs-target="#drawerEssentials" aria-expanded="false">Student Essentials <i class="bi bi-chevron-down float-end"></i></a>
          <ul class="collapse" id="drawerEssentials">
            <li><a class="drawer-sublink" href="{{ route('students-essentials') }}">Overview</a></li>
            <li><a class="drawer-sublink" href="#">Visa Help</a></li>
          </ul>
        </li>
        <li><a class="drawer-link" href="{{ route('related-articles') }}">News and articles</a></li>
        <li><a class="drawer-link" href="{{ route('event') }}">Events</a></li>
        <li><a class="drawer-link" href="#">Find us</a></li>
        <li class="drawer-dropdown">
          <a href="#" class="drawer-link" data-bs-toggle="collapse" data-bs-target="#drawerSocial" aria-expanded="false">Social <i class="bi bi-chevron-down float-end"></i></a>
          <ul class="collapse" id="drawerSocial">
            <li><a class="drawer-sublink" href="#">Facebook</a></li>
            <li><a class="drawer-sublink" href="#">Twitter</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="drawerOverlay" class="drawer-overlay"></div>
  </div>
</div>
<!-- End Responsive Navigation -->

<!-- MSc Financial Management Section -->
<div class="container my-5 course-details-container">
  <div class="d-flex flex-wrap align-items-center justify-content-between gap-4 mb-0">
    <div>
      <h3 class="fw-bold mb-2 course-title">MSc Financial Management</h3>
      <div class="mb-1 course-university">University of Tasmania (UTAS)</div>
      <div class="small text-secondary mb-4">Study Destination</div>
      <div class="d-flex flex-row gap-2">
        <a href="#" class="btn btn-primary px-4 py-2 apply-btn">Apply with Us</a>
        <button class="btn btn-outline-secondary px-3 py-2 fav-btn"><i class="bi bi-share"></i></button>
        <button class="btn btn-outline-secondary px-3 py-2 fav-btn"><i class="bi bi-heart"></i></button>
      </div>
    </div>
  </div>
</div>
<div class="course-details-bar py-3 course-details-container">
    <div class="row text-center justify-content-between align-items-center g-2">
      <div class="col-6 col-md-2">
        <div class="fw-semibold small text-secondary">Location</div>
        <div class="fw-normal">United Kingdom</div>
      </div>
      <div class="col-6 col-md-2">
        <div class="fw-semibold small text-secondary">Qualification</div>
        <div class="fw-normal">Master Degree(Taught)</div>
      </div>
      <div class="col-6 col-md-2">
        <div class="fw-semibold small text-secondary">Fees</div>
        <div class="fw-normal">GBP31779 (2024)</div>
      </div>
      <div class="col-6 col-md-2">
        <div class="fw-semibold small text-secondary">Duration</div>
        <div class="fw-normal">1Years</div>
      </div>
      <div class="col-6 col-md-2">
        <div class="fw-semibold small text-secondary">Next intake</div>
        <div class="fw-normal">22 september 2025</div>
      </div>
      <div class="col-6 col-md-2">
        <div class="fw-semibold small text-secondary">Entry Score</div>
        <div class="fw-normal">6.5 IELTS</div>
      </div>
    </div>
  </div>
</div>

<!-- Course Info Section -->
<div class="container my-5 course-details-container">
  <h4 class="fw-bold mb-2 course-info-title">Course info</h4>
  <div class="fw-semibold mb-2 mt-4 course-info-list">About the courses</div>
  <div class="mb-3 course-info-desc">
    Lorem ipsum dolor sit amet consectetur. Iaculis id ultrices libero pretium. Lorem aliquam pellentesque duis mauris viverra. Sit neque et eu facilisis ullamcorper in iaculis massa. Sagittis eu suscipit tempor molestie viverra viverra condimentum sed id. Turpis mauris nulla molestie lacinia elementum orci tristique pretium. Donec tristique tempor viverra dui sit. Egestas aliquam consectetur proin cras amet tortor.
  </div>
  <ul class="course-info-ul">
    <li>Scholarships <a href="#" class="course-link">View all scholarships</a></li>
    <li>Internships</li>
  </ul>
  <div class="mt-4 course-info-accordion">
    <div class="accordion" id="courseAccordion">
      <div class="accordion-item mb-2">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed course-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Stara dates and prices
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#courseAccordion">
          <div class="accordion-body">
            Dates and prices details go here.
          </div>
        </div>
      </div>
      <div class="accordion-item mb-2">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed course-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            How to apply
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#courseAccordion">
          <div class="accordion-body">
            Application process details go here.
          </div>
        </div>
      </div>
      <div class="accordion-item mb-2">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed course-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Reviews and ranking
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#courseAccordion">
          <div class="accordion-body">
            Reviews and ranking details go here.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed course-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            University of Tasmania (UTAS)
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#courseAccordion">
          <div class="accordion-body">
            University details go here.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Recommended for you Section -->
<div class="container my-5 recommended-section">
  <div class="d-flex justify-content-between align-items-center mb-2">
    <h4 class="fw-bold mb-0 recommended-title">Recommended for you</h4>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-secondary rounded-3 recommended-view-btn"><i class="bi bi-grid"></i></button>
      <button class="btn btn-outline-secondary rounded-3 recommended-view-btn"><i class="bi bi-list"></i></button>
    </div>
  </div>
  <div class="d-flex mb-4">
    <div class="recommended-tab active">Courses</div>
    <div class="recommended-tab">Scholarship</div>
  </div>
  <div class="row g-4">
    @for ($i = 0; $i < 4; $i++)
    <div class="col-12 col-md-6 col-lg-3 d-flex">
      <div class="recommended-card w-100 d-flex flex-column justify-content-between">
        <div>
          <div class="d-flex justify-content-between align-items-start mb-2">
            <div>
              <div class="fw-semibold recommended-course-title">MSc Financial Management</div>
              <div class="text-muted small recommended-university">University of Tasmania (UTAS)</div>
            </div>
            <button class="btn btn-link p-0 recommended-fav"><i class="bi bi-heart"></i></button>
          </div>
          <ul class="list-unstyled mb-3 recommended-list">
            <li class="mb-1"><i class="bi bi-bar-chart me-2"></i>THE World Ranking: 93</li>
            <li class="mb-1"><i class="bi bi-mortarboard me-2"></i>Masters Degree (Taught)</li>
            <li class="mb-1"><i class="bi bi-geo-alt me-2"></i>Birmingham, United Kingdom</li>
            <li class="mb-1"><i class="bi bi-calendar-event me-2"></i>Next intake: 22.09.2025</li>
            <li class="mb-1"><i class="bi bi-graph-up-arrow me-2"></i>Entry Score: IELTS 6.5</li>
            <li><i class="bi bi-cash-coin me-2"></i>GBP31779 (2024) <i class="bi bi-info-circle ms-1 recommended-info"></i></li>
          </ul>
        </div>
        <a href="#" class="btn btn-outline-dark w-100 mt-2 recommended-details-btn">View details</a>
      </div>
    </div>
    @endfor
  </div>
</div>
<!-- We Can Help You Section -->
<section class="py-5 help-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Left: Heading & Form -->
      <div class="col-12 col-lg-6">
        <div class="mb-3 help-title-wrap">
          <h2 class="fw-bold mb-1 help-title">We can help you</h2>
          <div class="help-underline"></div>
        </div>
        <div class="text-secondary mb-4 help-desc">Enter your details and one of our expert counsellors will reach out to you so we can connect you to the right course, country, university – and even scholarships!</div>
        <div class="card shadow-sm p-4 help-form-card">
          <div class="fw-semibold mb-3 help-form-title">Application From</div>
          <form>
            <div class="row g-3">
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">First name*</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Last name*</label>
                <input type="text" class="form-control" placeholder="" required>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Email*</label>
                <input type="email" class="form-control" placeholder="" required>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Phone*</label>
                <input type="tel" class="form-control" placeholder="" required>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Your preferred study destination*</label>
                <select class="form-select" required><option>Select</option></select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">When do you plan to study?*</label>
                <select class="form-select" required><option>Select</option></select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Preferred mode of counselling*</label>
                <select class="form-select" required><option>Select</option></select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">How would you fund your education?*</label>
                <select class="form-select" required><option>Select</option></select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Preferred study level*</label>
                <select class="form-select" required><option>Select</option></select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Nearest Our Office*</label>
                <select class="form-select" required><option>Select</option></select>
              </div>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" id="agree1">
              <label class="form-check-label small" for="agree1">I agree to IDP <a href="#" class="text-primary">Terms</a> and <a href="#" class="text-primary">privacy policy</a></label>
            </div>
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="agree2">
              <label class="form-check-label small" for="agree2">Please contact me by phone, email or SMS to assist with my enquiry</label>
            </div>
            <div class="form-check mt-2 mb-3">
              <input class="form-check-input" type="checkbox" id="agree3">
              <label class="form-check-label small" for="agree3">I would like to receive updates and offers from IDP</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 enquire-btn">Enquire now &rarr;</button>
          </form>
        </div>
      </div>
      <!-- Right: Girl Image -->
      <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
        <div class="help-img-bg">
          <div class="help-img-rect"></div>
          <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Student" class="help-img">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="pt-5 pb-3 custom-footer">
  <div class="container">
    <div class="row align-items-start mb-4 gy-4">
      <div class="col-12 col-md-3 mb-4 mb-md-0 text-center text-md-start">
        <h6 class="fw-bold mb-3">About IDP</h6>
        <ul class="list-unstyled small mb-0">
          <li><a href="#" class="text-decoration-none text-secondary">Why choose IDP</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">What we do</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Study abroad counselling</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Careers</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Living abroad support</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-3 mb-4 mb-md-0 text-center text-md-start">
        <h6 class="fw-bold mb-3">Useful Links</h6>
        <ul class="list-unstyled small mb-0">
          <li><a href="#" class="text-decoration-none text-secondary">News & articles</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">How to find a course</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Study abroad courses</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">How to find scholarships</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Student Essentials</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Ask IDP</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Cost of living</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-2 mb-4 mb-md-0 text-center text-md-start">
        <h6 class="fw-bold mb-3">IELTS</h6>
        <ul class="list-unstyled small mb-0">
          <li><a href="#" class="text-decoration-none text-secondary">What is IELTS?</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Why take IELTS with IDP?</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">IELTS Preparation</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Book an IELTS test</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-4 d-flex flex-column align-items-md-end align-items-center">
        <div class="w-100 d-flex justify-content-md-end justify-content-center mb-4">
          <button class="btn btn-outline-light find-office-btn"><i class="bi bi-geo-alt me-2"></i>Find Our Office</button>
        </div>
        <h6 class="fw-bold mb-3 text-md-end text-center w-100">Connect with IDP</h6>
        <ul class="list-unstyled small mb-3 text-md-end text-center w-100">
          <li><a href="#" class="text-decoration-none text-secondary">IDP Events</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">IDP Offices</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Corporate responsibility</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">About IDP Corporate</a></li>
        </ul>
      </div>
    </div>
    <div class="row align-items-center pt-3 border-top gy-2 footer-border">
      <div class="col-12 col-md-6 small text-secondary pt-2 text-center text-md-start">
        Copyright &copy;2024 IDP Education
        <span class="ms-2 d-block d-md-inline">
          <a href="#" class="text-secondary text-decoration-underline me-2">Investors</a>
          <a href="#" class="text-secondary text-decoration-underline me-2">Terms of use</a>
          <a href="#" class="text-secondary text-decoration-underline me-2">Privacy policy</a>
          <a href="#" class="text-secondary text-decoration-underline">Disclaimer</a>
        </span>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center pt-2">
        <a href="#" class="text-secondary fs-5 me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-secondary fs-5 me-3"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-secondary fs-5 me-3"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-secondary fs-5 me-3"><i class="bi bi-youtube"></i></a>
        <a href="#" class="text-secondary fs-5"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection