@include('layouts.headruta')

<form enctype="multipart/form-data" name="f1" action="{{ url('/carga')}}" method="post">
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
      <div class="col-md-12">
        <div class="col-md-6">
          <h2>Recepción del Vehículo.</h2>
        </div>
        <div class="col-md-offset-2 col-md-3">
          <div class="panel-body ">
            <div class="checkbox">
              <label><input type="checkbox" name="tipo[]" value="SI">Aseguradora</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="tipo[]" value="SI">Particular</label>
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
              <input type="text" name="chofer" placeholdesr="Aveo" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <p class="margin"><strong>Telefono del chofer</strong></p>
              <input type="text" name="tlf_chofer" placeholdesr="Aveo" class="form-control">
            </div>
            <div class="col-md-6 form-group" style="margin-top: 5px;">
              <label for="cedula ">Productor de la poliza</label>
                <input type="text " class="form-control" id="" name="productor" placeholdesr="V-XXXXXXX">
              </div>
              <div class="col-md-6 form-group" style="margin-top: 5px;">
                <label for="cedula ">Persona que recibe</label>
                  <input type="text " class="form-control" id="" name="recibe" placeholdesr="V-XXXXXXX">
              </div>
              <div class="form-group col-md-6" id="sandbox-container">
                  <label for="sel1"><p>Fecha de Recepción</p></label>
                    <input type="date" class="form-control" name="_fechaRec" required="true" value="<?php echo date('Y-m-d'); ?>">
              </div>
              <div class="form-group col-md-6">
                <p class="margin"><strong>Kilometraje</strong></p>
                <input type="text" name="kilometraje" placeholdesr="Aveo" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <p class="margin"><strong>Combustible</strong></p>
                <input type="text" name="combustible" placeholdesr="Aveo" class="form-control">
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
<!--               <a href="javascript:seleccionar_todo()">Marcar todos</a> | 
              <a href="javascript:deseleccionar_todo()">Marcar ninguno</a><br>

            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="A" value="SI">Aire acondicionado</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="B" value="SI">Alfombras</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="C" value="SI">Tablero</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="D" value="SI">Asientos</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="E" value="SI">Tapiceria</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="F" value="SI">Radio / Reproductor</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="G" value="SI">Encendedor</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="H" value="SI">Techo interno</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="I" value="SI">Parabrisas delantero</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="J" value="SI">Parabrisas trasero</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="K" value="SI">vidrio puerta izquierda</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="L" value="SI">vidrio puerta derecha</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="M" value="SI">Retrovisor derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="N" value="SI">Retrovisor izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="Ñ" value="SI">Faro izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="O" value="SI">Faro derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="P" value="SI">Manilla izquierda</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="Q" value="SI">Manilla derecha</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="R" value="SI">Stop izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="S" value="SI">Stop derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="T" value="SI">Asientos</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="U" value="SI">Cocuyo izquierdo</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="V" value="SI">Cocuyo derecho</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="W" value="SI">Emblema</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="checkbox">
                <label><input type="checkbox" name="X" value="SI">Tapa Gasoil</label>
              </div>
            </div> --><br>
            <div class="col-md-12">
                <label for="comment">Informe de inspeccion</label>
                <textarea class="form-control" name="observacion" rows="5" id="comment"></textarea>
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