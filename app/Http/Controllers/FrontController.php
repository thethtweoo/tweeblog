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
        $feature_post = Post::where('id', '!=', $featureID)->inRandomOrder()->first();
        return view('front.detail', compact('post', 'feature_post'));
    }

    public function postCategory($category_id) {
        $posts = Post::where('category_id', $category_id)->orderBy('id', 'DESC')->paginate(8);
        return view('front.post-category', compact('posts'));
    }
}
