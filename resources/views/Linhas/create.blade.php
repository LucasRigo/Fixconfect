@extends('adminlte::page')

@section('content')
    <h3>Nova Linha</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'linhas.store'])!!}
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::text('tipo', null, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('cor', 'Cor') !!}
            {!! Form::text('cor', null, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Linha', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close()!!}
@stop