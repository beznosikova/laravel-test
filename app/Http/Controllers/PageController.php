<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('welcome', ['a' => 4]);
    }

    public function category($categorySlug)
    {

    }

    public function post($categorySlug, $postSlug)
    {

    }
}
