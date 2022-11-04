@extends('layouts.default')

@section('content')
    <div class="col-md-12 text-center">
        <h1>Cores</h1>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <div class="col-md-12 text-left">
            <a href="{{route('cores.create', []) }}" class="btn btn-success">Novo</a>
        </div>

        <br>

        <thead>
            <th>Nome</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($cores as $cor)
                <tr>
                    <td>{{$cor->nome}}</td>
                    <td>

                        <a href="{{ route('cores.edit', ['id' => $cor->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$cor->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
@stop

@section('table-delete')
"cores"
@endsection