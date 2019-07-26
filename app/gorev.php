<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\gorev;
class gorev extends Model
{   

    protected $fillable = ['gorevMetni'];
    
    public function blogs(){

       return $this->belongsTo(Blog::class);
       
    }

}
