<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>Laravel Movies</h1>
        <div class="movies">
            @foreach ($movies as $movie)
                <div class="movie">
                    <ul>
                        <li>Titolo: {{$movie['title']}}</li>
                        <li>Titolo originale: {{$movie['original_title']}}</li>
                        <li>Nazione {{$movie['nationality']}}</li>
                        <li>Anno Produzione {{$movie['date']}}</li>
                        <li>Voto {{$movie['vote']}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
        
    </body>
</html>
