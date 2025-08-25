@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light min-vh-100 p-0">
    <!-- Hamburger button for mobile -->
    <button class="btn btn-outline-secondary d-lg-none m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#dashboardSidebarOffcanvas" aria-controls="dashboardSidebarOffcanvas">
        <i class="bi bi-list" style="font-size: 1.7rem;"></i>
    </button>
    <div class="d-flex">
        <!-- Sidebar for desktop, hidden on mobile -->
        <nav class="bg-white border-end vh-100 profile-sidebar d-none d-lg-block" style="width: 90px; min-width: 90px;">
            <ul class="nav flex-column align-items-center pt-4">
                <li class="nav-item mb-4">
                    <a class="nav-link dashboard-inactive text-center" href="{{ route('dashboard') }}">
                        <span class="d-block mb-1"><i class="bi bi-house-door fs-4"></i></span>
                        <span class="small">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mb-4">
                    <a class="nav-link dashboard-inactive text-center" href="{{ route('profile.details') }}">
                        <span class="d-block mb-1"><i class="bi bi-person fs-4"></i></span>
                        <span class="small">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dashboard-active text-center" href="{{ url('/shortlisted') }}">
                        <span class="d-block mb-1"><i class="bi bi-heart fs-4"></i></span>
                        <span class="small">Shortlisted</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <!-- Offcanvas sidebar for mobile -->
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="dashboardSidebarOffcanvas" aria-labelledby="dashboardSidebarOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="dashboardSidebarOffcanvasLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <ul class="nav flex-column align-items-center pt-4">
                    <li class="nav-item mb-4">
                        <a class="nav-link dashboard-inactive text-center" href="{{ route('dashboard') }}">
                            <span class="d-block mb-1"><i class="bi bi-house-door fs-4"></i></span>
                            <span class="small">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-4">
                        <a class="nav-link dashboard-inactive text-center" href="{{ route('profile.details') }}">
                            <span class="d-block mb-1"><i class="bi bi-person fs-4"></i></span>
                            <span class="small">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dashboard-active text-center" href="{{ route('profile.shortlisted') }}">
                            <span class="d-block mb-1"><i class="bi bi-heart fs-4"></i></span>
                            <span class="small">Shortlisted</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-grow-1 p-5">
            <h3 class="fw-bold mb-4">My <span class="text-primary">Favourite Courses</span></h3>
            
            <!-- Filter and Search Section -->
            <div class="row mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Search favourite courses...">
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort by: Recently Added
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Recently Added</a></li>
                            <li><a class="dropdown-item" href="#">Alphabetical</a></li>
                            <li><a class="dropdown-item" href="#">By University</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Courses Grid -->
            <div class="row g-4">
                <!-- Course 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm course-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-success">Computer Science</span>
                                <i class="bi bi-heart-fill text-danger heart-icon fs-5" data-bs-toggle="tooltip" title="Remove from favourites"></i>
                            </div>
                            <h5 class="card-title">Advanced Web Development</h5>
                            <p class="card-text text-muted small">Harvard University</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-muted ms-1">4.5</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-people me-1"></i> 1200</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$89.99</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Course 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm course-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-info">Data Science</span>
                                <i class="bi bi-heart-fill text-danger heart-icon fs-5" data-bs-toggle="tooltip" title="Remove from favourites"></i>
                            </div>
                            <h5 class="card-title">Machine Learning Fundamentals</h5>
                            <p class="card-text text-muted small">Stanford University</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="text-muted ms-1">4.9</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-people me-1"></i> 2450</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$99.99</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Course 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm course-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-warning text-dark">Business</span>
                                <i class="bi bi-heart-fill text-danger heart-icon fs-5" data-bs-toggle="tooltip" title="Remove from favourites"></i>
                            </div>
                            <h5 class="card-title">Digital Marketing Strategy</h5>
                            <p class="card-text text-muted small">University of Pennsylvania</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="text-muted ms-1">4.0</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-people me-1"></i> 890</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$79.99</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Course 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm course-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-danger">Design</span>
                                <i class="bi bi-heart-fill text-danger heart-icon fs-5" data-bs-toggle="tooltip" title="Remove from favourites"></i>
                            </div>
                            <h5 class="card-title">UI/UX Design Principles</h5>
                            <p class="card-text text-muted small">California Institute of the Arts</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-muted ms-1">4.5</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-people me-1"></i> 1560</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$69.99</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Course 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm course-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-primary">Photography</span>
                                <i class="bi bi-heart-fill text-danger heart-icon fs-5" data-bs-toggle="tooltip" title="Remove from favourites"></i>
                            </div>
                            <h5 class="card-title">Modern Photography Techniques</h5>
                            <p class="card-text text-muted small">New York University</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="text-muted ms-1">4.0</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-people me-1"></i> 720</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$59.99</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Course 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm course-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-secondary">Language</span>
                                <i class="bi bi-heart-fill text-danger heart-icon fs-5" data-bs-toggle="tooltip" title="Remove from favourites"></i>
                            </div>
                            <h5 class="card-title">Business English Communication</h5>
                            <p class="card-text text-muted small">University of Cambridge</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="text-muted ms-1">4.8</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-people me-1"></i> 1980</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$49.99</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <nav aria-label="Course pagination" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    
    // Add click event to heart icons to remove from favorites
    document.querySelectorAll('.heart-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            // In a real application, this would make an API call to remove from favorites
            // For this example, we'll just remove the card from the DOM
            this.closest('.col-md-6').style.opacity = '0';
            setTimeout(() => {
                this.closest('.col-md-6').remove();
                // Show message if no favorites left
                if (document.querySelectorAll('.course-card').length === 0) {
                    const mainContent = document.querySelector('.flex-grow-1');
                    const message = document.createElement('div');
                    message.className = 'alert alert-info mt-4';
                    message.innerHTML = '<i class="bi bi-info-circle me-2"></i> You have no favorite courses. Start adding some!';
                    mainContent.appendChild(message);
                }
            }, 500);
        });
    });
</script>
@endsection