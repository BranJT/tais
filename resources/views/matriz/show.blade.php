@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="row">        
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Matriz de Procesos
                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/matriz" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Nombre:     {{$matriz->nombre}}
                    <a href="/matriz/{{$matriz->id}}/editMatriz" class="btn btn-default" style="float:right; margin-left:10px">Editar Matriz</a>
                    <a href="/empresa/{{$empresa_id}}/matriz/{{$matriz->id}}/parametro" class="btn btn-default" style="float:right;">Ver Parametros</a>
                    <a href="/pdf/matriz/{{$matriz->id}}" class="btn btn-default" style="float:right; margin-right:10px">Exportar PDF</a>
                    
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
                                    <td>@if(!$pesos->isEmpty())
                                        {{ 
                                        $pesos[$contador]->puntaje
                                        }}
                                        @else
                                        0
                                        @endif

                                    </td>
                                    @if(!$pesos->isEmpty())
                                        <?php $total=$total+$pesos[$contador]->puntaje*$parametro->peso ?>
                                    @endif
                                    <?php $contador++?>
                                @endforeach
                                
                                <td>{{$total}}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                
                </div>
                <hr>
                <div class="panel-body">
                    Procesos a Priorizar
                    <a href="/matriz/{{$matriz->id}}/editProceso" class="btn btn-default" style="float:right; margin-right:10px">Procesos a Priorizar</a>               
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        @if($procesosPriorizados->count()==0)
                            <li class="list-group-item"> Aun no se definen los procesos a priorizar</li>
                        @else
                        @foreach($procesosPriorizados as $procesoPriorizado)
                            <a href="/uNegocio/{{$uNegocio_id}}/procesoPrio/{{$procesoPriorizado->id}}">
                                <li class="list-group-item active">{{$procesoPriorizado->nombre}}</li>
                            </a>
                        @endforeach
                        @endif
                    </ul>
                </div> 
                
                
            </div>
        </div>
    </div>
</div>
@endsection