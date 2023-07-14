@extends('layouts.app_auth')
@section('title')
    Admin | Login
@endsection
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ route('login_create') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Clinic Admin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your login & password to login</p>
                                        @if (session('error'))
                                            <p class="text-center small text-danger">{{ session('error') }}</p>
                                        @endif
                                    </div>

                                    <form action="{{ route('login') }}" class="row g-3 needs-validation" novalidate
                                        method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="login" class="form-label">Login</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="login" class="form-control" id="login"
                                                    required>
                                                <div class="invalid-feedback">Please enter your login.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
