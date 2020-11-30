<?php

namespace App\Http\Controllers;

use App\Donacion;
use App\Libros;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($Id_libro)
    {
        //
        $libro = Libros::where('Id_libro','=',$Id_libro)->first();
        return view('layouts.new_donacion')->with('libro',$libro);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $now = new \DateTime();

        $donacion = new Donacion();
        $donacion->Id_user= $request->input('id_user');
        $donacion->Id_libro= $request->input('id_libro');
        $donacion->Valor_donacion = $request->input('monto');
        $donacion->Fecha_donacion = $now->format('d-m-y');
        $donacion->save();

        return redirect('libros/'.$donacion->Id_libro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $id= Auth::user()->id;

        $autor = User::where('id','=',$id)->first();
        $libro = Libros::paginate();
        $donacion = Donacion::paginate();
        $lector = User::paginate();
        return view('layouts.autor.donaciones',compact('autor','libro','donacion','lector'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
