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
              <a href="{{ url('/citas/create') }}" title="Asignar Cita" class="btn btn-nuevo"><span class="fa fa-plus"></span></a>
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
                  </tr>
                </thead>
                <tbody class="buscar">
                  @foreach ($citas as $repar)
                  <tr>
                    <td>{{ $repar->placa}}</td>
                    <td>{{ $repar->marca}}</td>
                    <td>{{ $repar->modelo}}</td>
                    <td>{{ $repar->nombre_completo}}</td>
                    <td>{{ ($repar->selec_dia) }}</td>
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