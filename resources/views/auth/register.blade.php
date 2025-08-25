<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8fbff; }
        .rounded-4 { border-radius: 1.5rem !important; }
        .register-row { height: 100%; min-height: 600px; display: flex !important; align-items: stretch !important; }
        .register-img-col { padding: 0 !important; display: flex; flex-direction: column; height: 100%; }
        .register-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            background: #f8fbff;
        }
        .register-form-col { background: #fff; }
        @media (max-width: 767.98px) {
            .register-row { min-height: 300px; height: auto; }
        }
    </style>
</head>
<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row shadow-lg rounded-4 overflow-hidden w-100 register-row" style="max-width: 950px; background: #f8fbff;">
        <!-- Left: Register Form -->
        <div class="col-md-6 p-5 register-form-col d-flex flex-column justify-content-center h-100">
            <h2 class="fw-bold text-center mb-2">Sing Up</h2>
            <p class="text-center mb-4">Welcome back! Please enter your details.</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">First name*</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{ old('first_name') }}" required autofocus>
                    @error('first_name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                    @error('last_name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="username">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your mobile No" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Create a password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required autocomplete="new-password">
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword" tabindex="-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.88 11.332 10.12 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133 13.133 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm0 1a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 position-relative">
                    <label for="password_confirmation" class="form-label">Confirm your password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter your Password" required autocomplete="new-password">
                        <button type="button" class="btn btn-outline-secondary" id="togglePasswordConfirm" tabindex="-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.88 11.332 10.12 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133 13.133 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm0 1a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"/>
                            </svg>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label small" for="terms">
                        I agree to IDP <a href="#">Terms</a> and <a href="#">privacy policy</a>
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="contact" >
                    <label class="form-check-label small" for="contact">
                        Please contact me by phone, email or SMS to assist with my enquiry
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="offers" >
                    <label class="form-check-label small" for="offers">
                        I would like to receive updates and offers from IDP
                    </label>
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary fw-bold" style="background: #1877f2; border: none;">Create an account</button>
                </div>
                <div class="text-center">
                    <span>Already have an account? </span>
                    <a href="{{ route('login') }}" style="color: #1877f2; text-decoration: none;">Sing In</a>
                </div>
            </form>
        </div>
        <!-- Right: Image -->
        <div class="col-md-6 d-none d-md-flex bg-light register-img-col h-100 align-items-center justify-content-center">
            <img src="https://i.postimg.cc/CL9qVjnj/image.png" alt="Student" class="register-img">
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const password = document.getElementById('password');
        if (password.type === 'password') {
            password.type = 'text';
        } else {
            password.type = 'password';
        }
    });
    document.getElementById('togglePasswordConfirm').addEventListener('click', function () {
        const password = document.getElementById('password_confirmation');
        if (password.type === 'password') {
            password.type = 'text';
        } else {
            password.type = 'password';
        }
    });
</script>
</body>
</html>
