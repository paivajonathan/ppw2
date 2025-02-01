<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

    <a href="{{ route('user.index') }} "> Listar</a> <br>
    <a href="{{ route('user.edit', ['user'=> $user->id]) }}"> Editar</a> <br>
  
    <h2> Visualizar Usuarios </h2>
    
    <p>
        Id: {{ $user->id }} <br>
    </p>
    <p>
        Nome: {{ $user->nome }}<br>
    </p>
    <p>
        Email: {{ $user->email }}<br>
    </p>
    <p>
        * Cadastro:  {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }} <br>
    </p>
    <p>
        * Editado:  {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }} <br>
    </p>
</body>
</html>
