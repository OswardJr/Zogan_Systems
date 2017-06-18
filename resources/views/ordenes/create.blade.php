@include('layouts.headservices')

               <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">

                          <div class="col-md-12">
                                     <div class="col-md-9">
                              <h2>Nueva Orden de Reparación</h2>
                                </div>
                                    <div class="col-md-3">
                                        <div class="panel-body ">
                                          <h4><strong>Número:</strong> 0000001</h4>
                                        </div>
                                     </div>
                                  </div>                            
                          </div>

                            <div class="col-md-12 ">
                                <hr>
                                   <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Seguro</h4>
                                  </center>
                                </div>

                              <div class="panel-body ">
                                    <div class="form-group col-lg-4">
                                      <label>Apellidos y Nombres del Asegurado:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Pacheco Requena Osward José" required="true" >
                                    </div>
                                    <div class="form-group col-lg-4">
                                      <label>Cédula / Rif:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="V-20989357" required="true" >
                                    </div>
                                    <div class="form-group col-lg-4">
                                      <label for="">Seleccione la Aseguradora</label>
                                      <select class="form-control" id="" name="">
                                        <option value=""></option>
                                        <option>Seguros Caracas, C.A</option>
                                        <option>Seguros Universitas, C.A</option>
                                      </select>
                                  </div>
                                    <div class="form-group col-lg-4">
                                      <label>Fecha de Ocurrencia del Siniestro:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="25-11-2016" required="true" >
                                    </div>
                                    <div class="form-group col-lg-4">
                                      <label>Número de Poliza:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="93-56-2399217" >
                                    </div>  
                                    <div class="form-group col-lg-4">
                                      <label>Número del Certificado / Recibo:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="0/4739494" >
                                    </div> 
                                    <div class="form-group col-lg-4">
                                      <label>Número del Siniestro:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="93-562388688" >
                                    </div>                                            </div>
                              </div>

                                   <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Vehículo</h4>
                                  </center>
                                </div>

                              <div class="panel-body ">
                                    <div class="form-group col-md-3">
                                      <label>Marca:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="CHEVROLET" required="true" >
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label>Modelo:<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="NHR" required="true" >
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label>Tipo:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="FURGÓN" required="true" >
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label>Año:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="2013" >
                                    </div>  
                                    <div class="form-group col-md-3">
                                      <label>Color:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="BLANCO" >
                                    </div> 
                                    <div class="form-group col-md-3">
                                      <label>Placa:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="D1O5V3N" >
                                    </div>  
                                    <div class="form-group col-md-3">
                                      <label>Serial del Motor:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="326488" >
                                    </div> 
                                    <div class="form-group col-md-3">
                                      <label>Serial de la Carrocería:<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="UWRUU38484NXWJD23" >
                                    </div>                                                                              
                                    </div>
                              </div>

                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Analista</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                   <div class="col-lg-offset-1 col-lg-4">
                                    <div class="form-group">
                                      <label for="">Seleccione el Analista</label>
                                      <select class="form-control" id="" name="">
                                        <option value=""></option>
                                        <option>Richard Pérez</option>
                                        <option>Manuel Olivares</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="">Notas / Observaciones</label>
                                        <textarea class="form-control"></textarea>
                                      </div>
                                  </div> 

                                </div>
                                <input type="hidden" name="" value="" />
                              </div>


                                        <div class="panel panel-primary ">
                                          <div class="panel-heading ">
                                            <center>
                                              <h4>Detalles del Pago</h4>
                                            </center>
                                          </div>
                                          <div class="panel-body ">
                                             <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Mano de Obra:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                              <label for="fecha_nac">Total de Repuestos:</label>                                      
                                                <input type="text" class="form-control" placeholder="bsf" required="required">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Depreciación / Penalización:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Depre. Rep:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>  
                                             <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Mecánica / Otros:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                              <label for="fecha_nac">Total Accesorios:</label>                                      
                                                <input type="text" class="form-control" placeholder="bsf" required="required">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Sub-total MO:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Deprec. Acc(-):</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>
                                             <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Otros Gastos:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                              <label for="fecha_nac">Dif.S / Repuestos Taller:</label>                                      
                                                <input type="text" class="form-control" placeholder="bsf" required="required">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Total Mano de Obra:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Manejo de Rep/Acc:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-6">
                                              <div class="form-group">
                                              <br><h5><strong>Total Mano de Obra/Mecánica/Repuestos/Accesorios:</strong></h5>
                                              </div>
                                            </div>

                                            <div class="col-lg-4">
                                              <div class="form-group">
                                                <br><input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <br><label for="">Deducción:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <br><label for="">Órdenes de Repuestos / Accesorios:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Desc. Prepago(-):</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Repuestos Otros Suplidores:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Monto:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Depreciación:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>


                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">I.V.A:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Accesorios Otros Suplidores:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Deducible Póliza:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Depreciación(-):</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>


                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Sub-total:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Total Órdenes Rep/Acc:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>  

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">I.S.L.R:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>

                                            <div class="col-lg-offset-2 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Monto a Cargo del Asegurado:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div> 

                                            <div class="col-lg-offset-1 col-lg-4">
                                              <div class="form-group">
                                                <label for="">Total Orden de Reparación:</label>
                                                <input type="text" name="" placeholder="bsf" class="form-control">
                                              </div>
                                            </div>                                                                                         
                                        </div>
                                      </div>

                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Descripción de Daños / Reparación y Mecánica</h4>
                                  </center>
                                </div>
                                <div class="panel-body">
                                <div class="form-group col-md-6 ">
                                  <label>Descripción</label>
                                  <textarea type="text" placeholder="PUERTA DERECHA (CAMIÓN)" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-6 ">
                                  <label>Tipo de Daño</label>
                                  <textarea type="text" placeholder="REPARAR Y PINTAR 
INSTALAR" class="form-control"></textarea>
                                </div>

                                </div>
                                <input type="hidden" name="" value="" />
                              </div>

                                                            <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Repuestos</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                <div class="form-group col-md-3 col-md-offset-1 " style="margin-bottom: 0px; height: 60px">
                                  <p class="margin"><strong>Repuesto</strong></p>
                                  <div class="input-group input-group-sm">
                                    <input id="codigo" name="code" type="text" class="form-control" disabled>
                                    <span class="input-group-btn">
                                      <div data-toggle="tooltip" title="Buscar"  class="btn btn-info btn-flat fa fa-search " ></div>
                                    </span>
                                  </div>
                                </div>
                                <div class="form-group col-md-offset-1 col-md-6 ">
                                  <label>Descripción</label>
                                  <textarea type="text" class="form-control" disabled ></textarea>
                                </div>
                                <div class="form-group col-md-offset-1 col-md-2 ">
                                  <p class="margin"><strong>Existencia</strong></p>
                                  <input type="text" class="form-control" disabled>
                                </div>
                                <div class="form-group col-md-offset-1 col-md-3 ">
                                  <label style="margin-bottom: 10px;"><strong>Stock Mínimo</strong></label>
                                  <input type="text" class="form-control" disabled>
                                </div>
                                  <div class="form-group col-md-offset-1 col-md-2 ">
                                  <p class="margin"><strong>Cantidad</strong></p>
                                  <input type="text" class="form-control"  disabled >
                                </div>
                                <div class="form-group col-md-1" style="margin-right:-20px">
                                  <div class="btn btn-agregar fa fa-plus btn-agregar-producto" onClick="" style="margin-top:25px"></div>
                                </div>
                                </div>
                                <input type="hidden" name="" value="" />
                              </div>
                              

                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Repuestos Seleccionados</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                   <div class="table-responsive"> 
                                    <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">P000233
                                    </td>
                                    <td>Rodamientos</td>
                                    <td>2</td>
                                    <td><a class="btn btn-delete"><i class="fa fa-trash"></i>
                                    </a></td>
                                </tr> 

                                </tr>
                                </tbody>
                            </table>
                                </div>
                                </div>

                            </div>

                                                          <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Operarios Seleccionados</h4>
                                  </center>
                                </div>
                                <div class="panel-body">

                                  <div class="form-group col-md-offset-1 col-md-3">
                                  <p class="margin"><strong>Lista de Operarios</strong></p>
                                  <select class="form-control">
                                      <option></option>
                                      <option>José</option>
                                      <option>Rafael</option>                                   
                                  </select>
                                </div>
                                                                <div class="form-group col-md-6 ">
                                  <label>Observaciones</label>
                                  <textarea type="text" placeholder="PUERTA DERECHA (CAMIÓN)" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-1" style="margin-right:-20px">
                                  <div class="btn btn-agregar fa fa-plus btn-agregar-producto" onClick="" style="margin-top:25px"></div>
                                </div>

                                </div>
                                <input type="hidden" name="" value="" />
                              </div>


                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Operarios Seleccionados</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                   <div class="table-responsive"> 
                                    <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Operarios</th>
                                    <th>Observaciones</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">José
                                    </td>
                                    <td>REPARAR Y PINTAR</td>
                                    <td><a class="btn btn-delete"><i class="fa fa-trash"></i> 
                                    </a></td>
                                </tr> 

                                <tr id="tr-id-2" class="tr-class-1">
                                    <td id="td-id-2" class="td-class-1">Rafael
                                    </td>
                                    <td>REPARAR Y PINTAR</td>
                                    <td><a>
                                        <button class="btn btn-delete"><i class="fa fa-trash"></i>
                                            
                                        </button>
                                    </a></td>
                                </tr>

                                </tr>
                                </tbody>
                            </table>
                                </div>
                                </div>
                                </div>

                                      <div class="col-xs-offset-5 col-md-12">
                                          <button type="submit" class="btn btn-guardar fa fa-save"></button>
                                          <button type="reset" class="btn btn-refresh fa fa-repeat  "></button>
                                    </div>                                  
                            </div>                                    

@include('layouts.footer')   