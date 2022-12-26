@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h1>Birdboard</h1>

    <a href="/projects/create" class="btn btn-primary">New Project</a>
</div>

<div class="row d-flex">
    @forelse ($projects as $project)
    <div class="card me-3 mb-3 px-0" style="width: 18rem;height: 15rem;">
        <div class="card-body px-0">
            <div class="d-flex">
                <div class="border-start border-primary border-3" style="width: .4rem;"></div>
            <h3 class="card-title ps-2">
                <a href="{{ $project->path() }}" class="text-decoration-none ">{{ $project->title }}</a>
            </h3>
            </div>
            <p class="card-text text-justify p-2">{{ str_limit($project->description) }}</p>
        </div>
    </div>

    @empty
    <li>No projects yet!</li>
    @endforelse
</div>

@endsection