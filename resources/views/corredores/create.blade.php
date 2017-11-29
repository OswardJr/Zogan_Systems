@include('layouts.headservices')

<div class="page-content-wrapper" style="">
  <div class="page-content">                    
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          @if(count($errors) > 0)
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            @foreach($errors->all() as $error)
            <h3>{{ $error }}</h3>
            @endforeach
          </div>
          @endif
        </div>  

        <div class="col-md-12 ">
          <h3>Corredores de Seguro</h3>
          <hr>
          <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>  
          
          <div class="panel panel-primary">
            <div class="panel-heading ">
              <center>
                <h4>Datos del Corredor de Seguro</h4>
              </center>
            </div>

            <div class="panel-body ">
              <form method="post" name="crear" id="crear" action="{{ url('/corredores') }}">
               <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}"> 
               <div class="form-group col-xs-6 " style="margin-bottom: 0px; height: 60px">
                <label>Cédula ó Rif<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <div class="input-group input-group-sm">
                <input type="text" name="cedula" id="cedula" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser J-12345678-9" value="{{ old('cedula') }}"  placeholder="J-12345678-9" onkeyup="this.value=this.value.toUpperCase()" value="" required="true" >
                  <span class="input-group-btn">
                    <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search" onclick="buscar_corredor()" type="button" name="btn-search"></button>
                  </span>
                </div>
                <center><span id="mensaje" class="help-block"></span></center>
              </div>
              <div class="form-group col-xs-6">
                <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="nombre" id="" value="{{ old('nombre') }}" class="form-control" onkeyup="this.value=this.value.toUpperCase()" placeholder="José" required="true">{{ old('nombre') }}
              </div>
              <div class="form-group col-xs-6">
                <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="apellido" id="" value="{{ old('apellido') }}" class="form-control" onkeyup="this.value=this.value.toUpperCase()" placeholder="Pérez" required="true">
              </div>
              <div class="form-group col-xs-6">
                <label>Celular<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="celular" id="" value="{{ old('celular') }}" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0412-XXXXXXX" onkeyup="this.value=this.value.toUpperCase()" title="El formato debe ser 0244-1234567" required="true">
              </div>
              <div class="form-group col-xs-6">
                <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="text" name="telefono" id="" value="{{ old('telefono') }}" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX" onkeyup="this.value=this.value.toUpperCase()" title="El formato debe ser 0244-1234567" required="true">
              </div>
              <div class="form-group col-xs-6">
                <label>Email<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="contact@example.com" onkeyup="this.value=this.value.toUpperCase()" title="El formato debe ser contact@example.com" required="true">
              </div>
              <div class="form-group col-xs-6">
                <label>Aseguradora<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                <select name="one" class="form-control">
                  <option value="{{ old('one') }}"></option>
                  @foreach ($corredores as $corre)
                  <option value="{{ $corre->id }}">{{ $corre->denominacion }}</option>
                  @endforeach                                          
                </select>
                <!-- links(), no sirve acá -->
              </div>
              <center class="col-xs-offset-3 col-xs-6">
                <span class="" style="font-weight:bold;">Los campos marcados con <a class="obli" rel="tooltip" style="font-size:20px;">*</a> son obligatorios.</span><br><br>
                <button data-toggle="tooltip" title="Guardar" type="submit" class="btn btn-guardar margin glyphicon glyphicon-floppy-disk" name="agregar"></button>
                <button data-toggle="tooltip" title="Limpiar Formulario" type="reset" class="btn btn-refresh margin glyphicon glyphicon-repeat"></button>
              </center>
            </form>
          </div>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div>
</div>

@include('layouts.footer')   

<script>
  window.onload = function () {
    document.crear.focus();
    document.crear.addEventListener('submit', validarFormulario);
  }

  function validarFormulario(evObject) {
    evObject.preventDefault();

    var success = true;
    var formulario = document.crear;
    for (var q=0; q<formulario.length; q++) {
      if(formulario[q].type =='text') {
       if (formulario[q].value == null || formulario[q].value.length == 0 || /^\s*$/.test(formulario[q].value)){
         alert ('No pueden existir campos vacíos');
         success=false;
       }
     }
   }
   if (success ==true) {formulario.submit();}
 }  
</script>  

<script type="text/javascript">
  $(function() {
    $('#cedula').autocomplete({
      source: '/Zogan_Systems/public/corredores/on'
    })
  })
  function buscar_corredor() {
    let cedula = $('#cedula').val()
    if (cedula==null){
      $('cedula').focus()
      alert('Cédula no registrada')
    }
    else if (cedula == false) {
      $('cedula').focus()
      alert('Introduzca el número de cédula por favor')
    }
    $.ajax({
      url: '/Zogan_Systems/public/corredores/getCorredor/' + cedula,
      type: 'GET',
      dataType: 'JSON',
      success: function(data) {
          if (!data['corre'][0]) {
            alert('La cédula no existe')          
          }else {
            alert('La cédula ya se encuentra registrada')
          }
      },
    })
  }
</script>