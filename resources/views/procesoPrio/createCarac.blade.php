@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Caracterizacion<a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Crear caracterizacion del siguiente subproceso
                    <?php $a=$empresa_id?>
                    <?php $b=$mapa_id?>
                    <?php $c=$subproceso_id?>
                </div>
                <div class="well">
				{!! Form::open(['action' => ['ProcesoPrioController@storeCarac'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('responsable', 'Responsable')}}
                        {{Form::text('responsable', '',['class' => 'form-control', 'placeholder' => 'Responsable'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('objetivo', 'Objetivo')}}
                        {{Form::text('objetivo', '',['class' => 'form-control', 'placeholder' => 'Objetivo'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('alcance', 'Alcance')}}
                        {{Form::text('alcance', '',['class' => 'form-control', 'placeholder' => 'Alcance'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('requisitosNormativos', 'Requisitos Normativos')}}
                        {{Form::textArea('requisitosNormativos', '',['class' => 'form-control', 'placeholder' => 'Requisitos Normativos'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('requisitosAplicable', 'Requisitos Aplicable')}}
                        {{Form::textArea('requisitosAplicable', '',['class' => 'form-control', 'placeholder' => 'Requisitos Aplicable'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('entradasCriticas', 'Entradas Criticas')}}
                        {{Form::textArea('entradasCriticas', '',['class' => 'form-control', 'placeholder' => 'Entradas Criticas'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('actividadesRealizadas', 'Actividades Realizadas')}}
                        {{Form::textArea('actividadesRealizadas', '',['class' => 'form-control', 'placeholder' => 'Actividades Realizadas'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('medidasControl', 'Medidas Control')}}
                        {{Form::textArea('medidasControl', '',['class' => 'form-control', 'placeholder' => 'Medidas Control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('salidasCriticas', 'Salidas Criticas')}}
                        {{Form::textArea('salidasCriticas', '',['class' => 'form-control', 'placeholder' => 'Salidas Criticas'])}}
                    </div>

                    

                      
                    {{Form::hidden('empresa_id',$a)}}
			        {{Form::hidden('mapa_id',$b)}}
                    {{Form::hidden('subproceso_id',$c)}}
			    	{{Form::submit('Crear',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection