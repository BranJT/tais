@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Proveedores<a href="/empresa/{{$empresa_id}}/proveedor/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Añadir una nuevo proveedor 
                </div>
                <div class="well">
				{!! Form::open(['action' => ['ProveedorController@store',$empresa_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>
			        <div class="form-group">
                        {{Form::label('imagen', 'Imagen')}}
			            {{Form::file('imagen')}}
			        </div>
                    <div class="form-group">
                        {{Form::label('nivel', 'Nivel')}}
                        {{Form::number('nivel', '',['class' => 'nivel_proveedor', 'placeholder' => 'Nivel'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('depe', 'Dependencia')}}
                        <select name="dependencia" class="dependencia">                            
                            <option value='0' selected="true">Dependencia</option>
                            
                        </select>
                    </div>
                    {{Form::hidden('empresa_id',$empresa_id)}}                    
			    	{{Form::submit('Añadir',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','.nivel_proveedor',function(){
            //console.log("hmm cambio jijijijij");
            var nivel=$(this).val();

            var empresaid= <?php echo $empresa_id; ?>;
            //console.log(nivel);
            var div=$(this).parent().parent();
            var op=" ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('ajaxProveedor')!!}',
                data:{'nivel':nivel, 'empresaid':empresaid},
                success:function(data){
                    

                    //console.log(data);

                    //console.log(data.length);
                    if(data.length==0){
                        op+='<option value="0" selected >Empresa</option>';
                    }else{
                        op+='<option value="0" selected disabled>Elija Dependencia</option>';
                    }
                    for (var i =0; i<data.length; i++) {
                       op+='<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
                       
                    }
                    
                    div.find('.dependencia').html(" ");

                    div.find('.dependencia').append(op);
                    //console.log('success');
                },
                error:function(){

                }
            });
        });
    });

</script>
@endsection