@include('layouts.headservices')

<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <div class="row">

        <div class="col-md-12">
         <div class="col-md-9">
          <h2>Asignación de Citas</h2>
        </div>
        <div class="col-md-3">
          <div class="panel-body ">
            <h4><strong>Número:</strong> 0000{{$id}}</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 ">
      <hr>
          <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>  
                
      <form action="{{ url('/citas') }}" method="POST" onkeypress="return anular(event)">
               <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">

       <div class="panel panel-primary">
        <div class="panel-heading ">
          <center>
            <h4>Datos del Vehículo</h4>
          </center>
        </div>

        <div class="panel-body ">
          <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
            <label>Placa<a class="campos-required" title="Campo Obligatorio."> *</a></label>
            <div class="input-group ">
             <input type="text " name="placa" class="form-control" id="placa" name="" placeholdesr="XXXXXXX" required>
             <span class="input-group-btn ">
               <button class="btn btn-buscar btn-flat fa fa-search"  onClick="buscar_vehiculo()" type="button"></button>
             </span>
           </div>
           <center><span id="mensaje" class="help-block"></span></center>
         </div>

         <div class="form-group col-md-6">
          <label>Marca<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
          <input type="text" name="" id="marca" class="form-control" placeholder="Aveo" required="true" disabled="">
        </div>
        <div class="form-group col-md-6">
          <label>Modelo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
          <input type="text" name="" id="modelo" class="form-control" placeholder="LT" required="true" disabled="">
        </div>
        <div class="form-group col-md-6">
          <label>Serial de Carrocería<a class="campos-required" title="Campo Obligatorio."> *</a></label>
          <input type="text" name="" id="serial_carro" pattern="" class="form-control" placeholder="XXXXXXXXXXXXX" disabled="">
        </div>
        <div class="form-group col-md-6">
          <label>Serial del Motor<a class="campos-required" title="Campo Obligatorio."> *</a></label>
          <input type="text" name="" id="serial_motor" pattern="" class="form-control" placeholder="XXXXXXXXXXXXX" disabled="">
        </div>
<!--           <div class="form-group col-md-6">
            <label>Propietario<a class="campos-required" title="Campo Obligatorio."> *</a></label>
            <input type="text" name="" id="" pattern="" class="form-control" placeholder="Transeral, C.A" disabled="">
          </div>  -->                                           
            </div>
        </div>

        <div class="panel panel-primary ">
          <div class="panel-heading ">
            <center>
              <h4>Órdenes del Seguro Incluídas en el Trabajo</h4>
            </center>
          </div>
          <div class="panel-body ">
           <div class="table-responsive">
            <table id="table" data-toggle="table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Poliza</th>
                  <th>Siniestro</th>
                  <th>Sub Total</th>
                  <th>Acción</th>
                </tr>
              </thead>

        </table>
      </div>
    </div>
    <input type="hidden" name="" value="" />
  </div>

<!--   <div class="panel panel-primary ">
    <div class="panel-heading ">
      <center>
        <h4>Órdenes del Seguro Seleccionadas</h4>
      </center>
    </div>
    <div class="panel-body ">
     <div class="table-responsive">
      <table data-toggle="table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Siniestro</th>
            <th>Poliza</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

          <tr id="tr-id-1" class="tr-class-1">
            <td id="td-id-1" class="td-class-1">03/04/2017
            </td>
            <td>93-562383388</td>
            <td>93-562399847</td>
            <td><a>
              <button class="btn btn-delete"><i class="fa fa-trash"></i>

              </button>
            </a></td>
          </tr>

        </tr>
      </tbody>
    </table>
  </div> -->

  <div class="panel panel-primary ">
    <div class="panel-heading ">
      <center>
        <h4>Datos de la Cita</h4>
      </center>
    </div>
    <div class="panel-body ">
      <div class="form-group col-lg-offset-4 col-lg-4" id="sandbox-container">
        <label for="fecha_nac">Seleccione la Fecha</label>
        <div class="input-group date">
          <input type="date" class="form-control" min="{{ date('Y-m-d') }}" name="fecha" id="fecha" value="{{ date('Y-m-d') }}"  required oninvalid="setCustomValidity('No puede elegir fechas anteriores respecto al día actual.')">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-th"></i>
          </span>
        </div>
      </div>

      <!-- <div id='calendar'></div> -->

    </div>
  </div>

  <div class="col-xs-offset-5 col-md-12">
    <button type="submit" class="btn btn-guardar fa fa-save"></button>
    <button type="reset" class="btn btn-refresh fa fa-repeat  "></button>
  </div>
</form>
</div>
</div>
@include('layouts.footer')

<script>
function validateForm() {
    var frm = document.forms["form"];
    if (!frm["one"].checked) return;

    var x = frm["nrumowy"].value;
    if (x == null || x == "") {
        alert("Numer umowy musi zostać uzupełniony.");
        return false;
    }
}
</script>

<script type="text/javascript">
  $(function() {
    $('#placa').autocomplete({
      source: '/Zogan_Systems/public/vehiculos/show'
    })
  })
  function buscar_vehiculo() {
    let placa = $('#placa').val()
    if (placa==null){
      $('placa').focus()
      alert('Placa no registrada')
    }
    else if (placa == false) {
      $('placa').focus()
      alert('Introduzca la digitación de la placa por favor')
    }
    $.ajax({
      url: '/Zogan_Systems/public/vehiculos/getVehiculo/' + placa,
      type: 'GET',
      dataType: 'JSON',
      success: function(data) {
        const thisData = data['auto'][0]
        const thisData1 = data['ordenes'][0]
        $('#marca').val(thisData.marca)
        $('#modelo').val(thisData.modelo)
        $('#serial_carro').val(thisData.serial_carro)
        $('#serial_motor').val(thisData.serial_motor)
        $('#placa').val(thisData.placa)

        $('#table').append(`
        <tbody>
          <tr>
            <td>${thisData1.fecha_ocu}</td>
            <td>${thisData1.subtotal}</td>
            <td>${thisData1.nro_siniestro}</td>
            <td>${thisData1.num_certificado}</td>
            <td>
              <label><input type="checkbox" title="Selecciona la casilla" id="one" name="orden_id" value="${thisData1.id}" required oninvalid="setCustomValidity('El campo es obligatorio.')">  Seleccionar</label>
            </td>
          </tr>
        </tbody>
          `)
      },
      error: function (e, status) {

            if (e.status == 500)
                alert("Placa no registrada");
        }
    })
  }
</script>

<script type="text/javascript">
     function anular(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          return (tecla != 13);
     }
</script>

<script>
  var check = document.getElementById("one");

  check.addEventListener("keyup", function (event) {
    if (check.validity.typeMismatch) {
      check.setCustomValidity("Er coño de su madre nojoda");
    } else {
      check.setCustomValidity("");
    }
  });  
</script>
<!-- <script>
  $(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
      })

  });
</script> -->
