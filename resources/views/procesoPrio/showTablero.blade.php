@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="row">        
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Tablero de control
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                      <tr>
                        <td scope="col" width="20%">
                          <div style="border-style:solid;">
                          <span style="font-size:17px;text-decoration: underline;">Objetivo</span><br>
                          {{$tablero->objetivo}}                        
                          </div>
                        </td>
                        <td scope="col">
                          <img src="/storage/images/flechaDerecha.png" width="30px">
                        </td>
                        <td scope="col" width="20%">
                          <div style="border-style:solid;">
                          <span style="font-size:17px;text-decoration: underline;">Indicador</span><br>
                          {{$indicador->indicador}}
                          </div>
                        </td>
                        <td scope="col">
                          <img src="/storage/images/flechaDerecha.png" width="30px">
                        </td>
                        <td scope="col" width="20%">
                          <div style="border-style:solid;">
                          <span style="font-size:17px;text-decoration: underline;">Meta</span><br>
                          {{$tablero->metaVerde}}
                          </div>
                        </td>
                        <td scope="col">
                          <img src="/storage/images/flechaDerecha.png" width="30px">
                        </td>
                        <td scope="col" width="30%">
                          <div style="border-style:solid;">
                          <span style="height: 25px;width: 25px;background-color: red;border-radius: 50%;display: inline-block;"></span>{{$tablero->metaRojo}}<br>
                          <span style="height: 25px;width: 25px;background-color: yellow;border-radius: 50%;display: inline-block;"></span>{{$tablero->metaAmarillo}}<br>
                          <span style="height: 25px;width: 25px;background-color: green;border-radius: 50%;display: inline-block;"></span>{{$tablero->metaVerde}}
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td scope="col">
                        </td>
                        <td scope="col">                          
                        </td>
                        <td scope="col"> 
                          <img src="/storage/images/flechaArriba.png" width="30px">
                        </td>
                        <td scope="col">                          
                        </td>
                        <td scope="col">
                          <img src="/storage/images/flechaArriba.png" width="30px">
                        </td>
                        <td scope="col">                          
                        </td>
                        <td scope="col">                          
                        </td>
                      </tr>
                      <tr>
                        <td scope="col">                          
                        </td>
                        <td scope="col">                          
                        </td>
                        <td scope="col" colspan="3">
                          <div style="border-style:solid;">
                          <span style="font-size:17px;text-decoration: underline;">Iniciativas</span><br>
                          {{$tablero->iniciativas}}
                          </div>
                        </td>
                        <td scope="col">
                          <img src="/storage/images/flechaIzquierda.png" width="30px">
                        </td>
                        <td scope="col">
                          <div style="border-style:solid;">
                          <span style="font-size:17px;text-decoration: underline;">Responsable</span><br>
                          {{$tablero->responsable}}
                          </div>
                        </td>
                      </tr>
                    </table>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection