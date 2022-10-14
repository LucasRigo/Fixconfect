@extends('layouts.default')

@section('content')
    <div class="col-md-12 text-center">
        <h1>Processos</h1>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <div class="col-md-12 text-left">
            <a href="{{route('processos.create', []) }}" class="btn btn-success">Novo</a>
        </div>

        <br>

        <thead>
            <th>Nome</th>
            <th>Tempo em segundos</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($processos as $processo)
                <tr>
                    <td>{{$processo->nome}}</td>
                    <td>{{$processo->tempo}}</td>
                    <td>

                        <a href="{{ route('processos.edit', ['id' => $processo->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$processo->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
@stop

@section('table-delete')
"processos"
@endsection