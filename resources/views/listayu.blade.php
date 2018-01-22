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
              <a href="{{ url('/ayudantes/create') }}" title="Registrar Obrero" class="btn btn-nuevo"><span class="fa fa-plus"></span></a>
            </div>    
    </div>
    <section class="content">
      <h3>Listado de Obreros</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Obreros</strong></h4></div>
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
                    <th>Teléfono</th>
                    <th colspan="3">Acciones</th>
                  </tr>
                </thead>
                <tbody class="buscar">
                  @foreach ($ayudantes as $ayu)
                  <tr>
                    <td>{{ $ayu->cedula}}</td>
                    <td>{{ ($ayu->nombre) }}</td>
                    <td>{{ ($ayu->telefono) }}</td>
                    <td>
                      <a href="{{ route('ayudantes.show', $ayu->id) }}" class="btn btn-buscar" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i>

                      </a>
                      </td>

                      <td>
                      <a href="{{ route('ayudantes.edit', $ayu->id) }}" class="btn btn-editar" data-toggle="tooltip" title="Actualizar"><i class="fa fa-pencil"></i>
                      </a>
                      </td>
                      <td>
                      <form action="{{ route('ayudantes.destroy', $ayu->id) }}" method="post">
                        <input name="_method" type="hidden" value="DELETE">
                          <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" onclick="if(!confirm('¿Desea eliminar al obrero?'))event.preventDefault();" class="btn btn-delete" data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash"></i></button>

                      </form>
                    </td>
                    
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            {{ $ayudantes->links() }}


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