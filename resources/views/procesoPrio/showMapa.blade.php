@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="row">        
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$subproceso->nombre}}
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Mapa Estrategico
                </div>
                <div class="box-body" align="center">
                  <img src="/storage/images/{{$procesoMapa->imagen}}" >
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection