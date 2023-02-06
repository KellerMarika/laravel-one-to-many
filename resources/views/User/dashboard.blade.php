{{-- guet --}}

@extends('layouts.dashboard')

@section('content')
    <h5>USER DASHBOARD {{ Auth::user()->name }}</h5>
@endsection
