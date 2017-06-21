@include('layouts.headservices')

                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Nuevo Corredor de Seguro</h3>
                                <hr>

                                <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del A.D.S</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                 <form method="post" action=" {{ url('/corredores/') }}/{{ $corredores->id }}">
                                   <input name="_method" type="hidden" value="PUT">
                                   <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-xs-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Cédula ó Rif<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="cedula" id="" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser J-12345678-9"  placeholder="J-12345678-9" onkeyup="this.value=this.value.toUpperCase()" value="{{ $corredores->cedula }}"" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="nombre" id="" class="form-control" placeholder="José" value="{{ $corredores->nombre }}"" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="apellido" id="" class="form-control" placeholder="Pérez" value="{{ $corredores->apellido }}"" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Celular<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="celular" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0412-XXXXXXX" value="{{ $corredores->celular }}">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Teléfono<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="telefono" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX" value="{{ $corredores->telefono }}">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Email<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="email" name="email" id="email" class="form-control" placeholder="contact@example.com" value="{{ $corredores->email }}">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Aseguradora<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <select name="one" class="form-control">
                                          @foreach ($aseguradoras as $asegu)
                                            <option value="{{ $asegu->id }}">{{ $asegu->denominacion }}</option>
                                          @endforeach
                                          <option></option>                                          
                                          <option>Opciones Disponibles:</option>
                                          @foreach ($seguros as $asegu)
                                            <option value="{{ $asegu->id }}">{{ $asegu->denominacion }}</option>
                                          @endforeach                                                                                     
                                      </select><!-- links(), no sirve acá -->
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