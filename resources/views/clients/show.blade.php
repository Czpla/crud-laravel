@extends('base')

@section('content')
    @if (isset($msg))
        <h3 style="color: red">Cliente não encontrado!</h3>
    @else
        <h2>Mostrando dados do cliente</h2>
        <p><strong>Nome:</strong> {{ $client->name }} </p>
        <p><strong>Sobre-nome:</strong> {{ $client->last_name }} </p>
        <p><strong>E-mail:</strong> {{ $client->email }} </p>
        <a href="{{ route('clients.index') }}">Voltar</a>
    @endif
@endsection
