<div id="certModal" class="modal">
    <div class="modal-content">
        <span class="close" id="certCloseBtn">&times;</span>
        <h2>Certificate</h2>
        <img src="{{ asset($set->letter) }}" style="max-width:100%;border:0" alt="certificate">
        <img src="{{ asset($set->cert) }}" style="max-width:100%;border:0" alt="certificate">
    </div>
</div>

{{-- terms model--}}
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        {{-- <h2>T & C</h2> --}}
        @if ($set != null)
            <p>{!! $set->term !!}</p>
        @endif
    </div>
</div>

{{-- fad model --}}
<div id="faqModal" class="modal">
    <div class="modal-content">
        <span class="close" id="faqCloseBtn">&times;</span>
        <h2>FAQ</h2>
        @foreach ($faqs as $faq)
            <div class="faq-card">
                <div class="faq-question">
                    <h5>{{ $faq->question }}</h5>
                </div>
                <div class="faq-answer">
                    {!! $faq->answer !!}
                </div>
            </div>
        @endforeach
    </div>
</div>

<div id="aboutModal" class="modal">
    <div class="modal-content">
        <span class="close" id="aboutCloseBtn">&times;</span>
        <h2>About Us</h2>
        <hr>
        @if ($set != null)
            <p>{!! $set->about !!}</p>
        @endif

    </div>
</div>

<div id="eventModal" class="modal">
    <div class="modal-content text-left">
        <span class="close" id="eventCloseBtn">&times;</span>
        <h2>Activity</h2>
        <hr>
        
            <img data-v-a75f7a08="" alt="" src="{{ asset('homeasset/images/img/event1.jpg') }}" style="max-width:100%;border:0"></strong></span></span></p>
            <img data-v-a75f7a08="" alt="" src="{{ asset('homeasset/images/img/event2.jpg') }}" style="max-width:100%;border:0"></strong></span></span></p>
            {{-- <img data-v-a75f7a08="" alt="" src="{{ asset('homeasset/images/pop.png') }}" style="max-width:100%;border:0"></strong></span></span></p> --}}
            
    </div>
</div>

