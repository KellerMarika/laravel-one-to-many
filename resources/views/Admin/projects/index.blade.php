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
                        <div class="card overflow-hidden shadow">
                            <div
                                class="card-id position-absolute rounded-circle d-flex justify-content-center align-items-center fs-3 fw-bold m-1 end-0 top-0 me-2">
                                {{ $project->id }}</div>

                            <img src="{{ asset('storage/' . $project->cover_img) }}" class="card-img-top"
                                alt="{{ $project->cover_img }}">
                            <div class="card-body ">

                                <div class="project-info">

                                    <div class="d-flex shadow-sm">
                                        <h2 class="card-title flex-fill text-uppercase">{{ $project->title }}</h2>
                                        <small class="fw-bold text-end">
                                            <span class="type">{{ $project->type->name }}</span><br>
                                            <span class="level">{{ $project->level->name }}</span>
                                        </small>

                                    </div>


                                    <p class="card-text pt-3">{{ $project->description }}<small
                                            class="d-block text-end p-1 border-top">last update:
                                            {{ $project->updated_at }}</small></p>


                                    <a href="#" class="btn mr-2"><i class="fas fa-link"></i> leave Comment!</a>
                                    <a href="{{ $project->github_link }}" class="btn "><i class="fab fa-github"></i>
                                        Github</a>
                                </div>

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
