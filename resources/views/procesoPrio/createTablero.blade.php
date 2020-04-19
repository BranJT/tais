@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tablero de Control<a href="" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Crear Tablero de Control
                    <?php $a=$empresa_id?>
                    <?php $b=$pc_id?>
                    <?php $c=$indicador_id?>
                </div>
                <div class="well">
				{!! Form::open(['action' => ['ProcesoPrioController@storeTablero'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {{Form::label('objetivo', 'Objetivo')}}
                        {{Form::text('objetivo', '',['class' => 'form-control', 'placeholder' => 'Objetivo'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('metaRojo', 'Meta Rojo')}}
                        {{Form::text('metaRojo', '',['class' => 'form-control', 'placeholder' => 'Meta Rojo'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('metaAmarillo', 'Meta Amarillo')}}
                        {{Form::text('metaAmarillo', '',['class' => 'form-control', 'placeholder' => 'Meta Amarillo'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('metaVerde', 'Meta Verde')}}
                        {{Form::text('metaVerde', '',['class' => 'form-control', 'placeholder' => 'Meta Verde'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('iniciativas', 'Iniciativas')}}
                        {{Form::textArea('iniciativas', '',['class' => 'form-control', 'placeholder' => 'Iniciativas'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('responsable', 'Responsable')}}
                        {{Form::text('responsable', '',['class' => 'form-control', 'placeholder' => 'Responsable'])}}
                    </div>

                    

                      
                    {{Form::hidden('empresa_id',$a)}}
			        {{Form::hidden('pc_id',$b)}}
                    {{Form::hidden('indicador_id',$c)}}
			    	{{Form::submit('Crear',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection