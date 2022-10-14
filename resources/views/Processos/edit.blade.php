@extends('adminlte::page')

@section('content')
    <h3>Editando Processo: {{$processo->nome}}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["processos.update", 'id'=>$processo->id],'method'=>'put'])!!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $processo->nome, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('tempo', 'Tempo em segundos') !!}
            {!! Form::number('tempo', $processo->tempo, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Processo', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close()!!}
@stop