<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Component\HttpFoundation\Session\Session;

class PostController extends Controller
{
   
    public function index()
    {
        
        $postList = Post::orderByViews()->get();
        return view('post.index',compact('postList'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        /**
         * Cada vez que refrescas cuenta +1 no sirve
         */
        //$post->increment('views', 1);
    
        /**
         * con esta libreria cada 1 min registra la vista
         */
        views($post)->cooldown(1)->record();
        $viewsCount = views($post)->count();
        return view('post.show',compact('post','viewsCount'));
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
