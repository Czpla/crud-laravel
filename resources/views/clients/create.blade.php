@extends('base')

@section('content')
    <h2>Cadastrar Novo Veículo</h2>

    <form class="form" method="POST" action="{{ route('clients.store') }}">
        @csrf
        <label for="Nome">Nome:</label>
        <input type="text" name="name" id="name" required>
        <label for="LastName">Sobre-nome:</label>
        <input type="text" name="LastName" id="LastName" required>
        <label for="Email">E-mail:</label>
        <input type="text" name="Email" id="Email" required>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
@endsection
