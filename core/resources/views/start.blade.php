 
@extends('layouts.home_layout')
@section('content')
    <div class="main bg-light mt-4">
        <div class="container mt-4">
            <div class="welcome text-whit">
                <div class="profile d-flex justify-content-between p-2">
                    <div class="name d-flex align-items-center align-items-middle">
                        {{-- <img src="{{ asset('/homeasset/images/profile.png') }}" alt="" width="50" class="profilePic"> --}}
                        <p class="fw-bold ms-2">Hi, {{ $user->name }}</p>
                        
                    </div>
                    {{-- <p class="small">welcome back</p> --}}
                </div>
            </div>
            <video width="100%" height="240" loop autoplay muted>
                <source src="{{ asset('homeasset/videos/homevideo.mp4') }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>

            
            <style>
                .sliding-text-container {
                    overflow: hidden;
                }
                
                .sliding-text {
                    white-space: nowrap;
                    animation: slide 15s linear infinite;
                }
                
                @keyframes slide {
                    0% {
                    transform: translateX(100%);
                    }
                    100% {
                    transform: translateX(-300%);
                    }
                }
            </style>

            <div class="top d-flex justify-content-between">
                <h6>Start Submission</h6>
                <p class="num" tet="dark"><span>{{ $user->optimized }}</span>/{{ $user->tier->daily_optimize }}
                    <input type="range" name="" disabled max="{{$user->tier->daily_optimize}}" value="{{ $user->optimized }}" id="">
                </p>
            </div>
                
            <div class="text-center mt-4 mb-4">
                <a href="{{ route('start') }}" class="btn " style="width:90%; border:solid 2px blue;">Start Now</a>
            </div>
                
            <div class="submission my-2 text-dark" >
                <div class="digits row justify-content-between text-white my-2">
                    <div class="wallet money d-flex rounded py-3" style="border-right: solid 1px white; width:49.5%;" >
                        <!--<i class="las la-wallet icon"></i>-->
                    <img src="{{ asset('homeasset/images/wallet.png') }}" height="40" width="40">
                        <div class="ms-5 left">
                            <div class="d-flex flex-column">
                                <h5 class="small fw-bolder">Wallet</h5>
                                <p class="small secondary">Asset Balance</p>
                            </div>
                            <div d-flex flex-column>
                                <span class="small fw-bolder">{{ $user->asset }}</span>
                                <p class="small fw-bold secondary">USDT</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="wallet money d-flex rounded py-3" style="border-right: solid 1px white; width:49.5%;" >
                        <!--<i class="las la-wallet icon"></i>-->
                    <img src="{{ asset('homeasset/images/usdt.png') }}" height="40" width="40">
                        <div class="ms-5 left">
                            <div class="d-flex flex-column justify-content-between">
                                <h5 class="small fw-bolder">Profit</h5>
                                <p class="small secondary">Accumulated Profit</p>
                            </div>
                            <div d-flex flex-column>
                                <span class="small fw-bolder">{{ $user->balance }}</span>
                                <p class="small fw-bold secondary">USDT</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <section class="infos">
                    <div class="container">
                        <div class="mainInfos">
                            @foreach($products as $product)
                                <div class="info">
                                    <img src="{{ $product->img }}" width="60" height="60" class="rounded">
                                    <p class="small">{{ $product->price.' usdt' }}</p>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </section> --}}
                
            </div>

            <div class="notes small p-3 rounded mt-5">
                <h6 class="fw-bold">Important Notes</h6>
                <ul>
                    <li>Operating Hours: 09:00 - 20:59</li>
                    <li>For any inquiries please contact Customer Service</li>
                </ul>
            </div>
        </div>

            <div class="rights d-flex">
                <p class="mx-auto mb-5 small">2023 ImpactMidsouthReviews. All rights reserved.</p>
            </div>
        </div>
    </div>
@endsection
