@extends('layouts.app')

@php
    $title = 'MarikaKeller.dev HOME';
@endphp

@section('title', $title)

@section('content')


@php
    $json= '{"d":"m 479.68275,331.6274 -0.077,0.025 -0.258,0.155 -0.147,0.054 -0.134,0.027 -0.105,-0.011 -0.058,-0.091 0.006,-0.139 -0.024,-0.124 -0.02,-0.067 0.038,-0.181 0.086,-0.097 0.119,-0.08 0.188,0.029 0.398,0.116 0.083,0.109 10e-4,0.072 -0.073,0.119 z","title":"Andorra","id":"AD"}';

$decodedJson=json_decode($json,true);
@endphp
@dump($json)
{{-- @dump(json_decode($json)) --}}
@dump(json_decode($json,true))
@dump(json_decode($json,true))

{{-- @dump(json_decode($json,true)['d']) --}}
@dump($decodedJson['d'])

@php

        $newPath =[
            'title' => $decodedJson['title'],
            'code' => $decodedJson['id'],
            'path' => $decodedJson['d']
        ];
  /*       $newPath->save();  */
@endphp

@dump($newPath)


    <div class="container text-end">
        @guest
            <h1>non sei nessuno</h1>

        @endguest

        @auth
            <h3>sei</h3>
            @if (Auth::user()->is_superadmin == true)
                <h1>SUPERADMIN {{ Auth::user()->name }}</h1>
            @else
                <h1>LOGGAT0 {{ Auth::user()->name }}</h1>
            @endif
        @endauth

    </div>

    @include('profile.partials.jumbotron')

@endsection
