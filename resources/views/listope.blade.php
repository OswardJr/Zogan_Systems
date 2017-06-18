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
                            <h3>Listado de Operarios</h3>
                                <hr>                         
                            <div class="panel panel-primary">
                                <div class="panel-heading"><strong>Operarios</strong></div>
                          <div class="row">                           
                            <div class="col-md-12 ">
                            <div class="table-responsive">
                                <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Cédula/Rif</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Labor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operarios as $ope)
                                        <tr> 
                                          <td>{{ $ope->id}}</td> 
                                          <td>{{ ($ope->nombre) }}</td> 
                                          <td>{{ ($ope->status) }}</td> 
                                          <td>{{ ($ope->tipo) }}</td>             
                                    <td>
                                        <a href="{{ route('operarios.show', $ope->id) }}" class="btn btn-buscar" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i>
                                            
                                        </a>

                                        <a href="{{ route('operarios.edit', $ope->id) }}" class="btn btn-editar" data-toggle="tooltip" title="Actualizar"><i class="fa fa-pencil"></i>
                                            
                                        </a>
                                        
                                        <form action="{{ route('operarios.destroy', $ope->id) }}" method="post">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input required="true" type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-delete" data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash"></i></button>

                                        </form>
                                    </td>
                                        </tr>
                                        @endforeach

                                </tbody>
                            </table>
                         </div>      
                                                                 {{ $operarios->links() }}
                        
                          
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                    </div>                 
                        </section><!-- /.content -->
                    </div>
                </div>

@include('layouts.footer')        