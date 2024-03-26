@extends('app')
@section('title', 'Editar Produto')
@section ('content')

<h1>Novo Produto</h1>
<div class="container" style="max-width: 100%; width: 40%">
  <form action="#">
    @csrf
    <div class="form-group">
      <label for="Nome">Nome</label>
      <input type="text" class="form-control" placeholder="Digite o nome do produto:" required>
    </div>
    <div class="form-group">
      <label for="Quantidade">Quantidade</label>
      <input type="number" class="form-control" placeholder="Digite a quantidade:" required>
    </div>
    <div class="form-group">
      <label for="Preco">Preço</label>
      <input type="number" class="form-control" placeholder="Digite o preço:" required>
    </div>
  </form>
  <br>
  <button class="btn btn-success" type="submit">Editar</button>
</div>
@endsection