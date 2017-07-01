@include('layouts.headruta')

<div class="page-content-wrapper" style="">
      <div class="page-content">                    
            <section class="content">
                  <div class="col-md-12">
                        <div class="col-md-6">
                              <h2>Recepción del Vehículo.</h2>
                        </div>
                        <div class="col-md-offset-2 col-md-3">
                              <div class="panel-body ">
                                    <div class="checkbox">
                                          <label><input type="checkbox" value="">Aseguradora</label>
                                    </div>
                                    <div class="checkbox">
                                          <label><input type="checkbox" value="">Particular</label>
                                    </div>
                              </div>
                        </div>
                  </div>   

                  <hr style="width:100%;">
                  <div class="row">
                        <div class="col-md-12" style="padding-left: 0px;">
                              <div class="col-md-12">
                                    <div class="panel panel-primary ">
                                          <div class="panel-heading ">
                                                <center>
                                                      <h4>Datos Pre-cargados del Vehículo</h4>
                                                </center>
                                          </div>

                         <div class="panel-body ">
                               <div class="col-md-6 form-group" style="margin-top: 5px;">
                                  <label for="cedula ">Placa</label>
                                     <div class="input-group ">
                             <input type="text " class="form-control" id="" name="" placeholdesr="V-XXXXXXX">
                                     <span class="input-group-btn ">
                                 <button class="btn btn-buscar btn-flat fa fa-search" type="button"></button>
                         </span>
                        </div>
              </div>

                   <div class="form-group col-md-6">
                   <p class="margin"><strong>Marca</strong></p>
                   <input type="text" name="" placeholdesr="Aveo" class="form-control">
             </div>

            <div class="form-group col-md-6">
                   <p class="margin"><strong>Modelo</strong></p>
                  <input type="text" name="" placeholdesr="LT" class="form-control">
            </div>

            <div class="form-group col-md-6">
              <p class="margin"><strong>Serial de Carrocería</strong></p>
            <input type="text" name="" placeholdesr="XXXXXXXXXXX" class="form-control">
             </div>

            <div class="form-group col-md-6">
              <p class="margin"><strong>Serial del Motor</strong></p>
             <input type="text" name="" placeholdesr="XXXXXXXXX" class="form-control">
             </div>

       <div class="form-group col-md-6">
          <p class="margin"><strong>Propietario</strong></p>
       <input type="text" name="" placeholdesr="Transeral, C.A" class="form-control">
             </div>

 </div>
 </div>
 </div>   

                              <div class="col-md-12">
                                    <div class="panel panel-primary ">
                                          <div class="panel-heading ">
                                                <center>
                                                      <h4>Datos de Recepción </h4>
                                                </center>
                                          </div>

                                          <div class="panel-body ">

                                                <div class="form-group col-md-6">
                                                      <p class="margin"><strong>Chofer encargado</strong></p>
                                                      <input type="text" name="" placeholdesr="Aveo" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                      <p class="margin"><strong>Telefono del chofer</strong></p>
                                                      <input type="text" name="" placeholdesr="Aveo" class="form-control">
                                                </div>

                                                <div class="col-md-6 form-group" style="margin-top: 5px;">
                                                      <label for="cedula ">Productor de la poliza</label>
                                                      <div class="input-group ">
                                                            <input type="text " class="form-control" id="" name="" placeholdesr="V-XXXXXXX">
                                                            <span class="input-group-btn ">
                                                                  <bn>
                                                                  </span>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-6 form-group" style="margin-top: 5px;">
                                                            <label for="cedula ">Persona que recibe</label>
                                                            <div class="input-group ">
                                                                  <input type="text " class="form-control" id="" name="" placeholdesr="V-XXXXXXX">
                                                                  <span class="input-group-btn ">
                                                                        <button class="btn btn-info btn-flat fa fa-search" type="button"></button>
                                                                  </span>
                                                            </div>
                                                      </div>

                                                      <div class="form-group col-md-6" id="sandbox-container">
                                                            <label for="fecha_nac">fecha de recepcion</label>
                                                            <div class="input-group date">
                                                                  <input type="text" class="form-control" name="fecha" id="fecha" disabled placeholdesr="DD/MM/AAAA" required="required">
                                                                  <span class="input-group-addon">
                                                                        <i class="glyphicon glyphicon-th"></i>
                                                                  </span>
                                                            </div>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                            <p class="margin"><strong>Kilometraje</strong></p>
                                                            <input type="text" name="" placeholdesr="Aveo" class="form-control">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                            <p class="margin"><strong>Combustible</strong></p>
                                                            <input type="text" name="" placeholdesr="Aveo" class="form-control">
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>  
                        </div>  
                        <div class="row">
                              <div class="col-md-12">
                                    <div class="panel panel-primary ">
                                          <div class="panel-heading ">
                                                <center>
                                                      <h4>Detalles</h4>
                                                </center>
                                          </div>
                                          <div class="panel-body ">
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Aire acondicionado</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Alfombras</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Tablero</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Asientos</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Tapiceria</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Radio / Reproductor</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Encendedor</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Techo interno</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Parabrisas delantero</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Parabrisas trasero</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">vidrio puerta izquierda</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">vidrio puerta derecha</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Retrovisor derecho</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Retrovisor izquierdo</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Faro izquierdo</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Faro derecho</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Manilla izquierda</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Manilla derecha</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Stop izquierdo</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Stop derecho</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Asientos</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Cocuyo izquierdo</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Cocuyo derecho</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Emblema</label>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="checkbox">
                                                            <label><input type="checkbox" value="">Tapa Gasoil</label>
                                                      </div>
                                                </div>

                                                <div class="col-md-12">
                                                      <div class="checkbox">
                                                            <label for="comment">Informe de inspeccion</label>
                                                            <textarea class="form-control" rows="5" id="comment"></textarea>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>  

                                    <div class="panel panel-primary ">
                                          <div class="panel-heading ">
                                                <center>
                                                      <h4>Agregar Memoria Fotográfica</h4>
                                                </center>
                                          </div>
                                          <div class="panel-body ">
                                                <div class="form-group image">
                                                      <input id="images-input" name="images[]" type="file" multiple data-preview-file-type="any" class="file" required="true">
                                                </div>
                                          </div>
                                    </div>
                                    <center class="col-lg-offset-3 col-lg-6">
                                        <input type="hidden" name="token" value="" />
                                        <button data-toggle="tooltip" title="Registrar" type="submit" class="btn btn-guardar margin glyphicon glyphicon-floppy-disk" name="agregar"></button>
                                        <button data-toggle="tooltip" title="Limpiar Formulario" type="reset" class="btn btn-refresh margin glyphicon glyphicon-repeat"></button>
                                  </center>                                          
                            </div>
                      </div>                                   
                </div>
          </div>
    </div><!-- /.col -->

</div><!-- /.row -->
<div class="row">

</div>
</section><!-- /.content -->
</div>
</div>
@include('layouts.footer')

<script type="text/javascript">
      $("#images-input").fileinput({
            language: "es",
            uploadUrl: '/file-upload-batch/2',
            maxFileCount: 8,
            allowedFileExtensions: ["jpg", "png"]
      });
</script>

