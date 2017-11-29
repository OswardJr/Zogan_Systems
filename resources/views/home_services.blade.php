@include('layouts.headservices')

<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <h3>Módulo de Servicios</h3>
      <hr>
          <div class="col-md-12 ">
              <img src="{{asset('/img/logo.png')}}" alt="logo" style="height:300px; width:230px;float: right; margin-top: 50px" class="logo-default" />
          </div>
<!--       <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Vehículos Registrados</strong></h4></div>
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


          </div>
      </div>
    </div>
  </div> -->
</section><!-- /.content -->

</div>
</div>

@include('layouts.footer')
