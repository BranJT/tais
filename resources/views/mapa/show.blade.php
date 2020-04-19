@extends('layouts.app')

@section('content')
<?php use App\Model\Subproceso; ?>
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Mapa de Procesos
                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/mapa" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                	<?php  
                		$entrada= $mapa->entrada;
                		$salida= $mapa->salida;
                	?>
                    {{$mapa->nombre}}
                    <a href="/pdf/mapa/{{$mapa->id}}" class="btn btn-default" style="float:right; margin-right:10px">Exportar PDF</a>                                   
                </div>
                <div class="panel-body">
                	<div style="width:100%; height:880px; border:1px solid black; padding:10px;" >
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
                								<div align="center">
                									@foreach($mapaDetalles as $mapaDetalle)
	                									@if($mapaDetalle->getProceso()->tipo == 'estrategico')
	                									<div style="background-color:lightblue; display:inline-block">
														  <p style="margin-bottom:5dp; color:blue">
														  	{{$mapaDetalle->getProceso()->nombre}}
														  </p>
														  <?php
														   $hola=$mapaDetalle->getProceso()->id;
														   $jiji= Subproceso::where('proceso_id',$hola)->get();
														  ?>
														  @foreach($jiji as $ji)
														  	@if($mapaDetalle->estado == 'priorizado')
															  	<div> 
															  	<a href="/empresa/{{$empresa_id}}/mapa/{{$mapa->id}}/subproceso/{{$ji->id}}">
															  	{{$ji->nombre}}			  		
															  	</a> 
															  	</div>
															@else
														  	<div>{{$ji->nombre}} </div>
														  	@endif
														  @endforeach
														</div>
	                									

	                									@endif
                									@endforeach
													

												</div> 
	                							
                							</td>
                						</tr>

                						<tr>
                							<td align="center" style="padding: 10px;">
                								<img src="/storage/images/flechaArribaAbajo.png" width="30px">
                							</td>
                						</tr>

                						<tr >
                							<td> <!-- Proceso Primarios -->
	                							<table width="100%" border="1">
	                								<tr>
	                									<td colspan="3">Procesos Primarios
	                									</td>
	                								</tr>
	                								<tr align="center"> <!-- Listado de procesos -->
	                									<td width="5%">
	                										<img src="/storage/images/flechaIzquierda.png" width="30px">
	                									</td>
	                									@foreach($mapaDetalles as $mapaDetalle)
			                								@if($mapaDetalle->getProceso()->tipo == 'primario')
	                										<td bgcolor="#9CC2E5" width="20%"> 	
		                									<div style="background-color:lightblue; display:inline-block">
															  <p style="margin-bottom:3dp; color:blue">
															  	{{$mapaDetalle->getProceso()->nombre}}
															  </p>

															<?php
															   $hola=$mapaDetalle->getProceso()->id;
															   $jiji= Subproceso::where('proceso_id',$hola)->get();
															  ?>
															  @foreach($jiji as $ji)
															  	@if($mapaDetalle->estado == 'priorizado')
															  	<div> 
															  		<a href="/empresa/{{$empresa_id}}/mapa/{{$mapa->id}}/subproceso/{{$ji->id}}">
															  		{{$ji->nombre}}
															  		</a> 
															  	</div>
															  	@else
															  	<div>{{$ji->nombre}} </div>
															  	@endif
															  @endforeach
			                								</div>
		                									</td>
		                									<td width="3%">
		                										<img src="/storage/images/flechaDerecha.png" width="30px">	
		                									</td>
	                										@endif
		                								@endforeach
	                								</tr>
	                							</table>
                							</td> <!-- fin Primarios -->
                						</tr>

                						<tr>
                							<td align="center" style="padding: 10px;">
                								<img src="/storage/images/flechaArribaAbajo.png" width="30px">
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
		                									<?php
															   $hola=$mapaDetalle->getProceso()->id;
															   $jiji= Subproceso::where('proceso_id',$hola)->get();
															  ?>
															  <tr><td>
															  <div align="center">
															  @foreach($jiji as $ji)
															  	@if($mapaDetalle->estado == 'priorizado')
															  	<div style="display:inline-block; border-style:outset;"> 
															  		<a href="/empresa/{{$empresa_id}}/mapa/{{$mapa->id}}/subproceso/{{$ji->id}}">
															  		{{$ji->nombre}}
															  		</a>
															  	</div>
																@else
															  	<div style="display:inline-block; border-style:outset;">{{$ji->nombre}}</div>
															  	@endif
															  @endforeach
															  </div></td></tr>
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
