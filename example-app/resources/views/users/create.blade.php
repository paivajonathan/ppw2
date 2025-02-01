<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="{{ route('user.index') }} "> Home </a> <br>
<h2> Cadastrar usuario </h2>
<div>
    @if ($errors->any())
       @foreach ($errors->all() as $error)
       <p style="color:red">
        {{ $error }}
        </p>
       @endforeach
     
    @endif
</div>
<form action="{{ route('user.store') }}" method="POST">  
  @csrf
  @method('POST')
  <label> Nome: </label>
  <input type='text' name='name' placeholder="Nome Completo" value="{{ old('name') }}" ><br></br>
  <label> E-Mail: </label>
  <input type='email' name='email' placeholder="Seu email" value="{{ old('email') }}"><br></br>
  <label> Senha: </label>
  <input type='password' name='password' placeholder="senha" value="{{ old('password') }}"><br></br>
  <button type="submit"> Cadastrar </button>
</form>
    
</body>
</html>