@include('layouts.headservices')

                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Analistas</h3>
                                <hr>

                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Analista</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                 <form method="post" action=" {{ url('/analistas/') }}/{{ $analistas->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-xs-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Cédula ó Rif<a class="campos-required" title="Campo Obligatorio."></a></label>
                                        <input type="text" name="rif" id="" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser J-12345678-9"  placeholder="J-12345678-9" onkeyup="this.value=this.value.toUpperCase()" value="{{ $analistas->rif }}" required="true" disabled>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="nombre" id="" class="form-control" placeholder="José" required="true" value="{{ $analistas->nombre }}" disabled>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="apellido" id="" class="form-control" placeholder="Pérez" required="true" value="{{ $analistas->apellido }}" disabled>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Celular<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="celular" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0412-XXXXXXX" value="{{ $analistas->celular }}" disabled>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Teléfono<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="text" name="telefono" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX" value="{{ $analistas->telefono }}" disabled>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Email<a class="campos-required" title="Campo Obligatorio."></a></label>
                                      <input type="email" name="email" id="email" class="form-control" placeholder="contact@example.com" value="{{ $analistas->email }}" disabled>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Aseguradoras para las que labora:<a class="campos-required" title="Campo Obligatorio."></a></label>
                                          @foreach ($aseguradoras as $asegu)
                                        <ul type="disk">
                                            <li>{{ $asegu->denominacion }}</li>
                                        </ul>
                                          @endforeach                                              
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