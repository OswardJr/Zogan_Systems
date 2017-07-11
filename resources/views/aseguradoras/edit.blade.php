@include('layouts.headservices')

                          <div class="col-md-12">
                              @if(Session::get('message'))
                              <div class="col-md-6 col-md-offset-6">
                                  <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h3> {{ Session::get('message') }}</h3>
                                  </div>
                              </div>
                              @endif                            
                          </div> 
                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Aseguradoras</h3>
                                <hr>

                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos de la Aseguradora</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                 <form method="post" name="crear" id="crear" action=" {{ url('/aseguradoras/') }}/{{ $aseguradoras->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-xs-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Rif<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="rif" id="" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser J-12345678-9"  placeholder="J-12345678-9" onkeyup="this.value=this.value.toUpperCase()" value="{{ $aseguradoras->rif }}" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Denominación<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="denominacion" id="" class="form-control" value="{{ $aseguradoras->denominacion }}" placeholder="Seguros Caracas C.A" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="telefono" id="" value="{{ $aseguradoras->telefono }}" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0212-XXXXXXX" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Email<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="email" name="email" id="email" class="form-control" value="{{ $aseguradoras->email }}" placeholder="contact@example.com" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                    <center class="col-xs-offset-3 col-xs-6">
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