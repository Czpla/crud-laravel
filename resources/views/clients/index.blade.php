@extends('base')

@section('content')
    <h2>Clientes Cadastrados</h2>
    @if (!isset($clients))
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobre-nome</th>
                    <th>E-mail</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $c)
                    <tr>
                        <td>{{ $c->name }} </td>
                        <td> {{ $c->last_name }} </td>
                        <td> {{ $c->email }} </td>
                        <td> <a href="{{ route('clients.show', $c->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('clients.edit', $c->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Clientes Cadastrados: {{ $clients->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection
