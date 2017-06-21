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
                                  <h3>Nuevo Operario</h3>
                                <hr>

                                <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Operario</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form method="post" action="{{ url('/operarios') }}">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">                                    
                                   <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <div class="form-group @if ($errors->has('cedula')) has-error @endif">                
                                      <label>Cédula<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="cedula" id="" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})$" title="El formato debe ser V-12345678"  placeholder="V12345678" onkeyup="this.value=this.value.toUpperCase()" required="true" >
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
                                      <input type="text" name="nombre" id="" class="form-control" placeholder="José" required="true">
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('apellido')) has-error @endif">                                     
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="apellido" id="" class="form-control" placeholder="Pérez" required="true">
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('telefono')) has-error @endif">                                     
                                      <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="telefono" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX">
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('email')) has-error @endif">                                     
                                      <label>Email</label>
                                      <input type="email" name="email" id="email" class="form-control" placeholder="contact@example.com">
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('tipo')) has-error @endif">                                     
                                      <label>Tipo</label>
                                      <select class="form-control" name="tipo" >
                                          <option></option>
                                          <option id="tipo" value="latonero">Latonero</option>
                                          <option id="tipo" value="pintor">Pintor</option>
                                      </select>
                                    </div>
                                  </div>  
                                    <!-- textarea -->
                                    <div class="form-group col-md-offset-3 col-md-6">
                                      <div class="form-group @if ($errors->has('direccion')) has-error @endif">                                     
                                      <label>Direcci&oacuten<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <textarea type="text" name="direccion" id="" class="form-control" placeholder="Dirección" ></textarea>
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

@include('layouts.footer')                