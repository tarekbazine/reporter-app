<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $guarded =[];


    public function report(){
        return $this->belongsTo(Report::class);
    }
}
