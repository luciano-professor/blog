<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    public function posts()
    {
        # code...
        return $this->hasMany('App\Post');
    }

}
