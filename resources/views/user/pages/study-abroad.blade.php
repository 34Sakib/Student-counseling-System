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
        <a href="{{ route('login') }}" class="btn btn-link p-0"><i class="bi bi-person studyabroad-icon-17"></i></a>
        <a href="#" class="btn btn-link p-0"><i class="bi bi-heart studyabroad-icon-17 studyabroad-heart-orange"></i></a>
        <button class="btn btn-link p-0" id="hamburgerBtn" aria-label="Open menu"><i class="bi bi-list studyabroad-icon-20"></i></button>
      </div>
    </div>
    <!-- Hamburger Drawer -->
    <div id="mobileDrawer" class="mobile-drawer">
      <div class="mobile-drawer-header d-flex justify-content-between align-items-center px-3 py-3">
        <span></span>
        <button class="btn btn-link p-0" id="drawerCloseBtn" aria-label="Close menu"><i class="bi bi-x-lg studyabroad-icon-16"></i></button>
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
<!-- Hero Section: Why Study Abroad -->
<section class="studyabroad-hero">
  <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" alt="Why study abroad" class="studyabroad-hero-img" loading="lazy">
  <div class="studyabroad-hero-content">
    <h1 class="studyabroad-hero-title">Why study abroad?</h1>
    <div class="studyabroad-hero-desc">Learn how studying abroad opens a world aof opportunities</div>
  </div>
</section>

<!-- Expand Your Horizons Section -->
<section class="py-5 studyabroad-section-bg">
  <div class="container">
    <div class="mb-4">
      <h2 class="fw-bold studyabroad-section-title">Expand your horizons, skills and opportunities</h2>
      <div class="text-secondary small studyabroad-section-desc">
        Want to make an investment in yourself to secure a successful future? Studying abroad is a journey of a lifetime that opens up new possibilities and pathways. It is an opportunity to gain a world-class foreign education, develop a global mindset, learn new skills, and acquire vital expertise to boost your employability. So prepare yourself to take the leap and get ready to explore the world from an international student's perspective!
      </div>
    </div>
    <div class="row g-4 align-items-center">
      <div class="col-12 col-md-6">
        <div class="position-relative rounded-4 overflow-hidden studyabroad-video-box">
          <img src="https://i.postimg.cc/6Q9bvW99/image.png" alt="Study video" class="w-100 h-100 studyabroad-video-img">
          <button class="btn btn-light position-absolute top-50 start-50 translate-middle shadow studyabroad-video-btn">
            <i class="bi bi-play-fill studyabroad-video-icon"></i>
          </button>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center">
        <div class="card shadow-sm p-4 w-100 studyabroad-card">
          <div class="fw-semibold mb-2">One account for all your study abroad needs</div>
          <div class="text-secondary small mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra elit id magna vestibulum sollicitudin. Aenean ipsum sem, feugiat a porttitor at, congue aliquet libero. Nunc feugiat tempus lobortis.</div>
          <a href="{{ route('login') }}" class="btn btn-primary w-100">Sign up</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Discover How Studying Abroad Can Help Section -->
<section class="py-5 discover-section-bg">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3 discover-header">
      <div>
        <h4 class="fw-bold mb-0 discover-title">Discover how studying abroad can help you</h4>
        <div class="discover-underline"></div>
      </div>
      <div></div>
    </div>
    <div class="mb-4">
      <div class="fw-bold mb-1 studyabroad-fs-112">1. Benefits of studying abroad</div>
      <div class="text-secondary small mb-2">From quality education, personal growth to career progression, discover how studying abroad can help you succeed through these helpful articles and videos.</div>
      <div class="mb-2">
        <a href="#" class="text-primary small me-2">What is studying abroad</a> |
        <a href="#" class="text-primary small me-2">Why study abroad</a> |
        <a href="#" class="text-primary small me-2">Study abroad vs study locally</a> |
        <a href="#" class="text-primary small">Benefits</a>
      </div>
    </div>
    <div class="mb-4">
      <div class="fw-bold mb-1 studyabroad-fs-112">2. The study abroad experience</div>
      <div class="text-secondary small mb-2">Learn all about what it's like to experience life in a different country.</div>
      <div class="mb-2">
        <a href="#" class="text-primary small me-2">What's the experience like</a> |
        <a href="#" class="text-primary small">How much does it typically cost?</a>
      </div>
    </div>
    <div class="mb-4">
      <div class="fw-bold mb-1 studyabroad-fs-112">3. Breaking down the steps</div>
      <div class="text-secondary small mb-2">Not sure where to start? Follow these <a href="#" class="text-primary">simple steps</a></div>
    </div>
    <div class="mb-4">
      <div class="fw-bold mb-1 studyabroad-fs-112">4. Study abroad guide for parents</div>
      <div class="text-secondary small">Learn more about how you can support your child's overseas education journey with helpful resources such as articles and videos on what to expect and what it's like living in each country.</div>
    </div>
    <div class="mb-4">
      <div class="fw-bold mb-1 studyabroad-fs-112">5. Hear from our students</div>
      <div class="text-secondary small">If you're interested in studying overseas, you can read and watch videos to hear <a href="#" class="text-primary">first-hand experiences</a> from our students to inform your study abroad decisions.</div>
    </div>
  </div>
</section>

<div class="container">
  <div class="collapse navbar-collapse" id="mainNavbar">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="studyAbroadDropdown" role="button" data-bs-toggle="dropdown">Study abroad steps</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Step 1</a></li>
          <li><a class="dropdown-item" href="#">Step 2</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="destinationsDropdown" role="button" data-bs-toggle="dropdown">Study destinations</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">USA</a></li>
          <li><a class="dropdown-item" href="#">UK</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="findCourseDropdown" role="button" data-bs-toggle="dropdown">Find a course</a>
        <ul class="dropdown-menu">
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
        <a class="nav-link dropdown-toggle" href="#" id="essentialsDropdown" role="button" data-bs-toggle="dropdown">Student Essentials</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Visa Help</a></li>
        </ul>
      </li>
    </ul>
    <a href="#" class="btn btn-primary ms-auto studyabroad-btn-blue">Avail Free Counselling</a>
  </div>
</div>
</nav>

<!-- Related Articles Section -->
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div>
        <h4 class="fw-bold mb-0 studyabroad-institutions-title">Related articles</h4>
        <div class="studyabroad-institutions-underline"></div>
      </div>
      <div>
        <button class="btn btn-outline-secondary btn-sm me-2 studyabroad-btn-radius"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-secondary btn-sm studyabroad-btn-radius"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" style="border-color:#eee !important;">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3" style="height:170px; object-fit:cover; border-radius:1rem 1rem 0 0;">
          <div class="fw-bold mb-2" class="studyabroad-institutions-title">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" style="border-color:#eee !important;">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3" style="height:170px; object-fit:cover; border-radius:1rem 1rem 0 0;">
          <div class="fw-bold mb-2" class="studyabroad-institutions-title">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" style="border-color:#eee !important;">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3" style="height:170px; object-fit:cover; border-radius:1rem 1rem 0 0;">
          <div class="fw-bold mb-2" class="studyabroad-institutions-title">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" style="border-color:#eee !important;">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3" style="height:170px; object-fit:cover; border-radius:1rem 1rem 0 0;">
          <div class="fw-bold mb-2" class="studyabroad-institutions-title">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end mt-3">
      <a href="#" class="small fw-semibold text-primary text-decoration-none">View all <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>
<!-- End Related Articles Section -->

<!-- Frequently Asked Questions Section -->
<section class="py-5 studyabroad-section-bg">
  <div class="container">
    <div class="mb-4 studyabroad-faq-header">
      <h2 class="fw-bold mb-1 studyabroad-faq-title">Frequently asked questions</h2>
      <div class="studyabroad-faq-underline"></div>
    </div>
    <div class="mt-4">
      <div class="mb-4">
        <div class="fw-bold studyabroad-faq-question">What is studying abroad?</div>
        <div class="text-secondary small mt-1">Studying abroad is the experience of living overseas in order to acquire a foreign education. It can take many forms – from a few weeks in a short course, to a four years’ program of full-time study.</div>
      </div>
      <hr class="my-2" />
      <div class="mb-4">
        <div class="fw-bold studyabroad-faq-question">How is it different from studying locally?</div>
        <div class="text-secondary small mt-1">While studying locally is the easier option, in the longer run studying abroad offers unique opportunities and experiences that cannot be found at home. For more information, read this article about whether to <a href="#" class="text-primary text-decoration-none">study abroad or locally</a>.</div>
      </div>
      <hr class="my-2" />
      <div class="mb-4">
        <div class="fw-bold studyabroad-faq-question">What are the main benefits of studying overseas?</div>
        <div class="text-secondary small mt-1">Studying abroad offers a wide range of benefits, from inspiring a global mindset to helping you learn new skills and enhancing your career prospects. To read all about it, check our article about the <a href="#" class="text-primary text-decoration-none">benefits of studying abroad</a>.</div>
      </div>
      <hr class="my-2" />
      <div class="mb-4">
        <div class="fw-bold studyabroad-faq-question">What's the experience like?</div>
        <div class="text-secondary small mt-1">Studying abroad is a transformative experience of personal growth that helps you broaden your perspective, develop independence, self-confidence and a greater understanding and appreciation of different cultures. To see what it's like, read <a href="#" class="text-primary text-decoration-none">some student stories</a> who have made the move to study abroad with IDP.</div>
      </div>
      <hr class="my-2" />
      <div class="mb-4">
        <div class="fw-bold studyabroad-faq-question">Will I be able to afford it?</div>
        <div class="text-secondary small mt-1">Studying abroad is not as expensive as you may think! Use our <a href="#" class="text-primary text-decoration-none">cost of living calculator</a> to estimate how much you will need to cover all your expenses as an international student. We connect you to over 5,100 <a href="#" class="text-primary text-decoration-none">scholarships</a> across our partner university network. Reach out to us to explore your options.</div>
      </div>
    </div>
  </div>
</section>

<!-- Hear from institutions Section -->
<section class="py-5 studyabroad-institutions-bg">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-0 studyabroad-institutions-title">Hear from institutions</h4>
        <div class="studyabroad-institutions-underline"></div>
      </div>
      <div>
        <button class="btn btn-outline-secondary btn-sm me-2 studyabroad-institutions-btn"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-secondary btn-sm studyabroad-institutions-btn"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2 studyabroad-institutions-imgbox">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" alt="Hear from institutions 1" class="w-100 h-100 studyabroad-institutions-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle studyabroad-institutions-playbtn"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="fw-semibold">How can I make friends in Canada</div>
          <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2 studyabroad-institutions-imgbox">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" alt="Hear from institutions 2" class="w-100 h-100 studyabroad-institutions-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle studyabroad-institutions-playbtn"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="fw-semibold">How can I make friends in Canada</div>
          <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2 studyabroad-institutions-imgbox">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" alt="Hear from institutions 3" class="w-100 h-100 studyabroad-institutions-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle studyabroad-institutions-playbtn"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="fw-semibold">How can I make friends in Canada</div>
          <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2 studyabroad-institutions-imgbox">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" alt="Hear from institutions 4" class="w-100 h-100 studyabroad-institutions-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle studyabroad-institutions-playbtn"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="fw-semibold">How can I make friends in Canada</div>
          <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end mt-3">
      <a href="#" class="small fw-semibold text-primary text-decoration-none">More FAQs <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>
<!-- End Hear from institutions Section -->

<!-- We Can Help You Section -->
<section class="py-5 studyabroad-section-bg">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Left: Heading & Form -->
      <div class="col-12 col-lg-6">
        <div class="mb-3 studyabroad-faq-header">
          <h2 class="fw-bold mb-1 studyabroad-institutions-title">We can help you</h2>
          <div class="studyabroad-help-underline"></div>
        </div>
        <div class="text-secondary mb-4 studyabroad-help-desc">Enter your details and one of our expert counsellors will reach out to you so we can connect you to the right course, country, university – and even scholarships!</div>
        <div class="card shadow-sm p-4 studyabroad-help-card">
          <div class="fw-semibold mb-3 studyabroad-help-formtitle">Application From</div>
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
                <select class="form-select" required>
                  <option>Select</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">When do you plan to study?*</label>
                <select class="form-select" required>
                  <option>Select</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Preferred mode of counselling*</label>
                <select class="form-select" required>
                  <option>Select</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">How would you fund your education?*</label>
                <select class="form-select" required>
                  <option>Select</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Preferred study level*</label>
                <select class="form-select" required>
                  <option>Select</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label small mb-1">Nearest Our Office*</label>
                <select class="form-select" required>
                  <option>Select</option>
                </select>
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
            <button type="submit" class="btn btn-primary w-100 studyabroad-btn-blue">Enquire now &rarr;</button>
          </form>
        </div>
      </div>
      <!-- Right: Girl Image -->
      <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
        <div class="studyabroad-help-girlbox">
          <!-- <div class="studyabroad-help-girlbg"></div> -->
          <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Student" class="studyabroad-help-girlimg">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="pt-5 pb-3 studyabroad-footer-bg">
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
          <button class="btn btn-outline-light studyabroad-footer-btn"><i class="bi bi-geo-alt me-2"></i>Find Our Office</button>
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
    <div class="row align-items-center pt-3 border-top gy-2 studyabroad-footer-border">
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