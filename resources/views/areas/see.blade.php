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
                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Datos Registrados</h3>
                                <hr>

                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Repuesto</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                 <form method="post" action=" {{ url('/areas/') }}/{{ $areas->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-xs-6 ">
                                      <label>Código<a class="campos-required" title="Campo Obligatorio."> </a></label>
                                        <input type="text" name="codigo" id="" class="form-control " title="El formato debe ser J-12345678-9"  placeholder="A0001" onkeyup="this.value=this.value.toUpperCase()" value="{{ $areas->codigo }}" required="true" disabled>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Descripción<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> </a></label>
                                      <input type="text" name="descripcion" id="" class="form-control" value="{{ $areas->descripcion }}" placeholder="Seguros Caracas C.A" required="true" disabled>
                                    </div>                          
                                    <center class="col-xs-offset-3 col-xs-6">
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