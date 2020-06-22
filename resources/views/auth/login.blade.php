@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_responsive.css') }}">

<div class="contact_form">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 offset-lg-1" style="border: 1px solid grey; padding: 20px; border-radius: 25px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign In</div>

                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email or Phone</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="">
                            @error('email')
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-check-input ml-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="ml-4" for="remember">Remember Me</label>
                        </div>


                        <div class="contact_form_button">
                            <button type="submit" class="btn btn-info">Login</button>
                        </div>
                    </form>
                    <br>
                    <a href="#">I forgot my password</a>   <br> <br>
                    <a href="" class="btn btn-primary btn-block"><i class="fab fa-facebook-square"></i> Login with Facebook </a>
                    <a href="{{ url('/auth/redirect/google') }}" class="btn btn-danger btn-block"><i class="fab fa-google"></i> Login with Google </a>

                </div>
            </div>

            <div class="col-lg-5 offset-lg-1" style="border: 1px solid grey; padding: 20px; border-radius: 25px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign Up</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Your Full Name" required autocomplete="name">

                            @error('name')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Enter Your Phone" required="">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Re-Type Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="contact_form_button">
                            <button type="submit" class="btn btn-info">Sign Up</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <div class="panel"></div>
</div>

@endsection
