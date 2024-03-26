@extends('app')
@section('title', 'Produto')
@section('content')

<div class="card">
    <div class="card-header">
        Detalhes do <b>{{ $product->nome }}</b>
    </div>
</div>

<div class="card-body">
    <p><strong>ID: </strong>{{ $product->id }}</p>
    <p><strong>Nome: </strong>{{ $product->nome }}</p>
    <p><strong>Quantidade: </strong>{{ $product->quantidade }}</p>
    <p><strong>Preço: </strong>{{ $product->preco }}</p>
    <br>
    <a class="btn btn-success" href="{{route('products.index')}}">Retornar</a>
</div>

@endsection