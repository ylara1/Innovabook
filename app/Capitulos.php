<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulos extends Model
{
    //
    protected $table = "capitulo";
    protected $primaryKey = "Id_capitulo";
    public $timestamps = false;

    public function libro()
    {
        # code...
        return $this->belongsTo(Libros::class);
    }
}
