@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span>Create you project here</span>
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
                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p><strong>Details about your research:</strong></p>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Research Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Research Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paper_url" class="col-sm-2 col-form-label">Paper URL</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="paper_url" name="paper_url" placeholder="Paper URL">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paper_doi" class="col-sm-2 col-form-label">Paper DOI</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="paper_doi" name="paper_doi" placeholder="Paper DOI">
                            </div>
                        </div>
                        <hr>
                        <p><strong>Details about your research demo <span class="text-info">(Only web applications supported as of now)</span>:</strong></p>
                        <div class="form-group row">
                            <label for="demo_title" class="col-sm-2 col-form-label">Demo Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="demo_title" name="demo_title" placeholder="Demo Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="demo_files" class="col-sm-2 col-form-label">Files</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="demo_files" name="demo_files" placeholder="Files" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dockerfile" class="col-sm-2 col-form-label">Dockerfile</label>
                            <div class="col-sm-10">
                                <textarea name="dockerfile" id="dockerfile" cols="30" rows="10" class="form-control"></textarea>
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
