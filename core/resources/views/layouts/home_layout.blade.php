<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('homeasset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('homeasset/css/start.css') }}">
    <link rel="stylesheet" href="{{ asset('homeasset/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
    <link rel="stylesheet" href="{{ asset('frontassets/custom.js') }}">
      <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e20cacd31f2e1897b4d30423bb1a827aff521cc5';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
        
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
      integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        /* body {
            background: #003366; dark blue background
            color: white;
            overflow-x: hidden;
        } */
        
        .sidebar {
            width: 380px;
            background: #edf2ff;
            background-image: url({{ asset('homeasset/images/img/BG-sidebar.png')}});
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0 0;
            padding: 20px;
            border-radius: 10px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 100000;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        @media screen and (max-width: 500px) {
            .sidebar {
                width:100% !important;
            }
        }

        .sidebar.active {
            overflow: auto;
            transform: translateX(0);
        }
        .gauge-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 20px auto;
            background: white; /* default white background */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1); /* fade color edges */
        }
        .gauge {
            width: 135px;
            height: 135px;
            background: white; /* default white background */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1); /* fade color edges */
        }
        .gauge-content {
            text-align: center;
            color: black;
        }
        .toggle-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            cursor: pointer;
            z-index: 1000;
        }
        .toggle-btn-close {
            position: absolute;
            top: 20px;
            left: 290px;
            cursor: pointer;
            z-index: 10000;
        }
        .col-6 .btn{
            border-radius: 10px;
        }
    </style>
</head> 
    <body class="everyThing">
        
        <style>
            .loader-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 9999;
            }

            .loader {
                border: 4px solid #f3f3f3;
                border-top: 4px solid blue;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            #loader p {
                margin-top: 20px;
                margin-left: 10px;
                color: white;
                font-weight: bold;
            }

        </style>
        

        <div class="loader-wrapper" id="loader">
            <div class="loader"></div>
            <p> Loading...</p>
        </div>
               
        <nav>
            <div class="container">
                <div class="mainNav py-2">
                    {{-- <div class="toggle-btn"> --}}
                        <button class="btn text-white" onclick="toggleSidebar()" id="toggleButton">☰ <i class="fa fa-opencart" aria-hidden="true"></i></button>
                    {{-- </div> --}}

                    <a
                        href="{{ route('home') }}"
                        class="navbar-brand"
                        style="text-decoration: none; color: white"
                        >
                        <img src="{{ asset('/homeasset/images/img/logo.png') }}" width="50" alt="" class="logo" />
                    </a>
    
                    <!--a href="{{ route('logou') }}"><i class=""></i>Logout</a-->
                    <a href="{{ route('notify') }}">
                        <i class="las la-bell"></i>
                        @php
                            $notice = \App\Models\Notification::where('user_id', Auth::user()->id )->where('is_read', 0)->get();
                        @endphp
                        {{-- @dd($notice) --}}
                        @if ($notice->count() > 0)
                            <span class="badge bg-light text-black">{{ $notice->count() }} New!</span>
                        @else
                            <span class="badge bg-light text-black">0</span>
                        @endif
                    </a>
                </div>
            </div>
        </nav>
        
        <div class="page-header" style="margin-top:60px;">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">@yield('title')</h2>
                @if (session('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('success') }}
                    </div>   
                @elseif (session('error'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
        @php
            $set = \App\Models\Setting::get()->first();
            $faqs = \App\Models\Faq::get();

        @endphp
        @include('layouts.homesidebar')
        
         @yield('content')
         @include('_pop-up')
        <!-- bottom tab -->
        <div class="bottomTabs fixed-bottom">
            <div class="container">
                <div class="mainTabs">
                    <div class="home d-flex flex-column align-items-center" id="tab">
                        <a href="{{ route('home') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <img src="{{ asset('homeasset/images/img/home.png') }}" alt="" style="width: 20px;">
                            {{-- <p class="small">Home</p> --}}
                        </a>
                    </div>
                    {{-- <div class="starting" id="tab">
                        <a href="{{ route('getstarted') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <img src="{{ asset('homeasset/images/img/optimize.png') }}" alt="" style="width: 20px;">
                            <p class="small text-center">Starting</p>
                        </a>
                    </div> --}}

                    <div class="Records d-flex flex-column align-items-center" id="tab">
                        <a href="{{ route('contact') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <img src="{{ asset('homeasset/images/img/support.png') }}" alt="" style="width: 20px;">
                            <p class="small"></p>
                        </a>
                    </div>

                    <div class="Records d-flex flex-column align-items-center" id="tab">
                        <a href="{{ route('getstarted') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <img src="{{ asset('homeasset/images/img/optimize.png') }}" alt="" style="width: 20px;">
                            <p class="small"></p>
                        </a>
                    </div>

                    <div class="Records d-flex flex-column align-items-center" id="tab">
                        <a href="{{ route('record') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <img src="{{ asset('homeasset/images/img/history.png') }}" alt="" style="width: 20px;">
                            {{-- <p class="small">Records</p> --}}
                        </a>
                    </div>

                    <div class="Records d-flex flex-column align-items-center" id="tab">
                        <a href="{{ route('edit') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <img src="{{ asset('homeasset/images/img/profile.png') }}" alt="" style="width: 20px;">
                            {{-- <p class="small">Records</p> --}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
         
    </body>
    <!-- Custom JS File -->
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("popup");
            const closeModal = document.getElementById("popCloseBtn");
        
            modal.style.display = "block";
        
            closeModal.addEventListener("click", function() {
            modal.style.display = "none";
            });
        });
        
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.getElementById("loader");
            const content = document.querySelector("body");

            // Simulate loading time (you can replace this with actual loading code)
            setTimeout(function() {
                loader.style.display = "none";
                content.style.display = "block";
            }, 1000); // Change 2000 to the actual loading time in milliseconds
            });
    </script>
        <script src="{{ asset('frontassets/model.js') }}"></script>
        <script src="{{ asset('frontassets/custom.js') }}"></script>
       
</html>