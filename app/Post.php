<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* 
        Creación de una propiedad de asignamiento masivo
        que recibe como parámetro el titulo del post
    */
    protected $fillable = [
        'title',
    ];
}
