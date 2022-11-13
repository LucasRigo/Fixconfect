@extends('layouts.default')

@section('content')
    <div class="col-md-12 text-center">
        <h1>Modelos</h1>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <div class="col-md-12 text-left">
            <a href="{{route('modelos.create', []) }}" class="btn btn-success">Novo</a>
        </div>

        <br>

        <thead>
            <th>Referencia</th>
            <th>Cores</th>
            <th>Processos</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($modelos as $modelo)
                <tr>
                    <td>{{$modelo->referencia}}</td>
                    <td>
                        @foreach($modelo->cores as $a)
                            <li>{{ $a->cor->nome }}</li>
                        @endforeach

                    </td>
                    <td>
                        @foreach($modelo->processos as $a)
                            <li>{{ $a->processo->nome }}</li>
                        @endforeach
                    </td>
                    <td>

                        
                        <a href="#" onclick="return ConfirmaExclusao({{$modelo->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
@stop

@section('table-delete')
"modelos"
@endsection