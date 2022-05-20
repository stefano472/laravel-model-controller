<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="https://boolean.careers/favicon/favicon.ico">
    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel Model/Controller</title>
</head>
<body>
    <div class="container">
        <h1>Laravel Model Controller DataBase Access</h1>
        <div class="card-container">
            @foreach ($movies as $movie)
                @include('partials.card', $movie)
            @endforeach
        </div>
    </div>
</body>
</html>