@extends('app')
@section('title', 'Lista de Produtos')
@section ('content')
<h1>Lista de Produtos</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th>{{$product->id}}</th>
                <th>
                    <a href="{{ route('products.show', $product) }}">{{$product->nome}}</a>
                </th>
                <th>{{$product->quantidade}}</th>
                <th>{{$product->preco}}</th>
            </tr>
        @endforeach
    </tbody>
</table>

<a class='btn btn-success' href="{{route('products.create')}}">
    Cadastrar
</a>
@endsection