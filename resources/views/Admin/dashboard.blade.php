{{-- admin --}}

@extends('layouts.dashboard')

@section('content')
    <h5>SUPERADMIN DASHBOARD {{ Auth::user()->name }}</h5>
@endsection
