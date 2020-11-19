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

    <h4>Formulaire</h4>
    <form action="/creation" method="post">
        @csrf
        <p>Le nom de l'auteur</p>
        <input type="text" name="nom">
        <p>Le texte de l'auteur</p>
        <input type="text" name="nom">
        <p>La note de l'auteur</p>
        <input type="int" name="nom">
        <hr>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
    
    <script src="{{asset('js/app.css')}}"></script>

</body>
</html>