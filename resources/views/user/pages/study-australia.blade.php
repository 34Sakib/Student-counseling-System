@extends('user.layout.musterlayout')

@section('content')

<!-- END STANDALONE BOOTSTRAP TEST DROPDOWN -->
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
      </div>
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
<!-- Destinations Hero Section -->
<section class="dest-hero-section position-relative d-flex align-items-center justify-content-center custom-dest-hero-section">
  <div class="dest-hero-overlay position-absolute top-0 start-0 w-100 h-100 custom-dest-hero-overlay"></div>
  <div class="container position-relative z-2 text-center py-5">
    <h1 class="fw-bold text-white mb-3 dest-hero-title">Study in Australia</h1>
    <div class="text-white-50 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    <div class="d-flex justify-content-center gap-2">
      <a href="#" class="btn btn-primary px-4">Contact Us</a>
      <a href="#" class="btn btn-light d-flex align-items-center justify-content-center dest-hero-share-btn"><i class="bi bi-share dest-hero-share-icon"></i></a>
    </div>
  </div>
</section>
<div class="study-australia-section">
  <div class="section-content">
    <h1>Studying in Australia is an experience. Here’s why</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <h2>Why study in Australia?</h2>
    <ol>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
    </ol>

    <h2>Programs and their duration in Australia</h2>
    <table>
      <tr>
        <th>Qualification</th>
        <th>Duration</th>
      </tr>
      <tr>
        <td>Objects</td>
        <td>5-6 years</td>
      </tr>
      <tr>
        <td>Baseline's degree</td>
        <td>3-4 years</td>
      </tr>
      <tr>
        <td>Reappraisal address</td>
        <td>5-6 years</td>
      </tr>
      <tr>
        <td>Master's degree/MAI</td>
        <td>5-6 years</td>
      </tr>
      <tr>
        <td>Disclosure at PID</td>
        <td>4-7 years</td>
      </tr>
    </table>

    <h1>Cost of living in Australia</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <h2>Academic intake to study in Australia</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <h2>Deadline for Australian universities</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <h2>Popular programs to study in Australia</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <h2>Top universities in Australia</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <table>
      <tr>
        <th>& No</th>
        <th>Individuals</th>
        <th>06 Saturday 2014 (Saturday)</th>
      </tr>
      <tr>
        <td>01</td>
        <td>The University of Melbourne</td>
        <td>14</td>
      </tr>
      <tr>
        <td>02</td>
        <td>The University of Sydney</td>
        <td>18</td>
      </tr>
      <tr>
        <td>03</td>
        <td>The University of South Wales</td>
        <td>24</td>
      </tr>
      <tr>
        <td>04</td>
        <td>The Australian National University (NGAJ)</td>
        <td>20</td>
      </tr>
      <tr>
        <td>05</td>
        <td>Women University</td>
        <td>52</td>
      </tr>
      <tr>
        <td>06</td>
        <td>The University of Queensland</td>
        <td>62</td>
      </tr>
      <tr>
        <td>07</td>
        <td>The University of Western Australia</td>
        <td>25</td>
      </tr>
      <tr>
        <td>08</td>
        <td>The University of Australia</td>
        <td>100</td>
      </tr>
      <tr>
        <td>09</td>
        <td>University of Tasmania</td>
        <td>60</td>
      </tr>
      <tr>
        <td>10</td>
        <td>The University of Nottingham</td>
        <td>60</td>
      </tr>
    </table>
  </div>

  <!-- Image gallery on the side -->
  <div class="image-gallery">
    <div class="gallery-item">
      <img src="https://i.postimg.cc/fW7F1vxJ/image.png" alt="Studying in Australia">
    </div>
    <div class="gallery-item">
      <img src="https://i.postimg.cc/kXfHgXYC/image.png" alt="Why study in Australia?">
    </div>
    <div class="gallery-item">
      <img src="https://i.postimg.cc/XYPD910D/image.png" alt="Cost of living in Australia">
    </div>
    <div class="gallery-item">
      <img src="https://i.postimg.cc/jqhgMSbf/image.png" alt="Top universities in Australia">
    </div>
  </div>
</div>

<!-- Explore in Australia Section -->
<section class="explore-australia-bg">
  <div class="explore-australia-container">
    <h2 class="explore-title">Explore in Australia</h2>
    <span class="explore-title-underline"></span>
    <div class="explore-tabs">
      <a href="#" class="explore-tab active">South Australia</a>
      <a href="#" class="explore-tab">Victoria</a>
      <a href="#" class="explore-tab">New South wales</a>
      <a href="#" class="explore-tab">Western Australia</a>
      <a href="#" class="explore-tab">Tasmania</a>
      <a href="#" class="explore-tab">Queensland</a>
    </div>
    <div class="explore-row">
      <div class="explore-img-card">
        <img src="https://i.postimg.cc/pr8qYPR0/image.png" alt="Adelaide" />
        <span class="explore-img-label">Adelaide</span>
      </div>
      <div class="explore-card">
        <h3>Study in Adelaide</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="btn btn-primary">Discover</a>
      </div>
    </div>
  </div>
</section>
<!-- End Explore in Australia Section -->

<!-- Top universities in Australia & Services Section -->
<section class="top-universities-bg">
  <div class="top-universities-container">
    <div class="top-universities-header">
      <h2 class="top-universities-title">Top universities in Australia</h2>
      <div class="top-universities-nav">
        <button class="btn btn-nav"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-nav"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="universities-row">
      <div class="university-card">
        <img src="https://i.postimg.cc/SsRP80n5/image.png" alt="UTAS" class="university-logo" />
        <div class="university-name">University of Tasmania (UTAS)</div>
        <a href="#" class="university-country">Australia</a>
        <ul class="university-features">
          <li><i class="bi bi-globe"></i> The Worlds Ranking</li>
          <li><i class="bi bi-translate"></i> English Courses available</li>
          <li><i class="bi bi-people"></i> International students: 17,149</li>
        </ul>
        <div class="university-actions">
          <button class="btn btn-outline-primary">View all courses</button>
          <button class="btn btn-primary">View Details</button>
        </div>
      </div>
      <div class="university-card">
        <img src="https://i.postimg.cc/SsRP80n5/image.png" alt="UTAS" class="university-logo" />
        <div class="university-name">University of Tasmania (UTAS)</div>
        <a href="#" class="university-country">Australia</a>
        <ul class="university-features">
          <li><i class="bi bi-globe"></i> The Worlds Ranking</li>
          <li><i class="bi bi-translate"></i> English Courses available</li>
          <li><i class="bi bi-people"></i> International students: 17,149</li>
        </ul>
        <div class="university-actions">
          <button class="btn btn-outline-primary">View all courses</button>
          <button class="btn btn-primary">View Details</button>
        </div>
      </div>
      <div class="university-card">
        <img src="https://i.postimg.cc/SsRP80n5/image.png" alt="UTAS" class="university-logo" />
        <div class="university-name">University of Tasmania (UTAS)</div>
        <a href="#" class="university-country">Australia</a>
        <ul class="university-features">
          <li><i class="bi bi-globe"></i> The Worlds Ranking</li>
          <li><i class="bi bi-translate"></i> English Courses available</li>
          <li><i class="bi bi-people"></i> International students: 17,149</li>
        </ul>
        <div class="university-actions">
          <button class="btn btn-outline-primary">View all courses</button>
          <button class="btn btn-primary">View Details</button>
        </div>
      </div>
      <div class="university-card">
        <img src="https://i.postimg.cc/SsRP80n5/image.png" alt="UTAS" class="university-logo" />
        <div class="university-name">University of Tasmania (UTAS)</div>
        <a href="#" class="university-country">Australia</a>
        <ul class="university-features">
          <li><i class="bi bi-globe"></i> The Worlds Ranking</li>
          <li><i class="bi bi-translate"></i> English Courses available</li>
          <li><i class="bi bi-people"></i> International students: 17,149</li>
        </ul>
        <div class="university-actions">
          <button class="btn btn-outline-primary">View all courses</button>
          <button class="btn btn-primary">View Details</button>
        </div>
      </div>
    </div>
    <div class="top-universities-viewall-row">
      <a href="#" class="top-universities-viewall">View all <span>&#8594;</span></a>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">💙</div>
        <div class="service-title">Student health cover</div>
        <div class="service-desc">Your choice, your health cover, your peace of mind abroad.</div>
        <a href="{{ url('health-cover') }}" class="service-btn btn btn-outline-light border mt-auto w-100 d-flex justify-content-center align-items-center essentials-btn-lg">
        <button class="service-btn">Learn more <span>&#8594;</span></button>
        </a>
      </div>
      <div class="service-card">
        <div class="service-icon">💸</div>
        <div class="service-title">Money transfer</div>
        <div class="service-desc">Safe, secure and fast payments to your institution and other key services.</div>
        <button class="service-btn">Learn more <span>&#8594;</span></button>
      </div>
      <div class="service-card">
        <div class="service-icon">🏠</div>
        <div class="service-title">Accommodation</div>
        <div class="service-desc">Student apartment or homestay, the choice is yours.</div>
        <button class="service-btn">Learn more <span>&#8594;</span></button>
      </div>
      <div class="service-card">
        <div class="service-icon">🏦</div>
        <div class="service-title">Student banking</div>
        <div class="service-desc">Open a bank account before you arrive.</div>
        <button class="service-btn">Learn more <span>&#8594;</span></button>
      </div>
      <div class="service-card">
        <div class="service-icon">🛡️</div>
        <div class="service-title">Guardianship</div>
        <div class="service-desc">If you’re under 18, we’ll find you a guardian.</div>
        <button class="service-btn">Learn more <span>&#8594;</span></button>
      </div>
      <div class="service-card">
        <div class="service-icon">📱</div>
        <div class="service-title">Sim cards</div>
        <div class="service-desc">No SIM? No problem - We’ve got it covered.</div>
        <button class="service-btn">Learn more <span>&#8594;</span></button>
      </div>
    </div>
  </div>
</section>
<!-- End Top universities in Australia & Services Section -->

<!-- Related Articles Section -->
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div>
        <h4 class="fw-bold mb-0 articles-title">Articles about Australia</h4>
        <div style="height:3px; width:32px; background:#2563eb; border-radius:2px; margin-top:4px;"></div>
      </div>
      <div>
        <button class="btn btn-outline-secondary btn-sm me-2" class="btn-articles-nav"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-secondary btn-sm" class="btn-articles-nav"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" class="border border-articles">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3 rounded-3" class="articles-img">
          <div class="articles-card-title">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" class="border border-articles">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3 rounded-3" class="articles-img">
          <div class="articles-card-title">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" class="border border-articles">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3 rounded-3" class="articles-img">
          <div class="articles-card-title">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-3 h-100 border" class="border border-articles">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="w-100 mb-3 rounded-3" class="articles-img">
          <div class="articles-card-title">Grading system in New Zealand</div>
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
<!-- ASK Us Section -->
<section class="py-5 bg-articles-ask">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-0 ask-title">ASK Us</h4>
        <div style="height:3px; width:32px; background:#2563eb; border-radius:2px; margin-top:4px;"></div>
      </div>
      <div>
        <button class="btn btn-outline-secondary btn-sm me-2" class="btn-ask-nav"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-secondary btn-sm" class="btn-ask-nav"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2" class="ask-video-thumb">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" alt="ASK Video 1" class="w-100 h-100" class="ask-video-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" class="ask-video-play-btn"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="fw-semibold">How can I make friends in Canada</div>
          <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2" class="ask-video-thumb">
            <img src="https://i.postimg.cc/Kj9nkbvH/image.png" alt="ASK Video 2" class="w-100 h-100" class="ask-video-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" class="ask-video-play-btn"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="fw-semibold">How can I make friends in Canada</div>
          <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2" class="ask-video-thumb">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" alt="ASK Video 3" class="w-100 h-100" class="ask-video-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" class="ask-video-play-btn"><i class="bi bi-play-fill fs-3"></i></button>
          </div>
          <div class="fw-semibold">How can I make friends in Canada</div>
          <div class="text-secondary small">Jackie Piasecki, CSE Student Ca...</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="bg-white rounded-4 shadow-sm p-2 h-100">
          <div class="position-relative rounded-3 overflow-hidden mb-2" class="ask-video-thumb">
            <img src="https://i.postimg.cc/HskqCM1s/image.png" alt="ASK Video 4" class="w-100 h-100" class="ask-video-img">
            <button class="btn btn-primary position-absolute top-50 start-50 translate-middle" class="ask-video-play-btn"><i class="bi bi-play-fill fs-3"></i></button>
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
<!-- End ASK Us Section -->

<!-- Footer -->
<footer class="pt-5 pb-3" style="background:#232323; color:#f2f2f2;">
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
@endsection