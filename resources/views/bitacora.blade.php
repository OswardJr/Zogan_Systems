
@include('layouts.headuser')

<div class="page-content-wrapper" style="">
  <div class="page-content">
    <div class="col-md-12">
      <div class="text-right nuevo-veh">
              <!-- <a href="{{ url('/usuarios/create') }}" title="Registrar Usuario" class="btn btn-nuevo"><span class="fa fa-plus"></span></a> -->
            </div>
    </div>
    <section class="content">
      <h3>Bitácora</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Acciones de usuarios</strong></h4></div>
        <div class="row">
          <div class="col-md-12 ">
              <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>IP</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>IP</th>
                <th>Acción</th>
            </tr>
        </tfoot>
    </table>
        </div><!-- /.row -->
      </div>
    </div>
  </section><!-- /.content -->
</div>
</div>

@include('layouts.footer')

<script>
$(document).ready(function () {

const url = "{{url('/bitacorajax')}}" ;

$('#example').DataTable( {
        "ajax": url,
        "paging": true,
        "ordering": true,
        "info": true,
        "language": {
                "url": "DataTables/spanish.json"
        },
        "columns": [
            { "data": "nombre" },
            { "data": "fecha" },
            { "data": "hora" },
            { "data": "ip" },
            { "data": "accion" }
        ]
    } );


});
</script>

