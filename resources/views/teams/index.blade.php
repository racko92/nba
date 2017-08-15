<html>
    <head>
        <title>NBA Website (original)</title>
    </head>
<body>
<ul>
    @foreach($teams as $team)
        <li><a href="/teams/{{ $team->id }}"> {{ $team->name }} </a></li>
    @endforeach
</ul>
</body>
</html>