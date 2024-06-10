 
@extends('layouts.home_layout')
@section('content')
    <div class="main bg-light mt-4" style="background-image: linear-gradient(45deg, rgb(176, 219, 67) 0%, rgb(77, 196, 246) 100%);">
        <div class="container mt-4" >
            <div class="row justify-content-center">

                <div class="col-sm-7">
                    <div class="card mt-4">
                        <video width="100%" height="240" loop autoplay muted>
                            <source src="{{ asset('homeasset/videos/homevideo.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>

                    </div>
                </div>

                
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
                <div class="col-sm-7">
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="welcome text-whit">
                                <div class="profile d-flex justify-content-between p-2">
                                    <div class="name d-flex align-items-center align-items-middle">
                                        {{-- <img src="{{ asset('/homeasset/images/profile.png') }}" alt="" width="50" class="profilePic"> --}}
                                        <h4 class="fw-bold ms-2"> {{ $user->name }}</h4>
                                    </div>
                                    <h5 class="">{{$user->tier->name}} <img src="{{$user->tier->icon}}" width="50" alt=""> </h5>
                                </div>
                            </div>

                            <div class="top d-fle justify-content-between">
                                <h3>Optimization(<span class="num" tet="dark"><span>{{ $user->optimized }}</span>/{{ $user->tier->daily_optimize }}</span>) </h3>
                            </div>
                            <input type="range" style="width: -webkit-fill-available;" name="" disabled max="{{$user->tier->daily_optimize}}" value="{{ $user->optimized }}" id="">
                                
                            <div class="text-center mt-4 mb-4">
                                <a href="{{ route('start') }}" class="btn bg-info text-white" style="width:100px; height:100px; padding-top:40px; border-radius:50%;">Start</a>
                            </div>
                                
                            <div class="submission my-2 text-dark" >
                                <div class="digits row justify-content-between text-white my-2">
                                    <div class="wallet money d-fle text-center rounded py-3" style="border-right: solid 1px white; width:49.5%;" >
                                        <!--<i class="las la-wallet icon"></i>-->
                                    <img src="{{ asset('homeasset/images/wallet.png') }}" height="40" width="40">
                                    <p class="small pt-2 pb-1 mb-0">Asset Ballance </p>
                                    <h6 class=" fw-bolder">${{ $user->asset }}</h6>
                                    <div class="small secondary">Daily profit will be added to Asset</div>
                                     
                                    </div>
                                    
                                    <div class="wallet money d-fle rounded text-center py-3" style="border-right: solid 1px white; width:49.5%;" >
                                        <!--<i class="las la-wallet icon"></i>-->
                                        <img src="{{ asset('homeasset/images/img/profit.png') }}" height="40" width="40">
                                        <p class="small fw-bolder pt-2 pb-1 mb-0">Today's Profit</p>
                                        <h6 class=" fw-bolder">${{ $user->balance }}</h6>
                                        <p class="small secondary">Today's Profit to be reset daily</p>
                                        
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

                        </div>

                    </div>
                </div>
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
                <p class="mx-auto mb-5 small">2024 Tanknewmedia-data. All rights reserved.</p>
            </div>
        </div>
    </div>
@endsection
