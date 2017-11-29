@include('layouts.headruta')

<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <h3>Módulo: Ruta del Taller</h3>      
      <hr>

          <div class="col-md-12 ">
              <img src="{{asset('/img/logo.png')}}" alt="logo" style="height:300px; width:230px;float: right; margin-top: 50px" class="logo-default" />
          </div>

<!--       <div class="panel panel-primary">
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
                   <th>Poliza</th>
                   <th>Nº del Siniestro</th>
                 </tr>
               </thead>
               <tbody>
                @foreach ($autos as $auto)
                <tr>
                  <th scope="row">{{ $auto->vehiculo_id}}</th>
                  <td>{{ strtoupper($auto->placa) }}</td>
                  <td>{{ strtoupper($auto->marca) }} - {{ strtoupper($auto->modelo)}}</td>
                  <td>{{ strtoupper($auto->nombre_completo) }}</td>
                  <td>{{ strtoupper($auto->numero) }}</td>
                  <td>{{ strtoupper($auto->nro_siniestro) }}</td>

                    @if ($auto->status == "RECEPCION")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>                 
                    <a href="#" class="btn btn-default btn-xs disabled" target="_blank" data-toggle="tooltip" role="button" title="Descargar"><i class="fa fa-download"></i>
                    </a>                       
                    @elseif ($auto->status == "DESARMADO")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    <a href="#" class="btn btn-default btn-xs disabled" target="_blank" data-toggle="tooltip" role="button" title="Descargar"><i class="fa fa-download"></i>                    
                    @elseif ($auto->status == "LATONERIA")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    <a href="#" class="btn btn-default btn-xs disabled" target="_blank" data-toggle="tooltip" role="button" title="Descargar"><i class="fa fa-download"></i>                    
                    @elseif ($auto->status == "PINTURA")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    <a href="#" class="btn btn-default btn-xs disabled" target="_blank" data-toggle="tooltip" role="button" title="Descargar"><i class="fa fa-download"></i>                    
                    @elseif ($auto->status == "PREPARACION")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    <a href="#" class="btn btn-default btn-xs disabled" target="_blank" data-toggle="tooltip" role="button" title="Descargar"><i class="fa fa-download"></i>                    
                    @elseif ($auto->status == "PULITURA")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    <a href="#" class="btn btn-default btn-xs disabled" target="_blank" data-toggle="tooltip" role="button" title="Descargar"><i class="fa fa-download"></i>                    
                    @elseif ($auto->status == "LIMPIEZA")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a href="{{ url('revision') }}/{{ $auto->vehiculo_id }}" class="btn btn-success btn-xs" title="Actualizaciones del Vehículo"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    <a href="#" class="btn btn-default btn-xs disabled" target="_blank" data-toggle="tooltip" role="button" title="Descargar"><i class="fa fa-download"></i>                    
                    @elseif ($auto->status == "COMPLETO")
                    <a class="btn btn-warning btn-xs disabled" title="Recepción del Vehículo" role="button"><i class="fa fa-clipboard fa-lg"></i>
                    </a>
                    <a class="btn btn-success btn-xs disabled" title="Agregar revision al vehículo" role="button"><i class="fa fa-camera fa-lg"></i>
                    </a>
                    <a href="#" class="btn btn-default btn-xs" target="_blank" data-toggle="tooltip" title="Descargar"><i class="fa fa-download"></i> 
                    @endif
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div> -->
</section>

</div>
</div>

@include('layouts.footer')
