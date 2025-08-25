@extends('user.layout.musterlayout')

@section('content')
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

<!-- Find Courses to Study Abroad Section -->
<div class="container my-5 find-courses-breadcrumb-container">
  <nav class="find-courses-breadcrumb-nav">
    IDP Education / Find a course
  </nav>
  <h2 class="fw-bold mb-3 find-courses-title">Find courses to study abroad</h2>
  <p class="find-courses-desc">
    With so many courses and universities to choose from, deciding where and what to study abroad can be a daunting task. With comprehensive course data from leading colleges and universities across the world, we are here to guide you through the entire process. Our experienced counsellors work with you to understand your goals and aspirations to help find a study abroad program that perfectly fits for you. Our course finder helps you discover thousands of courses from leading institutions across Australia, Canada, Ireland, New Zealand, the United Kingdom and the United States.
  </p>
  <div class="d-flex flex-row gap-2 mt-4">
    <button class="btn btn-primary d-flex align-items-center px-4 py-2 find-courses-filter-btn">
      <i class="bi bi-funnel me-2"></i> Filter Courses
    </button>
    <button class="btn btn-outline-secondary d-flex align-items-center px-3 py-2 find-courses-sort-btn">
      <i class="bi bi-list-ul me-2"></i> Sort by: Popularity
    </button>
  </div>
</div>

<div class="fullwidth-divider">
  <div class="fullwidth-divider-line"></div>
  <div class="fullwidth-divider-fade"></div>
</div>

<!-- Courses Grid Section -->
<div class="container mb-5 find-courses-grid-container">
  <div class="row justify-content-center g-4">
    @for ($i = 0; $i < 12; $i++)
    <div class="col-12 col-sm-6 col-lg-3 d-flex">
      <div class="bg-white border rounded-4 shadow-sm w-100 d-flex flex-column justify-content-between find-courses-card">
        <div>
          <div class="d-flex justify-content-between align-items-start mb-2">
            <div>
              <div class="fw-semibold find-courses-card-title">MSc Financial Management</div>
              <div class="text-muted small find-courses-card-subtitle">University of Tasmania (UTAS)</div>
            </div>
            <button class="btn btn-link p-0 find-courses-fav-btn"><i class="bi bi-heart"></i></button>
          </div>
          <ul class="list-unstyled mb-3 find-courses-card-list">
            <li class="mb-1"><i class="bi bi-bar-chart me-2"></i>THE World Ranking: 93</li>
            <li class="mb-1"><i class="bi bi-mortarboard me-2"></i>Masters Degree (Taught)</li>
            <li class="mb-1"><i class="bi bi-geo-alt me-2"></i>Birmingham, United Kingdom</li>
            <li class="mb-1"><i class="bi bi-calendar-event me-2"></i>Next intake: 22.09.2025</li>
            <li class="mb-1"><i class="bi bi-graph-up-arrow me-2"></i>Entry Score: IELTS 6.5</li>
            <li><i class="bi bi-cash-coin me-2"></i>GBP31739 (2024) <i class="bi bi-info-circle ms-1 find-courses-info-icon"></i></li>
          </ul>
        </div>
        <a href="#" class="btn btn-outline-dark w-100 mt-2 find-courses-view-btn">View details</a>
      </div>
    </div>
    @endfor
  </div>
</div>

<!-- Pagination Section -->
<div class="d-flex justify-content-center align-items-center my-4">
  <nav aria-label="Course pagination">
    <ul class="pagination pagination-sm mb-0 find-courses-pagination">
      <li class="page-item"><a class="page-link rounded-circle" href="#" aria-label="First"><i class="bi bi-chevron-double-left"></i></a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#" aria-label="Previous"><i class="bi bi-chevron-left"></i></a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">1</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
      <li class="page-item disabled"><a class="page-link rounded-circle" href="#">...</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">7</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">8</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">9</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#" aria-label="Next"><i class="bi bi-chevron-right"></i></a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#" aria-label="Last"><i class="bi bi-chevron-double-right"></i></a></li>
    </ul>
  </nav>
</div>

<!-- Popular Courses Section -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
      <div>
        <h4 class="fw-bold mb-0 popular-courses-title">Popular courses</h4>
        <div class="popular-courses-underline mt-1"></div>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary btn-sm rounded-circle popular-courses-arrow"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-secondary btn-sm rounded-circle popular-courses-arrow"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4 popular-courses-row">
      <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <a href="#" class="popular-course-card card h-100 shadow-sm rounded-4 border-0 w-100 text-decoration-none text-dark">
          <img src="https://i.postimg.cc/3JNcqH2k/image.png" class="card-img-top rounded-top-4 popular-courses-img" alt="Social Science">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Social Science</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <a href="#" class="popular-course-card card h-100 shadow-sm rounded-4 border-0 w-100 text-decoration-none text-dark">
          <img src="https://i.postimg.cc/PJx20mpg/image.png" class="card-img-top rounded-top-4 popular-courses-img" alt="Accounting">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Accounting</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <a href="#" class="popular-course-card card h-100 shadow-sm rounded-4 border-0 w-100 text-decoration-none text-dark">
          <img src="https://i.postimg.cc/25DTCpLF/image.png" class="card-img-top rounded-top-4 popular-courses-img" alt="Engineering">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Engineering</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <a href="#" class="popular-course-card card h-100 shadow-sm rounded-4 border-0 w-100 text-decoration-none text-dark">
          <img src="https://i.postimg.cc/gjQq51Ph/image.png" class="card-img-top rounded-top-4 popular-courses-img" alt="Pharmacy">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Pharmacy</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
    </div>
    <div class="d-flex justify-content-end mt-2">
      <a href="#" class="text-primary small fw-semibold popular-courses-viewall">View all course <i class="bi bi-arrow-right popular-courses-viewall-icon"></i></a>
    </div>
  </div>
</section>

<!-- Recommended Subjects Section -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
      <div>
        <h4 class="fw-bold mb-0">Recommended subjects</h4>
        <div class="popular-courses-underline mt-1"></div>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary btn-sm rounded-circle recommended-arrow"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-secondary btn-sm rounded-circle recommended-arrow"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
      @for ($i = 0; $i < 4; $i++)
      <div class="col-12 col-sm-6 col-lg-3 d-flex">
        <div class="recommended-card card h-100 shadow-sm rounded-4 border-0 w-100">
          <img src="https://i.postimg.cc/6QqS471w/image.png" class="card-img-top rounded-top-4 recommended-img" alt="Study Computer Engineering">
          <div class="card-body pt-3 pb-2">
            <span class="fw-semibold recommended-card-title">Study Computer Engineering<br>abroad</span>
          </div>
        </div>
      </div>
      @endfor
    </div>
    <div class="d-flex justify-content-end mt-2">
      <a href="#" class="view-all-link text-primary text-decoration-none fw-medium">View all course <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- Related Searches Section -->
<section class="py-5 bg-white">
  <div class="container">
    <h4 class="fw-bold mb-4 related-search-title">Related Searches</h4>
    <div class="popular-courses-underline mb-4 related-search-underline"></div>
    <div class="row">
      <div class="col-12 col-md-4 mb-4 mb-md-0">
        <div class="mb-2 related-search-icon-lg"><i class="bi bi-journal-bookmark"></i></div>
        <div class="fw-bold mb-2 related-search-title-lg">By course subject</div>
        <ul class="list-unstyled mb-0">
          <li><a href="#" class="related-link">Health And Medicine</a></li>
          <li><a href="#" class="related-link">Engineering</a></li>
          <li><a href="#" class="related-link">Language And Culture</a></li>
          <li><a href="#" class="related-link">Business</a></li>
          <li><a href="#" class="related-link">Political And Social Sciences</a></li>
          <li><a href="#" class="related-link">Computing And IT</a></li>
          <li><a href="#" class="related-link">Teaching And Education</a></li>
          <li><a href="#" class="related-link">Economics</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-4 mb-4 mb-md-0">
        <div class="mb-2 related-search-icon-lg"><i class="bi bi-mortarboard"></i></div>
        <div class="fw-bold mb-2 related-search-title-lg">By study level</div>
        <ul class="list-unstyled mb-0">
          <li><a href="#" class="related-link">Doctorate Courses</a></li>
          <li><a href="#" class="related-link">Foundation Courses</a></li>
          <li><a href="#" class="related-link">Postgraduate Courses</a></li>
          <li><a href="#" class="related-link">Pre-Degree & Vocational Courses</a></li>
          <li><a href="#" class="related-link">School Courses</a></li>
          <li><a href="#" class="related-link">Undergraduate Courses</a></li>
          <li><a href="#" class="related-link">University Preparation Courses</a></li>
          <li><a href="#" class="related-link">VET Courses</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-4">
        <div class="mb-2 related-search-icon-lg"><i class="bi bi-globe"></i></div>
        <div class="fw-bold mb-2 related-search-title-lg">By overseas country</div>
        <ul class="list-unstyled mb-0">
          <li><a href="#" class="related-link">Courses In Australia</a></li>
          <li><a href="#" class="related-link">Courses In Canada</a></li>
          <li><a href="#" class="related-link">Courses In Ireland</a></li>
          <li><a href="#" class="related-link">Courses In New Zealand</a></li>
          <li><a href="#" class="related-link">Courses In United Kingdom</a></li>
          <li><a href="#" class="related-link">Courses In United States</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>



<!-- Footer -->
<footer class="pt-5 pb-3 footer-dark">
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
          <button class="btn btn-outline-light btn-find-office"><i class="bi bi-geo-alt me-2"></i>Find Our Office</button>
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
    <div class="row align-items-center pt-3 border-top gy-2 border-top-footer">
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