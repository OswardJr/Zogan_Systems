@include('layouts.headrepuestos')

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
                          
                <div class="page-content-wrapper">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Nuevo Repuesto</h3>
                                <hr>

                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Repuesto</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form method="post" action="{{ url('/repuestos') }}">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Código<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="codigo" id="" class="form-control "title="El formato debe ser ABC105C"  placeholder="R0001" onkeyup="this.value=this.value.toUpperCase()" value="" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button"  onClick="" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Descripción<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="descripcion" id="" class="form-control" placeholder="Rolinera" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Cantidad<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="cantidad" id="" class="form-control" placeholder="12" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Marca<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="marca" id="" class="form-control" placeholder="Vy" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Modelo<a class="" title=" Obligatorio."> *</a></label>
                                      <input type="text" name="modelo" class="form-control" placeholder="5200bsf" required="">
                                    </div> 
                                    <div class="form-group col-md-6">
                                      <label>Costo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="costo" class="form-control" placeholder="5200bsf" required="true">
                                    </div>                                  
                              </div>

                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div>

                      <div class="panel panel-primary ">
                        <div class="panel-heading ">
                          <center>
                            <h4>Agregar Memoria Fotográfica</h4>
                          </center>
                        </div>
                        <div class="panel-body ">
                          <div class="form-group image">
                            <input id="images-input1" name="" type="file" multiple data-preview-file-type="any" class="file" required="true">
                          </div>
                        </div>
                      </div>
                                                          
                          <center class="col-lg-offset-3 col-lg-6">
                                      <input type="hidden" name="token" value="" />
                                      <button data-toggle="tooltip" title="Guardar" type="submit" class="btn btn-guardar margin glyphicon glyphicon-floppy-disk" name="agregar"></button>
                                      <button data-toggle="tooltip" title="Limpiar Formulario" type="reset" class="btn btn-refresh margin glyphicon glyphicon-repeat"></button>
                            </center>
                  </div>
              </div><!-- /.col -->

            </div><!-- /.row -->
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                        </section><!-- /.content -->
                    </div>
                </div>
      

@include('layouts.footer')                