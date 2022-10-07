<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function study(){
        return $this->belongsTo('App\Studies');
    }
}
