<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('homeasset/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('homeasset/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('homeasset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('homeasset/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <main>
        <div class="container">
            <div class="mainBody">
                <!-- Logo -->
                <div class="logo w-100 d-flex">
                    <img src="{{ asset('homeasset/images/img/tanknew-logo.png') }}" alt="" class="mx-auto my-4">
                </div> 

                
                <!-- main Login Section -->
                <div class="row justify-content-center">
                    <div class=" col-sm-8">
                        <form method="POST" action="{{ route('register') }}" class="formInputs">
                            <!-- Main Text -->
                            <h1 class="auth-heading">Register Now</h1>
                            @csrf
                            <div class="inputs">
                                <label for="username" class="">Username</label>
                                <input
                                    id="username"
                                    type="text"
                                    class=" customInput form-contol @error('name') is-invalid @enderror" 
                                    name="name" 
                                    value="{{ old('name') }}"
                                    placeholder="Username"
                                />
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                            
                            <!--<div class="inputs">-->
                            <!--    <label for="phone" class="">Phone</label>-->
                            <!--    <input-->
                            <!--        id="phone"-->
                            <!--        type="number"-->
                            <!--        class=" customInput form-control"-->
                            <!--        placeholder="Phone"-->
                            <!--    />-->
                            <!--</div>-->
                            
                            <div class="inputs">
                                <label for="WithdrawalPassword" class="">Withdrawal Password</label>
                                <input
                                    id="WithdrawalPassword"
                                    type="password"
                                    class=" customInput form-contol"
                                    placeholder="Withdrawal Password"
                                    name="withdrawal_password" 
                                    required
                                />
                            </div>
                            <div class="inputs">
                                <label for="password" class="">Password</label>
                                <input
                                    id="password"
                                    type="password"
                                    class=" customInput form-contol @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                    placeholder="password"
                                />
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                            <div class="inputs">
                                <label for="ConfirmPassword" class="">Confirm Password</label>
                                <input
                                    id="ConfirmPassword"
                                    type="password"
                                    class=" customInput form-contol" name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password"
                                />
                            </div>
                            <div class="inputs" id="radioInput">
                                <label for="">Gender</label>
                                <div class="genders d-flex gap-2 ms-auto" >
                                    <div class="male">
                                        <input
                                        id="male"
                                        type="radio"
                                        value="male"
                                        name="gender"
                                        />
                                        <label for="Male" class="">Male</label>
                                    </div>
                                    <div class="female">
                                        <input
                                        id="Male"
                                        type="radio"
                                        value="female"
                                        name="gender"
                                        />
                                        <label for="Male" class="">Female</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="inputs">
                                <label for="ref_code" class="">Invite Code</label>
                                <input
                                    id="ref_code"
                                    type="text"
                                    name="ref_code"
                                    class=" customInput @error('ref_code') is-invalid @enderror"
                                    placeholder="invite Code"
                                    required
                                />
                                @error('ref_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            {{-- <div class="TandC d-flex gap-2">
                                <input
                                id="Male"
                                type="radio"
                                required
                                />
                                <label for="Male" class="">I agree with <a href="https://impactmidsouthreviews.com/terms" class="signup"> Terms & Policy </a></label>
                            </div> --}}
                            <button class="login" type="submit">
                                <i class="las la-arrow-circle-right" aria-hidden="true"></i>
                            </button>
                            <div class="links">
                                <a href="{{ route('login') }}" id="backToLogin">Already have an account? Login</a>
                            </div>
                        </form>
                    </div>
                </div>
                
               
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>