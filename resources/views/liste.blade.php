<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/list.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container-table100">
    <h1 align=center style="color:white"> Liste des étudiants</h1><br>
   
    <table align=center border="5px">
    <div class="limiter">
        <br><a href="{{ route('ajout') }}" style="color:white">Ajouter un élève</a><br>
    <tr>
    <th> Code Apogée </th>
    <th> Nom </th>    
    <th> Prénom </th> 
    <th> Niveau </th>
    <th></th>

    </tr>
        @foreach ($info1 as $inf)
        <tr>
            <td> {{ $inf->id }}</td>
            <td> {{ $inf->nom }}</td>
            <td> {{ $inf->prenom }}</td>
            <td> {{ $inf->niveau }}</td>

            {{-- <td><a href="{{ route('modify', $id) }}">Modifier</a></td> --}}
            <td><a href="{{ route('delete', $id=$inf->id) }}">Delete</a></td>
            <td><a href="{{ route('formedit', $id=$inf->id) }}">Edit</a></td>
        @endforeach
        </tr>
    </div>
    </table> 
</div>
</body>
</html>