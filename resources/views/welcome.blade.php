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

            <br>
            <h3 class="text-center">Sample Projects</h3>

            <div class="list-group">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h3>
                                Hello World!
                                <span class="small text-muted font-italic">by John Doe</span>
                            </h3>
                            <a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>
                            &middot;
                            <em>DOI &mdash; 11.1111/1.111111</em>
                        </div>
                        <div>
                            <a href="http://hello-world.thesis.gotamey.com" rel="nofollow" target="_blank" class="btn btn-secondary btn-sm">Launch Demo</a>
                        </div>
                    </div>
            </div>

            <hr style="margin: 3rem auto">

            <h3>Live Projects</h3>
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
