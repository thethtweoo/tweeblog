<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    public function index() {
        // $posts = Post::all();
        $posts = Post::orderBy('id', 'DESC')->paginate(6);
        return view('front.index', compact('posts'));
    }

    public function readMore($id) {
        $post = Post::find($id);
        $featureID = $post->id;
        $feature_posts = Post::where('id', '!=', $featureID)->orderBy('id', 'DESC')->limit(1)->get();
        return view('front.detail', compact('post', 'feature_posts'));
    }
}
