<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8fbff; }
        .rounded-4 { border-radius: 1.5rem !important; }
        .container.login-container {
            min-height: 100vh;
            height: 100vh;
        }
        .login-row {
            height: 100%;
            display: flex !important;
            align-items: stretch !important;
        }
        .login-img-col {
            padding: 0 !important;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .login-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        @media (max-width: 767.98px) {
            .login-row { height: auto; min-height: 300px; }
        }
    </style>
</head>
<body>
<div class="container login-container d-flex align-items-center justify-content-center h-100">
    <div class="row shadow-lg rounded-4 overflow-hidden w-100 login-row align-items-stretch h-100" style="max-width: 900px; background: #f8fbff;">
        <!-- Left: Login Form -->
        <div class="col-md-6 p-5 bg-white d-flex flex-column justify-content-center h-100">
            <h2 class="fw-bold text-center mb-2">Sing In</h2>
            <p class="text-center mb-4">Welcome back! Please enter your details.</p>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required autocomplete="current-password">
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
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div></div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none small" style="color: #1877f2;">Forgot Password?</a>
                    @endif
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary fw-bold" style="background: #1877f2; border: none;">Sing In</button>
                </div>
                <div class="text-center">
                    <span>Don't have any account? </span>
                    <a href="{{ route('register') }}" style="color: #1877f2; text-decoration: none;">Sing UP</a>
                </div>
            </form>
        </div>
        <!-- Right: Image -->
        <div class="col-md-6 d-none d-md-flex bg-light login-img-col h-100 align-items-stretch">
            <img src="https://i.postimg.cc/DyX9xTr7/image.png" alt="Students" class="login-img h-100">
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
</script>
</body>
</html>
