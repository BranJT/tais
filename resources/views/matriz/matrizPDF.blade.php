@extends('layouts.app')
@section('content')
<br><br><br>
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	{{$matriz->nombre}}
                </div>                
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Proceso</th>
                            @foreach($parametros as $parametro)
                            <th>{{$parametro->nombre}}</th>
                            @endforeach
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>                        
                        <tr>
                        	<th>Peso</th>
                        	@foreach($parametros as $parametro)
                            <th>{{$parametro->peso}}</th>
                            @endforeach
                            <th></th>
                        </tr>
                        <?php $contador=0?>
                        @foreach($mapaDetalles as $mapaDetalle)
                            <tr data-id="{{ $mapaDetalle->getProceso()->id }}">
                                <td>{{ $mapaDetalle->getProceso()->nombre}}</td>
                                <?php $total=0 ?>
                                @foreach($parametros as $parametro)
	                            	<td>{{$pesos[$contador]->puntaje}}</td>
                                    <?php $total=$total+$pesos[$contador]->puntaje*$parametro->peso ?>
                                    <?php $contador++?>
	                            @endforeach
                                
                                <td>{{$total}}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                
				</div>
                <br><br><br><br><br>
                <hr>
                <br><br><br>
                <br>
                <div class="panel-body">
                    Procesos a Priorizar              
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        @if($procesosPriorizados->count()==0)
                            <li class="list-group-item"> Aun no se definen los procesos a priorizar</li>
                        @else
                        @foreach($procesosPriorizados as $procesoPriorizado)
                            <li class="list-group-item active">{{$procesoPriorizado->nombre}}</li>
                        @endforeach
                        @endif
                    </ul>
                </div> 
                
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection