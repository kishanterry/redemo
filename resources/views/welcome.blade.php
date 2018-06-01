@extends('layouts.app')

@section('content')
<div style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover;">
    <div class="container py-5">
        <h1 class="text-center text-light font-weight-bold" style="font-size: 7.25rem;">ReDemo</h1>
        <p class="text-center text-light" style="font-size: 1.25rem;">A simple and easy platform for accessing research demos</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
