@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Seguimiento de Actividades<a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Añadir una Diagrama de Seguimiento
                    <?php $a=$empresa_id?>
                    <?php $b=$mapa_id?>
                    <?php $c=$subproceso_id?>       
                </div>
                <div class="well">
				{!! Form::open(['action' => ['ProcesoPrioController@storeSeguimiento'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('flujo', 'Tipo Flujo')}}
                        {{Form::select('flujo', [ 'normal' => 'Flujo Normal' , 'alterno' => 'Flujo Alterno'],['class' => 'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('tipo', 'Tipo')}}
                        {{Form::select('tipo', [ 'actual' => 'Diseño Actual' , 'propuesto' => 'Diseño Propuesto'],['class' => 'form-control'])}}
                    </div>
                    
                    {{Form::hidden('empresa_id',$a)}}
                    {{Form::hidden('mapa_id',$b)}}
                    {{Form::hidden('subproceso_id',$c)}}
			    	{{Form::submit('Añadir',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection