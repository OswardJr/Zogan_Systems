@include('layouts.headruta')

<form enctype="multipart/form-data" name="f1" action="{{ url('/carga')}}" onkeypress="return anular(event)" method="post">
  
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="container">
    @if(Session::get('message'))
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5> {{ Session::get('message') }}</h5>
      </div>
    </div>
    @endif
    <h2></h2>

<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
          <h3>Recepción del Vehículo</h3>
          <hr>      
      <div class="col-md-12">
                  <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="{{ url('/ruta') }}" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br>
        <div class="col-md-3">
          <div class="panel-body ">
            <div class="radio">
              <label><input type="radio" name="metodo" value="Aseguradora">Aseguradora</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="metodo" value="Particular">Particular</label>
            </div>
          </div>
        </div>
      </div>
      <hr style="width:100%;">
      <div class="row">
        <div class="col-md-12" style="padding-left: 0px;">
          <div class="col-md-12">
            <div class="panel panel-primary ">
              <div class="panel-heading ">
                <center>
                  <h4>Datos Pre-cargados del Vehículo</h4>
                </center>
              </div>
              <div class="panel-body ">
              <div class="panel-body">
                <div class="row">
                  <input type="hidden" value="{{ strtoupper($auto->id) }}" name="_idAuto">
                  <div class="col-md-6"><p><strong>Placa:</strong> {{ strtoupper($auto->placa) }}</p></div>
                  <div class="col-md-6"><p><strong>Propietario:</strong> {{ strtoupper($prop->nombre_completo) }}</p></div>
                  <div class="col-md-6"><p><strong>Marca:</strong> {{ strtoupper($auto->marca) }}</p></div>
                  <div class="col-md-6"><p><strong>Modelo:</strong> {{ strtoupper($auto->modelo) }}</p></div>
                  <div class="col-md-6"><p><strong>Color:</strong> {{ strtoupper($auto->color) }}</p></div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="panel panel-primary ">
          <div class="panel-heading ">
            <center>
              <h4>Datos de Recepción </h4>
            </center>
          </div>
          <div class="panel-body ">
            <div class="form-group col-md-6">
              <p class="margin"><strong>Chofer encargado</strong></p>
              <input type="text" name="chofer" onkeyup="this.value=this.value.toUpperCase()" placeholdesr="RAFAEL" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <p class="margin"><strong>Telefono del chofer</strong></p>
              <input type="text" name="tlf_chofer" pattern="^([0-9]{4})([0-9]{7})$" class="form-control" onkeypress="return justNumbers(event);" maxlength="11" placeholder="0424XXXXXXX" class="form-control">
            </div>
            <div class="col-md-6 form-group" style="margin-top: 5px;">
              <label for="cedula ">Productor de la poliza</label>
                <input type="text " class="form-control" id="" onkeyup="this.value=this.value.toUpperCase()" name="productor" placeholdesr="SEGUROS UNIVERSITAS">
              </div>
              <div class="col-md-6 form-group" style="margin-top: 5px;">
                <label for="cedula ">Persona que recibe</label>
                  <input type="text " class="form-control" id="" onkeyup="this.value=this.value.toUpperCase()" name="recibe" placeholdesr="LUIS">
              </div>
              <div class="form-group col-md-6" id="sandbox-container">
                  <label for="sel1"><p>Fecha de Recepción</p></label>
                    <input type="date" class="form-control" name="_fechaRec" required="true" value="<?php echo date('Y-m-d'); ?>">
              </div>
              <div class="form-group col-md-6">
                <p class="margin"><strong>Kilometraje</strong></p>
                <input type="text" name="kilometraje" placeholdesr="22.000 KM" onkeyup="this.value=this.value.toUpperCase()" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <p class="margin"><strong>Combustible</strong></p>
                <input type="text" name="combustible" placeholdesr="22 LTS"onkeyup="this.value=this.value.toUpperCase()" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary ">
          <div class="panel-heading ">
            <center>
              <h4>Detalles</h4>
            </center>
          </div>
          <div class="panel-body">
              <a href="javascript:seleccionar_todo()">Marcar todos</a> | 
              <a href="javascript:deseleccionar_todo()">Marcar ninguno</a><br>

            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Aire acondicionado</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Alfombras</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Tablero</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Asientos</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Tapiceria</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Radio / Reproductor</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Encendedor</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Techo interno</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Parabrisas delantero</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Parabrisas trasero</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">vidrio puerta izquierda</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">vidrio puerta derecha</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Retrovisor derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Retrovisor izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Faro izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Faro derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Manilla izquierda</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Manilla derecha</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Stop izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Stop derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Asientos</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Cocuyo izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Cocuyo derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Emblema</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="" value="SI">Tapa Gasoil</label>
              </div>
            </div><br>
            <div class="col-md-12">
                <label for="comment">Informe de inspeccion</label>
                <textarea class="form-control" name="observacion" rows="5" id="comment" required></textarea>
            </div>
          </div>
        </div>
        <div class="panel panel-primary ">
          <div class="panel-heading ">
            <center>
              <h4>Agregar Memoria Fotográfica</h4>
            </center>
          </div>
          <div class="panel-body ">
            <div class="form-group image">
              <input id="images-input" name="images[]" type="file" multiple data-preview-file-type="any" class="file" required="true">
            </div>
          </div>
        </div>
        <center class="col-lg-offset-3 col-lg-6">
          <input type="hidden" name="token" value="" />
          <button data-toggle="tooltip" title="Registrar" type="submit" class="btn btn-guardar margin glyphicon glyphicon-floppy-disk" name="agregar"></button>
          <button data-toggle="tooltip" title="Limpiar Formulario" type="reset" class="btn btn-refresh margin glyphicon glyphicon-repeat"></button>
        </center>
      </div>
    </div>
  </div>
</div>
</div><!-- /.col -->

</div><!-- /.row -->
<div class="row">

</div>
</section><!-- /.content -->
</div>
</div>
@include('layouts.footer')
<!-- <script>
$(function() {
  $('#placa').autocomplete({
    source: '/vehiculos/getjson'
  })
})


function buscar_vehiculo() {
    let placa = $('#placa').val()
    if (placa == null) {
      $('#placa').focus()
      alert('Debe introducir la placa')
    }
    $.ajax({
        url: '/vehiculos/getVehiculo/' + placa,
        type: 'GET',
        dataType: 'JSON',
        success: function(data) {
            // $('[name="rif-entrada"]').val(data.rif)
            // $('[name="id_prov"]').val(data.id_prov)
            // $('[name="razon_social"]').val(data.razon_social)
            // $('[name="telefono"]').val(data.telefono)
            // $('[name="direccion"]').val(data.direccion)
            // // habilita el poder agregar productos despues de añadir prov
            // $('#codigo').removeAttr('disabled')
            // $('#precio').removeAttr('disabled')
            // $('#cantidad').removeAttr('disabled')
            console.log(data)
        },
        error: function(e) {
            console.log(e)
        }
    })
}
</script> -->
<script type="text/javascript">
  $("#images-input").fileinput({
    language: "es",
    uploadUrl: '/file-upload-batch/2',
    maxFileCount: 8,
    allowedFileExtensions: ["jpg", "png"]
  });
</script>

<script>
function seleccionar_todo(){ 
   for (i=0;i<document.f1.elements.length;i++) 
      if(document.f1.elements[i].type == "checkbox")  
         document.f1.elements[i].checked=1 
}

function deseleccionar_todo(){ 
   for (i=0;i<document.f1.elements.length;i++) 
      if(document.f1.elements[i].type == "checkbox")  
         document.f1.elements[i].checked=0 
}  
</script>

<script type="text/javascript">
     function anular(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          return (tecla != 13);
     }
</script>