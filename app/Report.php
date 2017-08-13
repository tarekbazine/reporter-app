<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded =[];

    public function presences(){
        return $this->belongsToMany(Member::class);
    }


    public function notes(){
        return $this->hasMany(Note::class);
    }


    public function addNotes(array $notes_body){
        $notes = array();
        foreach ($notes_body as $body){
            $v['body']=$body;
            array_push($notes,$v);
        }
        $this->notes()->createMany($notes);
    }


    public function addPresences(array $member_ids){
        $this->presences()->attach($member_ids);
    }
}
