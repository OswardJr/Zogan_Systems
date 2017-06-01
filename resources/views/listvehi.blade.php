@include('layouts.headservices')

                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><strong>Vehículos</strong></div>
                          <div class="row">
                            <div class="col-md-12 ">
                            <div class="table-responsive">
                                <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Placa</th>
                                    <th>Propietario</th>
                                    <th>Marca</th>
                                    <th>Color</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehi)
                                        <tr> 
                                          <td>{{ ($vehi->placa) }}</td> 
                                          <td>{{ ($vehi->marca) }}</td> 
                                          <td>{{ ($vehi->modelo) }}</td> 
                                          <td>{{ ($vehi->color) }}</td>             
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
                                                                 {{ $vehiculos->links() }}
                        
                          
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                    </div>                 
                        </section><!-- /.content -->
                    </div>
                </div>

@include('layouts.footer')        