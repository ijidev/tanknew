@extends('layouts.header')
@section('content')
        <div class="container">
            <div class="mainBody">
                <!-- Logo -->
                <div class="logo w-100 d-flex">
                    <img src="{{ asset('homeasset/images/img/tanknew-logo.png') }}" alt="" class="mx-auto my-4">
                </div>

                
                <!-- main Login Section -->
                <div class="mainLog row justify-content-center">
                    <div class=" col-sm-8">
                        
                        
                        <form method="POST" action="{{ route('login') }}" class="formInputs">
                            <!-- Main Text -->
                            <h1 class="auth-heading pt-3">Login Now</h1>
                            @csrf
                            <div class="login">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                <div class="inputs">
                                        <label for="username" class="">Username</label>
                                        <input
                                            id="username"
                                            name="username"
                                            type="text"
                                            class=" customInput form-contol @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}"
                                            placeholder="Username"
                                        />
                                </div>
                                
                                <div>
                                    <div class="inputs">
                                        <label for="password" class="">Password</label>
                                        <input
                                            id="password"
                                            name="password"
                                            type="password"
                                            class=" customInput form-contrl @error('password') is-invalid @enderror"
                                            required autocomplete="current-password"
                                            placeholder="password"
                                        />
                                            @error('password')
                                               <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    
                                </div>
                                <button class="login" type="submit">
                                   <i class="las la-arrow-circle-right" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="links">
                    <!-- forgot password link -->
                    <!--<a href="" id="forgotPassword">Forgot Password?</a>-->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <!-- Register -->
                    <small>Do not have an account? </small>
                    <a href="{{ route('register') }}" class="signup text-orange">Signup</a>
                </div>
               
            </div>
            <!-- rights -->
            <p class="rights"><i></i>2024 Site Tanknewmedia-data. All rights reserved</p>
        </div>
  @endsection