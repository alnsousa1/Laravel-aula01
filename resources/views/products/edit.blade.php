@extends('app')
@section('title', 'Editar Produto')
@section ('content')

<h1>Novo Produto</h1>

<a href="{{route('products.index')}}" class="btn btn-primary">Voltar</a>

<div class="container" style="max-width: 100%; width: 40%">
  <form action="{{route('products.update', $product)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="Nome">Nome</label>
      <input name="nome" type="text" class="form-control" placeholder="Digite o nome do produto:" value="{{$product->nome}}" required>
    </div>
    <div class="form-group">
      <label for="Quantidade">Quantidade</label>
      <input name="quantidade" type="number" class="form-control" placeholder="Digite a quantidade:" value="{{$product->quantidade}}" required>
    </div>
    <div class="form-group">
      <label for="Preco">Preço</label>
      <input name="preco" type="number" class="form-control" placeholder="R$0,00" value="{{$product->preco}}" required>
    </div>
    <br>
    <button class="btn btn-success" type="submit">Editar</button>
  </form>
  <br>
</div>
<script>
    $(document).ready(function() {
        $('#preco').focus(function() {
            if ($(this).val() == '') {
                $(this).val('R$ ');
            }
        });

        $('#preco').blur(function() {
            if ($(this).val() == 'R$ ') {
                $(this).val('');
            }
        });
    });
</script>
@endsection