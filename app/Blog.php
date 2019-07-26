<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded=[];

    public function gorevs() {
        return $this->hasMany(gorev::class);
    }

    public function addGorev($attribute) {
       return  $this->gorevs()->create($attribute);
    }

    public function owner() {
       return  $this->belongsTo(User::class);
    }
}
