<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1->0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>Laravel Model Controller: Movies</h1>
    <div class="cards-wrapper">
        @foreach ($movies as $movie)
        <div class="card">
            <h2>{{$movie->title}}</h2>
            <span>Titolo originale: {{$movie->original_title}}</span>
            <span>Paese di produzione: {{($movie->nationality == 'american')? 'Stati Uniti':'Stati Uniti/Regno Unito'}}</span>
            <span>Data d'uscita: {{$movie->date}}</span>
            <span>Voto: {{$movie->vote}}</span>
        </div>
        @endforeach
    </div>

</body>
</html>
