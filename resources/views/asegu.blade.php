@include('layouts.headservices')

<div class="page-content-wrapper" style="">
  <div class="page-content">
    <div class="col-md-12">
    @if(Session::get('message'))
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" style="color: black" data-dismiss="alert" aria-hidden="true">&times;</button>
        <center><strong><h3> {{ Session::get('message') }}</h3></strong></center>
      </div>
    </div>
    @endif
        <div class="text-right nuevo-veh">
          <a href="{{ route('pdfasegu',['download'=>'pdf']) }}" target="_blank" title="Descargar Listado" class="btn btn-default"><span class="fa fa-download"></span></a>              
      </div>  
    </div>
    <section class="content">
      <h3>Listado de Aseguradoras</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Aseguradoras</strong></h4></div>
          <div class="input-group">
            <span class="input-group-addon"><strong>Buscar</strong></span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingrese acá los datos que desea buscar por favor.">
          </div>
        <div class="row">
          <div class="col-md-12 ">
            <div class="table-responsive">
              <table data-toggle="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Cédula/Rif</th>
                    <th>Denominación</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody class="buscar">
                  @foreach ($aseguradoras as $asegu)
                  <tr>
                    <td>{{ ($asegu->rif) }}</td>
                    <td>{{ ($asegu->denominacion) }}</td>
                    <td>{{ ($asegu->telefono) }}</td>
                    <td>{{ ($asegu->email) }}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            {{ $aseguradoras->links() }}


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