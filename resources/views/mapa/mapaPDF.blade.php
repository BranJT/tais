@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Mapa de Procesos

                </div>
                <div class="panel-body">
                	<?php  
                		$entrada= $mapa->entrada;
                		$salida= $mapa->salida;
                	?>
                    {{$mapa->nombre}}                                     
                </div>
                <div class="panel-body">
                	<div style="width:100%; height:800px; border:1px solid black; padding:10px;" >
                		<table width="100%" height="70%">
                			<tr>
                				<td width="5%" bgcolor="#E5A99C" align="center">
                					<table height="100%">
			                			@for($i=0; $i<strlen($entrada); $i++)
			                			<tr>
			                				<td style="font-size: 19px; padding:1px;">{{$entrada[$i]}}
			                				</td>
			                			</tr>
			                			@endfor
			                		</table>
                				</td>

                				<td width="90%">
                					<table align="center" width="100%">
                						<tr >
                							<td> <!-- Proceso Estartegicos -->
	                							<table width="100%">
	                								<tr>
	                									<td>Procesos Estrategicos
	                									</td>
	                								</tr>
	                								<tr > <!-- Listado de procesos -->
	                									@foreach($mapaDetalles as $mapaDetalle)
		                									@if($mapaDetalle->getProceso()->tipo == 'estrategico')
		                									<td bgcolor="#9CC2E5">{{$mapaDetalle->getProceso()->nombre}}
		                									</td>

		                									@endif
	                									@endforeach
	                								</tr>
	                								@foreach($subprocesos as $subproceso)
		                							<tr align="center" style="border-style: dotted;">
		                								<td bgcolor="#ad9ce5">
		                									{{$subproceso->nombre}}
		                								</td>
		                							</tr>
		                							@endforeach
	                							</table>
                							</td>
                						</tr>

                						<tr>
                							<td align="center" style="padding: 10px;">
                								<img src="/storage/images/flechaArribaAbajo.png" width="50px">
                							</td>
                						</tr>

                						<tr >
                							<td> <!-- Proceso Primarios -->
	                							<table width="100%">
	                								<tr>
	                									<td colspan="3">Procesos Primarios
	                									</td>
	                								</tr>
	                								<tr align="center"> <!-- Listado de procesos -->
	                									<td width="25%">
	                										<img src="/storage/images/flechaIzquierda.png" width="50px">
	                									</td>
	                									<td bgcolor="#9CC2E5" width="50%" >
	                										<table border="1" width="100%">
	                											@foreach($mapaDetalles as $mapaDetalle)
				                									@if($mapaDetalle->getProceso()->tipo == 'primario')
				                									<tr>
	                												<td align="center" style="padding: 4px">
	                												{{$mapaDetalle->getProceso()->nombre}}
	                												</td>
	                												</tr>
				                									@endif
			                									@endforeach
	                										</table>
	                									</td>
	                									<td width="25%">
	                										<img src="/storage/images/flechaDerecha.png" width="50px">	
	                									</td>
	                								</tr>
	                							</table>
                							</td> <!-- fin Primarios -->
                						</tr>

                						<tr>
                							<td align="center" style="padding: 10px;">
                								<img src="/storage/images/flechaArribaAbajo.png" width="50px">
                							</td>
                						</tr>

                						<tr >
                							<td> <!-- Proceso de apoyo -->
	                							<table width="100%" border="1">
	                								<tr>
	                									<td>Procesos de Apoyo
	                									</td>
	                								</tr>
	                								@foreach($mapaDetalles as $mapaDetalle)
		                									@if($mapaDetalle->getProceso()->tipo == 'apoyo')
		                									<tr align="center">
		                									<td bgcolor="#9CC2E5">{{$mapaDetalle->getProceso()->nombre}}
		                									</td>
		                									</tr>
		                									@endif
	                								@endforeach
	                								
	                							</table>
                							</td>
                						</tr>
                					</table>
                				</td>  

                				<td width="5%" bgcolor="#E5A99C" align="center">
                					<table>
			                			@for($i=0; $i<strlen($salida); $i++)
			                			<tr>
			                				<td style="font-size: 20px; padding:1px;">{{$salida[$i]}}
			                				</td>
			                			</tr>
			                			@endfor
			                		</table>
                				</td>
                			</tr>
                		</table>
                		
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection