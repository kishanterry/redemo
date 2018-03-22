@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Projects</span>
                    <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary ">Add a Project</a>
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
                            <a href="{{ $project->paper_url }}" rel="nofollow" target="_blank">{{ $project->paper_url }}</a>
                            &middot;
                            <em>DOI &mdash; {{ $project->paper_doi }}</em>
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
