@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="alert alert-secondary">
                <p>
                    Docker containerization solution for research projects implemented in such a way that scientic simulations and demonstrations can be easily available to future researchers and reliably reproduced.
                </p>
            </div>

            <div class="list-group">
                @forelse($projects as $project)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h3>
                                {{ $project->title }}
                                <span class="small text-muted font-italic">by {{ $project->author->name }}</span>
                            </h3>
                            <a href="{{ $project->paper_url }}" rel="nofollow" target="_blank">{{ $project->paper_url }}</a>
                            &middot;
                            <em>DOI &mdash; {{ $project->paper_doi }}</em>
                        </div>
                        <div>
                            <a href="#" class="btn btn-secondary btn-sm">Start Demo</a>
                        </div>
                    </div>
                @empty
                    <div class="list-group-item">
                        Nobody has registered/setup any projects yet.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
