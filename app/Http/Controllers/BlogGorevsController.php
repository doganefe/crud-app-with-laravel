<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;
use \App\gorev;
class BlogGorevsController extends Controller

{
    public function index() {

        
        $gorevs = gorev::all();
        
        return view('blog.gorevs',compact('gorevs'));
        
    }
    public function store(Blog $blog) {
        
     
        $attribute = request()->validate([
            'gorevMetni' => 'required'
        ]);

        $blog->addGorev($attribute);

        //$gorev1->gorevMetni = request('gorev');
        //$gorev1 = new gorev;
        //$gorev1->blog_id = $blog->id;
        //$gorev1->save();
        
        return back();
    }
    public function destroy(gorev $gorev){
        $gorev->delete();

        return back();
    }
    public function update(gorev $gorev) {

        
        $attribute = request()->validate([
            'editInput' => 'required'
        ]);

            if($attribute) {
         {
             $gorev->gorevMetni = request()->editInput;
             $gorev->save();
         }
            }

        return back();
    }
}
