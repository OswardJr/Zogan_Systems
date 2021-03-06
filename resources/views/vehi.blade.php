@include('layouts.headservices')

<div class="page-content-wrapper" style="">
  <div class="page-content">
        <div class="text-right nuevo-veh">
          <a href="{{ route('pdfvehi',['download'=>'pdf']) }}" target="_blank" title="Descargar Listado" class="btn btn-default"><span class="fa fa-download"></span></a>              
      </div>     
    <section class="content">
      <h3>Listado de Vehículos</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Vehículos</strong></h4></div>
        <div class="row">
          <div class="col-md-12 ">
            <div class="table-responsive">
              <table data-toggle="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($vehiculos as $vehi)
                  <tr>
                    <td>{{ ($vehi->placa) }}</td>
                    <td>{{ ($vehi->marca) }}</td>
                    <td>{{ ($vehi->modelo) }}</td>
                    <td>{{ ($vehi->color) }}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            {{ $vehiculos->links() }}


          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
  </section><!-- /.content -->
</div>
</div>

@include('layouts.footer')
