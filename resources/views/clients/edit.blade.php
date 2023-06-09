@extends('base')

@section('content')
    <h2>Atualizar um Cliente</h2>

    <form class="form" id="update-form" method="POST" action="{{ route('clients.update', $client->id) }}">
        @csrf
        @method('PUT')
        <label for="Nome">Nome:</label>
        <input type="text" name="name" id="name" required value="{{ $client->name }}">
        <label for="LastName">Sobre-nome:</label>
        <input type="text" name="LastName" id="LastName" required value="{{ $client->last_name }}">

        <label for="Email">E-mail:</label>
        <input type="text" name="Email" id="Email" required value="{{ $client->email }}">
    </form>

    <button form="update-form" type="submit">Salvar</button>
    <button form="delete-form" type="submit" value="Excluir" >Excluir</button>

    <form method="POST" class="form" id="delete-form" action="{{ route('clients.destroy', $client->id) }}">
        @csrf
        @method('DELETE')
    </form>
@endsection
