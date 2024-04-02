@extends('app')
@section('title', 'Novo Produto')
@section ('content')

<h1>Novo Produto</h1>

<a href="{{route('products.index')}}" class="btn btn-primary">Voltar</a>

<form action="{{route('products.store')}}" method="POST">
  @csrf
  <div class="container" style="max-width: 100%; width: 40%">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input name="nome" id="nome" type="text" class="form-control" placeholder="Digite o nome do produto:">
    </div>
    <div class="form-group">
      <label for="quantidade">Quantidade</label>
      <input name="quantidade" type="number" class="form-control" placeholder="Digite a quantidade: ">
    </div>
    <div class="form-group">
      <label for="preco">Preço</label>
      <input name="preco" type="number" class="form-control" placeholder="R$0,00 " >
    </div>
    <br>
    <button class="btn btn-success" type="submit">Cadastrar</button>
  </div>
  </div>
</form>
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