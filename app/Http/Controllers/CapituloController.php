<?php

namespace App\Http\Controllers;

use App\Capitulos;
use App\Libros;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CapituloController extends Controller
{
    //
    public function insertcap($Id_libro)
    {
        # code...
        $libros = Libros::find($Id_libro);
        return view('layouts.autor.new_chapter')->with("libros", $libros);
    }
    public function savecapitulo(Request $request)
    {
        # code...
        $rules = [
            'file' => 'required|mimes:pdf'
        ];
        $file = $request->file('file');
        $validador = Validator::make($request->allFiles(),$rules);

        if ($validador->fails()) {
            # code...
            
            return redirect('/mis_libros/new/'.$request->input('id_libro'))->withErrors($validador);
        } else {
            # code...
            $file = $request->file('file');
            $nombre = time().$file->getClientOriginalName();
            $libro = $request->input('id_libro');
            $file = $request->file('file')->storeAs(Auth::user()->id.'/'.$libro, $nombre);
            //$file->move(public_path().'/document/'.Auth::user()->id.'/'.$libro, $nombre);
            //Storage::disk('local')->put(Auth::user()->id.'/'.$libro, $file);
            $cap = new Capitulos();
            $cap->link_cap= $nombre;
            $cap->Id_libro = $request->input('id_libro');
            $cap->n_cap =$request->input('n_cap');
            $cap->save();
            return redirect('mis_libros/'.$cap->Id_libro);
        }
        
    }
    public function destroy($Id_capitulo)
    {
        # code...
        $capitulo = Capitulos::find($Id_capitulo);
        Storage::delete(Auth::user()->id.'/'.$capitulo->Id_libro.'/'.$capitulo->link_cap);
        $capitulo->delete();
        return redirect('mis_libros/'.$capitulo->Id_libro);
        //var_dump($capitulo);
    }

    public function vercapitulo($Id_autor, $Id_libro, $Id_capitulo)
    {
        # code...
        $capitulos = Capitulos::find($Id_capitulo);
        $autores = User::paginate(5);
        $libros = Libros::where("Id_libro",'like',$capitulos->Id_libro)->first();
        return view('layouts.autor.vista_capitulo')->with("libros",$libros)->with("capitulos",$capitulos);
    }

    

    public function update(Request $request)
    {
        # code...
        $capitulo = Capitulos::find($request->input('id_capitulo'))->first();

    }
}
