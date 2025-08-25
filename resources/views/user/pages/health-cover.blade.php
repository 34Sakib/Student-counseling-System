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

<section class="health-cover-services-section py-5">
  <div class="health-cover-services-container">
    <h2 class="health-cover-services-title mb-2">Health Cover services for International Students</h2>
    <div class="study-destination mb-3">
      <label class="destination-title" for="studyDropdown">Study Destination</label>
      <div class="custom-dropdown">
        <button type="button" id="studyDropdown" class="dropdown-toggle-btn" onclick="document.getElementById('dropdownMenu').classList.toggle('show')">
          <span id="dropdownLabel">All</span> <span class="dropdown-arrow">&#9662;</span>
        </button>
        <div class="dropdown-menu-checkboxes" id="dropdownMenu">
          <label><input type="checkbox" value="Australia" class="dest-chk"> Australia</label>
          <label><input type="checkbox" value="United States" class="dest-chk"> United States</label>
          <label><input type="checkbox" value="Ireland" class="dest-chk"> Ireland</label>
          <label><input type="checkbox" value="New Zealand" class="dest-chk"> New Zealand</label>
          <label><input type="checkbox" value="Canada" class="dest-chk"> Canada</label>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Student Health Cover Info Section -->
<section class="student-health-cover-info-section py-5">
  <div class="student-health-cover-container">
    <h2 class="student-health-cover-title mb-2">
      Get the right student health cover while studying abroad
    </h2>
    <p class="student-health-cover-intro mb-4">Congratulations! You’ve made a great decision to study abroad. We’re here to make the process easy, finding the best cover to suit your needs.</p>
    <div class="student-health-cover-block mb-4">
      <h3 class="student-health-cover-subtitle">Why do I need a student health cover?</h3>
      <ol>
        <li>It helps cover you for medical expenses while you’re studying abroad, including:
          <ul>
            <li>Doctor visits</li>
            <li>Emergency Ambulance</li>
            <li>Prescription medicine</li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="student-health-cover-block mb-4">
      <h3 class="student-health-cover-subtitle">Get the student health care stress-free with IDP</h3>
      <ol>
        <li>It helps cover you for medical expenses while you’re studying abroad, including:
          <ul>
            <li>Doctor visits</li>
            <li>Emergency Ambulance</li>
            <li>Prescription medicine</li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="student-health-cover-block mb-4">
      <h3 class="student-health-cover-subtitle">Apply online for a quick turnaround</h3>
      <ol>
        <li>It helps cover you for medical expenses while you’re studying abroad, including:
          <ul>
            <li>Doctor visits</li>
            <li>Emergency Ambulance</li>
            <li>Prescription medicine</li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="student-health-cover-block">
      <h3 class="student-health-cover-subtitle">Compare and find the health cover for your needs</h3>
      <ol>
        <li>It helps cover you for medical expenses while you’re studying abroad, including:
          <ul>
            <li>Doctor visits</li>
            <li>Emergency Ambulance</li>
            <li>Prescription medicine</li>
          </ul>
        </li>
      </ol>
    </div>
  </div>
</section>
<script>
document.addEventListener('click', function(event) {
  var dropdown = document.getElementById('dropdownMenu');
  var button = document.getElementById('studyDropdown');
  if (!button.contains(event.target) && !dropdown.contains(event.target)) {
    dropdown.classList.remove('show');
  }
});
// Update label based on selected checkboxes
const dropdownMenu = document.getElementById('dropdownMenu');
const dropdownLabel = document.getElementById('dropdownLabel');
dropdownMenu.addEventListener('change', function() {
  const checked = Array.from(dropdownMenu.querySelectorAll('.dest-chk:checked')).map(cb => cb.value);
  dropdownLabel.textContent = checked.length ? checked.join(', ') : 'All';
});
</script>

</div>

<script>
// Pill button active state toggle
const destButtons = document.querySelectorAll('.destination-item');
destButtons.forEach(btn => {
  btn.addEventListener('click', function() {
    destButtons.forEach(b => b.classList.remove('active'));
    this.classList.add('active');
  });
});
</script>




<!-- Related Articles Section -->
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div>
        <h4 class="related-articles-title fw-bold mb-0">Related articles</h4>
        <div class="related-articles-underline"></div>
      </div>
      <div>
        <button class="related-articles-nav-btn btn btn-outline-secondary btn-sm me-2"><i class="bi bi-arrow-left"></i></button>
        <button class="related-articles-nav-btn btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="related-article-card bg-white rounded-4 shadow-sm p-3 h-100 border">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="related-article-img w-100 mb-3">
          <div class="related-article-title fw-bold mb-2">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="related-article-card bg-white rounded-4 shadow-sm p-3 h-100 border">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="related-article-img w-100 mb-3">
          <div class="related-article-title fw-bold mb-2">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="related-article-card bg-white rounded-4 shadow-sm p-3 h-100 border">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="related-article-img w-100 mb-3">
          <div class="related-article-title fw-bold mb-2">Grading system in New Zealand</div>
          <div class="text-secondary small">
            <span>June 28, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="related-article-card bg-white rounded-4 shadow-sm p-3 h-100 border">
          <img src="https://i.postimg.cc/QMsrCZ9D/image.png" alt="Grading system in New Zealand" class="related-article-img w-100 mb-3">
          <div class="related-article-title fw-bold mb-2">Grading system in New Zealand</div>
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

<!-- Explore More Products Section -->
<section class="explore-products-section py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="explore-products-title fw-bold mb-0">Explore more products</h4>
        <div class="explore-products-underline"></div>
      </div>
      <div>
        <button class="explore-products-nav-btn btn btn-outline-secondary btn-sm me-2"><i class="bi bi-arrow-left"></i></button>
        <button class="explore-products-nav-btn btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
    <div class="row g-4">
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
    </div>
  </div>
</section>
<!-- End Explore More Products Section -->

<!-- Explore More Products Prompt Section -->
<section class="explore-products-prompt-section py-4">
  <div class="container">
    <div class="explore-products-prompt d-flex flex-column flex-md-row align-items-md-center justify-content-between">
      <div>
        <div class="explore-products-prompt-title fw-bold mb-1">Want to explore more products?</div>
        <div class="explore-products-prompt-desc small">The products shown above are for your selected destination. Click the "Change destination" button to view products available in another destination.</div>
      </div>
      <button class="explore-products-prompt-btn btn btn-outline-secondary mt-3 mt-md-0">
        <i class="bi bi-arrow-repeat me-2"></i> Change destination
      </button>
    </div>
  </div>
</section>
<!-- End Explore More Products Prompt Section -->


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