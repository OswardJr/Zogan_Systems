@include('layouts.headservices')

                          <br><div class="col-md-12">
                              @if(Session::get('message'))
                              <div class="col-md-8 col-md-offset-2">
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
                            <h3>Listado de Analistas</h3>
                                <hr>                         
                            <div class="panel panel-primary">
                                <div class="panel-heading"><strong>Analistas</strong></div>
                          <div class="row">
                            <div class="col-md-12 ">
                            <div class="table-responsive">
                                <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Cédula/Rif</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($analistas as $anali)
                                        <tr> 
                                          <td>{{ ($anali->rif) }}</td> 
                                          <td>{{ ($anali->nombre) }}</td> 
                                          <td>{{ ($anali->telefono) }}</td> 
                                          <td>{{ ($anali->email) }}</td>             
                                    <td>
                                        <a href="{{ route('analistas.show', $anali->id) }}" class="btn btn-buscar" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i>
                                            
                                        </a>

                                        <a href="{{ route('analistas.edit', $anali->id) }}" class="btn btn-editar" data-toggle="tooltip" title="Actualizar"><i class="fa fa-pencil"></i>
                                            
                                        </a>

                                        <a class="btn btn-delete" data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash"></i>
                                            
                                        </a>
                                    </td>
                                        </tr>
                                        @endforeach

                                </tbody>
                            </table>
                         </div>      
                                                                 {{ $analistas->links() }}
                        
                          
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                    </div>                 
                        </section><!-- /.content -->
                    </div>
                </div>

@include('layouts.footer')        