<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel-Model-Controller</title>
</head>

<body>
    <h1 class="container">Laravel-Model-Controller Test Exercise</h1>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>Title: <span>{{ $movie['title'] }}</span></h2>
                <div>Release Date: <span>{{ $movie['date'] }}</span></div>
                <p>Nationality: <span>{{ $movie['nationality'] }}</span></p>
                <h4>Average Vote: <span>{{ $movie['vote'] }}</span></h4>
            </div>
        @endforeach
    </div>
</body>

</html>
