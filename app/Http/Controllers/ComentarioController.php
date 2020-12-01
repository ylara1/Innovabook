<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Libros;
use DateTime;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //
    public function save(Request $request)
    {   
        $now = new \DateTime();
        # code...
        $comentario = new Comentario();
        $comentario->Id_user = $request->input('id_user');
        $comentario->Id_libro = $request->input('id_libro');
        $comentario->texto = $request->input('comentario');
        $comentario->Id_tipo_com = $request->input('id_tipo');
        $comentario->Fecha_com = $now->format('d-m-y');
        $comentario->save();
        return redirect('libros/'.$comentario->Id_libro);
    }

    public function destroy($Id_comentario)
    {
        # code...
        $comentario = Comentario::find($Id_comentario);
        $comentario->delete();

        return redirect('libros/'.$comentario->Id_libro);
    }

    
}
