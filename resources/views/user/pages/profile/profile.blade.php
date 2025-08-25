@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light min-vh-100 p-0">
    <!-- Hamburger button for mobile -->
    <button class="btn btn-outline-secondary d-lg-none m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#profileSidebarOffcanvas" aria-controls="profileSidebarOffcanvas">
        <i class="bi bi-list" style="font-size: 1.7rem;"></i>
    </button>
    <div class="d-flex">
        <!-- Sidebar for desktop, hidden on mobile -->
        <nav class="bg-white border-end vh-100 profile-sidebar d-none d-lg-block" style="width: 90px; min-width: 90px;">
            <ul class="nav flex-column align-items-center pt-4">
                <li class="nav-item mb-4">
                    <a class="nav-link dashboard-inactive text-center" href="{{ url('/dashboard') }}">
                        <span class="d-block mb-1"><i class="bi bi-house-door fs-4"></i></span>
                        <span class="small">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mb-4">
                    <a class="nav-link dashboard-active text-center" href="{{ route('profile.details') }}">
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
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="profileSidebarOffcanvas" aria-labelledby="profileSidebarOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="profileSidebarOffcanvasLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <ul class="nav flex-column align-items-center pt-4">
                    <li class="nav-item mb-4">
                        <a class="nav-link dashboard-inactive text-center" href="{{ url('/dashboard') }}">
                            <span class="d-block mb-1"><i class="bi bi-house-door fs-4"></i></span>
                            <span class="small">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-4">
                        <a class="nav-link dashboard-active text-center" href="{{ route('profile.details') }}">
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
        <div class="flex-grow-1 p-5 profile-main-content">
            <h3 class="fw-bold mb-4">Hi <span class="text-primary">Mr. X</span></h3>
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link{{ request('tab', 'details') == 'details' ? ' active' : '' }}" href="?tab=details">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request('tab') == 'courses' ? ' active' : '' }}" href="?tab=courses">Courses</a>
                </li>
            </ul>

            @if(request('tab', 'details') == 'courses')
            <!-- Courses Section -->
            <div class="d-flex gap-4 justify-content-start profile-courses-row">
                <!-- Course Card 1 -->
                    <div class="card shadow-sm profile-course-card" style="width: 330px; background: #fff;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <div class="fw-bold fs-6">MSc Financial Management</div>
                                    <div class="small text-muted">University of Tasmania (UTAS)</div>
                                </div>
                                <button class="btn btn-link p-0"><i class="bi bi-heart"></i></button>
                            </div>
                            <ul class="list-unstyled small mb-2">
                                <li><i class="bi bi-bar-chart"></i> THE World Ranking: 93</li>
                                <li><i class="bi bi-mortarboard"></i> Masters Degree (Taught)</li>
                                <li><i class="bi bi-geo-alt"></i> Birmingham, United Kingdom</li>
                                <li><i class="bi bi-calendar"></i> Next Intake: 22.09.2025</li>
                                <li><i class="bi bi-card-checklist"></i> Entry Score: IELTS 6.5</li>
                                <li><i class="bi bi-currency-pound"></i> GBP31779 (2024)</li>
                            </ul>
                            <button class="btn btn-outline-primary w-100">View details</button>
                        </div>
                    </div>
                    <!-- Course Card 2 -->
                    <div class="card shadow-sm profile-course-card" style="width: 330px; background: #fff;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <div class="fw-bold fs-6">MSc Financial Management</div>
                                    <div class="small text-muted">University of Tasmania (UTAS)</div>
                                </div>
                                <button class="btn btn-link p-0"><i class="bi bi-heart"></i></button>
                            </div>
                            <ul class="list-unstyled small mb-2">
                                <li><i class="bi bi-bar-chart"></i> THE World Ranking: 93</li>
                                <li><i class="bi bi-mortarboard"></i> Masters Degree (Taught)</li>
                                <li><i class="bi bi-geo-alt"></i> Birmingham, United Kingdom</li>
                                <li><i class="bi bi-calendar"></i> Next Intake: 22.09.2025</li>
                                <li><i class="bi bi-card-checklist"></i> Entry Score: IELTS 6.5</li>
                                <li><i class="bi bi-currency-pound"></i> GBP31779 (2024)</li>
                            </ul>
                            <button class="btn btn-outline-primary w-100">View details</button>
                        </div>
                    </div>
                </div>
            </div>

            @elseif(request('tab', 'details') == 'details')
            <!-- Details Section -->
            <div class="d-flex justify-content-center">
                <div class="card shadow-sm profile-details-card" style="min-width: 500px; max-width: 600px; width: 100%; background: #f8fafc;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 fw-bold">Details</h4>
                            <button class="btn btn-primary btn-sm" type="button">Edit</button>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">First name*</label>
                                <input type="text" class="form-control" value="Hasan Habib" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last name</label>
                                <input type="text" class="form-control" value="Hira" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="text" class="form-control" value="00/00/0000" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nationality</label>
                                <select class="form-select" disabled>
                                    <option selected>Bangladesh</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="example@gmail.com" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone no</label>
                                <input type="text" class="form-control" value="01234567890" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection