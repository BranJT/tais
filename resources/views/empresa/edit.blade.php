@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Empresa<a href="/empresa/{{$empresa->id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Editar una empresa                    
                </div>
                <div class="well">
				{!! Form::open(['action' => ['EmpresaController@update', $empresa->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', $empresa->nombre,['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>
			        <div class="form-group">
			            {{Form::file('imagen')}}
			        </div>
			        {{Form::hidden('_method','PUT')}}
			    	{{Form::submit('Editar',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection