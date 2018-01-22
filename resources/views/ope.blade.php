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
          <a href="{{ route('pdfope',['download'=>'pdf']) }}" target="_blank" title="Descargar Listado" class="btn btn-default"><span class="fa fa-download"></span></a>              
      </div>    
    </div>
    <section class="content">
      <h3>Listado de Operarios</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Operarios</strong></h4></div>
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
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Labor</th>
                  </tr>
                </thead>
                <tbody class="buscar">
                  @foreach ($operarios as $ope)
                  <tr>
                    <td>{{ $ope->cedula}}</td>
                    <td>{{ ($ope->nombre) }}</td>
                    <td>{{ ($ope->apellido) }}</td>
                    <td>{{ ($ope->telefono) }}</td>
                    <td>{{ ($ope->tipo) }}</td>                    
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            {{ $operarios->links() }}


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