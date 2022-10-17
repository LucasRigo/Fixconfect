@extends('layouts.default')

@section('content')
    <div class="col-md-12 text-center">
        <h1>Linhas</h1>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <div class="col-md-12 text-left">
            <a href="{{route('linhas.create', []) }}" class="btn btn-success">Novo</a>
        </div>

        <br>

        <thead>
            <th>Tipo</th>
            <th>Cor</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($linhas as $linha)
                <tr>
                    <td>{{$linha->tipo}}</td>
                    <td>{{$linha->cor}}</td>
                    <td>

                        <a href="{{ route('linhas.edit', ['id' => $linha->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$linha->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
@stop

@section('table-delete')
"linhas"
@endsection