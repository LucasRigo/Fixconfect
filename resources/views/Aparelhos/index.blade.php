@extends('layouts.default')

@section('content')
    <div class="col-md-12 text-center">
        <h1>Aparelhos</h1>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <div class="col-md-12 text-left">
            <a href="{{route('aparelhos.create', []) }}" class="btn btn-success">Novo</a>
        </div>

        <br>

        <thead>
            <th>Nome</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($aparelhos as $aparelho)
                <tr>
                    <td>{{$aparelho->nome}}</td>
                    <td>

                        <a href="{{ route('aparelhos.edit', ['id' => $aparelho->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$aparelho->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
@stop

@section('table-delete')
"aparelhos"
@endsection