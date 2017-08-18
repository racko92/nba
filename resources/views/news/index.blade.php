@extends('layouts.master')

@section('content')

    @foreach($news as $value)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/news/{{ $value->id }}"> {{ $value->title }} </a></h2>
            <p>{{ $value->content }}</p>
            <p><i>Creted by: {{ $value->user->name }} <br> {{ $value->user->email }}</i></p>


        </div><!-- /.blog-post -->
    @endforeach
    <nav class="blog-pagination">
        <a class="btn btn-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}" href="{{ $news->previousPageUrl() }}">Older</a>
        <a class="btn btn-{{ $news->hasMorePages() ? 'primary' : 'secondary disabled' }}" href="{{ $news->nextPageUrl() }}">Newer</a>
        Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
    </nav>
@endsection