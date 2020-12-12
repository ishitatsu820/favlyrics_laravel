<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function new() {
        return view('posts.new');
    }

    public function create() {
        $request->validate([
            'post_title' => 'required|string|max:255',
            'fav_lyrics' => 'required|string|max:255',
            'music_title' => 'required|string|max:255',
            'artist' => 'required|string|max:255'
        ]);
    }
}
