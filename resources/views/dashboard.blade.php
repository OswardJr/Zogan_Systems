@include('layouts.headruta')

<div class="page-content-wrapper" style="">
  <div class="page-content">
    @if(Session::get('message'))
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5> {{ Session::get('message') }}</h5>
      </div>
    </div>
    @endif
    <div class="col-md-12">
      <div class="text-right nuevo-veh">
        <a href="{{ url('/reparaciones/create') }}" class="btn btn-info"><span class="fa fa-list"> Nueva Orden</span></a>
      </div>
    </div>
    <section class="content">
      <h3>Ruta dentro del Taller</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Vehículos en Reparación</strong></h4></div>
        <div class="row">
          <div class="col-md-12 ">
            <div class="table-responsive">
              <table class="table">
               <thead>
                 <tr>
                   <th>#</th>
                   <th>Placa</th>
                   <th>Marca / Modelo</th>
                   <th>Propietario</th>
                   <th>Estatus</th>
                   <th>Acciones</th>
                 </tr>
               </thead>
               <tbody>
                @foreach ($autos as $auto)
                <tr>
                  <th scope="row">{{ $auto->vehiculo_id}}</th>
                  <td>{{ strtoupper($auto->placa) }}</td>
                  <td>{{ strtoupper($auto->marca) }} - {{ strtoupper($auto->modelo)}}</td>
                  <td>{{ strtoupper($auto->nombre_completo) }}</td>
                  <td>{{ strtoupper($auto->status) }}</td>
                  <td>
                    @if ($auto->status == "RECEPCION")
                    <a class="btn btn-warning btn-xs" title="Recepción del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    @else
                    <a href="{{ url('recepcion') }}/{{ $auto->vehiculo_id }}" class="btn btn-warning btn-xs" title="Recepción del Vehículo"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    @endif
                    
                    @if ($auto->status == "COMPLETO")
                    <a class="btn btn-success btn-xs" title="Agregar revision al vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    @else
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    @endif

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>


@include('layouts.footer')
