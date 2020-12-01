<?php

namespace App\Http\Controllers;

use App\Capitulos;
use App\Comentario;
use App\Donacion;
use App\Libros;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\CapituloController;

class LibrosController extends Controller
{
    //
    public function index(){
        $libros = Libros::paginate();
        $autores = User::paginate();

        return view("libros.libros")->with("autores",$autores)->with("libros",$libros);
    }

    public function paginacion(){
        $libros = Libros::paginate();
        $autores = User::paginate();

        return view("libros.libros")->with("autores",$autores)->with("libros",$libros);
    }

    public function edit($Id_libro)
    {
        # code...
        $libro = Libros::find($Id_libro);
        if (! Auth::user()== $libro->Id_user ) {
            # code...
            return redirect('/');
        }
        return view('layouts.autor.actualizar_libro')->with("libro", $libro);
    }

    public function iniciolibro($Id_libro)
    {
        # code...

        $libros = Libros::find($Id_libro);
        $capitulos = Capitulos::paginate();
        $comentarios = Comentario::where("Id_libro",'=',$Id_libro)->get();
        $lectores = User::where("Id_tipo",'=',2)->get();
        if(Auth::user()->id ==1){
            return view('layouts.autor.vista_libro',compact('libros','capitulos','comentarios','lectores'));
        }else{
            return view('libros.detalles_libro',compact('libros','capitulos'));
        }
        
    }
    public function detalleslibro($Id_libro)
    {
        # code...
        $libros = Libros::find($Id_libro);
        $autores = User::where("id","=",$libros->Id_user)->first();
        $capitulos = Capitulos::where("Id_libro","=",$Id_libro)->get();
        $comentarios = Comentario::where("Id_libro",'=',$Id_libro)->get();
        $lectores = User::where("Id_tipo",'=',2)->get();
        
        return view('layouts.detalleslibro',compact('libros','autores','capitulos','comentarios','lectores'));
        
    }

    public function vistacapitulo($Id_libro, $Id_capitulo)
    {
        # code...
        $capitulo = Capitulos::find($Id_capitulo);
        $libro = Libros::where("Id_libro",'=', $capitulo->Id_libro)->first();
        $autor = User::where("id",'=',$libro['Id_user'])->first();
        return view('layouts.vista_capitulo',compact('capitulo','libro','autor'));
        //var_dump($autor);
    }

    public function insert()
    {
        # code...
        return view('layouts.autor.new_book');
    }

    public function mislibros()
    {
        # code...
        
        $libros = Libros::paginate();
        $autores = User::paginate();
        $capitulos = Capitulos::paginate();
            # code...
            return view("layouts.autor.mis_libros")->with("autores",$autores)->with("libros",$libros)->with("capitulos",$capitulos);
        
        
    }

    public function librosbloqueados()
    {
        # code...
        $libros = Libros::paginate();
        $autores = User::paginate();
        $capitulos = Capitulos::paginate();
            # code...
            return view("layouts.autor.libros_bloqueados")->with("autores",$autores)->with("libros",$libros)->with("capitulos",$capitulos);
        
    }

    public function librosreportados()
    {
        # code...
        $autores = User::paginate();
        $libros = Libros::paginate();
        //$capitulos = Capitulos::where('Id_libro','like',$libros->Id_libro)->get();
        $comentarios = Comentario::paginate();
        return view('layouts.autor.libros_reportados')->with("autores",$autores)->with("libros",$libros)->with('comentarios',$comentarios);
    }

    public function storemass(Request $r)
    {

        $regla =[
            "nombre"=>["required"]
        ];
        $mensaje=[
            "required"=>"Campo obligatorio"
        ];
        $valitexto = Validator::make($_POST, $regla, $mensaje);

        if($valitexto -> fails()){
            return redirect("libros/insert")
            ->withErrors($valitexto)->withInput();
        }else{
            $libro = new Libros;
            $libro->Nombre_libro=$_POST["nombre"];
            $libro->Descripción=$_POST["descripcion"];
            $libro->Fecha_ini=$_POST["fecha"];
            $libro->Id_user=$_POST["id"];
            $libro->Estado="Activo";
            $libro->save();
            
            return redirect('/nuevo_libro')->with("exito","Libro registrado");
        }
    }


    public function buscador(Request $request)
    {
        # code...
        $libros = Libros::where("Nombre_libro",'like',$request->word."%")->get();
        $autor = User::paginate();
        return view("libros.prueba",compact("libros","autor"));
        
    }
    

    public function update()
    {
        # code...
        $reglas=[
            "name"=>["required"],
            "descripcion"=>["required"],
        ];

        $mensajes=[
            "required"=>"Campo obligatorio"
        ];

        $validador = Validator::make($_POST,$reglas,$mensajes);

        if($validador->fails()){
            return redirect('mis_libros/edit/'.$_POST["Id_libro"])->withErrors($validador)->withInput();
        } else{
            
            $libros = Libros::find($_POST["Id_libro"]);

            //DATOS A ACTUALIZAR
            $libros->Nombre_libro = $_POST["name"];
            $libros->Descripción = $_POST["descripcion"];
            $libros->save();
            return redirect('mis_libros/'.$libros->Id_libro);
        }
    }

    public function destroy($Id_libro){
        $libro = Libros::find($Id_libro);
        $capitulos = Capitulos::where("Id_libro",'like',$Id_libro)->get();
        $comentarios = Comentario::where("Id_libro",'like',$Id_libro)->get();
        $donaciones = Donacion::where("Id_libro",'like',$Id_libro)->get();
        //var_dump($capitulos);
        foreach ($capitulos as $cap) {
            # code...
            Storage::delete(Auth::user()->id.'/'.$cap->Id_libro.'/'.$cap->link_cap);
            $cap->delete();
        }
        foreach ($comentarios as $com) {
            # code...
            $com->delete();
        }
        foreach ($donaciones as $don) {
            # code...
            $don->delete();
        }
        $libro->delete();
        return redirect('/mis_libros');
    }

}
