@extends('layouts.home_layout')
  
@section('content')
    <!-- main Info -->
    <section class="mainInfo">
        <div class="container">
          <div class="welcomeMessage mt-4">
              <div class="bell d-flex justify-content-center align-items-center">
                  <i class="las la-bell"></i>
              </div>
              <p class="mainMesssage">welcome to Tanknewmedia for any inquiries, please do not hesitate to contact Customer Care services</p>
          </div>

          {{-- <div class="video" style="width:-webkit-fill-available; padding:10px;">
            <video loop="loop" style="width:-webkit-fill-available;" src="{{ asset('homeasset/videos/homevideo.mp4') }}"autoplay="autoplay" playsinline></video>
          </div> --}}
          <video width="100%" height="240" loop autoplay muted>
            <source src="{{ asset('homeasset/videos/homevideo.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
          </video>

          <div class="text-center text-bold">
            <h3>Open and extensible</h3>
            <h6>
              Tanknewmedia offers custom software development services that help innovative companies and 
              startups design and build digital products with AI, mobile, and web technologies.
            </h6>
          </div>

            {{-- <div class="main d-flex">
                <div class="row content gap-1 pb-3 pb-md-5">
                  <div class="d-flex profile">
                        <img src="{{ asset('/homeasset/images/profile.png') }}" alt="" class="profilePic">
                        <div class="name mx-3">
                            <h4 class="mainName">Hi, {{ $user->name }}</h4>
                            <p class="welcome">Welcome Back</p>
                        </div>
                    </div>
                    <h2 class="col-8 fw-bolder">YOUR BUSINESS. <br> YOUR MESSAGE.</h2>
                    <p class="col-8 small">WE ARE A FULL SERVICE DESIGN & DIGITAL GROWTH AGENCY</p>
                </div>
                <img src="{{ asset('/homeasset/images/tower.png') }}" alt="" class="lady">
            </div> --}}

        </div>
    </section>

    <!-- informations -->
    {{-- <section class="infos">
        <div class="container">
            <div class="mainInfos">
                
              <div class="info">
                  <a href="{{ route('contact') }}" class="nav-link" >
                    <i class="las la-headphones-alt"></i>
                    <p class="small">Services</p>
                  </a>
                </div>

                <div class="info">
                  <a href="#" class="nav-link"  id="eventModalBtn">
                    <i class="las la-bolt"></i>
                    <p class="small">Activity</p>
                  </a>
                </div>
                <div class="info">
                  <a href="{{ route('withdraw.pas') }}" class="nav-link" >
                    <i class="las la-money-check-alt"></i>
                    <p class="small">Withdrawal</p>
                  </a>
                </div>
                <!--div class="info">
                  <a href="#" class="nav-link"  id="">
                    <i class="las la-money-check"></i>
                    <p class="small">Deposit</p>
                  </a>
                </div-->
                <div class="info">
                  <a href="#" class="nav-link"  id="openModalBtn">
                    <i class="las la-file-alt"></i>
                    <p class="small">T & C</p>
                  </a>
                </div>
                <div class="info">
                   <a href="#" class="nav-link"  id="certModalBtn">
                    <i class="las la-certificate"></i>
                    <p class="small">Certificate</p>
                   </a>
                </div>
                <div class="info">
                  <a href="#" class="nav-link"  id="faqModalBtn">
                    <i class="las la-question"></i>
                    <p class="small">FAQ</p>
                  </a>
                </div>
                <div class="info">
                  <a href="#" class="nav-link" id="aboutModalBtn">
                    <i class="las la-sms"></i>
                    <p class="small">About</p>
                  </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- levels -->
    <section class="levels">
        <div class="container tires">
            <div class="levelContain">
                <div class="levelHeading py-3 d-flex justify-content-between">
                    <h6 class="fw-bold">Vip Levels</h6>
                    <div class="more d-flex g-2">
                        
                        <h6 class="mx-2 align-self-center fw-bold"><a href="{{ route('membership') }}">View More<i class="las la-arrow-circle-right"></i></a></h6>
                        
                    </div>
                </div>

                <div class="mainLevels">
                   @foreach ($tiers as $item) 
                    
                    @if($item->id == $user->tier->id)
                        <div class="level" id="level1" style="background-image: linear-gradient(135deg, rgb(255, 152, 46) 0%, rgb(238, 21, 135) 44%, rgb(162, 48, 250) 100%);">
                            
                            <p>{{ $item->name }} <img src="{{ asset($item->icon) }}" width="25" alt="" class="crown"></p>
                            <ul>
                                @if($item->name == 'Normal')
                                    <li>{{ $item->name }} users are assigned general usage access to data collection</li>
                                    <li>Applicable to most data collection situations of light to medium level of usage involving the Products </li>
                                    <li>Profits of {{ $item->percent }}% per Product - {{ $item->daily_optimize }} products per set.</li>
                                    <li>No access to other premium features</li>
                                @else
                                   <li> {{ $item->name }} users are assigned general usage access to data collection</li>
                                    <li>Applicable to most data collection situations of light to medium level of usage involving the Products </li>
                                    <li>Profits of {{ $item->percent }}% per Product - {{ $item->daily_optimize }} products per set.</li>
                                    <li>Access to other premium features</li>
                                @endif
                            </ul>
                        </div>
                    @else
                    
                    <div class="level" id="level1">
                        
                        <p>{{ $item->name }} <img src="{{ asset($item->icon) }}" width="25" alt="" class="crown"> </p>
                        <ul>
                            @if (Auth::user()->tier->name == 'Normal')
                                <li>{{ $item->name }} users are assigned general usage access to data collection</li>
                                <li>Applicable to most data collection situations of light to medium level of usage involving the Products </li>
                                <li>Profits of {{ $item->percent }}% per Product - {{ $item->daily_optimize }} products per set.</li>
                                <li>No access to other premium features</li>
                            @else
                               <li> {{ $item->name }} users are assigned general usage access to data collection</li>
                                <li>Applicable to most data collection situations of light to medium level of usage involving the Products </li>
                                <li>Profits of {{ $item->percent }}% per Product - {{ $item->daily_optimize }} products per set.</li>
                                <li>Access to other premium features</li>
                            @endif
                        </ul>
                    </div>
                    
                    @endif
                  @endforeach  
                </div>
            </div>
        </div>

        <div class=" row ml-0 mr-0 p-4 justify-content-center">
          <div class="col-sm-8">
            <img
              src="{{ asset('homeasset/images/BG-7.png') }}"
              class="img-flui"
              alt="" style="width: 100%"
            />
          </div>

        </div>
        
        <div class="rights d-flex mb-5">
            <p class="mx-auto my-5 mb-4 small">2024 Tanknewmedia-data. All rights reserved.</p>
        </div>
        
    </section>
    {{-- @include('_pop') --}}
@endsection

