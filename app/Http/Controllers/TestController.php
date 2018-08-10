<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedIn;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Library\Exceptions\CustomException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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

    public function files()
    {
        $asset = asset('storage/loginactivity.txt');
        $url = Storage::disk('public')->lastModified('loginactivity.txt');
//        $url = Storage::disk('public')->putFile('photos', new File('storage/new.png'));;
        $contents = Storage::disk('public')->get('loginactivity.txt');
        return $url;
    }
}
