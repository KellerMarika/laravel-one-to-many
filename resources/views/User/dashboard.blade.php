{{-- guet --}}

@extends('layouts.dashboard')

@section('content')
<div class="container text-dark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1>ADMIN DASHBOARD</h1>
                    {{ __('You are logged in!')}}  
                    <h5>{{ Auth::user()->name}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
