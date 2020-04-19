@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Indicador<a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/showCarac/{{$pc_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Añadir una nuevo Indicador
                    <?php $a=$empresa_id?>
                    <?php $b=$mapa_id?>
                    <?php $c=$subproceso_id?>
                    <?php $d=$pc_id?>
                </div>
                <div class="well">
				{!! Form::open(['action' => ['ProcesoPrioController@storeIndicador'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('registro', 'Registro')}}
			    		{{Form::text('registro', '',['class' => 'form-control', 'placeholder' => 'Registro'])}}
			    	</div>
                    <div class="form-group">
                        {{Form::label('indicador', 'Indicador')}}
                        {{Form::text('indicador', '',['class' => 'form-control', 'placeholder' => 'Indicador'])}}
                    </div>

			        
                    
                    {{Form::hidden('empresa_id',$a)}}
                    {{Form::hidden('mapa_id',$b)}}
                    {{Form::hidden('subproceso_id',$c)}}
                    {{Form::hidden('pc_id',$d)}}
			    	{{Form::submit('Añadir',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection