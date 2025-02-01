<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Controller View</title>
</head>

<body>

    <a href="{{ route('user.create') }} "> Cadastrar </a> <br>
    <h2> Listar os usuarios </h2>

    @if (session('success'))
        <p style='color:#086'>
            {{ session('success')}}
        </p>
    @endif

    @forelse ($users as $user)
        <p>
            Id: {{ $user->id }}
        </p>
        <p>
            Nome: {{ $user->name }}
        </p>
        <p>
            Email: {{ $user->email }}
        </p>
        <p>
            <a href="{{ route('user.show', ['user' => $user->id]) }}"> Visualizar </a> <br>
        </p>
        <form method="POST" action="{{ route('user.delete', ['user' => $user->id]) }}">
            @csrf
            @method('delete')
            <button type='submit' onclick="return confirm('Tem certeza que deseja apagar o Registro')"> Apagar </button>
        </form>

        <hr>
    @empty
        <p>Não há usuários cadastrados.</p>
    @endforelse



</body>

</html>