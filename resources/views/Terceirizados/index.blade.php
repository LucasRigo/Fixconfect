@extends('layouts.default')

@section('content')
    <div class="col-md-12 text-center">
        <h1>Terceirizados</h1>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <div class="col-md-12 text-left">
            <a href="{{route('terceirizados.create', []) }}" class="btn btn-success">Novo</a>
        </div>

        <br>

        <thead>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($terceirizados as $terceirizado)
                <tr>
                    <td>{{$terceirizado->nome}}</td>
                    <td>{{$terceirizado->telefone}}</td>
                    <td>{{$terceirizado->endereco}}</td>
                    <td>

                        <a href="{{ route('terceirizados.edit', ['id' => $terceirizado->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$terceirizado->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
@stop

@section('table-delete')
"terceirizados"
@endsection