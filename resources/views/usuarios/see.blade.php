@include('layouts.headuser')

<div class="page-content-wrapper">
    <div class="page-content">                    
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <h3>Datos Usuario</h3>
                                <hr>
                <a class="btn btn-default btn-teal btn-responsive" style="float: right;" href="javascript:history.back(1)" title="Regresar"><i class="fa fa-mail-reply-all fa-lg"></i></a><br><br><br><br>                  
                <div class="panel panel-default">
                    <center><div class="panel-heading"><h4>Usuario</h4></div></center>
                <div class="panel-body">
                    <form method="post" action=" {{ url('/usuarios/') }}/{{ $usuarios->id }}">
                        <input name="_method" type="hidden" value="PUT">
                        <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-xs-6">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                                <input id="name" type="text" class="form-control" placeholder="Indique el nombre" name="name" value="{{ $usuarios->name }}" required autofocus disabled>
                        </div>

                        <div class="form-group col-xs-6">
                            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                                <input id="email" type="email" class="form-control" placeholder="Indique el correo electrónico" name="email" value="{{ $usuarios->email }}" required disabled>

                        </div>

                        <div class="form-group col-xs-6">
                            <label for="email" class="col-md-4 control-label">Rol</label>

                                <input id="email" type="email" class="form-control" placeholder="Indique el correo electrónico" name="email" value="{{ $usuarios->rol }}" required disabled>
                        </div>                       

                                    <center class="col-xs-offset-3 col-xs-6">
                                      <button data-toggle="tooltip" title="Regresar" type="reset" onClick="javascript:history.go(-1);" class="btn btn-refresh margin glyphicon glyphicon-arrow-left"></button>
                                </center>
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