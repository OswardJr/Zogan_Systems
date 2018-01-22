@include('layouts.headuser')

<div class="col-md-10">
@if(Session::get('message'))
<div class="col-md-6 col-md-offset-6" style="margin-top: 5px;">
  <div class="alert alert-success alert-dismissable">
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
            <div class="col-md-8 col-md-offset-2">
                <hr>
                <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>                  
                <div class="panel panel-default">
                    <center>
                        <div class="panel-heading"><h4>Actualización del Usuario</h4></div>
                    </center>
                    
                    <div class="panel-body">
                        <form method="post" action=" {{ url('/cambio_clave') }}" class="form-horizontal" role="form">
                         <input name="_method" type="hidden" value="PUT">
                         <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">


                         <div class="form-group{{ Session::get('vieja') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña actual</label>

                            <div class="col-md-6">
                                <input id="vieja" type="password" placeholder="Contraseña actual" class="form-control" name="vieja" required>

                               @if(Session::get('vieja'))
                                <span class="help-block">
                                    <strong> {{ Session::get('vieja') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Nueva Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Nueva Contraseña" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Nueva Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Repita su contraseña" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <center>                                      
                                    <button data-toggle="tooltip" title="Guardar" type="submit" class="btn btn-guardar margin glyphicon glyphicon-floppy-disk" name="agregar"></button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>
@include('layouts.footer')                