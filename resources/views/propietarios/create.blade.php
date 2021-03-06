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
                            <div class="col-xs-12 ">
                                  <h3>Propietario</h3>
                                <hr>

                                <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Propietario</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
            						          <form method="post" action="{{ url('/propietarios') }}">
            						           <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group col-lg-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Cédula ó Rif<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="rif" id="propietarios" class="form-control typeahead" pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser J-12345678-9"  placeholder="J-12345678-9" onkeyup="this.value=this.value.toUpperCase()" value="" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-lg-6">
                                      <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="nombre" value="{nombre}" id="" class="form-control" placeholder="José" required="true">
                                    </div>
                                    <div class="form-group col-lg-6">
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="apellido" value="{apellido}" id="" class="form-control" placeholder="Pérez" required="true">
                                    </div>
                                    <div class="form-group col-lg-6">
                                      <label>Celular</label>
                                      <input type="text" name="celular" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0412-XXXXXXX">
                                    </div>
                                    <div class="form-group col-lg-6">
                                      <label>Teléfono</label>
                                      <input type="text" name="telefono" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX">
                                    </div>
                                    <div class="form-group col-lg-6">
                                      <label>Email</label>
                                      <input type="email" name="email" id="email" class="form-control" placeholder="contact@example.com">
                                    </div>
                                    <!-- textarea -->
                                    <div class="form-group col-lg-offset-3 col-lg-6">
                                      <label>Direcci&oacuten<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <textarea type="text" name="direccion" id="" class="form-control" placeholder="Dirección de su casa u oficina" ></textarea>
                                    </div>
                                    <center class="col-lg-offset-3 col-lg-6">
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
                </div>

@include('layouts.footer')                

    <script>
        function baseUrl(url) {
            return '{{url('')}}/' + url;
        }
    </script>
 
<script>
        self.on('mount', function(){
            __clientAutocomplete();
            __productAutocomplete();
        })            function __clientAutocomplete(){
            var propietarios = $("#propietarios"),
                options = {
                url: function(q) {
                    return baseUrl('propietarios/findRif?q=' + q);
                },
                getValue: 'nombre',
                list: {
                    onClickEvent: function() {
                        var e = propietarios.getSelectedItemData();
                        self.id = e.id;
                        self.nombre = e.nombre;
                        self.apellido = e.apellido;

                        self.update();
                    }
                }
            };

            propietarios.easyAutocomplete(options);
        }
</script>