<div class="modal fade" id="modal-delete" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header alert alert-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-trash"></i> Eliminarr</h4>
            </div>
            <div class="modal-body">
                <h3 class="panel-title">
                    ¿Esta seguro de querer eliminar el elemento seleccionado?
                </h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                {!!Form::open(['action'=>['ProveedorController@destroy' , $proveedor->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>