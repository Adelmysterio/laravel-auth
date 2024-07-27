@extends('layouts.admin')
@section('page-title')
    Adelmo's Projects
@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <article class="card w-50 p-0" style="width: 18rem;">
                <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <p class="card-text">{{ $project->content }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ID Number: {{ $project->id }}</li>
                    <li class="list-group-item">{{ $project->type }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Back to index</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </article>
        </div>
    </div>
@endsection
