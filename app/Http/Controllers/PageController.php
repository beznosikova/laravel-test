<?php

namespace App\Http\Controllers;

use App\Category;
use App\Library\Services\Contracts\CustomServiceInterface;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test(Request $request, Post $post, CustomServiceInterface $custom)
    {
        $const = $custom::TEST;
        $text = $custom->doSomethingUseful();
        return response()->view('test',compact('const', 'text'),200);
    }

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

    public function post(Category $category, Post $post)
    {
//        $category = Category::where('slug', $categorySlug)->first();
//        $post = Post::where('slug', $postSlug)->first();

        if (
//            $category->exists()
//            && $post->exists()
//            &&
        $category->id == $post->category_id ){
            return view('face.post', compact('post'));
        }

        abort(404);
    }
}
