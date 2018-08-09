<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Exceptions\CustomException;

class TestController extends Controller
{
    public function index(Request $request)
    {
        abort(500, 'Unauthorized action.');
        throw new CustomException('Test');
    }
}
