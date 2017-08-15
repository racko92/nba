<html>
<head>
    <title>

    </title>
</head>
<body>
    <h1>Full Name: {{ $player->first_name }} {{ $player->last_name }}</h1>
    <h2>Email: {{ $player->email }} </h2>
    <h2>Team: <a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></h2>
</body>
</html>