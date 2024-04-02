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
                <th>R${{$product->preco}}</th>
                <th>
                    <a class="btn btn-primary" href="{{ route('products.edit', $product) }}">Editar</a>
                </th>
                <th>
                    <form action="{{ route('products.destroy', $product)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Esta ação não poderá ser desfeita. Tem certeza que deseja excluir?')">Deletar</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>

<a class='btn btn-success' href="{{route('products.create')}}">
    Cadastrar
</a>
@endsection