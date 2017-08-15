@extends('layouts.master')

@section('content')
        <div class="blog-post">
            <h1>Team name: {{ $team->name }}</h1>
            <h2>Team email: {{ $team->email }}</h2>
            <h2>Team adress: {{ $team->address }}</h2>
            <h2>Team city: {{ $team->city }}</h2>
            <h3><i>Players in team:</i>
                @foreach ($team->players as $player)
                    <li><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></li>
                @endforeach
            </h3>
        </div><!-- /.blog-post -->
@endsection