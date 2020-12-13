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
}
