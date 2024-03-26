@extends('app')
@section('title', 'Novo Cliente')
@section ('content')

<h1>Novo Cliente</h1>
<div class="container" style="max-width: 100%; width: 40%">
  <form action="post">
    <div class="form-group">
      <label for="Nome">Nome</label>
      <input type="text" class="form-control" placeholder="Digite o seu nome:">
    </div>
    <div class="form-group">
      <label for="Endereco">Endereço</label>
      <input type="text" class="form-control" placeholder="Digite o seu endereço:">
    </div>
    <div class="form-group">
      <label for="observacao">Observação</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>
  </form>
  <button class="btn btn-success" type="submit">Enviar</button>
</div>
@endsection