<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Revisiones;
use App\Imagenes;
use App\Vehiculos;
use App\Propietarios;
use App\Image_rev;
use App\Reparaciones;
use App\Ayudantes;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

  private $path = 'ayudantes';

  public function index()
  {

  }

  public function create()
  {

  }

  public function store(Request $request)
  {

  }

  public function show($id)
  {

  }

  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {

  }

  public function destroy($id)
  {

  }
  public function getImages($placa)
  {
    $auto = Vehiculos::where('placa', $placa)->first();

    if (!$auto) {
      $msj = array('status' => 'error');
      return $msj;
    }

    $results = DB::select('SELECT id  FROM revisiones WHERE vehiculo_id  = :id', ['id' => $auto->id]);

    $array = array();
    $DESARMADO = array();$LATONERIA= array();$PINTURA = array();$PREPARACION = array();$PULITURA = array();$LIMPIEZA = array();$ENTREGA = array();

    foreach ($results as $value) {
      $images = DB::select('
        SELECT i.imagen_id, r.tipo,r.fecha, imagenes.nombre
        FROM image_revs as i
        inner JOIN revisiones as r
        ON i.revision_id = r.id
        INNER JOIN imagenes
        ON i.imagen_id = imagenes.id
        WHERE revision_id = :id', ['id' => $value->id]);
      foreach ($images as $image){
        if ($image->tipo == 'LATONERIA') {
          array_push($LATONERIA,$image);
        }
        elseif ($image->tipo == 'PINTURA') {
          array_push($PINTURA,$image);
        }
        elseif ($image->tipo == 'PREPARACION') {
          array_push($PREPARACION, $image);
        }
        elseif ($image->tipo == 'PULITURA') {
          array_push($PULITURA,$image);
        }
        elseif ($image->tipo == 'LIMPIEZA') {
          array_push($LIMPIEZA,$image);
        }
        elseif ($image->tipo == 'ENTREGA') {
          array_push($ENTREGA,$image);
        }
        elseif ($image->tipo == 'DESARMADO') {
          array_push($DESARMADO,$image);
        }
      }
      $array = array('DESARMADO'=>$DESARMADO,'LATONERIA'=>$LATONERIA,'PINTURA'=>$PINTURA,'PREPARACION'=>$PREPARACION,'PULITURA'=>$PULITURA,'LIMPIEZA'=>$LIMPIEZA,'ENTREGA'=>$ENTREGA);
    }

        // SELECT id FROM revisions WHERE vehiculo_id = 1

        // SELECT image_id FROM image_revs WHERE revision_id = 1

        // SELECT nombre FROM images WHERE id = 10

    return array('data'=>$array,'auto'=>$auto);

  }

  public function upload(Request $request)
  {

   $ayudantes = DB::table('ayudantes')->get();

   $rev = new Revisiones();
   $auto = new Reparaciones();
   $idAuto = $request->_idAuto;
   $auto = Vehiculos::find($idAuto);
   if ($request->_tipoRev == "ENTREGA") {
     $auto->status = "COMPLETO";
   } else {
     $auto->status = $request->_tipoRev;
   }
   $auto->save();


   $re = $request->get('encargado_entrega');
   $rev->encargado_entrega = $re;
   $res = $request->get('encargado_recibe');
   $rev->encargado_recibe = $res;   
   $rev->avances = $request->avances;
   $rev->tipo = $request->_tipoRev;
   $rev->fecha = $request->_fechaRev;
   $rev->vehiculo_id = $request->_idAuto;

   $rev->save();

   $revId = $rev->id;

   if ($request->hasFile('images')) {
    $files = $request->file('images');

    foreach($files as $file){
      $image = new Imagenes();
      $imageRev = new Image_rev();
      $randomName = str_random(5);
      $imageName = $randomName.'.'.$file->getClientOriginalExtension();
      $image->nombre = $imageName;
      $image->save();
      $imageId = $image->id;
      $imageRev->imagen_id = $imageId;
      $imageRev->revision_id = $revId;
      $imageRev->save();
      $file->move(public_path('images'), $imageName);
    }
  }
  return redirect('/ruta')->with('message','¡Ha sido guardada exitosamente!');
}

}
