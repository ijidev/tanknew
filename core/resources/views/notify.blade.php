@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @foreach ($notification as $notify)
                    <div class="card mt-3">
                        <div class="card-header">
                           <img src="{{ asset('frontassets/images/notify.png') }}" width="30" alt="notification"> 
                           <h5 class="card-title ">{{ $notify->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-dark">{{ $notify->massage }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection