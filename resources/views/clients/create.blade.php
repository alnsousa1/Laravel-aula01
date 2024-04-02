@extends('app')
@section('title', 'Novo Cliente')
@section ('content')

<h1>Novo Cliente</h1>
<a href="{{route('clients.index')}}" class="btn btn-primary">Voltar</a>

<form action="{{route('clients.store')}}" method="POST">
  @csrf
  <div class="container" style="max-width: 100%; width: 40%">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input name="nome" id="nome" type="text" class="form-control" placeholder="Digite o seu nome:">
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite o seu endereço:">
    </div>
    <div class="form-group">
      <label for="observacao">Observação</label>
      <textarea class="form-control" name="observacao" id="observacao" rows="3"></textarea>
    </div>
    <br>
    <button class="btn btn-success" type="submit">Cadastrar</button>
  </div>
</form>
@endsection