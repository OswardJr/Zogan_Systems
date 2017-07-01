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
      <h3>Listado de Propietarios</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><strong>Propietarios</strong></div>
        <div class="row">
          <div class="col-md-12 ">
            <div class="table-responsive">
              <table data-toggle="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Cédula/Rif</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($propietarios as $prop)
                  <tr>
                    <td>{{ $prop->rif}}</td>
                    <td>{{ ($prop->nombre) }}</td>
                    <td>{{ ($prop->apellido) }}</td>
                    <td>{{ ($prop->email) }}</td>
                    <td>
                      <a href="{{ route('propietarios.show', $prop->id) }}" class="btn btn-buscar" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i>

                      </a>

                      <a href="{{ route('propietarios.edit', $prop->id) }}" class="btn btn-editar" data-toggle="tooltip" title="Actualizar"><i class="fa fa-pencil"></i>

                      </a>

                      <a href="{{ url('/listprop', $prop->id) }}" class="btn btn-delete" data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash"></i>

                      </a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            {{ $propietarios->links() }}


          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
  </section><!-- /.content -->
</div>
</div>

@include('layouts.footer')
