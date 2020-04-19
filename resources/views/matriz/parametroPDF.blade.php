@extends('layouts.app')
@section('content')
<br><br><br>
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Parametros                 
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Peso</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($parametros as $parametro)
                            <tr data-id="{{ $parametro->id }}">
                                <td>{{ $parametro->id}}</td> 
                                <td>{{ $parametro->nombre}}</td>                            
                                <td>{{ $parametro->descripcion}}</td>
                                <td>{{ $parametro->peso}}</td>                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection