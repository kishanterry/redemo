@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="alert alert-info">
                <p class="font-weight-bold text-center">
                    This is a prototype of a platform where you can easily find research papers and related scientific simulations and demonstrations (which are available as a web application) without you needing to undergo the sometimes highly technical installation steps.
                </p>
            </div>

<!--             <br>
            <h3 class="text-center">Sample Projects</h3>

            <div class="list-group">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h3>
                                Hello World!
                                <span class="small text-muted font-italic">by Amith Gotamey</span>
                            </h3>
                            <a href="https://www.overleaf.com/14965305pfbwqcxkjjwz" rel="nofollow" target="_blank">https://www.overleaf.com/14965305pfbwqcxkjjwz</a>
                        </div>
                        <div>
                            <a href="http://hello.thesis.gotamey.com" rel="nofollow" target="_blank" class="btn btn-secondary btn-sm">Run Demo</a>
                        </div>
                    </div>
            </div>

            <hr style="margin: 3rem auto"> -->

            <form action="{{ url('/') }}" class="d-flex flex-column justify-content-center align-items-center py-5">
                <input type="text" placeholder="Search for papers" class="w-50 form-control">
                <div class="w-50">
                    <small class="form-text text-muted">Please note that this search is non-functional as of now.</small>
                </div>
            </form>

            <h3>Papers and Demos</h3>
            <div class="list-group">
                @forelse($projects as $project)
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-1">
                                    <a href="{{ $project->paper_url }}" rel="nofollow" target="_blank">{{ $project->title }}</a>
                                </h4>

                                <small>
                                    Author &mdash; <strong>{{ $project->author }}</strong> &middot;
                                    Added &mdash; <strong>{{ $project->created_at->diffForHumans() }}</strong>
                                </small>
                            </div>
                            <div>
                                <a href="{{ $project->demo_url }}" rel="nofollow" target="_blank" class="btn btn-secondary btn-sm">Start Demo</a>
                            </div>
                        </div>
                        @if($project->description)
                            <hr>
                            <p>{{ $project->description }}</p>
                        @endif
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
