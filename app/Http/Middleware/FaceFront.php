<?php

namespace App\Http\Middleware;

use Closure;
use Menu;

class FaceFront
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('bottomMenu', function ($menu){
            $menu->add('Contact us', ['action' => 'ContactFormController@create']);
        });

        return $next($request);
    }
}
