@extends('layouts.main')

@section('container')
    {{-- <div class="row justify-content-center">
        <div class="col-md-4">
            @if (@session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (@session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
                <main class="form-signin w-100 m-auto">
                    <img class="mb-4" src="img/login.jpg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="div invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autofocus>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="div invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-4">Not Registered? <a href="/register">Register now</a></small>
                </main>
        </div>
    </div> --}}
    <div class="signup-section pt-150 pb-150 pt-lg-120 pb-lg-90 pt-md-80 pb-md-50 pt-xs-50 pb-xs-20">
        <div class="container">
            @if (@session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (@session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="signup-form">
                        <div class="section-title text-center mb-50">
                            <div class="title">
                                <h2>Log in Your Account</h2>
                            </div>
                        </div>
                        <form action="/login" method="post">
                            @csrf
                            <div class="input-wrap mb-20">
                                <span><img src="/img//user/icon/profile.svg" alt="icon"></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Username/Email" value="{{ old('email') }}"
                                    autofocus required>
                                @error('email')
                                    <div class="div invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-wrap pass mb-20">
                                <span><img src="/img//user/icon/lock-bold.svg" alt="icon"></span>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" autofocus>
                                @error('password')
                                    <div class="div invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="submit-btn">
                                    <button class="signup-btn btn-1" type="submit">Login Now</button>
                                    <span class="divider">OR</span>
                                    <button class="signup-btn"><img class="mr-20" src="/img//user/icon/google.svg"
                                            alt="icon"> Login With
                                        Google</button>
                                </div>
                                <div class="redirect-section text-center">
                                    <small class="d-block text-center mt-4">Not Registered? <a href="/register" class="text-secondary">Register now</a></small>
                                    <h5 class="text-heading">Forgot password</h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
