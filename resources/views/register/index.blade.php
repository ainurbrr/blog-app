@extends('layouts.main')

@section('container')
    {{-- <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <img class="mb-4" src="img/login.jpg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal text-center">Registeration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{  $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-4">Already Registered? <a href="/login">Login</a></small>
            </main>
        </div>
    </div> --}}
    <div class="signup-section pt-150 pb-150 pt-lg-120 pb-lg-90 pt-md-80 pb-md-50 pt-xs-50 pb-xs-20">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="signup-form">
                        <div class="section-title text-center mb-50">
                            <div class="title">
                                <h2>Create Your Account</h2>
                            </div>
                        </div>
                        <form id="registerForm" action="/register" method="post">
                            @csrf
                            <div class="input-wrap mb-20">
                                <span><img src="/img/user/icon/profile.svg" alt="icon"></span>
                                <input input type="text" name="name"
                                    class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name" required value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-wrap mail mb-20">
                                <span><img src="/img/user/icon/profile.svg" alt="icon"></span>
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    placeholder="Username" required value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-wrap mail mb-20">
                                <span><img src="/img/user/icon/message-bold.svg" alt="icon"></span>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-wrap pass mb-20">
                                <span><img src="/img/user/icon/lock-bold.svg" alt="icon"></span>
                                <input type="password" name="password"
                                    class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-wrap pass mb-20">
                                <span><img src="/img/user/icon/lock-bold.svg" alt="icon"></span>
                                <input class="form-control rounded-bottom @error('confirm_password') is-invalid @enderror"
                                    type="password" name="confirm_password" id="confirm_password"
                                    placeholder="Confirm Password" required>
                                @error('confirm_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-check mb-20">
                                <input type="checkbox" id="terms">
                                <span>I have read and agree to the Terms & Conditions</span>
                                <div class="invalid-feedback" id="terms-error" style="display: none;">
                                    You must agree to the terms and conditions.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="submit-btn">
                                    <button class="signup-btn btn-1" type="submit">Submit Now</button>
                                    <span class="divider">OR</span>
                                    <button class="signup-btn"><img class="mr-20" src="/img/user/icon/google.svg"
                                            alt="icon"> Sign Up With
                                        Google</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function (event) {
            var termsCheckbox = document.getElementById('terms');
            var termsError = document.getElementById('terms-error');
    
            if (!termsCheckbox.checked) {
                event.preventDefault();
                termsError.style.display = 'block';
                termsCheckbox.focus();
            } else {
                termsError.style.display = 'none';
            }
        });
    </script>
@endsection
