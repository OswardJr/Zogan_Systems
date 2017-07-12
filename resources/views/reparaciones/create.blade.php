@include('layouts.headservices')

<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <div class="row">

        <div class="col-md-12">
         <div class="col-md-9">
          <h2>Orden de Reparación</h2>
        </div>
        <div class="col-md-3">
          <div class="panel-body ">
            <h4><strong>Número:</strong> {{$id}}</h4>
          </div>
        </div>
      </div>
    </div>


    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Datos del Propietario
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <form method="post" action="{{ url('/reparaciones') }}">
              <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group col-lg-4">
                <label>Cédula / Rif:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="rif" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="V-20989357" required="true" >
              </div>
              <div class="form-group col-lg-4">
                <label>Apellidos y Nombres del Asegurado:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="nombre_completo" onkeyup="this.value=this.value.toUpperCase()" id="" class="form-control" placeholder="Pacheco Requena Osward José" required="true" >
              </div>
              <div class="form-group col-lg-4">
                <label>Teléfono:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="telefono" id="" class="form-control" placeholder="Pacheco Requena Osward José" required="true" >
              </div>
              <div class="form-group col-lg-4">
                <label>Correo:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="email" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="Pacheco Requena Osward José" required="true" >
              </div>
              <div class="form-group col-lg-4">
                <label for="">Seleccione la Aseguradora</label>
                <select name="one" class="form-control">
                  <option></option>
                  @foreach ($aseguradoras as $asegu)
                  <option value="{{ $asegu->id }}">{{ $asegu->denominacion }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label>Fecha de Ocurrencia del Siniestro:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="fecha_ocu" id="" class="form-control" placeholder="25-11-2016" required="true" >
              </div>
              <div class="form-group col-lg-4">
                <label>Número de Poliza:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="numero" id="" class="form-control" placeholder="93-56-2399217" >
              </div>
              <div class="form-group col-lg-4">
                <label>Número del Certificado / Recibo:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="num_certificado" id="" class="form-control" placeholder="0/4739494" >
              </div>
              <div class="form-group col-lg-4">
                <label>Número del Siniestro:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="nro_siniestro" id="" class="form-control" placeholder="93-562388688" >
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Datos del Vehículo
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <div class="form-group col-md-3">
                <label>Placa:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="placa" id="" maxlength="7" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="D1O5V3N" >
              </div>
              <div class="form-group col-md-3">
                <label>Marca:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="marca" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="CHEVROLET" required="true" >
              </div>
              <div class="form-group col-md-3">
                <label>Modelo:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="modelo" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="NHR" required="true" >
              </div>
              <div class="form-group col-md-3">
                <label>Tipo:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="tipo" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="FURGÓN" required="true" >
              </div>
              <div class="form-group col-md-3">
                <label>Año:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="number" name="anio" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="2013" >
              </div>
              <div class="form-group col-md-3">
                <label>Color:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="color" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="BLANCO" >
              </div>
              <div class="form-group col-md-3">
                <label>Serial del Motor:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="serial_motor" onkeyup="this.value=this.value.toUpperCase()" id="" class="form-control" placeholder="326488" >
              </div>
              <div class="form-group col-md-3">
                <label>Serial de la Carrocería:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="serial_carro" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" placeholder="UWRUU38484NXWJD23" >
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Datos del Analista
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
             <div class="col-lg-offset-1 col-lg-4">
              <div class="form-group">
                <label for="">Seleccione el Analista</label>
                <select name="two" class="form-control">
                  <option></option>
                  @foreach ($analistas as $analis)
                  <option value="{{ $analis->id }}">{{ $analis->nombre }} {{ $analis->apellido }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Notas / Observaciones</label>
                <textarea name="notas" class="form-control" onkeyup="this.value=this.value.toUpperCase()"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFourth">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
              Detalles de Pagos
            </a>
          </h4>
        </div>
        <div id="collapseFourth" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
           <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Mano de Obra:</label>
              <input type="text" name="mano_obra" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="fecha_nac">Total de Repuestos:</label>
              <input type="text" name="total_repues" class="form-control" placeholder="bsf" required="required">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Depreciación / Penalización:</label>
              <input type="text" name="depreciacion" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Depre. Rep:</label>
              <input type="text" name="depre_repues" placeholder="bsf" class="form-control">
            </div>
          </div>
          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Mecánica / Otros:</label>
              <input type="text" name="mecanica_otros" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="fecha_nac">Total Accesorios:</label>
              <input type="text" name="total_accesorios" class="form-control" placeholder="bsf" required="required">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Sub-total MO:</label>
              <input type="text" name="subtotal_mo" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Deprec. Acc(-):</label>
              <input type="text" name="depre_acce" placeholder="bsf" class="form-control">
            </div>
          </div>
          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Otros Gastos:</label>
              <input type="text" name="otros_gastos" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="fecha_nac">Dif.S / Repuestos Taller:</label>
              <input type="text" name="repues_taller" class="form-control" placeholder="bsf" required="required">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Total Mano de Obra:</label>
              <input type="text" name="tot_manobra" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Manejo de Rep/Acc:</label>
              <input type="text" name="manejo_repues" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-6">
            <div class="form-group">
              <br><h5><strong>Total Mano de Obra/Mecánica/Repuestos/Accesorios:</strong></h5>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
              <br><input type="text" name="tot_manobra" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <br><label for="">Deducción:</label>
              <input type="text" name="deduccion" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <br><label for="">Órdenes de Repuestos / Accesorios:</label>
              <input type="text" name="ordenes_repues" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Desc. Prepago(-):</label>
              <input type="text" name="desc_prepago" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Repuestos Otros Suplidores:</label>
              <input type="text" name="repues_otros" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Monto:</label>
              <input type="text" name="monto" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Depreciación:</label>
              <input type="text" name="depreciacion_two" placeholder="bsf" class="form-control">
            </div>
          </div>


          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">I.V.A:</label>
              <input type="text" name="iva" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Accesorios Otros Suplidores:</label>
              <input type="text" name="accesorios" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Deducible Póliza:</label>
              <input type="text" name="deducible_p" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Depreciación(-):</label>
              <input type="text" name="depreciacion_nega" placeholder="bsf" class="form-control">
            </div>
          </div>


          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Sub-total:</label>
              <input type="text" name="subtotal" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Total Órdenes Rep/Acc:</label>
              <input type="text" name="total_ordenes_acc" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">I.S.L.R:</label>
              <input type="text" name="islr" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Monto a Cargo del Asegurado:</label>
              <input type="text" name="monto_asegu" placeholder="bsf" class="form-control">
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Total Orden de Reparación:</label>
              <input type="text" name="monto_final" placeholder="bsf" class="form-control">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFive">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Descripción de Daños / Reparación y Mecánica
          </a>
        </h4>
      </div>
      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          <div class="form-group col-md-6 ">
            <label>Descripción</label>
            <textarea type="text" name="descripcion_daños" placeholder="PUERTA DERECHA (CAMIÓN)" onkeyup="this.value=this.value.toUpperCase()" class="form-control"></textarea>
          </div>
          <div class="form-group col-md-6 ">
            <label>Tipo de Daño</label>
            <textarea type="text" name="tipos_daños" placeholder="REPARAR Y PINTAR INSTALAR" onkeyup="this.value=this.value.toUpperCase()" class="form-control"></textarea>
          </div>      </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Repuestos
            </a>
          </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <div class="form-group col-md-6 ">
              <label>Selección de Repuestos</label>
              <textarea type="text" name="selec_repues" placeholder="PUERTA DERECHA (CAMIÓN)" onkeyup="this.value=this.value.toUpperCase()" class="form-control"></textarea>
            </div>
            <div class="form-group col-md-6 ">
              <label>Repuestos No Disponibles</label>
              <textarea type="text" name="no_dispo" placeholder="REPARAR Y PINTAR INSTALAR" onkeyup="this.value=this.value.toUpperCase()" class="form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Operarios
            </a>
          </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <div class="form-group col-md-6 ">
              <label>Latonero</label>
              <select name="three" class="form-control">
                <option value=""></option>
                @foreach ($latoneros as $lato)
                <option value="{{ $lato->id }}">{{ $lato->nombre }} {{ $lato->apellido }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6 ">
              <label>Pintor</label>
              <select name="fourth" class="form-control">
                <option value=""></option>
                @foreach ($pintores as $pin)
                <option value="{{ $pin->id }}">{{ $pin->nombre }} {{ $pin->apellido }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-offset-5 col-md-7">
      <button type="submit" class="btn btn-guardar fa fa-save"></button>
      <button type="reset" class="btn btn-refresh fa fa-repeat  "></button>
    </div>
  </form>
</div>
</div>
</div>

@include('layouts.footer')


<script src="{{asset('components/invoice.tag')}}" type="riot/tag"></script>
<script>
  $(document).ready(function(){
    riot.mount('invoice');
  })
</script>

