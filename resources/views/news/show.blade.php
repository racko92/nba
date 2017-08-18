@extends('layouts.master')

@section('content')

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/news/{{ $news->id }}"> {{ $news->title }} </a></h2>
            <p>{{ $news->content }}</p>
            <p><i>Creted by: {{ $news->user->name }} <br> {{ $news->user->email }}</i></p>
        </div><!-- /.blog-post -->

@endsection