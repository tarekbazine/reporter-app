<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded =[];

    public function reports(){
        return $this->belongsToMany(Report::class);
    }

}
