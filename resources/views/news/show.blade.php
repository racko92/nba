@extends('layouts.master')

@section('content')

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $news->title }}</h2>
            <p>{{ $news->content }}</p>
            <p><i>Creted by: {{ $news->user->name }} <br> {{ $news->user->email }}</i></p>
        </div><!-- /.blog-post -->

        <ul>

            @foreach($news->teams as $team)
                <a href="/news/teams/{{$team->name}}"><li>{{ $team->name }}</li></a>
            @endforeach
        </ul>
@endsection