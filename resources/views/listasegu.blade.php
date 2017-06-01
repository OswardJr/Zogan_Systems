@include('layouts.headservices')

                          <br><div class="col-md-12">
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
                            <div class="panel panel-primary">
                                <div class="panel-heading"><strong>Aseguradoras</strong></div>
                          <div class="row">
                            <div class="col-md-12 ">
                            <div class="table-responsive">
                                <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Cédula/Rif</th>
                                    <th>Denominación</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aseguradoras as $asegu)
                                        <tr> 
                                          <td>{{ ($asegu->rif) }}</td> 
                                          <td>{{ ($asegu->denominacion) }}</td> 
                                          <td>{{ ($asegu->telefono) }}</td> 
                                          <td>{{ ($asegu->email) }}</td>             
                                    <td>
                                        <a class="btn btn-buscar"><i class="fa fa-eye"></i>
                                            
                                        </a>

                                        <a class="btn btn-editar"><i class="fa fa-pencil"></i>
                                            
                                        </a>

                                        <a class="btn btn-delete"><i class="fa fa-trash"></i>
                                            
                                        </a>
                                    </td>
                                        </tr>
                                        @endforeach

                                </tbody>
                            </table>
                         </div>      
                                                                 {{ $aseguradoras->links() }}
                        
                          
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                    </div>                 
                        </section><!-- /.content -->
                    </div>
                </div>

@include('layouts.footer')        