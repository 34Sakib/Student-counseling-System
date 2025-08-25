@extends('user.layout.musterlayout')

@section('content')
<section class="py-4 py-md-5 studyabroad-section-bg">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left: Heading & Form -->
      <div class="col-12 col-lg-6 order-2 order-lg-1">
        <div class="mb-3 studyabroad-faq-header">
          <h2 class="fw-bold mb-3 mb-md-2 studyabroad-institutions-title">We can help you</h2>
          <div class="studyabroad-help-underline"></div>
        </div>
        <div class="text-secondary mb-4 studyabroad-help-desc">Enter your details and one of our expert counsellors will reach out to you so we can connect you to the right course, country, university – and even scholarships!</div>
        <div class="card shadow-sm p-3 p-md-4 studyabroad-help-card">
          <h3 class="fw-semibold mb-3 studyabroad-help-formtitle">Application Form</h3>
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
            <div class="form-check mt-4">
              <input class="form-check-input" type="checkbox" id="agree1">
              <label class="form-check-label small" for="agree1">I agree to IDP <a href="#" class="text-primary">Terms</a> and <a href="#" class="text-primary">privacy policy</a></label>
            </div>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" id="agree2">
              <label class="form-check-label small" for="agree2">Please contact me by phone, email or SMS to assist with my enquiry</label>
            </div>
            <div class="form-check mt-3 mb-4">
              <input class="form-check-input" type="checkbox" id="agree3">
              <label class="form-check-label small" for="agree3">I would like to receive updates and offers from IDP</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2 studyabroad-btn-blue">Enquire now &rarr;</button>
          </form>
        </div>
      </div>
      <!-- Right: Girl Image -->
      <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center order-1 order-lg-2 mb-4 mb-lg-0">
        <div class="studyabroad-help-girlbox">
          <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Student" class="img-fluid studyabroad-help-girlimg">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
