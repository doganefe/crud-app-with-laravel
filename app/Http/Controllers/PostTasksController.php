<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Post;
class PostTasksController extends Controller
{
    public function update(Request $request,Task $task) {
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }
    public function store(Post $post){
        $attributes = request()->validate([
            'description'=> 'required'
            ]);

        $post->addTask($attributes);

        return back();
    }
}
