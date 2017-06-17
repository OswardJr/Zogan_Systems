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
                                  <h3>Datos</h3>
                                <hr>

                                <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Operario</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form method="post" action=" {{ url('/operarios/') }}/{{ $operarios->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">                                    
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('cedula')) has-error @endif">                                     
                                      <label>Cédula<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="cedula" value="{{ $operarios->cedula }}" id="" class="form-control" placeholder="José" required="true" disabled>
                                    </div>
                                  </div>  

                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('nombre')) has-error @endif">                                     
                                      <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="nombre" value="{{ $operarios->nombre }}" id="" class="form-control" placeholder="José" required="true" disabled>
                                    </div>
                                  </div>  

                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('apellido')) has-error @endif">                                     
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="apellido" value="{{ $operarios->apellido }}" id="" class="form-control" placeholder="Pérez" required="true" disabled>
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('telefono')) has-error @endif">                                     
                                      <label>Teléfono<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="telefono" value="{{ $operarios->telefono }}" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX" disabled>
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('email')) has-error @endif">                                     
                                      <label>Email</label>
                                      <input type="email" name="email" value="{{ $operarios->email }}" id="email" class="form-control" placeholder="contact@example.com" disabled>
                                    </div>
                                  </div>  
                                    <div class="form-group col-md-6">
                                      <div class="form-group @if ($errors->has('tipo')) has-error @endif">                                     
                                      <label>Tipo<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="tipo" value="{{ $operarios->tipo }}" id="tipo" class="form-control" placeholder="" disabled>
                                    </div>
                                  </div>
                                    <!-- textarea -->
                                    <div class="form-group col-md-offset-3 col-md-6">
                                      <div class="form-group @if ($errors->has('direccion')) has-error @endif">                                     
                                      <label>Direcci&oacuten<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="direccion" value="{{ $operarios->direccion }}" id="" class="form-control" placeholder="Dirección" disabled></input>
                                    </div>
                                  </div>  
                                    <center class="col-md-offset-3 col-md-6">
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