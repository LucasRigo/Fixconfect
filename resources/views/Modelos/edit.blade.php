
@extends('adminlte::page')

@section('content')
    <div class="card">
        <div class="card-header" style="background: lightgray">
            <h3>Novo Modelo</h3>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['route'=>'modelos.update', 'id'=>$modelo->id], 'method'=>'put')!!}
                <div class="form-group">
                    {!! Form::label('referencia', 'Referencia') !!}
                    {!! Form::number('referencia', $modelo->referencia, ['class'=>'form-control', 'required'])!!}
                </div>

                <hr />
                <h4>Cores</h4>
                <div class="input_field_wrap"></div>
                <br>

                <button style="float:right" class="add_field_button btn btn-default">Adicionar Cor</button>

                <br>
                <hr />



                <h4>Processos</h4>
                <div class="input_field_wrap2"></div>
                <br>

                <button style="float:right" class="add_field_button2 btn btn-default">Adicionar Processo</button>

                <br>
                <hr />




                <div class="form-group">
                    {!! Form::submit('Criar Modelo', ['class'=>'btn btn-primary']) !!}
                    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
                </div>
            {!! Form::close()!!}
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function(){
            var wrapper = $(".input_field_wrap");
            var add_button = $(".add_field_button");
            var x=0;
            $(add_button).click(function(e){
                x++;

                var newField = '<div><div style="width:94%; float: left" id="cor">{!! Form::select("cores [1", \App\Models\Cor:: orderBy("nome")->pluck("nome", "id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione uma cor"]) !!}</div><button type="button" class="remove field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';



              
                $(wrapper).append(newField);
            });
            $(wrapper).on("click",".remove_field", function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        })
    </script>

    <script>
        $(document).ready(function(){
            var wrapper2 = $(".input_field_wrap2");
            var add_button2 = $(".add_field_button2");
            var x2=0;
            $(add_button2).click(function(e){
                x2++;

                var newField2 = '<div><div style="width:94%; float: left" id="processo">{!! Form::select("processos [1", \App\Models\Processo:: orderBy("nome")->pluck("nome", "id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um processo"]) !!}</div><button type="button" class="remove field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';



            
                $(wrapper2).append(newField2);
            });
            $(wrapper2).on("click",".remove_field", function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x2--;
            });
        })
    </script>
@stop