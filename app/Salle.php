<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function Reservation()
    {
        return $this->hasMany('App\Reservation');
    }

    public function Forfait()
    {
        return $this->hasMany('App\Reservation');
    }
}
