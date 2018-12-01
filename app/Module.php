<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function Salle()
    {
        return $this->hasMany('App\Salle');
    }
}

