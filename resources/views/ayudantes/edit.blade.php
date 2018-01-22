@include('layouts.headservices')

                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                              @if(Session::get('message'))
                              <div class="col-md-8 col-md-offset-2">
                                  <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5> {{ Session::get('message') }}</h5>
                                  </div>
                              </div>
                              @endif        
                              
                              @if(Session::get('errors'))
                              <div class="col-md-8 col-md-offset-2">
                                  <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5>Complete los campos obligatorios.</h5>
                                  </div>
                              </div>
                              @endif  
                                                                            
                            <div class="col-md-12 ">
                                  <h3>Obrero</h3>
                                <hr>

                                <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Obrero</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form method="post" name="crear" id="crear" action=" {{ url('/ayudantes/') }}/{{ $ayudantes->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">                                    
                                   <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <div class="form-group @if ($errors->has('cedula')) has-error @endif">                
                                      <label>Cédula<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="cedula" value="{{ $ayudantes->cedula }}" id="" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})$" title="El formato debe ser V-12345678. (En caso de que su número de cédula sea menor a 8 dígitos, agregue '0' ceros al inicio de la misma, ejemplo: V-06867424)."  placeholder="V-12345678" onkeyup="this.value=this.value.toUpperCase()" required="true" readonly>
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button" onClick="buscar() name="btn-search"></button>
                                        </span>
                                      </div>
                                     </div> 
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('nombre')) has-error @endif">                                     
                                      <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="nombre" value="{{ $ayudantes->nombre }}" id="" class="form-control" placeholder="José" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('apellido')) has-error @endif">                                     
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="apellido" value="{{ $ayudantes->apellido }}" id="" class="form-control" placeholder="Pérez" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('telefono')) has-error @endif">                                     
                                      <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="telefono" value="{{ $ayudantes->telefono }}" maxlength="11" id="" pattern="^([0-9]{4})([0-9]{7})$" onkeypress="return justNumbers(event);" title="El formato debe ser 02441234567" class="form-control" placeholder="0244XXXXXXX" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('email')) has-error @endif">                                     
                                      <label>Email<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="email" name="email" value="{{ $ayudantes->email }}" id="email" class="form-control" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="El formato debe ser contact@example.com" placeholder="contact@example.com" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                  </div>  
                                    <!-- textarea -->
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('direccion')) has-error @endif">                                     
                                      <label>Direcci&oacuten<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <textarea type="text" name="direccion" value="{{ $ayudantes->direccion }}" id="" class="form-control" placeholder="Dirección" onkeyup="this.value=this.value.toUpperCase()" required="true">{{ $ayudantes->direccion }}</textarea>
                                    </div>
                                  </div>  
                                    <center class="col-md-offset-3 col-md-6">
                                      <span class="" style="font-weight:bold;">Los campos marcados con <a class="obli" rel="tooltip" style="font-size:20px;">*</a> son Obligatorios.</span><br><br>
                                      <button data-toggle="tooltip" title="Guardar" type="submit" class="btn btn-guardar margin glyphicon glyphicon-floppy-disk" name="agregar"></button>
                                      <button data-toggle="tooltip" title="Regresar" type="reset" onClick="javascript:history.go(-1);" class="btn btn-refresh margin glyphicon glyphicon-arrow-left"></button>
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

<script>
    function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }  
</script>