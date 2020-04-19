@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actividado<a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/showSeguimiento/{{$ps_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Añadir una nuevo Actividad
                    <?php $a=$empresa_id?>
                    <?php $b=$mapa_id?>
                    <?php $c=$subproceso_id?>
                    <?php $d=$ps_id?>      
                </div>
                <div class="well">
				{!! Form::open(['action' => ['ProcesoPrioController@storeActividad'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('actividad', 'Actividad')}}
			    		{{Form::text('actividad', '',['class' => 'form-control', 'placeholder' => 'Actividad'])}}
			    	</div>
                    <div class="form-group">
                        {{Form::label('tipo', 'Tipo de Actividad')}}
                        {{Form::select('tipo', [ 'operacion' => 'Operacion' , 'transporte' => 'Transporte', 'demora' => 'Demora', 'inspeccion' => 'Inspeccion', 'almacenamiento' => 'Almacenamiento', 'combinada' => 'Actividad Combinada'],['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('tiempo', 'Tiempo (min)')}}
                        {{Form::number('tiempo', null ,['class' => 'form-control', 'step' => 'any'])}}
                    </div>

			        
                    
                    {{Form::hidden('empresa_id',$a)}}
                    {{Form::hidden('mapa_id',$b)}}
                    {{Form::hidden('subproceso_id',$c)}}
                    {{Form::hidden('ps_id',$d)}}
			    	{{Form::submit('Añadir',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection