@extends('app')
@section('title', 'Editar Cliente')
@section ('content')

<a href="{{route('clients.index')}}" class="btn btn-primary">Voltar</a>

<h1>Editar Cliente</h1>
<form action="{{route('clients.update', $client)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="container" style="max-width: 100%; width: 40%">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input name="nome" id="nome" type="text" class="form-control" placeholder="Digite o seu nome:" value="{{ $client->nome}}">
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite o seu endereço:" value="{{ $client->endereco }}">
    </div>
    <div class="form-group">
      <label for="observacao">Observação</label>
      <textarea class="form-control" name="observacao" id="observacao" rows="3">{{ $client->observacao }}</textarea>
    </div>
    <br>
    <button class="btn btn-success" type="submit">Editar</button>
  </div>
</form>
@endsection