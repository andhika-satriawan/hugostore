@extends('layouts.auth')

@section('title')
    Login Admin
@endsection

@section('auth-content')
    <div class="login-wrapper">
        <div class="login-content">
            <div class="login-userset">
                <form method="POST" action="{{ route('admin.login.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="login-logo">
                        <img src="{{ asset('template/img/logo.png') }}" alt="img">
                    </div>
                    <div class="login-userheading">
                        <h3>Sign In</h3>
                        <h4>Please login to your account</h4>
                    </div>
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ $error }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                    <div class="form-login">
                        <label>Email</label>
                        <div class="form-addons">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <img src="{{ asset('template/img/icons/mail.svg') }}" alt="img">
                        </div>
                    </div>
                    <div class="form-login">
                        <label>Password</label>
                        <div class="pass-group">
                            <input type="password" name="password" class="pass-input" placeholder="Enter your password">
                            <span class="fas toggle-password fa-eye-slash"></span>
                        </div>
                    </div>
                    <div class="form-login">
                        <div class="alreadyuser">
                            <h4><a href="forgetpassword.html" class="hover-a">Forgot Password?</a></h4>
                        </div>
                    </div>
                    <div class="form-login">
                        <button type="submit" class="btn btn-login">Sign In</button>
                    </div>
                    <div class="signinform text-center">
                        <h4>Don't have an account? <a href="signup.html" class="hover-a">Sign Up</a></h4>
                    </div>
                </form>
            </div>
        </div>

        <div class="login-img">
            <img src="{{ asset('template/img/login.jpg') }}" alt="img">
        </div>
    </div>
@endsection


@push('add-script')
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
@endpush
