@extends('layouts.app')

@section('content')
    <h1>{{ $project->title }}</h1>
    <div>{{ $project->description }}</div>

    <a class="btn btn-secondary" href="/projects">Back</a>
@endsection