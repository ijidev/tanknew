@extends('layouts.home_layout')
  
@section('content')
    <!-- main Info -->
    <section class="mainInfo">
        <div class="container">


          <div class="text-center text-bold">
            @php
              $user = Auth::user();  
            @endphp
            {{-- <h3>My Referal Code: {{ $user->ref_id }}</h3>
            <h6>
              Tanknewmedia offers custom software development services that help innovative companies and 
              startups design and build digital products with AI, mobile, and web technologies.
            </h6> --}}

            <div class="p-2 mb-4 mt-4">
                        
                  {{-- <span class="input-group-text" id="my-addo">Member-ID</span>
                  <input class="form-control" type="text" id="memberId" disabled value="{{' '. $user->ref_id }}"  aria-describedby="my-addon"> --}}
                  {{-- <div class="input-group-append"> --}}
                    <h3 style="margin-top: 20%; border-radius:5px; padding:5px;" class="bg-light">
                      Membership ID: <span class="text-yelllow">{{ $user->ref_id }}</span>
                    </h3>
                      <button class="btn btn-info text-white" onclick="myFunction()"><i class="las la-clipboard" aria-hidden="true"></i> Copy Code</button>
                  {{-- </div> --}}
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
          </div>


        </div>
    </section>

@endsection

