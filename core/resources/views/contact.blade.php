@extends('layouts.front')

@section('content')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
//   var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
//   (function(){
//   var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
//   s1.async=true;
//   s1.src='https://embed.tawk.to/6524009b6fcfe87d54b8040f/1hcaa4orh';
//   s1.charset='UTF-8';
//   s1.setAttribute('crossorigin','*');
//   s0.parentNode.insertBefore(s1,s0);
//   })();
</script>
<!--End of Tawk.to Script-->


<div class="card">
  <div class="card-body text-center">
      <div class="text-center mb-4 pb-4">
        <img src="{{ asset('frontassets/images/contact.jpeg') }}" height="200" style="width:200px; border-radius:50%;" alt="">
      </div>
      <h4 class="card-title">Contact Us</h4>
      <p class="card-text">Operation Hour: {{ $set->active_hour . ' to '. $set->close_hour .' daily' }}</p>
      {{-- <br> --}}
      <strong>Support@Tanknewmedia-data.com</strong> <br>
      {{-- @dd($set->tg) --}}
       <a href="{{'https://api.whatsapp.com/send?phone='. $set->chat }}" style="width:90%;" class="btn btn-info m-2">Online Support #1</a> <br>
       <a href="{{ $set->tg }}" class="btn btn-info m-2" style="width:90%;">Online Support #2</a> <br>
       <a href="#" disabled class="btn btn-info m-2" style="width:90%;">Online Support #3 (Busy)</a>
      
    </div>
   </div>
@endsection