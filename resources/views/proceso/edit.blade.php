@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Procesos<a href="/empresa/{{$empresa_id}}/proceso/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Editar un proceso 
                </div>
                <div class="well">
				{!! Form::open(['action' => ['ProcesoController@update',$proceso->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', $proceso->nombre,['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('tipo', 'Tipo')}}
                        {{Form::select('tipo', [ 'estrategico' => 'Estrategico' , 'primario' => 'Primario' , 'apoyo' => 'Apoyo'],['class' => 'form-control'])}}
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