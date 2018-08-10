<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
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
        $localization = app()->get('locale');
        $locale = $localization->getLocale();

        if ($localization->isDefault()){
            return redirect($localization->getDefaultUrl());
        }

        if($locale && !$localization->isDefault()) {
            App::setLocale($locale);
        }

        \Menu::make('switchSite', function ($menu) use ($localization) {
            $menu->add('English', ['url' => $localization->getDefaultUrl()] );
            $menu->add('Ukraine', $localization->getFullUrl('uk'));
        });

        return $next($request);
    }

}
