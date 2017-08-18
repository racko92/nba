@extends('layouts.master')

@section('content')
    @foreach($teams as $team)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/teams/{{ $team->id }}"> {{ $team->name }} </a></h2>
        </div><!-- /.blog-post -->
    @endforeach

<nav class="blog-pagination">
    <a class="btn btn-outline-{{ $teams->currentPage() == 1 ? 'secondary disabled' : 'primary' }}" href="{{ $teams->previousPageUrl() }}">Older</a>
    <a class="btn btn-outline-{{ $teams->hasMorePages() ? 'primary' : 'secondary disabled' }}" href="{{ $teams->nextPageUrl() }}">Newer</a>
    Page {{ $teams->currentPage() }} of {{ $teams->lastPage() }}
</nav>
    @endsection