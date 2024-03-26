@extends('app')
@section('title', 'Lista de Clientes')
@section ('content')
<h1>Lista de Clientes</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Observação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <th>{{$client->id}}</th>
                <th>
                    <a href="{{ route('clients.show', $client) }}">{{$client->nome}}</a>
                </th>
                <th>{{$client->endereco}}</th>
                <th>{{$client->observacao}}</th>
            </tr>
        @endforeach
    </tbody>
</table>

<a class='btn btn-success' href="{{ route('clients.create') }}">
    Cadastrar
</a>
@endsection