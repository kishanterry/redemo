@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span>Edit paper: <strong>{{ $project->title }}</strong></span>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Research Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" value="{{ $project->title }}" name="title" placeholder="Research Title" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-sm-2 col-form-label">Author</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="author" value="{{ $project->author }}" name="author" placeholder="Author" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paper_url" class="col-sm-2 col-form-label">Paper URL/DOI</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="paper_url" value="{{ $project->paper_url }}" name="paper_url" placeholder="Paper URL/DOI" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="demo_url" class="col-sm-2 col-form-label">Demo URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="demo_url" value="{{ $project->demo_url }}" name="demo_url" placeholder="Demo URL" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description">{{ $project->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
