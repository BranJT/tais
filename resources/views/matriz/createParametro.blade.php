@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Parametro<a href="/empresa/{{$empresa_id}}/matriz/{{$id}}/parametro" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Crear un nuevo Parametro
                </div>
                <div class="well">
				{!! Form::open(['action' => ['MatrizController@storeParametro',$empresa_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('descripcion', 'Descripcion')}}
                        {{Form::textArea('descripcion', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('peso', 'Peso')}}
                        {{Form::select('peso', ['1' => '1' ,'2' => '2' ,'3' => '3' ,'4' => '4' ,'5' => '5' ,],['class' => 'form-control'])}}
                    </div>   

			        {{Form::hidden('matriz_priorizacion_id',$id)}}  
                    {{Form::hidden('empresa_id',$empresa_id)}}                    
			    	{{Form::submit('Crear',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection