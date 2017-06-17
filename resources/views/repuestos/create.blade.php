@include('layouts.headrepuestos')

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
                                  <form name="" action="" method="post" id="">
                                    <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Código<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="" id="" class="form-control "title="El formato debe ser ABC105C"  placeholder="R0001" onkeyup="this.value=this.value.toUpperCase()" value="" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-buscar btn-flat fa fa-search
                                          " type="button"  onClick="" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Descripción<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Rolinera" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Marca<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Vy" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Modelo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="Standard">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Costo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="5200bsf">
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
                            <input id="images-input1" name="images[]" type="file" multiple data-preview-file-type="any" class="file" required="true">
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
<script type="text/javascript">
        $("#images-input1").fileinput({
          language: "es",
          uploadUrl: '/file-upload-batch/2',
          maxFileCount: 8,
          allowedFileExtensions: ["jpg", "png"]
        });
      </script>                

@include('layouts.footer')                