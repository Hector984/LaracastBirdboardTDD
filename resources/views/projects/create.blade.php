@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <h1>Create a project</h1>

    <form action="/projects" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>

            <div>
                <input type="text" class="form-control" name="title" placeholder="title">
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="label-form">Description</label>

            <div>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Create Project</button>
        <a class="btn btn-secondary" href="/projects">Cancel</a>
    </form>

</div>
@endsection