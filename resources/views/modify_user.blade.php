<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form action="{{ route('check_modify_form', $id) }}" method="post">
    @csrf
    
    <h1 style="align:center;"> Modifier un utilisateur</h1><br>
    <tr>
        <td>Nom: </td>
        <td><input type="text" name="nom" value="{{$user[0]->nom}}"><br></td><br>
    </tr>

    <tr>
        <td>Prenom: </td>
        <td><input type="text" name="prenom" value="{{ $user[0]->prenom}}"><br></td><br>
    </tr>
    <tr>
        <td>niveau: </td>
        <td><input type="text" name="niveau" value="{{ $user[0]->niveau}}"><br></td><br>
    </tr>
    <tr>
        <td>
            <button type="submit" name="modify" value="Register" >Register</button>
        </td>
    </tr>
</form>
</body>
</html>