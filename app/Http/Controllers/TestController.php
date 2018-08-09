<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedIn;
use Illuminate\Http\Request;
use App\Library\Exceptions\CustomException;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index(Request $request)
    {
        Log::info('Abbort 500');
        abort(500, 'Unauthorized action.');
        throw new CustomException('Test');
    }

    public function event(Request $request)
    {
        event(new UserLoggedIn($request->user()));
        return view('home');
    }

}
