<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <form action="{{ route('check_add') }}" method="post">
        @csrf
        <h1 style="align:center;"> ADD STUDENT </h1><br>
        <tr>
            <td>Nom : </td>
            <td><input type="text" name="nom" ><br></td><br>
        </tr>

        <tr>
            <td>Prenom : </td>
            <td><input type="text" name="prenom" ><br></td><br>
        </tr>

        <tr>
            <td>Code: </td>
            <td><input type="text" name="code" ><br></td><br>
        </tr>

        <tr>
            <td>Filière : </td>
            <select name="filiere" id="filiere">
                <option value="ginf">GINF</option>
                <option value="gstr">GSTR</option>
                <option value="gsea">GSEA</option>
                <option value="gind">GIND</option>
                <option value="g3ei">G3EI</option>
              </select>
        </tr><br>
        
        <tr>
            <td>Niveau : </td>
            <select name="niveau" id="niveau">
                <option value="ci1">CI1</option>
                <option value="ci2">CI2</option>
                <option value="ci3">CI3</option>
              </select>
        </tr><br>

        <tr>
            <td>login :</td>
            <td>
                <input type="text" name="login" ><br>
            </td>
        </tr>

        <tr>
            <td>Mot de passe: </td>
            <td><input type="password" name="password" ><br></td><br>
        </tr>

        <tr>
            <td>Email: </td>
            <td><input type="email" name="email" ><br></td><br>
        </tr>

        <tr>
            <td>
                <button type="submit" name="modify" >Register</button>
            </td>
        </tr>
    </form>




    @if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </div>
    @endif

</body>
</html>