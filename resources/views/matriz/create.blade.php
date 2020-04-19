@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Matriz de Priorizacion<a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/matriz/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Crear una nueva matriz de Priorizacion 
                </div>
                <div class="well">
				{!! Form::open(['action' => ['MatrizController@store',$empresa_id,$uNegocio_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('mapa', 'Mapa de Proceso Relacionado')}}
                        {{Form::select('mapa', $mapas->pluck('nombre','id'),['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>                   
			        
                    {{Form::hidden('empresa_id',$empresa_id)}}                    
			    	{{Form::submit('Crear',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection