<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('component.header')

    <h1 class="text-center">Les Auteurs</h1>

    @foreach ($datas as $item)

        <hr>
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"> {{$item->nom}}</div>
            <div class="card-body">
              <p class="card-text">{{$item->texte}}</p>
              <h5>La note de l'auteur est de {{$item->note}}/5</h5>
            </div>
          </div>

    @endforeach
    

    <script src="{{asset('js/app.css')}}"></script>
</body>
</html>