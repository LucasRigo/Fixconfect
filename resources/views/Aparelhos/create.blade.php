@extends('adminlte::page')

@section('content')
    <h3>Novo Aparelho</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'aparelhos.store'])!!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Aparelho', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close()!!}
@stop