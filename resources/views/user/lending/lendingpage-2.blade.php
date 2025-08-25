@extends('user.layout.musterlayout')

@section('content')
<div class="container-fluid min-vh-100 bg-white px-0 onboarding-container">
    <div class="row w-100 m-0 d-flex align-items-center onboarding-row">
        <!-- Left: Content -->
        <div class="col-lg-7 d-flex flex-column justify-content-start align-items-start onboarding-content">

            <!-- Logo -->
            <div class="fw-bold fs-2 logo-text mb-5">Logo</div>

            <!-- Heading + Progress -->
            <div class="mb-5 onboarding-heading-box">
                <div class="fw-bold fs-1 mb-1 onboarding-heading">Let's get started</div>
                <div class="onboarding-underline"></div>
                <div class="text-secondary step-desc mb-4 onboarding-step-desc">Share your preferences so we can recommend courses for you.</div>
                <div class="lp2-progress-wrap">
                    <div class="lp2-progress-bar-bg">
                        <div class="lp2-progress-bar-fill"></div>
                    </div>
                    <span class="lp2-step-badge">2</span>
                </div>
            </div>

            <!-- Question Box -->
            <div class="bg-white rounded-4 shadow-sm p-4 onboarding-question-box">
                <div class="d-flex align-items-center mb-4">
                    <a href="{{ route('lending.onboarding') }}" class="onboarding-back-link">
                        &#8592;
                    </a>
                    <span class="fw-bold fs-5">What's your preferred Study level?</span>
                </div>

                <form action="{{ route('lending.onboarding3') }}" method="GET">
                    <div class="mb-4">
                        <select class="form-select select-input">
                            <option selected>Select study level</option>
                            <option>Bachelor</option>
                            <option>Master</option>
                            <option>PhD</option>
                            <option>Diploma</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 next-btn">Next</button>
                </form>
            </div>
        </div>

        <!-- Right: Image -->
        <div class="col-lg-5 d-flex align-items-start justify-content-center position-relative">
            <div class="position-relative d-flex align-items-center mt-5">
                <div class="img-bg-shape"></div>
                <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Student" class="student-img position-relative">
            </div>
            <button class="btn-close position-absolute onboarding-close-btn"></button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection