@extends('adminlte::page')

@section('content')
    <h3>Editando Cor: {{$cor->nome}}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["cores.update", 'id'=>$cor->id],'method'=>'put'])!!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $cor->nome, ['class'=>'form-control', 'required'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Editar Cor', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    {!! Form::close()!!}
@stop