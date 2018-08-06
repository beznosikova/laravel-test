<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('face.index', compact('categories'));
    }

    public function category($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->first();
        $posts = $category->posts()->get();
        return view('face.category', compact('category', 'posts'));
    }

    public function post($categorySlug, $postSlug)
    {
        $category = Category::where('slug', $categorySlug)->first();
        $post = Post::where('slug', $postSlug)->first();

        if ($category->exists()
            && $post->exists()
            && $category->id == $post->category_id ){
            return view('face.post', compact('post'));
        }

        abort(404);
    }
}
