<invoice>
                <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Selecciónn de Operarios</h4>
                                  </center>
                                </div>
                                <div class="panel-body">

        <div class="col-xs-7">
            <input id="repuesto" class="form-control" type="text" placeholder="Nombre del producto" />
        </div>
        <div class="col-xs-2">
            <input id="" class="form-control" type="text" placeholder="Cantidad" />
        </div>
        <div class="col-xs-2">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">S/.</span>
                <input class="form-control" type="text" placeholder="Precio" value="{descripcion}" readonly />
            </div>
        </div>
        <div class="col-xs-1">
            <button onclick={__addProductToDetail} class="btn btn-primary form-control" id="btn-agregar">
                <i class="glyphicon glyphicon-plus"></i>
            </button>
        </div>

                                </div>
                                <input type="hidden" name="" value="" />
                              </div>

<script>
        var self = this;

        self.on('mount', function(){
            __repuestoAutocomplete();
        })

        function __repuestoAutocomplete(){
            var repuesto = $("#repuesto"),
                options = {
                url: function(q) {
                    return baseUrl('ordenes/findProduct?q=' + q);
                },
                getValue: 'descripcion',
                list: {
                    onClickEvent: function() {
                        var e = repuesto.getSelectedItemData();
                        self.repuesto_id = e.id;
                        self.descripcion = e.descripcion;

                        self.update();
                    }
                }
            };

            repuesto.easyAutocomplete(options);
        }
    </script>
</invoice>