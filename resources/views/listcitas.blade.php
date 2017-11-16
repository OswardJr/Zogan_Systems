@include('layouts.headservices')

<br><div class="col-md-12">
@if(Session::get('message'))
<div class="col-md-10 col-md-offset-2">
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h3> {{ Session::get('message') }}</h3>
  </div>
</div>
@endif
</div>
<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <h3>Listado de Citas Programadas</h3>
      <div class="text-right nuevo-veh">
              <a href="{{ url('/reparaciones/create') }}" title="Registrar Corredor de Seguro" class="btn btn-nuevo"><span class="fa fa-plus"></span></a>
            </div>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Citas</strong></h4></div>
          <div class="input-group">
            <span class="input-group-addon"><strong>Buscar</strong></span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese acá los datos que desea buscar por favor....">
          </div>
        <div class="row">
          <div class="col-md-12 ">
            <div class="table-responsive">
              <table data-toggle="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Propietario</th>
                    <th>Fecha de la Cita</th>
<!--                     <th>Archivos</th>
 -->                  </tr>
                </thead>
                <tbody class="buscar">
                  @foreach ($citas as $repar)
                  <tr>
                    <td>{{ $repar->placa}}</td>
                    <td>{{ $repar->marca}}</td>
                    <td>{{ $repar->modelo}}</td>
                    <td>{{ $repar->nombre_completo}}</td>
                    <td>{{ ($repar->selec_dia) }}</td>
<!--                     <td>
                      <a href="" class="btn btn-success" data-toggle="tooltip" title="Descargar"><i class="fa fa-download"></i>

                      </a>
                    </td> --> 
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
  </section><!-- /.content -->
</div>
</div>

@include('layouts.footer')

<script>
  $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });  
</script>

<!-- @include('layouts.headservices')
<br><div class="col-md-12">
</div>
<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <h3>Citas</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong></strong></h4></div>
        <div class="row">
          <div class="col-md-12 ">
            <div id='asd'></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div> -->
<!--         <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

<script>
                  $(document).ready(function() {
                    $('#asd').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,basicWeek,basicDay'
                        },
                        lang: 'es',
                        eventLimit: true, // allow "more" link when too many events
                        events: [{
                            title: 'Arana jhonny',
                            url: 'google.com',
                            start: '2017-10-08T08:30:00'
                        }, {
                            title: 'Long Event',
                            start: '2017-10-18T16:00:00',
                        }]
                    });

                });
</script>
@include('layouts.footer') -->
