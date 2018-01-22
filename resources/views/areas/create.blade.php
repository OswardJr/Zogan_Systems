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
                                  <h3>Nueva Área de Almacenaje</h3>
                                <hr>
                                  <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>                                 
                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Área</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form method="post" action="{{ url('/areas') }}">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Código<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                        <input type="text" name="codigo" id="" class="form-control" title="Mínimo 10 carácteres." maxlength="10"  placeholder="R0001" onkeyup="this.value=this.value.toUpperCase()" value="" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Descripción<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="descripcion" onkeyup="this.value=this.value.toUpperCase()" id="" class="form-control" placeholder="Pinturas" required="true">
                                    </div>                                  
                              </div>

                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
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