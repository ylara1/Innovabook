<?php

namespace App\Http\Controllers;

use App\Libros;
use App\User;
use App\Admin;
use App\Capitulos;
use App\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ModController extends Controller
{
    //
    public function libros()
    {
        # code...
        $libros = Libros::paginate();
        $autores = User::paginate();

        return view("layouts.mod.libros")->with("autores",$autores)->with("libros",$libros);
    }
    public function librosbloqueados()
    {
        # code...
        $libros = Libros::paginate();
        $autores = User::paginate();

        return view("layouts.mod.libros_inac")->with("autores",$autores)->with("libros",$libros);

    }

    public function librosreportados()
    {
        # code...
        $autores = User::paginate();
        $libros = Libros::paginate();
        //$capitulos = Capitulos::where('Id_libro','like',$libros->Id_libro)->get();
        $comentarios = Comentario::paginate();
        return view('layouts.mod.libros_reportados')->with("autores",$autores)->with("libros",$libros)->with('comentarios',$comentarios);
    }

    public function edit($Id_libro)
    {
        # code...
        $libro = Libros::find($_POST["Id_libro"]);
        return redirect('mod/bloquear_libro')->with($libro->Id_libro);

    }
    public function bloquear()
    {
        # code...
        $libro = Libros::find($_POST["id"]);
        
        $libro->Estado = "Inactivo";
        $libro->Razon = $_POST["razon"];
        $libro->save();
        return redirect('admin/libros');
        echo"Libro Bloqueado";
    }
    public function desbloquear()
    {
        # code...
        $libro = Libros::find($_POST["id"]);
        
        $libro->Estado = "Activo";
        $libro->Razon = null;
        $libro->save();
        return redirect('admin/inactivos');
        echo"Libro Desbloqueado";
    }

    public function detalleslibro($Id_libro)
    {
        # code...
        $libros = Libros::find($Id_libro);
        $autores = User::where("id","=",$libros->Id_user)->first();
        $capitulos = Capitulos::where("Id_libro","=",$Id_libro)->get();
        $comentarios = Comentario::where("Id_libro",'=',$Id_libro)->get();
        $lectores = User::where("Id_tipo",'=',2)->get();
        
        return view('layouts.mod.detalles_libro',compact('libros','autores','capitulos','comentarios','lectores'));
    }

    public function vistacapitulo($Id_libro, $Id_capitulo)
    {
        # code...
        $capitulos = Capitulos::find($Id_capitulo);
        $libros = Libros::where("Id_libro",'=', $capitulos->Id_libro)->first();
        $autores = User::where("id",'=',$libros['Id_user'])->first();
        return view('layouts.mod.vista_capitulo',compact('capitulos','libros','autores'));
    }
    protected function create(Request $request)
    {
        $admin = new Admin();
        $admin->name =$request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();
        /*Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);*/
        return redirect('mod/nuevo_mod');
    }

}
