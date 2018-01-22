<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imagenes;
use App\Image_rec;
use App\Recepciones;
use App\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargaController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function getImages($placa) {
		$auto = Vehiculos::where('placa', $placa)->first();

		if (!$auto) {
			$msj = array('status' => 'error');
			return $msj;
		}

		$results = DB::select('SELECT id  FROM recepciones WHERE vehiculo_id  = :id', ['id' => $auto->id]);

		$array = array();
		$RECEPCION = array();

		foreach ($results as $value) {
			$images = DB::select('
        SELECT i.imagen_id, r.tipo,r.fecha, imagenes.nombre
        FROM image_receps as i
        inner JOIN recepciones as r
        ON i.recepcion_id = r.id
        INNER JOIN imagenes
        ON i.imagen_id = imagenes.id
        WHERE recepcion_id = :id', ['id' => $value->id]);
			foreach ($images as $image) {
				if ($image->tipo == 'RECEPCION') {
					array_push($RECEPCION, $image);
				}
			}
			$array = array('RECEPCION' => $RECEPCION);
		}

		return array('data' => $array, 'auto' => $auto);

	}

	public function upload(Request $request) {
		$rec = new Recepciones();
		$auto = new Vehiculos();
		$idAuto = $request->_idAuto;
		$auto = Vehiculos::find($idAuto);
		$auto->status = 'RECEPCION';
		$auto->save();

		$rec->metodo = $request->metodo;
		$rec->chofer = $request->chofer;
		$rec->tlf_chofer = $request->tlf_chofer;
		$rec->productor = $request->productor;
		$rec->recibe = $request->recibe;
		$rec->fecha = $request->_fechaRec;
		$rec->kilometraje = $request->kilometraje;
		$rec->combustible = $request->combustible;
		$rec->observacion = $request->observacion;
		$rec->vehiculo_id = $request->_idAuto;
		$rec->save();

		$recId = $rec->id;

		if ($request->hasFile('images')) {
			$files = $request->file('images');

			foreach ($files as $file) {
				$image = new Imagenes();
				$imageRec = new Image_rec();
				$randomName = str_random(5);
				$imageName = $randomName . '.' . $file->getClientOriginalExtension();
				$image->nombre = $imageName;
				$image->save();
				$imageId = $image->id;
				$imageRec->imagen_id = $imageId;
				$imageRec->recepcion_id = $recId;
				$imageRec->save();
				$file->move(public_path('images'), $imageName);
			}
		}
		return redirect('/ruta')->with('message', '¡Ha sido guardada exitosamente!');
	}

}
