@extends('layouts.front')

@section('title')

@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                
               
                <div class="card-body ">
                    <div class="d-flex profile">
                        <img src="../homeasset/images/profile.png" alt="" class="profilePic">
                        <div class="name mx-3 mt-2">
                            <h4 class="mainName">Hi, {{ $user->name }}<img src="{{ asset($user->tier->icon) }}" width="30" class="img-fluid rounded-circle" alt="icon"></h4>
                            
                            <p class="welcome">Welcome Back</p>
                        </div>
                    </div>
                    
                    <div class="p-2 mb-4 mt-4">
                        
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="my-addon">Member-ID</span>
                            <input class="form-control" type="text" id="memberId" disabled value="{{' '. $user->ref_id }}"  aria-describedby="my-addon">
                            <div class="input-group-append">
                                <button class="input-group-text btn btn-info text-white" onclick="myFunction()"><i class="las la-clipboard" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        function myFunction() {
                          // Get the text field
                          var copyText = document.getElementById("memberId");
                        
                          // Select the text field
                          copyText.select();
                          copyText.setSelectionRange(0, 99999); // For mobile devices
                        
                           // Copy the text inside the text field
                          navigator.clipboard.writeText(copyText.value);
                        
                          // Alert the copied text
                          alert("Member ID Copied Successfully : " + copyText.value);
                        }
                    </script>
                    <style>
                        .tooltip {
                          position: relative;
                          display: inline-block;
                        }
                        
                        .tooltip .tooltiptext {
                          visibility: hidden;
                          width: 140px;
                          background-color: #555;
                          color: #fff;
                          text-align: center;
                          border-radius: 6px;
                          padding: 5px;
                          position: absolute;
                          z-index: 1;
                          bottom: 150%;
                          left: 50%;
                          margin-left: -75px;
                          opacity: 0;
                          transition: opacity 0.3s;
                        }
                        
                        .tooltip .tooltiptext::after {
                          content: "";
                          position: absolute;
                          top: 100%;
                          left: 50%;
                          margin-left: -5px;
                          border-width: 5px;
                          border-style: solid;
                          border-color: #555 transparent transparent transparent;
                        }
                        
                        .tooltip:hover .tooltiptext {
                          visibility: visible;
                          opacity: 1;
                        }
                        
                    </style>
                    
                    <div class="p-2 text-center">
                        <div class="range-wrap">
                            <div class="range-value text-dark profile-title">Credit Score:</div>
                            <div class="range-value" id="rangeV"></div>
                            {{-- <input id="range" type="range" min="200" max="800" value="200" step="1"> --}}
                            <input id="range"  type="range" value="{{ $user->credit_score }}" disabled  min="0" max="100">
                        </div>
    
                        <div class="row p-3">
                            <div class="col-6" style="border-right: solid 1px;">
                               <span> Total Profit </span>  <br>
                                {{ $user->balance }} Usdt
                            </div>
    
                            <!--div class="col-4 text-white" >
                                frozen balance <br>
                                {{ $user->frozen }} <br>
                                Usdt
                            </div-->
    
                            <div class="col-6" style="border-left: solid 1px;">
                                <span>Asset Value</span> <br>
                                {{ $user->asset }} Usdt
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="card mt-3 mb-4">
                <div class="card-header">
                    <h5 class="card-title">My Details</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('membership') }}" class="btn">Membership</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('edit') }}" class="btn">Edit Profile</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('info') }}" class="btn">Payment Information</a>
                        </li>
                    </ul>
                </div>
                
                <div class="card-header">
                    <h5 class="card-title">Finance</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('withdraw.pas') }}" class="btn">Withdrawal & History</a>
                        </li>
                        {{-- <li class="list-group-item">
                            <a href="{{ route('history') }}" class="btn">History</a>
                        </li> --}}
                    </ul>
                </div>

                <div class="card-header">
                    <h5 class="card-title">About Us</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('contact') }}" class="btn">Contact us</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('notify') }}" class="btn">Notification</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center">
              <a href="{{ route('logou') }}" style="width:90%; margin-bottom:120px; " class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
@endsection

 