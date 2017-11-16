<html>
<head>
</head>
<body>
<header>

    <img src="{{URL::asset('http://localhost/Zogan_Systems/public/img/gandocam.png')}}" style="margin-left:340px;width: 90px;height: 40px"/>

<style>
@page {
  margin-top: 1em;
  margin-left: 1em;
  margin-bottom: 1em;
  margin-right: 1em;
}
* {
  background-color: #ffffff;
}

body{
  font:12px Arial, Tahoma, Verdana, Helvetica, sans-serif;
  color:#000;
  margin:0;
  padding: 0;
  height: 100%;
  /*border: solid 1px;*/
}
header{
  width: 100%;
  margin: 0;
  padding: 0;
  height: 120px;
}
header img{
  width:25%;
  margin: 0;
  height: 90px;
  padding-top: 1em;
  padding-left: .2em;
}
header h2{
  width:70%;
  font-size: 3.3em;
  margin: 0;
  margin-top: 0.5em;
  padding: 0;
  display: inline-block;
}
header h3{
  font-size: 1em;
  margin-left: 38%;
}
hr{
  width: 100%;
  margin: 0;
  left: -5em;
  top: 6em;
}
#me{
  margin-top: 2em;
  width: 83%;
  height: 90px;
  border: solid 0px;
  display: inline-block;
  margin-left: -70px;
}
#me h2{
  font-size: 2.8em;
  margin: 0;
  padding: 0;
}
#me h4{
  font-size: 1.5em;
  color: #555;
  margin: 0;
  padding: 0;
}

#linea{
  margin: 0px;
  padding: 0px;
  margin-top: -5px;
  color: #444;

}
#linea h3
{
  text-align: center;
  line-height: 0.5;
  font-size: 1.5em;
  color: #444;
}
#cuerpo{
  width: 100%;
}
#cuerpo h2{
  width: 100%;
  font-size: 0.9em;
  font-weight: normal;
}
.encabezado{
  font-size: 16px;

}

table {
  margin: auto;

}

thead {
  background-color: #eeeeee;
}

tbody {
  background-color: #ffffee;
}
th{
border-right: 1px solid black;

}
th,td {
  padding: 3pt;

}



table.collapse {
  border-collapse: collapse;
  border: 1px solid black;
  font-size: 14px;
}

table.collapse td {
  border: 1px solid black;
}

h3 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url("http://localhost/Zogan_Systems/public/img/dimension.png");
}
  
</style>
  </header>
    <h3>Orden de Reparación</h3>

    <table class="collapse">
      <tr>
      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Nº de Poliza: {{ $reparacio->numero }}</td>

      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Nº de Certificado/Recibo: {{ $reparaciones->num_certificado }}</td>
   </tr>  
  <tr>
    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;font-size: 10px">Apellidos y Nombres del Asegurado:</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975">Cédula/Rif:</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;">Fecha del Siniestro:</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;">Nº Siniestro:</td>
    </tr>

  <tr>
    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;font-size: 9px">{{ $reparacion->nombre_completo}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;">{{ $reparacion->rif}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;">{{ $reparaciones->fecha_ocu}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;">{{ $reparaciones->nro_siniestro}}</td>
    </tr> 

  <tr>
    <td colspan="4" style="float: right; text-align:center;background:#F5F5F5;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">DATOS DEL VEHÍCULO</td>
    </tr> 
  <tr>
    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Marca: {{ $reparacione->marca}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Modelo: {{ $reparacione->modelo}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Tipo: {{ $reparacione->tipo}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Año: {{ $reparacione->anio}}</td>
    </tr>

      <tr>
      <td style="width:130px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Color: {{ $reparacione->placa}}</td>

      <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Placa: {{ $reparacione->placa}}</td>

      <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Serial del Motor: {{ $reparacione->serial_motor}}</td>

      <td style="width:100px;text-align:center;font-weight: 5px;white-space: nowrap;color: #5D6975;padding: 5px 20px;font-size: 10px;">Serial de la Carrocería: {{ $reparacione->serial_carro}}</td>
   </tr>

     <tr>
    <td colspan="4" style="text-align:center;background:#F5F5F5;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">NOTAS DEL ANALISTA</td>
    </tr>

     <tr>
    <td colspan="4" height="30" style="text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">{{ $reparaciones->notas }}</td>
    </tr>

     <tr>
    <td colspan="4" style="text-align:center;background:#F5F5F5;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">DETALLES DEL PAGO</td>
    </tr>

     <tr>
    <td colspan="4" height="200" style="text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">
      <span>{{ $reparaciones->notas }}</span>
      <span>{{ $reparaciones->notas }}</span>
      <span>{{ $reparaciones->notas }}</span>
      <span>{{ $reparaciones->notas }}</span>
      <span>{{ $reparaciones->notas }}</span>
      <span>{{ $reparaciones->notas }}</span>
      <span>{{ $reparaciones->notas }}</span>


    </td>
    </tr>    

    <tr>
    <td colspan="4" style="text-align:center;background:#F5F5F5;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">DESCRIPCIÓN DE DAÑOS / REPARACIÓN Y MECÁNICA</td>
    </tr>

      <tr>
      <td colspan="2" style="width:130px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Descripción:</td>

      <td colspan="1" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Tipo de Daño:</td>

      <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">% Deprec.:</td>
   </tr> 

      <tr>
      <td colspan="2" style="width:130px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">{{ $reparaciones->descripcion_daños }}</td>

      <td colspan="1" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">{{ $reparaciones->tipos_daños }}</td>

      <td height="150" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;"></td>
   </tr>       
  </table>