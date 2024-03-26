@extends('app')
@section('title', 'Cliente')
@section('content')

<div class="card">
    <div class="card-header">
        Detalhes de <b>{{ $client->nome }}</b>
    </div>
</div>

<div class="card-body">
    <p><strong>ID: </strong>{{ $client->id }}</p>
    <p><strong>Nome: </strong>{{ $client->nome }}</p>
    <p><strong>Endereço: </strong>{{ $client->endereco }}</p>
    <p><strong>Observação: </strong>{{ $client->observacao }}</p>
    <br>
    <a class="btn btn-success" href="{{route('clients.index')}}">Retornar</a>
</div>

@endsection