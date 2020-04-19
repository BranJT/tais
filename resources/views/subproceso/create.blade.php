@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Subproceso<a href="/empresa/{{$empresa_id}}/subproceso/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Crear un nuevo subproceso 
                </div>
                <div class="well">
				{!! Form::open(['action' => ['SubprocesoController@store',$empresa_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('proceso', 'Proceso Padre')}}
                        {{Form::select('proceso', $procesos->pluck('nombre','id'),['class' => 'form-control'])}}
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