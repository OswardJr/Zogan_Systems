@include('layouts.headruta')

<form enctype="multipart/form-data" action="{{ url('/upload')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="container">
    @if(Session::get('message'))
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5> {{ Session::get('message') }}</h5>
      </div>
    </div>
    @endif
    <h2></h2>    

    <div class="page-content-wrapper" style="">
      <div class="page-content">                    
        <section class="content">
          <h3>Actualizaciones</h3>
          <hr>
          <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="{{ url('/ruta') }}" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>   
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
              <center>
              <h4>Datos del Vehículo</h4>
              </center>                
              </div>
              <div class="panel-body">
                <div class="row">
                  <input type="hidden" value="{{ strtoupper($auto->id) }}" name="_idAuto">
                  <div class="col-md-6"><p><strong>Placa:</strong> {{ strtoupper($auto->placa) }}</p></div>
                  <div class="col-md-6"><p><strong>Propietario:</strong> {{ strtoupper($prop->nombre_completo) }}</p></div>
                  <div class="col-md-6"><p><strong>Marca:</strong> {{ strtoupper($auto->marca) }}</p></div>
                  <div class="col-md-6"><p><strong>Modelo:</strong> {{ strtoupper($auto->modelo) }}</p></div>
                  <div class="col-md-6"><p><strong>Color:</strong> {{ strtoupper($auto->color) }}</p></div>
                </div>
              </div>
            </div>
          </div>

        <div class="col-md-12">
          <div class="panel panel-primary ">
            <div class="panel-heading ">
              <center>
              <h4>Observaciones</h4>
              </center>
            </div>
            <div class="panel-body">
              <div class="form-group col-md-6 ">
                <label>Encargado que Entrega</label>
              <select name="encargado_entrega" class="form-control">
                <option value=""></option>
                @foreach ($ayudantes as $ayu)
                <option value="{{ $ayu->id }}">{{ $ayu->nombre }} {{ $ayu->apellido }}</option>
                @endforeach
              </select>              
            </div>

              <div class="form-group col-md-6 ">
                <label>Encargado que Recibe</label>
              <select name="encargado_recibe" class="form-control">
                <option value=""></option>
                @foreach ($ayudantes as $ayu)
                <option value="{{ $ayu->id }}">{{ $ayu->nombre }} {{ $ayu->apellido }}</option>
                @endforeach
              </select>              
            </div>

            <div class="form-group col-md-6 ">
              <label>Latonero</label>

            </div>
            <div class="form-group col-md-6 ">
              <label>Pintor</label>

            </div>

              <div class="form-group col-md-6 ">
                <label>Descripción de Avances</label>
                <textarea type="text" name="avances" onkeyup="this.value=this.value.toUpperCase()" placeholder="NO HUBIERON OBSERVACIONES" class="form-control"></textarea>
              </div>
            </div>
          </div>
        </div>  

          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
              <center>
              <h4>Carga de las Fotos</h4>
              </center>                
              </div>
              <div class="panel-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sel1"><p>Selecione la etapa del proceso.</p></label>
                    <select class="form-control" id="sel1" name="_tipoRev" required="true">
                      <option></option>
                      @foreach ($tiposRev as $tipo)
                      <option value="{{ $tipo }}">{{ $tipo }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sel1"><p>Selecione la fecha en que se realiz&oacute</p></label><br>
                    <input type="date" class="form-control" name="_fechaRev" required="true" value="<?php echo date('Y-m-d'); ?>">
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="form-group image">
                    <input id="images-input" name="images[]" type="file" multiple data-preview-file-type="any" class="file" required="true">
                  </div>
                </div>
                <center>
                  <div class="col-md-12 text-center">
                    <br>
                    <br>
                    <button class="btn btn-guardar" type="submit"><span class="fa fa-save"></span></button>
                    <br>
                    <br>
                  </div>
                </center>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
  $("#images-input").fileinput({
    language: "es",
    uploadUrl: '/file-upload-batch/2',
    maxFileCount: 8,
    allowedFileExtensions: ["jpg", "png"]
  });

</script>
</div>  

@include('layouts.footer')