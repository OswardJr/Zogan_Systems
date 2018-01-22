@include('layouts.headuser')

<div class="col-md-8 col-md-offset-2">
@if(Session::get('message'))
<div class="col-md-6 col-md-offset-2">
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
<div class="col-md-8 col-md-offset-2">

                <h3>Nuevo Usuario</h3>
                <hr>
                <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>                  
                <div class="panel panel-default">
                    <center><div class="panel-heading"><h4>Registrar Usuario</h4></div></center>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/usuarios') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" placeholder="Indique el nombre" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" placeholder="Indique el correo electrónico" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                 

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Contraseña" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" placeholder="Repita su contraseña" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="col-md-10 col-md-offset-2">
                              <h3>Permisos</h3>
                              <p>Seleccione las funciones a las que tendrá acceso el usuario</p>            
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Modulo / Permiso</th>
                                    <th>Habilitar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($modulos as $mod)
                                  <tr>
                                    <td>{{ ($mod->nombre) }}</td>
                                    <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" 
                                                   value="{{ ($mod->id) }}" 
                                                   name="modulos[]"  
                                            ></label>
                                    </div>
    
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
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