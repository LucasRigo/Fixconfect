@extends('adminlte::page')

@section('content')
    <h3>Editando Terceirizado: {{$terceirizado->nome}}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["terceirizados.update", 'id'=>$terceirizado->id],'method'=>'put'])!!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $terceirizado->nome, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone') !!}
            {!! Form::number('telefone', $terceirizado->telefone, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço') !!}
            {!! Form::text('endereco', $terceirizado->endereco, ['class'=>'form-control', 'required'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Terceirizado', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close()!!}
@stop