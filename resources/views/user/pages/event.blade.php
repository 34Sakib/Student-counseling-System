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
<!-- Study Abroad Sub-Navigation -->
<div class="studyabroad-subnav">
  <!-- Desktop Horizontal Nav -->
  <nav class="studyabroad-subnav-nav d-none d-md-flex align-items-center justify-content-center">
    <a href="#why-study-abroad" class="studyabroad-subnav-link">Why study abroad?</a>
    <i class="bi bi-chevron-double-right mx-2 text-white-50"></i>
    <a href="#where-what-study" class="studyabroad-subnav-link">Where and what to study?</a>
    <i class="bi bi-chevron-double-right mx-2 text-white-50"></i>
    <a href="#how-apply" class="studyabroad-subnav-link">How do I apply?</a>
    <i class="bi bi-chevron-double-right mx-2 text-white-50"></i>
    <a href="#after-offer" class="studyabroad-subnav-link">After receiving an offer</a>
    <i class="bi bi-chevron-double-right mx-2 text-white-50"></i>
    <a href="#prepare-depart" class="studyabroad-subnav-link">Prepare to depart</a>
    <i class="bi bi-chevron-double-right mx-2 text-white-50"></i>
    <a href="#arrive-thrive" class="studyabroad-subnav-link">Arrive and thrive</a>
  </nav>

  <!-- Mobile Collapsible Nav -->
  <div class="studyabroad-subnav-mobile d-md-none">
    <button class="studyabroad-subnav-mobile-toggle w-100 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#studyabroadSubnavCollapse" aria-expanded="false" aria-controls="studyabroadSubnavCollapse">
      View entire study abroad journey <i class="bi bi-chevron-down ms-1"></i>
    </button>
    <div class="collapse" id="studyabroadSubnavCollapse">
      <div class="studyabroad-subnav-mobile-list bg-primary">
        <a href="#why-study-abroad" class="studyabroad-subnav-mobile-link d-flex justify-content-between align-items-center text-white py-3 px-3 border-bottom">Why study abroad?<i class="bi bi-chevron-right"></i></a>
        <a href="#where-what-study" class="studyabroad-subnav-mobile-link d-flex justify-content-between align-items-center text-white py-3 px-3 border-bottom">Where and what to study?<i class="bi bi-chevron-right"></i></a>
        <a href="#how-apply" class="studyabroad-subnav-mobile-link d-flex justify-content-between align-items-center text-white py-3 px-3 border-bottom">How do I apply?<i class="bi bi-chevron-right"></i></a>
        <a href="#after-offer" class="studyabroad-subnav-mobile-link d-flex justify-content-between align-items-center text-white py-3 px-3 border-bottom">After receiving an offer<i class="bi bi-chevron-right"></i></a>
        <a href="#prepare-depart" class="studyabroad-subnav-mobile-link d-flex justify-content-between align-items-center text-white py-3 px-3 border-bottom">Prepare to depart<i class="bi bi-chevron-right"></i></a>
        <a href="#arrive-thrive" class="studyabroad-subnav-mobile-link d-flex justify-content-between align-items-center text-white py-3 px-3">Arrive and thrive<i class="bi bi-chevron-right"></i></a>
        <div class="text-center py-3">
          <button class="btn btn-link text-white p-0" type="button" data-bs-toggle="collapse" data-bs-target="#studyabroadSubnavCollapse" aria-expanded="true" aria-controls="studyabroadSubnavCollapse">
            Collapse <i class="bi bi-chevron-up"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Study Abroad Sub-Navigation -->
<!-- 98 News and Articles Section -->
<div class="bg-white w-100 related-articles-radius-none">
  <div class="container related-articles-container">
    <h2 class="fw-bold mb-4 related-articles-title">98 news and articles</h2>
    <div class="d-flex flex-row align-items-center gap-3 mb-2 related-articles-filter-row">
      <button class="btn btn-primary d-flex align-items-center px-4 py-2 related-articles-filter-btn">
        <i class="bi bi-funnel me-2"></i> Filter articles
      </button>
      <button type="button" class="btn btn-outline-secondary d-flex align-items-center px-3 py-2 sort-modal-trigger" data-bs-toggle="modal" data-bs-target="#filterArticlesModal">
  <span class="me-auto">Sort by: Event date (new to old)</span>
  <i class="bi bi-chevron-down ms-2"></i>
</button>
    </div>
  </div>
</div>


<!-- Event Cards Section -->
<div class="container my-5">
  <div class="row g-4">
    @for ($i = 0; $i < 4; $i++)
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="event-card bg-white rounded-4 shadow-sm p-3 h-100 border">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Study Group On-spot Application Day" class="w-100 mb-3 event-card-img">
          <span class="badge bg-light text-primary mb-2 small">Physical</span>
          <div class="fw-bold mb-1 event-card-title">Study Group On-spot Application Day</div>
          <div class="event-card-date text-secondary small mb-1">31st Oct-04th Nov 2024, 12:00 PM-5:00 PM</div>
          <div class="event-card-meta text-secondary small mb-2">
            <i class="bi bi-geo-alt-fill me-1"></i> Bangladesh-Dhaka
            <img src="https://flagcdn.com/16x12/ie.png" class="ms-2 me-1" alt="Ireland flag">
            Ireland
          </div>
          <div class="event-card-meta text-secondary small mb-3">
            <i class="bi bi-mortarboard-fill me-1"></i> Postgraduate, Undergraduate
          </div>
          <a href="#" class="btn btn-outline-primary w-100">View and Register</a>
        </div>
      </div>
    @endfor
  </div>
  <div class="text-center mt-5">
    <div class="fw-bold mb-2 event-save-title">Want to save your study preferences for later?</div>
    <div class="mb-3 text-secondary small">Sign in to get personalised content optimised for you or get in touch with one of our counsellors for free consultation.</div>
    <div class="d-flex justify-content-center gap-2">
      <a href="{{ route('register') }}" class="btn btn-outline-primary px-4">Sign up</a>
      <a href="{{ route('login') }}" class="btn btn-primary px-4">Sign in</a>
    </div>
  </div>
</div>
<!-- Find Events In Your City Section -->
<div class="container my-5">
  <div class="mb-4">
    <h3 class="city-events-heading">Find events in your city</h3>
    <div class="city-events-underline"></div>
  </div>
  <div class="row g-4">
    <div class="col-12 col-md-4">
      <div class="city-card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Dhaka" class="city-card-img">
        <div class="city-card-overlay">Dhaka</div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="city-card">
        <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Rangpur" class="city-card-img">
        <div class="city-card-overlay">Rangpur</div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="city-card">
        <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80" alt="Chittagong" class="city-card-img">
        <div class="city-card-overlay">Chittagong</div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="city-card">
        <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80" alt="Khulna" class="city-card-img">
        <div class="city-card-overlay">Khulna</div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="city-card">
        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Mymensingh" class="city-card-img">
        <div class="city-card-overlay">Mymensingh</div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="city-card">
        <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Rajshahi" class="city-card-img">
        <div class="city-card-overlay">Rajshahi</div>
      </div>
    </div>
  </div>
</div>


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
    <div class="row align-items-center pt-3 border-top gy-2 custom-footer-border">
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