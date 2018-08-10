<?php
namespace App\Library\Services;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;


class Localization
{
    private $locale;
    private $uriSegments;

    public function __construct()
    {
        $uri = Request::path();
        $this->uriSegments = collect(explode('/', trim($uri, '/')));

        $this->locale = $this->getLocaleFromUrl();
    }

    public function isDefault()
    {
        return ($this->locale === Config::get('app.locale'));
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function getDefaultUrl()
    {
        $newUriSegments = ($this->locale) ? $this->uriSegments->except('0') : $this->uriSegments;
        return implode('/', $newUriSegments->toArray());
    }

    public function getFullUrl(string $prefix)
    {
        $defaultUrl = $this->getDefaultUrl();
        return ($defaultUrl !== "") ? "{$prefix}/{$defaultUrl}" : $prefix;
    }

    private function getLocaleFromUrl()
    {
        $firstSegmentsURI = $this->uriSegments->first();
        return  (!empty($firstSegmentsURI) && in_array($firstSegmentsURI, Config::get('app.languages'))) ? $firstSegmentsURI : "";
    }
}