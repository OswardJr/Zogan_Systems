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
            <h3>Aseguradoras</h3>
            <hr>
            <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>            

            <div class="panel panel-primary">
              <div class="panel-heading ">
                <center>
                  <h4>Datos de la Aseguradora</h4>
                </center>
              </div>

              <div class="panel-body ">
                <form method="POST" name="crear" id="crear" action="{{ url('/aseguradoras') }}">
                 <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                 
            <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
              <label>Rif<a class="campos-required" title="Campo Obligatorio."> *</a></label>
              <div class="input-group ">
               <input type="text " name="rif" class="form-control" id="rif" pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser J-12345678-9" placeholder="J-12345678-9" value="{{ old('rif') }}" onkeyup="this.value=this.value.toUpperCase()" required="true" >
               <span class="input-group-btn ">
                 <button class="btn btn-buscar btn-flat fa fa-search"  onClick="buscar_asegu()" type="button"></button>
               </span>
             </div>
             <center><span id="mensaje" class="help-block"></span></center>
           </div>

                <div class="form-group col-xs-6">
                  <label>Denominación<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                  <input type="text" name="denominacion" id="denominacion" value="{{ old('denominacion') }}" class="form-control" placeholder="Seguros Caracas C.A" onkeyup="this.value=this.value.toUpperCase()" required="true">
                </div>
                <div class="form-group col-xs-6">
                  <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                  <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" pattern="^([0-9]{4})([0-9]{7})$" class="form-control" placeholder="0244XXXXXXX" onkeyup="this.value=this.value.toUpperCase()" maxlength="11" onkeypress="return justNumbers(event);" title="El formato debe ser 02441234567" required="true">
                </div>
                <div class="form-group col-xs-6">
                  <label>Email<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                  <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="contact@example.com" onkeyup="this.value=this.value.toUpperCase()" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="El formato debe ser contact@example.com" required="true">
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
      $('#rif').autocomplete({
        source: '/Zogan_Systems/public/vehiculos/edit'
      })
    })
    function buscar_asegu() {
      let rif = $('#rif').val()
      if (rif==null){
        $('rif').focus()
        alert('rif no registrada')
      }
      else if (rif == false) {
        $('rif').focus()
        alert('Introduzca el rif por favor')
      }
      $.ajax({
        url: '/Zogan_Systems/public/vehiculos/getAseguradora/' + rif,
        type: 'GET',
        dataType: 'JSON',
        success: function(data) {
            if (!data['asegu'][0]) {
              alert('El Rif no existe')          
            }else {
              alert('El Rif ya se encuentra registrado')
            }
        },
      })
    }
  </script>

      <script>
      function formatear(){
        var num_sf=document.getElementById('telefono').value;
        var num_cf='';
        num_cf=num_sf.substring(0,3)+"-";
        num_cf+=num_sf.substring(3,6)+"-";
        num_cf+=num_sf.substring(6,9);
        document.getElementById('telefono').value=num_cf;
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