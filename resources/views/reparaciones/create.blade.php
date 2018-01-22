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
            <h4><strong>Número:</strong> 0000{{$id}}</h4>
          </div>
        </div>
          <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>        
      </div>
    </div>
<hr>

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
            <form method="post" action="{{ url('/reparaciones') }}" id="crear_clientes">
              <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group col-lg-4">
                <label>Cédula / Rif:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="rif" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" value="{{ old('rif') }}"  placeholder="V-20989357-0" pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser V-12345678-9 J-12345678-9 dependiendo sea el caso." required="true" >
              </div>

              <div class="form-group col-lg-4">
                <label>Apellidos y Nombres del Asegurado:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="nombre_completo" onkeyup="this.value=this.value.toUpperCase()" pattern="[A-Z ]+" title="Ingrese solo letras." id="" class="form-control" value="{{ old('nombre_completo') }}" placeholder="PACHECO REQUENA OSWARD JOSE" required="true" >
              </div>
              <div class="form-group col-lg-4">
                <label>Teléfono:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="telefono" id="" pattern="^([0-9]{4})([0-9]{7})$" class="form-control" placeholder="0412XXXXXXX" maxlength="11" onkeypress="return justNumbers(event);" title="El formato debe ser 04121234567" required="true" value="{{ old('telefono') }}" required>
              </div>
              <div class="form-group col-lg-4">
                <label>Email:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="email" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="El formato debe ser contact@example.com" placeholder="contact@example.com" required="true" value="{{ old('email') }}" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="">Seleccione la Aseguradora<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <select name="one" class="form-control" required>
                  <option></option>
                  @foreach ($aseguradoras as $asegu)
                  <option value="{{ $asegu->id }}">{{ $asegu->denominacion }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label>Fecha de Ocurrencia del Siniestro:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="date" name="fecha_ocu" id="" max="{{ date('Y-m-d') }}" class="form-control" placeholder="25-11-2016" value="{{ old('fecha_ocu') }}" required="true" required>
              </div>
              <div class="form-group col-lg-4">
                <label>Número de Poliza:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="numero" maxlength="16" id="" class="form-control" placeholder="93-56-2399217" pattern="^([0-9]{2})-([0-9]{2})-([0-9]{10})$" title="El formato de la póliza debe ser el siguiente: xx-xx-xxxxxxxxxx (Si el dígito del tercer reglón es menor a los 10 dígitos por defecto, rellene desde la izquierda del mismo con ceros '0'.)" value="{{ old('numero') }}" required>
              </div>
              <div class="form-group col-lg-4">
                <label>Número del Certificado / Recibo:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="num_certificado" title="El formato del número del recibo debe ser el siguiente: xxxxxxxxxx. (Si el número es menor a los diez dígitos por defecto, rellene con ceros '0', al inicio del mismo)." id="" class="form-control" placeholder="4739494" maxlength="10" value="{{ old('num_certificado') }}" required>
              </div>
              <div class="form-group col-lg-4">
                <label>Número del Siniestro:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" maxlength="13" name="nro_siniestro" pattern="^([0-9]{2})-([0-9]{10})$" title="El formato del número del siniestro debe ser el siguiente: xx-xxxxxxxxxx (Si el dígito del segundo reglón es menor a los 10 dígitos por defecto, rellene desde la izquierda del mismo con ceros '0'.)" value="{{ old('nro_siniestro') }}" id="" class="form-control" placeholder="93-562388688" required>
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
                <input type="text" name="placa" id="" minlength="5" maxlength="7" onkeyup="this.value=this.value.toUpperCase()" value="{{ old('placa') }}" class="form-control" placeholder="D1O5V3N" required>
              </div>
              <div class="form-group col-md-3">
                <label>Marca:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <select name="marca" class="form-control" required>
                  <option></option>
                  <option value="Alfa Romeo">Alfa Romeo</option>
                  <option value="Aston Martin">Aston Martin</option>
                  <option value="Audi">Audi</option>
                  <option value="Autovaz">Autovaz</option>
                  <option value="Bentley">Bentley</option>
                  <option value="Bmw">Bmw</option>
                  <option value="Cadillac">Cadillac</option>
                  <option value="Caterham">Caterham</option>
                  <option value="Chevrolet">Chevrolet</option>
                  <option value="Chrysler">Chrysler</option>
                  <option value="Citroen">Citroen</option>
                  <option value="Daihatsu">Daihatsu</option>
                  <option value="Dodge">Dodge</option>
                  <option value="Ferrari">Ferrari</option>
                  <option value="Fiat">Fiat</option>
                  <option value="Ford">Ford</option>
                  <option value="Honda">Honda</option>
                  <option value="Hummer">Hummer</option>
                  <option value="Hyundai">Hyundai</option>
                  <option value="Isuzu">Isuzu</option>
                  <option value="Jaguar">Jaguar</option>
                  <option value="Jeep">Jeep</option>
                  <option value="Kia">Kia</option>
                  <option value="Lamborghini">Lamborghini</option>
                  <option value="Lancia">Lancia</option>
                  <option value="Land Rover">Land Rover</option>
                  <option value="Lexus">Lexus</option>
                  <option value="Lotus">Lotus</option>
                  <option value="Maserati">Maserati</option>
                  <option value="Mazda">Mazda</option>
                  <option value="Mercedes Benz">Mercedes Benz</option>
                  <option value="MG">MG</option>
                  <option value="Mini">Mini</option>
                  <option value="Mitsubishi">Mitsubishi</option>
                  <option value="Morgan">Morgan</option>
                  <option value="Nissan">Nissan</option>
                  <option value="Opel">Opel</option>
                  <option value="Peugeot">Peugeot</option>
                  <option value="Porsche">Porsche</option>
                  <option value="Renault">Renault</option>
                  <option value="Rolls Royce">Rolls Royce</option>
                  <option value="Rover">Rover</option>
                  <option value="Saab">Saab</option>
                  <option value="Seat">Seat</option>
                  <option value="Skoda">Skoda</option>
                  <option value="Smart">Smart</option>
                  <option value="Ssangyong">Ssangyong</option>
                  <option value="Subaru">Subaru</option>
                  <option value="Suzuki">Suzuki</option>
                  <option value="Tata">Tata</option>
                  <option value="Toyota">Toyota</option>
                  <option value="Volkswagen">Volkswagen</option>
                  <option value="Volvo">Volvo</option>                  
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Modelo:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="modelo" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" value="{{ old('modelo') }}" placeholder="NHR" required="true" required>
              </div>
              <div class="form-group col-md-3">
                <label>Tipo:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="tipo" id="" onkeyup="this.value=this.value.toUpperCase()" class="form-control" value="{{ old('tipo') }}" placeholder="FURGÓN" required="true" required>
              </div>
              <div class="form-group col-md-3">
                <label>Año:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="number" name="anio" id="" min="0" onkeyup="this.value=this.value.toUpperCase()" class="form-control" value="{{ old('anio') }}" placeholder="2013" required>
              </div>
              <div class="form-group col-md-3">
                <label>Color:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <select name="color" class="form-control" required>
                  <option></option>
                  <option value="Aguamarina">Aguamarina</option>
                  <option value="Aguamarina">Aguamarina</option>
                  <option value="Amaranto">Amaranto</option>
                  <option value="Amarillo">Amarillo</option>
                  <option value="Ámbar">Ámbar</option>
                  <option value="Añil">Añil</option>
                  <option value="Argén">Argén</option>
                  <option value="Azul">Azul</option>
                  <option value="Beis">Beis</option>
                  <option value="Blanco">Blanco</option>
                  <option value="Borgoña">Borgoña</option>
                  <option value="Caqui">Caqui</option>
                  <option value="Carmesí">Carmesí</option>
                  <option value="Carmín">Carmín</option>
                  <option value="Carnación">Carnación</option>
                  <option value="Celeste">Celeste</option>
                  <option value="Cerúleo">Cerúleo</option>
                  <option value="Chartreuse">Chartreuse</option>
                  <option value="Cian">Cian</option>
                  <option value="Cinzolino">Cinzolino</option>
                  <option value="Coral">Coral</option>
                  <option value="Crudo">Crudo</option>
                  <option value="Escarlata">Escarlata</option>
                  <option value="Esmeralda">Esmeralda</option>
                  <option value="Fucsia">Fucsia</option>
                  <option value="Gamboge">Gamboge</option>
                  <option value="Granate">Granate</option>
                  <option value="Gris">Gris</option>
                  <option value="Jade">Jade</option>
                  <option value="Lavanda">Lavanda</option>
                  <option value="Leonado">Leonado</option>
                  <option value="Lila">Lila</option>
                  <option value="Magenta">Magenta</option>
                  <option value="Malva">Malva</option>
                  <option value="Marrón">Marrón</option>
                  <option value="Naranja">Naranja</option>
                  <option value="Negro">Negro</option>
                  <option value="Ocre">Ocre</option>
                  <option value="Oro">Oro</option>
                  <option value="Púrpura">Púrpura</option>
                  <option value="Plata">Plata</option>
                  <option value="Rojo">Rojo</option>
                  <option value="Rosa">Rosa</option>
                  <option value="Salmón">Salmón</option>
                  <option value="Sepia">Sepia</option>
                  <option value="Siena">Siena</option>
                  <option value="Terracota">Terracota</option>
                  <option value="Turquesa">Turquesa</option>
                  <option value="Turqui">Turqui</option>
                  <option value="Verde">Verde</option>
                  <option value="Violeta">Violeta</option>
                  <option value="Zafiro">Zafiro</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Serial del Motor:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="serial_motor" onkeyup="this.value=this.value.toUpperCase()" id="" maxlength="30" class="form-control" value="{{ old('serial_motor') }}" placeholder="326488" required>
              </div>
              <div class="form-group col-md-3">
                <label>Serial de la Carrocería:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="serial_carro" id="" onkeyup="this.value=this.value.toUpperCase()" maxlength="20" class="form-control" value="{{ old('serial_carro') }}" placeholder="UWRUU38484NXWJD23" required>
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
                <label for="">Seleccione el Analista<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <select name="two" class="form-control" required>
                  <option></option>
                  @foreach ($analistas as $analis)
                  <option value="{{ $analis->id }}">{{ $analis->nombre }} {{ $analis->apellido }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Notas / Observaciones<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <textarea name="notas" class="form-control" value="{{ old('notas') }}" onkeyup="this.value=this.value.toUpperCase()" required></textarea>
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
              <label for="">Mano de Obra:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input onkeyup="actSubTotal()" id="mo" type="number" step="any" name="mano_obra" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Mecánica / Otros:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input onkeyup="actSubTotal()" id="me" type="number" step="any" name="mecanica_otros" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Sub-total:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input  id="subtotal_mo" type="number" step="any" name="subtotal_mo" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Otros Gastos:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input onkeyup="actSubTotal()" id="og" type="number" step="any" name="otros_gastos" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-6">
            <div class="form-group">
              <br><h5><strong>Total Mano de Obra/Mecánica :</strong></h5>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
              <br><input id="total_mo" type="number" step="any" name="tot_manobra" placeholder="bsf" min="0" class="form-control" >
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Sub-total:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input  id="sb" type="number" step="any" name="subtotal" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">I.V.A:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input  id="iva" type="number" step="any" name="iva" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Deducible Póliza:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input type="number" id="dedu" onkeyup="actTotal()" step="any" name="deducible_p" placeholder="bsf" min="0" class="form-control" value="0" required>
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">I.S.L.R:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input value="0"  onkeyup="actTotal()" id="islr" type="number" step="any" name="islr" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-1 col-lg-4">
            <div class="form-group">
              <label for="">Monto a Cargo del Asegurado:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input value="0"  type="number" step="any" name="monto_asegu" placeholder="bsf" min="0" class="form-control" required>
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-4">
            <div class="form-group">
              <label for="">Total Orden de Reparación:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <input id="total"  type="number" step="any" name="monto_final" placeholder="bsf" min="0" class="form-control" required>
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
            <label>Descripción<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
            <textarea type="text" name="descripcion_daños" placeholder="PUERTA DERECHA (CAMIÓN)" onkeyup="this.value=this.value.toUpperCase()" class="form-control" required></textarea>
          </div>
          <div class="form-group col-md-6 ">
            <label>Tipo de Daño<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
            <textarea type="text" name="tipos_daños" placeholder="REPARAR Y PINTAR INSTALAR" onkeyup="this.value=this.value.toUpperCase()" class="form-control" required></textarea>
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
              <label>Selección de Repuestos<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <textarea type="text" name="selec_repues" placeholder="PUERTA DERECHA (CAMIÓN)" onkeyup="this.value=this.value.toUpperCase()" class="form-control" required></textarea>
            </div>
            <div class="form-group col-md-6 ">
              <label>Repuestos No Disponibles<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <textarea type="text" name="no_dispo" placeholder="REPARAR Y PINTAR INSTALAR" onkeyup="this.value=this.value.toUpperCase()" class="form-control" required></textarea>
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
              <label>Latonero<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <select name="three" class="form-control" required>
                <option value=""></option>
                @foreach ($latoneros as $lato)
                <option value="{{ $lato->id }}">{{ $lato->nombre }} {{ $lato->apellido }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6 ">
              <label>Pintor<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
              <select name="fourth" class="form-control" required>
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

<script type="text/javascript">
     function anular(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          return (tecla != 13);
     }
</script>

<script type="text/javascript">
    function actSubTotal() {
      var mo =  $('#mo').val() ? parseInt($('#mo').val()) : 0
      var me = $('#me').val() ? parseInt($('#me').val()) : 0
      var og = $('#og').val() ? parseInt($('#og').val()) : 0
      
      var su = me + mo;
      var to = me + mo + og;
      $('#subtotal_mo').val(su);
      $('#total_mo').val(to);
      actTotal()
    }
    
    function actTotal() {
      var sb =  $('#total_mo').val() ? parseInt($('#total_mo').val()) : 0
      var iva = sb * 0.12
      var islr = $('#islr').val() ? parseInt($('#islr').val()) : 0
      //var dedu = $('#dedu').val() ? parseInt($('#dedu').val()) : 0

      var total = sb + iva + islr;

      $('#sb').val(sb);
      $('#iva').val(iva);
      $('#total').val(total);

    }
    window.onload = function () {
        document.f.focus();
        document.crear_clientes.addEventListener('submit', validarFormulario);
    }
    function validarFormulario(evObject) {
        evObject.preventDefault();
        var todoCorrecto = true;
        var formulario = document.crear_clientes;
        for (var i=0; i<formulario.length; i++) {
            if(formulario[i].type =='text') {
             if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
                 swal ('No puede haber campos vacíos');
                 todoCorrecto=false;
             }
         }
     }
     if (todoCorrecto ==true) {formulario.submit();}
 }
</script>

<script>
    function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }  
</script>