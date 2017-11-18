@include('layouts.headservices')

                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Corredores de Seguro</h3>
                                <hr>

                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Corredor de Seguro</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                 <form method="post" name="crear" id="crear" action=" {{ url('/corredores/') }}/{{ $corredores->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-xs-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Cédula ó Rif<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="cedula" id="" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser J-12345678-9"  placeholder="J-12345678-9" onkeyup="this.value=this.value.toUpperCase()" value="{{ $corredores->cedula }}" required="true" readonly>
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="nombre" id="" class="form-control" placeholder="José" value="{{ $corredores->nombre }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="apellido" id="" class="form-control" placeholder="Pérez" value="{{ $corredores->apellido }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Celular<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="celular" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0412-XXXXXXX" onkeyup="this.value=this.value.toUpperCase()" value="{{ $corredores->celular }}" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="telefono" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX" value="{{ $corredores->telefono }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Email<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="email" name="email" id="email" class="form-control" placeholder="contact@example.com" value="{{ $corredores->email }}" onkeyup="this.value=this.value.toUpperCase()" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Aseguradora<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                    @foreach ($aseguradoras as $asegu)
                                      <input type="text" name="one" id="one" class="form-control" placeholder="contact@example.com" value="{{ $asegu->denominacion }}" disabled>
                                    @endforeach          
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