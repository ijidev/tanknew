@extends('layouts.home_layout')
  
@section('content')
    <!-- main Info -->
    <section class="mainInfo">
        <div class="container">


          <div class="text-center text-bold">
            @php
              $user = Auth::user();  
            @endphp
           

            <div class="p-2 mb-4 mt-4">
                        
           
                    <h3 style="margin-top: 20%; border-radius:5px; padding:5px;" class="bg-light">
                      <p id="userRefId">Your User Ref ID: <span class="text-yellow" id="refIdText">{{$user->ref_id}}</span></p>
                      <!-- Button to trigger the copy function -->
                      {{-- <button onclick="copyRefId()">Copy User Ref ID</button> --}}
                    </h3>
                      <button class="btn btn-info text-white" onclick="copyRefId()"><i class="las la-clipboard" aria-hidden="true"></i> Copy Code</button>
                  {{-- </div> --}}
              </div>
          </div>
          
          <script>
            function copyRefId() {
                // Select the text to copy
                var refIdText = document.getElementById("refIdText");
                var range = document.createRange();
                range.selectNode(refIdText);
                window.getSelection().removeAllRanges(); // Clear previous selections
                window.getSelection().addRange(range);
    
                // Execute the copy command
                try {
                    document.execCommand("copy");
                    alert("User Ref ID copied to clipboard: " + refIdText.textContent);
                } catch (error) {
                    console.error("Copy failed: ", error);
                }
    
                // Clear the selection
                window.getSelection().removeAllRanges();
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

