@extends('layouts.front')

@section('title')

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class=" pt-2 col-md-7">
            <div class="card">
                <div class="card-header text-white">
                    <h5>
                        Membership Plans
                    </h5> <hr>
                    <p>
                        Hello '{{ $user->name }}' contact support to upgrade or downgrade your membership plan 
                    </p>
                </div>
            </div>
            @foreach ($tiers as $item)
                @if ($user->tier == $item)
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="row">

                            <h4 class="card-title col-7">
                                {{ $item->name}}
                                <img src="{{ asset($item->icon) }}" width="30" class="img-fluid rounded-circle" alt="icon">
                                <span class="badge bg-primary">Current Tire</span>
                            </h4>
                            <h5 class="col-5">
                                {{ $item->price . 'USDT'}} <br>

                            </h5>

                        </div>
                    </div>
                    
                    <div class="card-body">
                        <ul class="card-text">
                            @if ($item->name == 'normal')
                                {{ $item->name }} users are assigned general usage access to data collection
                                <li>Applicable to most data collection situations of light to medium level of usage involving the products </li>
                                <li>Profits of {{ $item->percent }}% per product - {{ $item->daily_optimize }} products per set.</li>
                                <li>No Access to other premium features</li>
                            @else
                                {{ $item->name }} users are assigned general usage access to data collection
                                <li>Applicable to most data collection situations of light to medium level of usage involving the products </li>
                                <li>Profits of {{ $item->percent }}% per product - {{ $item->daily_optimize }} products per set.</li>
                                <li>Access to other premium features</li>
                            @endif
                        </ul>
                        <div class=" text-center">
                            {{-- <a href="{{ route('deposit',$item->id) }}" class="btn btn-primary" disabled>Select plan</a> --}}
                        </div>
                    </div>
                </div>
                @else
                    <div class="card mt-3">
                        <div class="card-header">
                            <div class="row">

                                <h4 class="card-title col-sm-8">
                                    {{ $item->name}}
                                    <img src="{{ asset($item->icon) }}" width="30" class="img-fluid rounded-circle" alt="icon">
                                    
                                </h4>

                                <h5 class="col-sm-4">
                                    {{  $item->price . 'USDT' }}

                                </h5>

                            </div>
                        </div>
                        
                        <div class="card-body">
                            <ul class="card-text">
                                @if ($item->name == 'Normal')
                                    {{ $item->name }} users are assigned general usage access to data collection
                                    <li>Applicable to most data collection situations of light to medium level of usage involving the products </li>
                                    <li>Profits of {{ $item->percent }}% per product - {{ $item->daily_optimize }} products per set.</li>
                                    <li>No Access to other premium features</li>
                                @else
                                    {{ $item->name }} users are assigned general usage access to data collection
                                    <li>Applicable to most data collection situations of light to medium level of usage involving the products </li>
                                    <li>Profits of {{ $item->percent }}% per product - {{ $item->daily_optimize }} products per set.</li>
                                    <li>Access to other premium features</li>
                                @endif
                            </ul>
                            <div class=" text-center">
                                <!-- a href="{{ route('deposit',$item->id) }}" class="btn btn-primary">Select plan</a -->
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            </div>
            
            
        </div>
    </div>
    
    
</div>

@endsection