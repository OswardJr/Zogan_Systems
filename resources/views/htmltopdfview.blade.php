<html>
<head>
</head>
<body>
<header>
      <div id="me">
      <h4 style="text-align:left;border:solid 0px;margin-left:70px;width:70%;">Urb. Castillito, Av. N°70, Parcela L-150 </h4>
      <h4 style="text-align:left;border:solid 0px;margin-left:70px;width:50%;">San Diego Edo. Carabobo</h4>
      <h4 style="text-align:left;border:solid 0px;margin-left:70px;width:50%;">(A dos cuadras del Big Low Center)</h4>
      <h4 style="text-align:left;border:solid 0px;margin-left:70px;width:70%;">Telfs.:(0241) 871-8167 | (0241) 871-7402</h4>          
    </div>
    <img src="{{URL::asset('http://localhost/Zogan_Systems/public/img/gandocam.png')}}" style="float: right;width: 150px;height: 80px;margin-top: -30px"/>

<style>

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
    <h3>Orden de Reparación  # {{ $reparacion->id }}</h3>

    <table class="collapse">
      <tr>
      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Nº de Poliza: {{ $reparacio->numero }}</td>

      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Nº de Certificado/Recibo: {{ $reparaciones->num_certificado }}</td>
   </tr>
      <tr>
      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Cédula/Rif: {{ $reparacion->rif }}</td>

      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;font-size: 10px">Apellidos y Nombres del Asegurado: {{ $reparacion->nombre_completo }}</td>
   </tr> 

      <tr>
      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Fecha del Siniestro: {{ $reparaciones->fecha_ocu}}</td>

      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Nº Siniestro: {{ $reparaciones->nro_siniestro}}</td>
   </tr>        

  <tr>
    <td colspan="4" style="float: right; text-align:center;background:#F5F5F5;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">DATOS DEL VEHÍCULO</td>
    </tr> 
  <tr>
    <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Marca: {{ $reparacione->marca}}</td>

    <td colspan="1" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Modelo: {{ $reparacione->modelo}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Tipo: {{ $reparacione->tipo}}</td>

    </tr>

  <tr>
      <td colspan="2" style="width:130px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Color: {{ $reparacione->color}}</td>

      <td colspan="1" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Placa: {{ $reparacione->placa}}</td>

    <td style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Año: {{ $reparacione->anio}}</td>
    </tr>


      <tr>
      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Serial del Motor:</td>

      <td colspan="2" style="width:100px;text-align:center;font-weight: 5px;white-space: nowrap;color: #5D6975;padding: 5px 20px;">Serial de la Carrocería:</td>
   </tr>

      <tr>
      <td colspan="2" style="width:100px;text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">{{ $reparacione->serial_motor}}</td>

      <td colspan="2" style="width:100px;text-align:center;font-weight: 5px;white-space: nowrap;color: #5D6975;padding: 5px 20px;">{{ $reparacione->serial_carro}}</td>
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
    <td colspan="4" height="200" style="font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;">
      <?php


       $iva = number_format($reparaciones->monto_final - $reparaciones->monto_final / 1.12);
       ?>
      <p><strong>Mano de obra (Pintura / Latoneria): </strong> <?php echo number_format($reparaciones->mano_obra, 2, ',', '.') ?> BsF</p>

      <p><strong>Mecanica:</strong> <?php echo number_format($reparaciones->mecanica_otros, 2, ',', '.') ?> BsF</p>

      <p><strong>Subtotal Mano de obra:</strong> <?php  echo number_format($reparaciones->mano_obra +  $reparaciones->mecanica_otros, 2, ',', '.') ?> BsF</p>

      <p><strong>Otros gastos:</strong> <?php echo number_format($reparaciones->otros_gastos, 2, ',', '.')  ?> BsF</p>

      <p><strong>Total Mano de obra / Mecanica:</strong> <?php echo number_format($reparaciones->mano_obra + $reparaciones->mecanica_otros +  $reparaciones->otros_gastos, 2, ',', '.')  ?> BsF</p>

      <p><strong>Sub total de orden:</strong> <?php echo number_format($reparaciones->mano_obra + $reparaciones->mecanica_otros +  $reparaciones->otros_gastos, 2, ',', '.')  ?> BsF</p>

      <p><strong>IVA:</strong> <?php echo $iva  ?> BsF</p>
      
      <p><strong>Deducible Póliza:</strong> <?php echo number_format($reparaciones->deducible_p, 2, ',', '.')  ?> BsF</p>

      <p><strong>I.S.L.R:</strong> <?php echo number_format($reparaciones->islr, 2, ',', '.')  ?> BsF</p>

      <p><strong>Monto a cargo del asegurado:</strong> <?php echo number_format($reparaciones->monto_asegu, 2, ',', '.')  ?> BsF</p>

      <p><strong>Total orden de reparacion:</strong> <?php echo number_format($reparaciones->monto_final)  ?> BsF</p>
      <br>
      <br>

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
      <td colspan="2" style="text-align:justify; width:80px;font-weight: normal;color: #5D6975;padding: 5px 20px"><span style="font-size: 10px">{{ $reparaciones->descripcion_daños }}</span></td>

      <td colspan="1" style="width:100px;font-weight: normal;color: #5D6975;padding: 5px 20px;"><span style="text-align:justify;font-size: 10px">{{ $reparaciones->tipos_daños }}</span></td>

      <td height="150" width="20" colspan="1" style="text-align:center;font-weight: normal;white-space: nowrap;color: #5D6975;padding: 5px 20px;"></td>
   </tr>       
  </table>