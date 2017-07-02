<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use App\Imagenes;
use App\Revisiones; 
use App\Vehiculos; 
use App\Propietarios; 
use App\Recepciones; 
use App\Image_rev;
use App\Reparaciones;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
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
    $desarmado = array();$latoneria= array();$pintura = array();$preparacion = array();$pulitura = array();$limpieza = array();$recepcion = array();$entrega = array();

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
        if ($image->tipo == 'desarmado') {
          array_push($desarmado,$image);
        }
        elseif ($image->tipo == 'latoneria') {
          array_push($latoneria,$image);
        }
        elseif ($image->tipo == 'pintura') {
          array_push($pintura,$image);
        }
        elseif ($image->tipo == 'preparacion') {
          array_push($preparacion, $image);
        }
        elseif ($image->tipo == 'pulitura') {
          array_push($pulitura,$image);
        }
        elseif ($image->tipo == 'limpieza') {
          array_push($limpieza,$image); 
        }
        elseif ($image->tipo == 'entrega') {
          array_push($entrega,$image); 
        }
      }
      $array = array('desarmado'=>$desarmado,'latoneria'=>$latoneria,'pintura'=>$pintura,'preparacion'=>$preparacion,'pulitura'=>$pulitura,'limpieza'=>$limpieza,'entrega'=>$entrega);      
    }

        // SELECT id FROM revisions WHERE vehiculo_id = 1

        // SELECT image_id FROM image_revs WHERE revision_id = 1

        // SELECT nombre FROM images WHERE id = 10

    return array('data'=>$array,'auto'=>$auto);

  }

  public function upload(Request $request)
  {
   $rev = new Revisiones();  
   $auto = new Reparaciones();
   $idAuto = $request->_idAuto;
   $auto = Reparaciones::find($idAuto);
   if ($request->_tipoRev == "armado") {
     $auto->status = "completo";
   } else {
     $auto->status = $request->_tipoRev;
   }
   $auto->save();


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
  return redirect('revision/'. $request->_idAuto )->with('message','Ha sido guardado exitosamente!');
}    

}
