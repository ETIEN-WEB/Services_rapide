<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function phone()
    {   
        return $this->hasOne('App\Phone');
    }
}
