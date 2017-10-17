@include('layouts.headuser')

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
      <h3>Usuarios Registrados</h3>
      <div class="text-right nuevo-veh">
              <a href="{{ url('/usuarios/create') }}" class="btn btn-success"><span class="fa fa-list"><strong> Nuevo Usuario</strong></span></a>
            </div>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Usuarios</strong></h4></div>
        <div class="row">
          <div class="col-md-12 ">
                  <div class="table-responsive">
              <table data-toggle="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th colspan="3">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($usuarios as $usu)
                  <tr>
                    <td>{{ ($usu->id) }}</td>
                    <td>{{ ($usu->name) }}</td>
                    <td>{{ ($usu->email) }}</td>
                    <td>{{ ($usu->rol) }}</td>
                    <td>
                      <a href="{{ route('usuarios.show', $usu->id) }}" class="btn btn-buscar" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i>

                      </a>
                    </td>  
                    
                    <td>
                      <a href="{{ route('usuarios.edit', $usu->id) }}" class="btn btn-editar" data-toggle="tooltip" title="Actualizar"><i class="fa fa-pencil"></i>
                      </a>
                    </td>  

                    <td>
                      <form action="{{ route('usuarios.destroy', $usu->id) }}" method="post">
                        <input name="_method" type="hidden" value="DELETE">
                          <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" onclick="if(!confirm('¿Desea eliminar al analista?'))event.preventDefault();" class="btn btn-delete" data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash"></i></button>

                      </form>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            {{ $usuarios->links() }}


          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
  </section><!-- /.content -->
</div>
</div>

@include('layouts.footer')
