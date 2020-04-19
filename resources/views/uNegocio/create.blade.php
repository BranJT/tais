@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Unidad de Negocio<a href="/empresa/{{$empresa_id}}/uNegocio/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Crear una nueva Unidad de Negocio
                </div>
                <div class="well">
				{!! Form::open(['action' => ['UnidadNegocioController@store',$empresa_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('descripcion', 'Descripcion')}}
                        {{Form::text('descripcion', '',['class' => 'form-control', 'placeholder' => 'Descripcion'])}}
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