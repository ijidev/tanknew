
    
<body>
    <!-- <div class="toggle-btn">
        <button class="btn btn-primary" onclick="toggleSidebar()" id="toggleButton">☰</button>
    </div> -->

    <div class="sidebar" id="sidebar">
        <div class="toggle-btn-close">
            <button class="btn btn-danger" onclick="toggleSidebar()" id="toggleButton">X</button>
        </div>
        <div class="profile d-flex align-items-center mb-4">
            <img src="{{ asset('homeasset/images/img/user.png') }}" class="rounded-circle mr-3" width="50" alt="Profile Picture">
            <div class="text-light">
                <h5 class="mb-0">{{Auth::user()->name}} <img src="{{auth::user()->tier->icon}}" width="20" alt=""></h5>
                <small>Member ID: {{Auth::user()->ref_id}} </small>
            </div>
        </div>


        <div class="row align-items-center">

            <div class="col-5 text-white">
                <small class="text-light">Today's Profit</small>
                <h6 class="mb-0">${{auth::user()->balance}}</h6>
                
                <small class="text-light">Total Asset</small>
                <h6 class="mb-0">${{auth::user()->asset}}</h6>

                <small class="text-light">Frozen Asset</small>
                <h6 class="mb-0">${{auth::user()->frozen}}</h6>
                
            </div>

            <div class="col-7">
                <div class="gauge-container" id="gaugeContainer">
                    <div class="gauge" id="gauge">
                        <div class="gauge-content" id="gaugeContent">
                            <h2 id="percentage">0%</h2>
                            <p>Credit Score</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="menu row">

            <div class="col-6 mt-3">
                <a href="{{ route('ref') }}" class="btn btn-light text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/share.png') }}" width="20" alt=""> Member ID</a>
            </div>
            <div class="col-6 mt-3 text-left">
                <a href="#" id="eventModalBtn" class="btn btn-light  text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/event.png')}}" width="20" alt=""> Event</a>
            </div>
            <div class="col-6 mt-3">
                <a href="#" id="aboutModalBtn" class="btn btn-light text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/about.png')}}" width="20" alt=""> About Us</a>
            </div>
            <div class="col-6 mt-3">
                <a href="#" id="certModalBtn" class="btn btn-light text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/cert.png')}}" width="20" alt=""> Cert</a>
            </div>
            <div class="col-6 mt-3">
                <a href="#"  id="faqModalBtn" class="btn btn-light text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/faq.png')}}" width="20" alt=""> Faq</a>
            </div>
            <div class="col-6 mt-3">
                <a href="{{ route('membership') }}" class="btn btn-light text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/membership.png')}}" width="20" alt=""> Membership</a>
            </div>
            <div class="col-6 mt-3">
                <a href="#"  id="openModalBtn" class="btn btn-light text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/terms.png')}}" width="20" alt=""> Terms</a>
            </div>
            
        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <h5 class="mb-4 text-dark">Transactions</h5>
            </div>
            <div class="col-12">
                <a href="{{ route('getstarted') }}"class="btn btn-non text-left" style="width:100% ;"><img src="{{asset('homeasset/images/img/optimize.png')}}" width="20" alt="">
                    Start Optimizing
                    <span class="float-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
                </a>
                <hr>
            </div>

            <!-- <div class="divider"></div> -->

            <div class="col-12">
                <a href="{{ route('withdraw.pas') }}"class="btn btn-non text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/cashout.png')}}" width="20" alt="">
                    Cash Out
                    <span class="float-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
                </a>
                <hr>
            </div>

            <!-- <div class="divider"></div> -->

            <div class="col-12">
                <a href="{{ route('record') }}"class="btn btn-non text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/history.png')}}" width="20" alt="">
                    History
                    <span class="float-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
                </a>
                <hr>
            </div>
        </div>
        
        <div class="row mt-4 mb-4">
            <div class="col">
                <h5 class="mb-4 text-dark">Profile</h5>
            </div>
            <div class="col-12">
                <a href="{{ route('edit') }}"class="btn btn-non text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/profile.png')}}" width="20" alt="">
                    Edit Profle
                    <span class="float-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
                </a>
                <hr>
            </div>

            <!-- <div class="divider"></div> -->

            <div class="col-12">
                <a href="{{ route('info') }}"class="btn btn-non text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/wallet.png')}}" width="20" alt="">
                    Financial Information
                    <span class="float-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
                </a>
                <hr>
            </div>
        

            <!-- <div class="divider"></div> -->

        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <h5 class="mb-4 text-dark">Others</h5>
            </div>
            <div class="col-12">
                <a href="{{ route('contact') }}"class="btn btn-non text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/support.png')}}" width="20" alt="">
                    Contact Us
                    <span class="float-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
                </a>
                <hr>
            </div>

            <!-- <div class="divider"></div> -->

            <div class="col-12">
                <a href="{{ route('notify') }}"class="btn btn-non text-left" style="width:100% ;"><img src="{{ asset('homeasset/images/img/notice.png')}}" width="20" alt="">
                    Notification
                    <span class="float-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
                </a>
                <hr>
            </div>

            <!-- <div class="divider"></div> -->

                
            <div class="col-12">
               <div style="width:200px;" id="ytWidget"></div>
               <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&amp;pageLang=en&amp;widgetTheme=dark&amp;autoMode=false" type="text/javascript"></script>
    
            </div>
           
           
        </div>

        <div class="text-center">
            <a href="{{route('logou')}}" class="btn btn-non text-danger">Logout</a>
        </div>

    </div>


    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
            const toggleButton = document.getElementById('toggleButton');
            toggleButton.textContent = sidebar.classList.contains('active') ? 'X' : '☰';
        }

        // Simulating fetching data from a database
        function fetchCreditScore() {
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve({{Auth::user()->credit_score}}); // Replace with actual fetching logic
                }, 1000);
            });
        }

        function updateGauge(percentage) {
            const gaugeContainer = document.getElementById('gaugeContainer');
            const gaugeContent = document.getElementById('gaugeContent');
            const percentageText = document.getElementById('percentage');

            // Update percentage text
            percentageText.textContent = percentage + '%';

            // Default background is white
            let color = 'white';

            // Determine the active color based on percentage
            if (percentage <= 20) {
                color = 'red';
            } else if (percentage <= 50) {
                color = 'yellow';
            } else if (percentage <= 80) {
                color = 'lime';
            } else {
                color = 'green';
            }

            // Set the active color as conic gradient
            gaugeContainer.style.background = `conic-gradient(${color} 0% ${percentage}%, white ${percentage}% 100%)`;
        }

        // Fetch and update gauge
        fetchCreditScore().then((score) => {
            updateGauge(score);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
