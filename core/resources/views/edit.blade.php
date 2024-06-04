@extends('layouts.front')

@section('content')

@php
  $set = \App\Models\Setting::get()->first();
@endphp
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">

        <div class="card">
            <div class="card-header">
                <h5>Edit Account Info</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store',$user->id) }}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Username</label>
                      <input type="text"
                        class="form-control" name="name" disabled id="" aria-describedby="helpId" value="{{ $user->name }}">
                        <small>username cant be changed contact support to update</small>
                    </div>

                    {{-- <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email"
                        class="form-control" name="email" id="" disabled aria-describedby="helpId" value="{{ $user->email }}">
                    </div> --}}
                    
                    <div class="mb-3">
                      <label for="email" class="form-label">Gender</label>
                      <input type="email"
                        class="form-control" name="text" id=""  aria-describedby="helpId" value="{{ $user->gender }}">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Login Password</label>
                      <input type="password"
                        class="form-control" name="password"  id="" aria-describedby="helpId" placeholder="change login password">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Withdrawal Password</label>
                      <input type="password"
                        class="form-control" name="fundpassword"  id="" aria-describedby="helpId" placeholder="Change withdrawal password">
                    </div>
                    <hr>
                    <br>
                    
                    {{-- <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password"
                        class="form-control" name="fundpassword" disabled id="" aria-describedby="helpId" placeholder="Change withdrawal password">
                    </div> --}}
                    <div class="text-center">
                      <button class="btn btn-success" style="width: 80%;" type="submit">Update</button>
                    </div>
                </form>
                
                {{-- <p class="card-title"> Contact support to update user information </p> <br>
                <a href="{{'https://api.whatsapp.com/send?phone='. $set->chat }}" class="btn btn-info">contact support</a> --}}
            </div>
        </div>

        </div>
    </div>
</div>

@endsection