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
                            <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center navbar-logo">
                                SC
                            </div>
                        </div>
          </a>
      </div> 
      <div class="d-flex align-items-center gap-3">
        <a href="{{ route('login') }}" class="btn btn-link p-0"><i class="bi bi-person navbar-icon"></i></a>
        <a href="#" class="btn btn-link p-0"><i class="bi bi-heart navbar-icon heart-icon"></i></a>
        <button class="btn btn-link p-0" id="hamburgerBtn" aria-label="Open menu"><i class="bi bi-list navbar-icon menu-icon"></i></button>
      </div>
    </div>
    <!-- Hamburger Drawer -->
    <div id="mobileDrawer" class="mobile-drawer">
      <div class="mobile-drawer-header d-flex justify-content-between align-items-center px-3 py-3">
        <span></span>
        <button class="btn btn-link p-0" id="drawerCloseBtn" aria-label="Close menu"><i class="bi bi-x-lg close-icon"></i></button>
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


<!-- Hero Section -->
<section class="hero-section d-flex align-items-end custom-hero-section">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h1 class="fw-bold mb-3 hero-title">Secure Your Future with a Higher<br>Education Study Visa</h1>
        <p class="mb-4 hero-desc">Obtain Your Study Visa for Advanced Education Opportunities</p>
        <div class="d-flex flex-wrap gap-2 mb-4">
          <a href="#" class="btn btn-primary px-4 btn-find-scholarship">Find a scholarship</a>
          <a href="#" class="btn btn-outline-primary px-4 btn-register-now">Register now</a>
        </div>
      </div>
      <div class="col-lg-5 d-flex justify-content-end align-items-end position-relative" class="hero-img-col">
        <!-- <div class="hero-img-bg"></div> -->
        <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Hero" class="img-fluid hero-img">
      </div>
      
    </div>
  </div>
</section>
<!-- End Hero Section -->
<!-- 🔹 Search/Filter Tabbed Form Section -->
<section class="py-4 bg-white" style="margin-top: -20px;">
  <div class="container search-form-container">
    <div class="mx-auto search-form-inner">
      <div class="bg-white rounded-4 shadow-sm px-4 py-4 search-form-box">

        <!-- Tabs -->
        <ul class="nav nav-tabs border-0 mb-3 flex-wrap search-tabs" id="searchTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab">Courses</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-secondary" id="scholarships-tab" data-bs-toggle="tab" data-bs-target="#scholarships" type="button" role="tab">Scholarships</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-secondary" id="universities-tab" data-bs-toggle="tab" data-bs-target="#universities" type="button" role="tab">Universities</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-secondary" id="events-tab" data-bs-toggle="tab" data-bs-target="#events" type="button" role="tab">Events</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-secondary" id="guide-tab" data-bs-toggle="tab" data-bs-target="#guide" type="button" role="tab">Guide me</button>
          </li>
        </ul>
        
        <!-- Tab Content -->
        <div class="tab-content">
          
          <!-- Courses Tab -->
          <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
            <form class="row g-3 align-items-end">
              <div class="col-md-4">
                <select class="form-select">
                  <option selected disabled>Select course subject</option>
                  <option value="health">Health and Medicine</option>
                  <option value="business">Business</option>
                  <option value="engineering">Engineering</option>
                  <option value="law">Law</option>
                  <option value="arts">Arts</option>
                  <option value="science">Science</option>
                  <option value="technology">Technology</option>
                  <option value="computing">Computing and IT</option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-select">
                  <option selected disabled>Select study level</option>
                  <option value="undergraduate">Undergraduate</option>
                  <option value="postgraduate">Postgraduate</option>
                  <option value="doctorate">Doctorate</option>
                  <option value="diploma">Diploma</option>
                  <option value="vocational">Vocational</option>
                  <option value="school">School</option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-select">
                  <option selected disabled>Select a study destination</option>
                  <option value="usa">USA</option>
                  <option value="uk">UK</option>
                  <option value="canada">Canada</option>
                  <option value="australia">Australia</option>
                  <option value="new-zealand">New Zealand</option>
                  <option value="ireland">Ireland</option>
                </select>
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
              </div>
            </form>
          </div>

          <!-- Scholarships Tab -->
          <div class="tab-pane fade" id="scholarships" role="tabpanel" aria-labelledby="scholarships-tab">
            <form class="row g-3 align-items-end">
              <div class="col-md-4">
                <select class="form-select">
                  <option selected disabled>Select study level</option>
                  <option value="undergraduate">Undergraduate</option>
                  <option value="postgraduate">Postgraduate</option>
                  <option value="doctorate">Doctorate</option>
                  <option value="diploma">Diploma</option>
                </select>
              </div>
              <div class="col-md-4">
                <select class="form-select">
                  <option selected disabled>Select a study destination</option>
                  <option value="usa">USA</option>
                  <option value="uk">UK</option>
                  <option value="canada">Canada</option>
                  <option value="australia">Australia</option>
                  <option value="new-zealand">New Zealand</option>
                </select>
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
              </div>
            </form>
          </div>

          <!-- Universities Tab -->
          <div class="tab-pane fade" id="universities" role="tabpanel" aria-labelledby="universities-tab">
            <form class="row g-3 align-items-end">
              <div class="col-md-4">
                <select class="form-select">
                  <option selected disabled>Search by University name</option>
                </select>
              </div>
              <div class="col-md-4">
                <select class="form-select">
                  <option selected disabled>Select a study destination</option>
                  <option value="usa">USA</option>
                  <option value="uk">UK</option>
                  <option value="canada">Canada</option>
                  <option value="australia">Australia</option>
                  <option value="new-zealand">New Zealand</option>
                </select>
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
              </div>
            </form>
          </div>

          <!-- Events Tab -->
          <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
            <form class="row g-3 align-items-end">
              <div class="col-md-3">
                <select class="form-select">
                  <option selected disabled>City</option>
                  <option value="dhaka">Dhaka</option>
                  <option value="chittagong">Chittagong</option>
                  <option value="khulna">Khulna</option>
                  <option value="barisal">Barisal</option>
                  <option value="sylhet">Sylhet</option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-select">
                  <option selected disabled>Month</option>
                  <option value="january">January</option>
                  <option value="february">February</option>
                  <option value="march">March</option>
                  <option value="april">April</option>
                  <option value="may">May</option>
                  <option value="june">June</option>
                  <option value="july">July</option>
                  <option value="august">August</option>
                  <option value="september">September</option>
                  <option value="october">October</option>
                  <option value="november">November</option>
                  <option value="december">December</option>
                </select>
              </div>
              <div class="col-md-4">
                <select class="form-select">
                  <option selected disabled>Select a study destination</option>
                  <option value="usa">USA</option>
                  <option value="uk">UK</option>
                  <option value="canada">Canada</option>
                  <option value="australia">Australia</option>
                  <option value="new-zealand">New Zealand</option>
                </select>
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
              </div>
            </form>
          </div>

          <!-- Guide Me Tab -->
          <div class="tab-pane fade" id="guide" role="tabpanel" aria-labelledby="guide-tab">
            <form>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h2 class="fw-bold guide-title">Let us help you with your search</h2>
                  <p class="guide-description">Simply answer these 5 questions to see courses perfectly matched to you</p>
                </div>
                <a href="{{ route('lending.onboarding') }}">
                  <button type="button" class="btn btn-primary start-here-btn">Start here</button>
                </a>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Search/Filter Tabbed Form Section -->


<!-- 🔹 We Can Help You Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Left: Heading & Form -->
      <div class="col-12 col-lg-6">
        <div class="mb-3 d-inline-block">
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
                <input type="text" class="form-control" required>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Last name*</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Email*</label>
                <input type="email" class="form-control" required>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Phone*</label>
                <input type="tel" class="form-control" required>
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
            <button type="submit" class="btn btn-primary w-100 btn-counselling">Enquire now &rarr;</button>
          </form>
        </div>
      </div>
      <!-- Right: Image -->
      <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
        <div class="help-img-col">
          <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Student" class="help-img">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End We Can Help You Section -->
<!-- Features/Info Cards Section -->
<section class="py-5" class="bg-hero-features">
  <div class="container">
    <h4 class="fw-bold mb-4 features-title">We can help you?<span class="features-underline"></span></h4>
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-2 mb-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex flex-column justify-content-between">
          <div><i class="bi bi-mortarboard features-icon-primary"></i></div>
          <div class="fw-semibold mt-3 mb-1">A rich history</div>
          <div class="text-secondary small mb-2">55+ years of helping students achieve their study abroad dreams.</div>
          <a href="#" class="text-primary small fw-semibold">Learn more &gt;</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-3">
        <div class="rounded-4 p-4 h-100 d-flex flex-column justify-content-between features-card-primary">
          <div><i class="bi bi-people features-icon-white"></i></div>
          <div class="fw-semibold mt-3 mb-1">Global network</div>
          <div class="small mb-2">Partnering with 800 leading universities across the world.</div>
          <a href="#" class="text-white small fw-semibold">Learn more &gt;</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex flex-column justify-content-between">
          <div><i class="bi bi-lightning-charge features-icon-primary"></i></div>
          <div class="fw-semibold mt-3 mb-1">Closer to you</div>
          <div class="text-secondary small mb-2">Serving you globally with 190 offices across 35 countries.</div>
          <a href="#" class="text-primary small fw-semibold">Learn more &gt;</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex flex-column justify-content-between">
          <div><i class="bi bi-search features-icon-primary"></i></div>
          <div class="fw-semibold mt-3 mb-1">Driven by innovation</div>
          <div class="text-secondary small mb-2">Combining human expertise with smart tech for a highly personalised experience.</div>
          <a href="#" class="text-primary small fw-semibold">Learn more &gt;</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex flex-column justify-content-between">
          <div><i class="bi bi-person-circle features-icon-primary"></i></div>
          <div class="fw-semibold mt-3 mb-1">Centred around you</div>
          <div class="text-secondary small mb-2">Matching you to the right country, right course with the right support system.</div>
          <a href="#" class="text-primary small fw-semibold">Learn more &gt;</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Features/Info Cards Section -->
<!-- You Should Also Know Section -->
<section class="py-5">
  <div class="container">
    <h4 class="fw-bold section-title">You <span>should also know</span><span class="section-underline"></span></h4>
    <div class="row g-4 align-items-stretch gy-4">
      <!-- Left Large Card -->
      <div class="col-lg-6">
        <div class="card h-100 shadow-sm border-0 rounded-4">
          <div class="row g-0 align-items-center">
            <div class="col-5">
              <img src="https://i.postimg.cc/XqdpjPCd/image.png" alt="Global events" class="img-fluid rounded-start-4 h-100 object-fit-cover">
            </div>
            <div class="col-7">
              <div class="card-body">
                <a href="#" class="fw-semibold text-primary mb-2 d-block features-icon-white">Global events</a>
                <div class="text-secondary small">At our Global events, you can meet university representatives and discuss your study prospects, and more in person.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right Two Small Cards -->
      <div class="col-lg-6 d-flex flex-column gap-3">
        <div class="card shadow-sm border-0 rounded-4 flex-row align-items-center info-card">
          <img src="https://i.postimg.cc/zvZGckcB/image.png" alt="Live life in the FastLane" class="rounded-start-4 info-card-img">
          <div class="card-body py-2">
            <a href="#" class="fw-semibold text-primary mb-1 d-block">Live life in the FastLane</a>
            <div class="text-secondary small">You can get an express response from your dream university in seconds!</div>
          </div>
        </div>
        <div class="card shadow-sm border-0 rounded-4 flex-row align-items-center info-card">
          <img src="https://i.postimg.cc/fyNMKRVS/image.png" alt="Visa application assistance" class="rounded-start-4 info-card-img">
          <div class="card-body py-2">
            <a href="#" class="fw-semibold text-primary mb-1 d-block">Visa application assistance</a>
            <div class="text-secondary small">Applying for visas can be challenging, but our team ensures you access to accurate information for a smoother...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End You Should Also Know Section -->
<!-- Dream Destinations Section -->
<section class="py-5" class="bg-hero-features">
  <div class="container">
    <h4 class="fw-bold section-title"><span>Your</span> dream destinations</h4>
    <div class="mb-4 text-secondary small section-subtitle">Begin an exciting academic journey in these varied and welcoming study locations!</div>
    <div class="row g-4">
      <div class="col-12 col-md-4">
        <a href="{{ url('study-australia') }}"  class="dream-dest-card">
        <div class="destination-card">
          <img src="https://i.postimg.cc/d1HxQqCZ/image.png" alt="Australia">
          <div class="destination-overlay"></div>
          <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">Australia</div>
        </div>
        </a>
      </div>
      <div class="col-12 col-md-4">
        <div class="destination-card">
          <img src="https://i.postimg.cc/d1HxQqCZ/image.png" alt="Canada">
          <div class="destination-overlay"></div>
          <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">Canada</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="destination-card">
          <img src="https://i.postimg.cc/d1HxQqCZ/image.png" alt="Ireland">
          <div class="destination-overlay"></div>
          <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">Ireland</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="destination-card">
          <img src="https://i.postimg.cc/d1HxQqCZ/image.png" alt="New Zealand">
          <div class="destination-overlay"></div>
          <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">New Zealand</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="destination-card">
          <img src="https://i.postimg.cc/d1HxQqCZ/image.png" alt="United Kingdom">
          <div class="destination-overlay"></div>
          <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">United Kingdom</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="destination-card">
          <img src="https://i.postimg.cc/d1HxQqCZ/image.png" alt="United States">
          <div class="destination-overlay"></div>
          <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-4">United States</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Dream Destinations Section -->
<!-- Services Section -->
<section class="py-5">
  <div class="container">
    <h4 class="fw-bold section-title">Services</h4>
    <div class="row g-4">
      <div class="col-12 col-md-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100">
          <i class="bi bi-search" class="features-icon-primary"></i>
          <div class="fw-semibold mt-3 mb-1">Course Subjects</div>
          <div class="text-secondary small mb-2">Explore different course subjects that align to your study objectives</div>
          <a href="#" class="text-primary small fw-semibold">Learn More &gt;</a>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100">
          <i class="bi bi-mortarboard" class="features-icon-primary"></i>
          <div class="fw-semibold mt-3 mb-1">Scholarships</div>
          <div class="text-secondary small mb-2">Search more than 5,000 scholarships offered by over 370 institutions across the world</div>
          <a href="#" class="text-primary small fw-semibold">Learn More &gt;</a>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100">
          <i class="bi bi-lightning-charge" class="features-icon-primary"></i>
          <div class="fw-semibold mt-3 mb-1">Check your eligibility before applying</div>
          <div class="text-secondary small mb-2">FastLane allows you to see if you can get into a course before you apply</div>
          <a href="#" class="text-primary small fw-semibold">Learn More &gt;</a>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100">
          <i class="bi bi-check-circle" class="features-icon-primary"></i>
          <div class="fw-semibold mt-3 mb-1">Support with applications</div>
          <div class="text-secondary small mb-2">Expert counsellors can help you to apply to multiple courses</div>
          <a href="#" class="text-primary small fw-semibold">Learn More &gt;</a>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="bg-white rounded-4 shadow-sm p-4 h-100">
          <i class="bi bi-calendar-event" class="features-icon-primary"></i>
          <div class="fw-semibold mt-3 mb-1">Events</div>
          <div class="text-secondary small mb-2">Explore events where you can meet with partner universities and discuss your dream to study abroad</div>
          <a href="#" class="text-primary small fw-semibold">Learn More &gt;</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services Section -->
<!-- Study Abroad Steps Section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center justify-content-between gy-4">
      <div class="col-12 col-lg-6 mb-4 mb-lg-0">
        <h4 class="fw-bold section-title"><span>Your</span> study abroad steps</h4>
        <div class="d-flex flex-column gap-3">
          <div class="bg-white rounded-4 shadow-sm px-4 py-3 d-flex justify-content-between align-items-center">
            <span>Why study abroad?</span>
            <i class="bi bi-chevron-right fs-5 text-secondary"></i>
          </div>
          <div class="bg-white rounded-4 shadow-sm px-4 py-3 d-flex justify-content-between align-items-center">
            <span>Where and what to study?</span>
            <i class="bi bi-chevron-right fs-5 text-secondary"></i>
          </div>
          <div class="bg-white rounded-4 shadow-sm px-4 py-3 d-flex justify-content-between align-items-center">
            <span>How do I apply?</span>
            <i class="bi bi-chevron-right fs-5 text-secondary"></i>
          </div>
          <div class="bg-white rounded-4 shadow-sm px-4 py-3 d-flex justify-content-between align-items-center">
            <span>After receiving an offer</span>
            <i class="bi bi-chevron-right fs-5 text-secondary"></i>
          </div>
          <div class="bg-white rounded-4 shadow-sm px-4 py-3 d-flex justify-content-between align-items-center">
            <span>Prepare to depart</span>
            <i class="bi bi-chevron-right fs-5 text-secondary"></i>
          </div>
          <div class="bg-white rounded-4 shadow-sm px-4 py-3 d-flex justify-content-between align-items-center">
            <span>Arrive and thrive</span>
            <i class="bi bi-chevron-right fs-5 text-secondary"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-5 d-flex justify-content-end align-items-end position-relative" class="hero-img-col">
        <!-- <div style="position:absolute; right:0; bottom:0; width:280px; height:300px; background:#2563eb; border-radius:40px; z-index:1;"></div> -->
        <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Hero" class="img-fluid" style="position:relative; z-index:2; max-width:260px; max-height:300px; object-fit:contain; margin-right:10px; margin-bottom:0;">
      </div>
    </div>
  </div>
</section>
<!-- End Study Abroad Steps Section -->

<!-- Hear from Institutions Section -->
<section class="py-5" class="bg-hero-features">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold mb-0 section-title">Hear <span class="fw-bold">from institutions</span></h4>
      <div>
        <button class="btn btn-outline-secondary btn-sm me-2" style="border-radius:50%; width:32px; height:32px;"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-secondary btn-sm" style="border-radius:50%; width:32px; height:32px;"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="position-relative">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" class="card-img-top" alt="Video 1">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" style="border-radius:50%; width:48px; height:48px; background:#2563eb; border:none;"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="card-body pb-2">
            <div class="fw-semibold">How can I make friends in Canada</div>
            <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="position-relative">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" class="card-img-top" alt="Video 2">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" style="border-radius:50%; width:48px; height:48px; background:#2563eb; border:none;"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="card-body pb-2">
            <div class="fw-semibold">How can I make friends in Canada</div>
            <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="position-relative">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" class="card-img-top" alt="Video 3">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" style="border-radius:50%; width:48px; height:48px; background:#2563eb; border:none;"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="card-body pb-2">
            <div class="fw-semibold">How can I make friends in Canada</div>
            <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="position-relative">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" class="card-img-top" alt="Video 4">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" style="border-radius:50%; width:48px; height:48px; background:#2563eb; border:none;"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="card-body pb-2">
            <div class="fw-semibold">How can I make friends in Canada</div>
            <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end mt-2">
      <a href="#" class="text-primary small fw-semibold">More FAQs &gt;</a>
    </div>
  </div>
</section>
<!-- End Hear from Institutions Section -->

<!-- Popular Courses Section -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold mb-0 section-title"><span>Popular</span> courses among <b>&lt;Home country&gt;</b> students</h4>
    </div>
    <div class="row g-4">
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm rounded-4 border-0">
          <img src="https://i.postimg.cc/3JNcqH2k/image.png" class="card-img-top rounded-top-4" alt="Social Science" style="height:180px; object-fit:cover;">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Social Science</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm rounded-4 border-0">
          <img src="https://i.postimg.cc/PJx20mpg/image.png" class="card-img-top rounded-top-4" alt="Accounting" style="height:180px; object-fit:cover;">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Accounting</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm rounded-4 border-0">
          <img src="https://i.postimg.cc/25DTCpLF/image.png" class="card-img-top rounded-top-4" alt="Engineering" style="height:180px; object-fit:cover;">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Engineering</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card h-100 shadow-sm rounded-4 border-0">
          <img src="https://i.postimg.cc/gjQq51Ph/image.png" class="card-img-top rounded-top-4" alt="Pharmacy" style="height:180px; object-fit:cover;">
          <div class="card-body d-flex justify-content-between align-items-center pt-3 pb-2">
            <span class="small">Pharmacy</span>
            <i class="bi bi-arrow-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end mt-2">
      <a href="{{ url('find-courses') }}" class="text-primary small fw-semibold">View all course &gt;</a>
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
          <button class="btn btn-outline-light" style="border-radius:22px; border:1px solid #bdbdbd; color:#f2f2f2; min-width:180px; font-size:15px;"><i class="bi bi-geo-alt me-2"></i>Find Our Office</button>
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
    <div class="row align-items-center pt-3 border-top gy-2" style="border-color:#444 !important;">
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
<script src="{{ asset('asset/userSite/responsive-navbar.js') }}"></script>
@endsection
