<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    //
    public function updateview()
    {
        # code...
        if (Auth::user()->Id_tipo == 1) {
            # code...
            return view('layouts.autor.actualizar_datos');
        } else{
            return view('layouts.actualiusuario');
        }
        
    }

    public function update(Request $request)
    {
        # code...
        $reglas =[
            "name"=>["required"],
            "mypassword"=>["required"],
            "password"=>["required"]
        ];
        $validator = Validator::make($request->all(), $reglas);
        if ($validator->fails()) {
            # code...
            return redirect('/actualizar_perfil')->withErrors($validator);
        } else{
            if (Hash::check($request->mypassword, Auth::user()->password)) {
                # code...
                $user = new User;
                
                $user->where('id','=', Auth::user()->id)
                    ->update(['name'=>$request->name]);
                    
                $user->where('id','=', Auth::user()->id)
                    ->update(['password'=>bcrypt($request->password)]);  
                if(Auth::user()->Id_tipo ==1 ){
                    return redirect('/dashboard-autor');
                }else{
                    return redirect('/');
                }
                    
            }
        }
    }
}
