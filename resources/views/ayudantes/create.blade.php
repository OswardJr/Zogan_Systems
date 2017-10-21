@include('layouts.headservices')

<div class="page-content-wrapper" style="">
  <div class="page-content">                    
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          @if(count($errors) > 0)
          <div class="alert alert-danger alert-dismissable" id="errores">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            @foreach($errors->all() as $error)
            <h3>{{ $error }}</h3>
            @endforeach
          </div>
          @endif
        </div>

        <div class="col-md-12 ">
          <h3>Obreros</h3>
          <hr>
          <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>            

          <div class="panel panel-primary ">
            <div class="panel-heading ">
              <center>
                <h4>Datos del Obrero</h4>
              </center>
            </div>

            <div class="panel-body ">
              <form method="post" name="crear" id="crear" action="{{ url('/ayudantes') }}">
               <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">                                    
               <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                <div class="form-group @if ($errors->has('cedula')) has-error @endif">                
                  <label>Cédula<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                  <div class="input-group input-group-sm">
                    <input type="text" name="cedula" id="cedula" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})$" title="El formato debe ser V-12345678" value="{{ old('cedula') }}" placeholder="V12345678" onkeyup="this.value=this.value.toUpperCase()" required="true">
                    <span class="input-group-btn">
                      <button  data-toggle="tooltip" title="Consultar" id="cedula" class="btn btn-buscar btn-flat fa fa-search
                      " type="button" name="btn-search"></button>
                    </span>
                  </div>
                </div> 
                <center><span id="mensaje" class="help-block"></span></center>
              </div>
              <div class="form-group col-md-6">
                <div class="form-group @if ($errors->has('nombre')) has-error @endif">                                     
                  <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                  <input type="text" name="nombre" id="" class="form-control" placeholder="José" value="{{ old('nombre') }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                </div>
              </div>  
              <div class="form-group col-md-6">
                <div class="form-group @if ($errors->has('apellido')) has-error @endif">                                     
                  <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                  <input type="text" name="apellido" id="" class="form-control" placeholder="Pérez" value="{{ old('apellido') }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                </div>
              </div>  
              <div class="form-group col-md-6">
                <div class="form-group @if ($errors->has('telefono')) has-error @endif">                                     
                  <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                  <input type="text" name="telefono" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX" value="{{ old('telefono') }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                </div>
              </div>  
              <div class="form-group col-md-6">
                <div class="form-group @if ($errors->has('email')) has-error @endif">                                     
                  <label>Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="contact@example.com" value="{{ old('email') }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                </div>
              </div>   
              <!-- textarea -->
              <div class="form-group col-md-6">
                <div class="form-group @if ($errors->has('direccion')) has-error @endif">                                     
                  <label>Direcci&oacuten<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                  <textarea type="text" name="direccion" id="" class="form-control" placeholder="Dirección" value="" onkeyup="this.value=this.value.toUpperCase()" required="true">{{ old('direccion') }}</textarea>
                </div>
              </div>                                 
              <center class="col-md-offset-3 col-md-6">
                <span class="" style="font-weight:bold;">Los campos marcados con <a class="obli" rel="tooltip" style="font-size:20px;">*</a> son Obligatorios.</span><br><br>
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


<script type="text/javascript">
  $(function(){
    $("#crear").submit(function(e){
      var fields = $(this).serialize();
      $.post("{{ url('/ayudantes') }}",fields, function(data){

        if(data.valid !== undefined)
        {
          $("#result").html("formulario enviado");
          $("#crear")[0].reset();

          $("#errores").html('');
        }
        else{
          $("#errores").html('');

          if(data.cedula !== undefined)
          {
            $("#errores").html(data.cedula);
          }
        }

      });

      return false;
    });
  });
</script>

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