<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    protected $table = "comentario";
    protected $primaryKey = "Id_comentario";
    public $timestamps = false;

    public function libro()
    {
        # code...
        return $this->belongsTo(Libros::class);
    }
}
