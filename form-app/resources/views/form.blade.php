<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    @if (session('message'))
        <p style='color:#086'>
            {{ session('message')}}
        </p>
    @endif

    <form action="{{ route('check') }}" method="POST">
        @csrf
        @method("PATCH")
        <input type="number" name="age" value="{{ old("age") }}" placeholder="Digite a sua idade..." required step="1">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>