@extends('app')
@section('title', 'Novo Cliente')
@section ('content')

<h1>Novo Cliente</h1>
<form action="{{route('products.store')}}" method="POST">
  @csrf
  <div class="container" style="max-width: 100%; width: 40%">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input name="nome" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="quantidade">Quantidade</label>
      <input name="quantidade"type="number" class="form-control" >
    </div>
    <div class="form-group">
      <label for="preco">Preço</label>
      <input name="preco" type="number" class="form-control" >
    </div>
  </div>
  <button class="btn btn-success" type="submit">Enviar</button>
  </div>
</form>
@endsection