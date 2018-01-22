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
    <h3>Listado de Áreas Totales</h3>

    <table class="collapse">
<thead>
  <tr>
    <th style="width:100px;text-align:center;">Código</th>
    <th style="width:100px;text-align:center;">Descripción</th>
  </tr>
</thead>
                  @foreach ($areas as $ars)

<tr>
  <td style="width:100px;text-align:center;">{{ $ars->codigo }}</td>
  <td style="width:100px;text-align:center;">{{ $ars->descripcion }}</td>
</tr>
                  @endforeach

       
  </table>