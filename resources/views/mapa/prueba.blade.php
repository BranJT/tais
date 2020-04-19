<?php use App\Model\Subproceso; ?>
@foreach($mapaDetalles as $mapaDetalle)
@if($mapaDetalle->getProceso()->tipo == 'estrategico')
<div style="background-color:lightblue; display:inline-block">
  <p style="margin-bottom:5dp; color:blue">
  	{{$mapaDetalle->getProceso()->nombre}}
  </p>
  <?php
   $hola=$mapaDetalle->getProceso()->id;
   echo $hola;
   $jiji= Subproceso::where('proceso_id',$hola);
   echo $jiji;
  ?>
  @foreach($jiji as $ji)
  	<div>{{$ji->nombre}} </div>
  @endforeach
</div>


@endif
@endforeach