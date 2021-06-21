@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>
                    <div class="card-body">Login:       {{ Auth::user()->login }}</div>
                    <div class="card-body">Fullname:    {{ Auth::user()->fullname }}</div>
                    <div class="card-body">Birthday:    {{ Auth::user()->birthday }}</div>
                    <div class="card-body">Email:       {{ Auth::user()->email }}</div>
                    <div class="card-body">Address:     {{ Auth::user()->address }}</div>
                    <div class="card-body">City:        {{ Auth::user()->city }}</div>
                    <div class="card-body">State:       {{ Auth::user()->state }}</div>
                    <div class="card-body">Country:     {{ Auth::user()->country }}</div>
                </div>
            </div> 
        </div> 
    </div>
</div>                  
@endsection