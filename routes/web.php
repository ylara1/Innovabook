<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Rutas mod prueba
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
    
    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdminAuth\RegisterController@register');
  
    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
    
    Route::get('/libros', 'ModController@libros');
    Route::get('/libros/detalles/{Id_libro}', 'ModController@detalleslibro');
    Route::get('/libros/{Id_libro}/{Id_capitulo}', 'ModController@vistacapitulo');
    Route::get('/libros', 'ModController@libros');


    Route::get('/inactivos', 'ModController@librosbloqueados');
    Route::get('/reportados', 'ModController@librosreportados');
    
    Route::post('/desbloquear_libro', 'ModController@desbloquear');
    Route::post('/bloquear_libro', 'ModController@bloquear');
    Route::post('/registrar','ModController@create');
  });
    
  Route::group(['middleware' => 'admin'], function () {
    
    //Rutas mod
    
    
    
    Route::get('mod/reportes', function () {
        return view('layouts.mod.report');
    });
    Route::get('mod/denuncia_comentarios', function () {
        return view('layouts.mod.comments');
    });
    Route::get('mod/configuraciones', function () {
        return view('layouts.mod.settings');
    });
    Route::get('mod/categoria', function () {
        return view('layouts.mod.category');
    });
    Route::get('mod/nuevo_mod', function () {
        return view('layouts.mod.new_mod');
    });

});

//RUTAS DEL AUTOR
Route::get('/dashboard-autor', function (){
    return view('layouts.autor.home');
})->name('autor.dashboard'); 

///Rutas actualizacion e insercion

Route::group(['middleware' => 'auth'], function () {
    Route::get('/nuevo_libro', 'LibrosController@insert');
    Route::post('/store', 'LibrosController@storemass');
    ///Ruta libros usuario
    Route::get('/mis_libros', 'LibrosController@mislibros');
    Route::get('/mis_libros/{Id_libro}', 'LibrosController@iniciolibro' );
    Route::get('mis_libros/edit/{Id_libro}',"LibrosController@edit");
    Route::post('mis_libros/update', "LibrosController@update");
    Route::post('mis_libros/{Id_libro}/destroy',"LibrosController@destroy");
    ///Libros bloqueados
    Route::get('/libros_bloqueados', 'LibrosController@librosbloqueados' );
    //Libros reportados
    Route::get('/libros_reportados', 'LibrosController@librosreportados');
    ///Registro donaciones
    Route::get('/donaciones', 'DonacionesController@show');
    ///Ruta capitulos de usuario
    Route::get('/mis_libros/{Id_autor}/{Id_libro}/{Id_capitulo}', 'CapituloController@vercapitulo');
    //Rutas comentarios
    Route::post('libros/comentario/save', 'ComentarioController@save');
    Route::post('libros/comentario/destroy/{Id_comentario}','ComentarioController@destroy');
    //Ruta actualizacion de datos
    Route::get('/actualizar_perfil','UserController@updateview');
    Route::post('user/update', 'UserController@update');
    
    //Rutas pdf
    Route::get('/mis_libros/new/{Id_libro}', 'CapituloController@insertcap');
    Route::post('/mis_libros/cap/save', 'CapituloController@savecapitulo');
    Route::post('/mis_libros/destroy/{Id_capitulo}', 'CapituloController@destroy');

    });
Route::get('/dashboard', function (){
    return view('layouts.inicio');
})->name('regular.dashboard');

//RUTAS LECTOR

Auth::routes();
//Rutas de donaciones
Route::get('libros/donar/{Id_libro}','DonacionesController@create');
Route::post('libros/donacion/save','DonacionesController@store');

Route::get('libros/{Id_libro}/{Id_capitulo}','LibrosController@vistacapitulo');



Route::get('/home', 'HomeController@index')->name('home');

//RUTAS DE LIBROS
Route::get('libros',"LibrosController@index");
Route::get('libros/paginacion', 'LibrosController@paginacion');



///Ruta buscador
Route::get('libros/buscador', "LibrosController@buscador");
Route::get('libros/{Id_libro}', 'LibrosController@detalleslibro');
Route::get('/', function () {
    return view('layouts.inicio');
});

//Ruta actualizacion usuario


//Rutas admin
Route::get('mod/inicio', function () {
    return view('layouts.mod.home');
});
//Libros moderador
//Libros


