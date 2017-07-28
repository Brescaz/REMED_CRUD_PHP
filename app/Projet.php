<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    //
    /*protected $table = 'projets';*/

    public function user()
    {
        return $this->belongsTo('App\User');

        
    }
}
