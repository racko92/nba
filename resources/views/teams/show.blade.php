@extends('layouts.master')

@section('content')
        <div class="blog-post">
            <h1>Team name: {{ $team->name }}</h1>
            <h2>Team email: {{ $team->email }}</h2>
            <h2>Team adress: {{ $team->address }}</h2>
            <h2>Team city: {{ $team->city }}</h2>
            <h3><i>Players in team:</i>
                @foreach ($team->players as $player)
                    <h4><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></h4>
                @endforeach
            </h3>
            <hr>
            <h2>Comments: </h2>
            @foreach ($team->comments as $comment)
                <li>"{{ $comment->content }}"</li>
                By : {{ $comment->user->name }}
            @endforeach
        </div>
        <!-- /.blog-post -->
        <form method="POST" action="/teams/{{ $team->id }}/comment">
            {{ csrf_field() }}
            <textarea type="text" id="content" name="content" class="form-control"></textarea><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Leave a comment</button>
        </form>
        @if (count($errors->all()) > 0)

            @foreach($errors->all() as $error)
                <div class="form-group">
                    <div class="alert alert-danger">
                        <li>{{ $error }}</li>
                    </div>
                </div>
            @endforeach

        @endif
@endsection