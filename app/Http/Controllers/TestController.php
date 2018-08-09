<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Exceptions\CustomException;

class TestController extends Controller
{
    public function index(Request $request)
    {
        throw new CustomException('Test');
    }
}
