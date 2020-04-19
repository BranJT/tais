@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Matriz Priorizacion<a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/matriz/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Editar matriz de priorizacion
                </div>
                <div class="well">
				{!! Form::open(['action' => ['MatrizController@update',$matriz->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', $matriz->nombre,['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>

			        {{Form::hidden('_method','PUT')}}
                    {{Form::hidden('empresa_id',$empresa_id)}}                    
			    	{{Form::submit('Editar',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection