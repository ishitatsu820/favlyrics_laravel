<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function new() {
        return view('posts.new');
    }

    public function create(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'lyrics' => 'required|string|max:255',
            'music_title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
        ]);
        

        $post = new Post;
        $post->fill($request->all())->save();
        return redirect('/posts/new')->with('flash_message', __('Registered.'));

    }

    public function edit($id) {
        if(!ctype_digit($id)){
            return redirect('/posts/new')->with('flash_message', __('Invalid operation was performed.'));
        }
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
{
        // GETパラメータが数字かどうかをチェックする
        if(!ctype_digit($id)){
            return redirect('/posts/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        $post = Post::find($id);
        $post->fill($request->all())->save();

        return redirect('/top')->with('flash_message', __('Registered.'));
}
}
