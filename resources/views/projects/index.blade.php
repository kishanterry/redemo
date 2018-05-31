@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Papers</span>
                    <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary ">Add a Paper</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse($projects as $project)
                        <div>
                            <h3>{{ $project->title }}</h3>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="{{ $project->paper_url }}" rel="nofollow" target="_blank">{{ $project->paper_url }}</a>
                                    &middot;
                                    <em>Demo &mdash; <a href="{{ $project->demo_url }}" target="_blank">{{ $project->demo_url }}</a></em>
                                </div>
                                <a href="{{ url('/projects/' . $project->id) }}" class="btn btn-success btn-sm">Edit</a>
                            </div>
                            @if($project->description)
                                <hr>
                                <p>{{ $project->description }}</p>
                            @endif
                        </div>
                    @empty
                        You don't have any projects yet.
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
