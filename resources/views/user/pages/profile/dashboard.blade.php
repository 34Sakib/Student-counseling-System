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
                    <a class="nav-link dashboard-active text-center" href="{{ url('/dashboard') }}">
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
                    <a class="nav-link dashboard-inactive text-center" href="{{ route('profile.shortlisted') }}">
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
                        <a class="nav-link dashboard-active text-center" href="{{ url('/dashboard') }}">
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
                        <a class="nav-link dashboard-inactive text-center" href="{{ route('profile.shortlisted') }}">
                            <span class="d-block mb-1"><i class="bi bi-heart fs-4"></i></span>
                            <span class="small">Shortlisted</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-grow-1 p-5">
            <h3 class="fw-bold mb-4">Hi <span class="text-primary">Mr. X</span></h3>
            <div class="row g-4">
                <!-- Profile Card -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3 text-primary">
                                <i class="bi bi-person-circle fs-2"></i>
                            </div>
                            <h5 class="card-title mb-2">Profile</h5>
                            <div class="mb-1 small text-muted">80% Completed</div>
                            <a href="#" class="small text-decoration-none text-primary">View and completed <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Shortlists Card -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3 text-primary">
                                <i class="bi bi-search fs-2"></i>
                            </div>
                            <h5 class="card-title mb-2">Shortlists</h5>
                            <div class="mb-1 small text-muted">0 Courses</div>
                            <a href="#" class="small text-decoration-none text-primary">View save item <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Fastlane Status Card -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3 text-primary">
                                <i class="bi bi-lightning-charge fs-2"></i>
                            </div>
                            <h5 class="card-title mb-2">Fastlane statud</h5>
                            <div class="mb-1 small text-muted">0 offer recived</div>
                            <a href="#" class="small text-decoration-none text-primary">View all offer <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
