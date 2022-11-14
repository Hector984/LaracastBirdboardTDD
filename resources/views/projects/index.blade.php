@extends('layouts.app')

@section('content')
    @forelse ($projects as $project)
    <li>
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </li>
    @empty
    <li>No projects yet!</li>
    @endforelse
@endsection