{{-- guet --}}

@extends('layouts.dashboard')

@section('content')
    <div class="dashboard-container d-flex">
    
            @include('profile.partials.dashboard.aside')
     


        @include('profile.partials.dashboard.main')
    </div>
@endsection
