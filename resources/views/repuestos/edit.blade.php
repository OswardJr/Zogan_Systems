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
                                  <h3>Nuevo Repuesto</h3>
                                <hr>

                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Repuesto</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                 <form method="post" action=" {{ url('/repuestos/') }}/{{ $repuestos->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-xs-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Codigo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="codigo" id="" class="form-control " title="El formato debe ser J-12345678-9"  placeholder="A0001" onkeyup="this.value=this.value.toUpperCase()" value="{{ $repuestos->codigo }}" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Decsripción<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="descripcion" id="" class="form-control" value="{{ $repuestos->descripcion }}" placeholder="Seguros Caracas C.A" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Cantidad<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="cantidad" id="" value="{{ $repuestos->cantidad }}" class="form-control" placeholder="0212-XXXXXXX">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Marca<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="marca" id="marca" class="form-control" value="{{ $repuestos->marca }}" placeholder="contact@example.com">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Modelo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $repuestos->modelo }}" placeholder="contact@example.com">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Costo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="costo" id="costo" class="form-control" value="{{ $repuestos->costo }}" placeholder="contact@example.com">
                                    </div>                                    
                                    <center class="col-xs-offset-3 col-xs-6">
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