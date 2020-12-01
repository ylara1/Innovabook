<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    //
    protected $table = "libro";
    protected $primaryKey = "Id_libro";
    public $timestamps = false;

    public function capitulos()
    {
        # code...
        return $this->hasMany(Capitulos::class);
    }
    public function comentarios()
    {
        # code...
        return $this->hasMany(Comentario::class);
    }
}
