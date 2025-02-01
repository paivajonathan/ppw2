<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
 <h2> Editar Usuario </h2>
 <a href="{{ route('user.index') }} "> Listar</a> <br>
  <a href="{{ route('user.show', ['user'=> $user->id])  }} "> Visualizar </a> <br>

<div>
    @if ($errors->any())
       
       @foreach ($errors->all() as $error)
       <p style="color:red">
        {{ $error }}
        </p>
       @endforeach
     
    @endif
</div>
<form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">  
  @csrf
  @method('PUT')
  <label> Nome: </label>
  <input type='text' name='name' placeholder="Nome Completo" value="{{ old('name', $user->name) }}" ><br></br>
  <label> E-Mail: </label>
  <input type='email' name='email' placeholder="Seu email" value="{{ old('email', $user->email) }}"><br></br>
  <label> Senha: </label>
  <input type='password' name='password' placeholder="senha" value="{{ old('password') }}"><br></br>
  <button type="submit"> Salvar </button>
</form>
