@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Esta es una plataforma multimepresa para la gestión de:
                    <ul>
                        <li>Cadena de sumistros.</li>
                        <li>Mapa de Procesos</li>
                        <li>Matriz de Priorizacion</li>
                    </ul>
                </div>
                <div class="panel-heading">Empresa</div>

                <div class="panel-body">
                    <div class="box-header">
                        <a href="/empresa/create" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Nueva Empresa
                        </a>
                    </div>
                    <p>Seleccione una empresa</p>
                    <ul class="list-group">
                        @foreach($empresas as $empresa)
                            <a href="/empresa/{{$empresa->id}}" class="list-group-item">
                                <h3>
                                    <img style="width:80px" src="/storage/images/{{$empresa->imagen}}">
                                    &nbsp;&nbsp;&nbsp;{{$empresa->nombre}}
                                </h3>                           
                            </a>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
