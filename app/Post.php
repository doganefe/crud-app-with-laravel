<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    
    public function tasks()
    {
       return  $this->hasMany(Task::class); 
    }

    public function addTask($description) {

         $this->tasks()->create($description);
         
        /*
        return Task::create([
            'post_id' => $this->id,
            'description' => $task
        ]);
        */
    }

  
}
