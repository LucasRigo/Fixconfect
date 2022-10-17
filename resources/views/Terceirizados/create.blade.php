@extends('adminlte::page')

@section('content')
    <h3>Novo Terceirizado</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'terceirizados.store'])!!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone') !!}
            {!! Form::number('telefone', null, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço') !!}
            {!! Form::text('endereco', null, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Terceirizado', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close()!!}
@stop