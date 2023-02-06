@extends('layouts.app')



@section('content')
    {{-- ciclo su argomento categoria --}}
    {{-- ciclo su projects quelli che corrispondono alla categoria --}}



    <section>
        <div class="projects-index container">
            <h2>All projects:</h2>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            {{$project->id}}
                            <img src="{{ asset('storage/' . $project->cover_img) }}" class="card-img-top" alt="{{$project->cover_img}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$project->title}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">{{$project->description}}</p>
                                <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                                <a href="{{$project->github_link}}" class="btn "><i class="fab fa-github"></i> Github</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($types as $type)
        <section>
            <div class="container">
                <h2>{{ $type->name }} Projects:</h2>
            </div>

        </section>
    @endforeach

    @foreach ($levels as $level)
        <section>
            <div class="container">
                <h2>{{ $level->name }} Projects:</h2>
            </div>

        </section>
    @endforeach


    @dump($levels)
    @dump($types)
    @dump($projects)
    <a href="{{ url('admin/projects/create') }}" class="btn btn-link">crea un nuovo progetto</a>
@endsection
