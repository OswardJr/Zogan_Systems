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
                                          <h4><strong>Número:</strong> 0000001</h4>
                                        </div>
                                     </div>
                                  </div>                            
                          </div>

                            <div class="col-md-12 ">
                                <hr>
                                  <form action="" method="POST">
                                   <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Vehículo</h4>
                                  </center>
                                </div>

                              <div class="panel-body ">
                                    <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Placa<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="" id="search" class="form-control "title="El formato debe ser ABC105C"  placeholder="D10SV3N"  value="" required="true">
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button"  onClick="" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label>Marca<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Aveo" required="true" disabled="">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Modelo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="LT" required="true" disabled="">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Serial de Carrocería<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="XXXXXXXXXXXXX" disabled="">
                                    </div>  
                                    <div class="form-group col-md-6">
                                      <label>Serial del Motor<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="XXXXXXXXXXXXX" disabled="">
                                    </div> 
                                    <div class="form-group col-md-6">
                                      <label>Propietario<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="Transeral, C.A" disabled="">
                                    </div>                                            </div>
                              </div>

                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Órdenes del Seguro Incluídas en el Trabajo</h4>
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
                                    <th>Observaciones</th>
                                    <th>Sub Total</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">02/04/2017
                                    </td>
                                    <td>93-562388688</td>
                                    <td>93-562399217</td>
                                    <td>Ninguna</td>
                                    <td>235.650bsf</td>
                                    <td><a class="btn btn-buscar"><i class="fa fa-eye"></i></a>
                                            
                                            <a class="btn btn-agregar"><i class="fa fa-plus"></i>
                                    </a></td>
                                </tr> 

                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">03/04/2017
                                    </td>
                                    <td>93-562383388</td>
                                    <td>93-562399847</td>
                                    <td>Ninguna</td>
                                    <td>345.650bsf</td>
                                    <td>
                                        <a class="btn btn-buscar"><i class="fa fa-eye"></i>
                                            
                                        </a>

                                        <a class="btn btn-agregar"><i class="fa fa-plus"></i>
                                            
                                        </a>
                                    </td>
                                </tr> 

                                </tr>
                                </tbody>
                            </table>
                                </div>
                                </div>
                                <input type="hidden" name="" value="" />
                            </div>

                              <div class="panel panel-primary ">
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
                                </div>
                                </div>
                            </div>

                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos de la Cita</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                  <div class="form-group col-lg-offset-2 col-lg-4" id="sandbox-container">
                                    <label for="fecha_nac">Seleccione la Fecha</label>
                                    <div class="input-group date">
                                      <input type="text" class="form-control" name="fecha" id="fecha" placeholder="DD/MM/AAAA" required="required">
                                      <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-th"></i>
                                      </span>
                                    </div>
                                  </div>

                                  <div class="form-group col-lg-4 ">
                                    <div class="form-group">
                                      <label for="sel1">Seleccione la Hora</label>
                                      <select class="form-control" id="sel1" name="">
                                        <option value=""></option>
                                        <option>8:00 AM</option>
                                        <option>9:00 AM</option>
                                        <option>10:00 AM</option>
                                        <option>11:00 AM</option>
                                        <option>01:00 PM</option>
                                        <option>02:00 PM</option>
                                        <option>03:00 PM</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div id='calendar'></div>

                                </div>
                              </div>

                                      <div class="col-xs-offset-5 col-md-12">
                                          <button type="submit" class="btn btn-guardar fa fa-save"></button>
                                          <button type="reset" class="btn btn-refresh fa fa-repeat  "></button>
                                    </div>                          
                                    </form>
                                    </div>         
                            </div>                                    

<script>
$(function() {
    $("#search").keyup(function() {
        var keyword = $("#search").val();
        if(keyword=='') {
        } else {
            $.ajax({
                type: "POST",
                url: "{{ url('search-retailers') }}",
                data: {
                    'keyword': keywork,
                    '_token': '{{ csrf_token() }}',
                },
                dataType: 'html',
              cache: false,
              beforeSend: function(html) 
              {
                document.getElementById("live").innerHTML = ''; 
                $("#keyword").show();
                    $(".keyword").html(keyword);
                },
                success: function(html)
                {
                    $("#live").show();
                    $("#live").append(html);
                }
            });
        } return false;
    });
});
</script>
<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
</script>
@include('layouts.footer')   