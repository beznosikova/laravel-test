<?php
namespace App\Library\Services;

use App\Library\Services\Contracts\CustomServiceInterface;

class DemoOne implements CustomServiceInterface
{
    const TEST = 45;

    public function doSomethingUseful()
    {
        return 'Output from DemoOne'.self::TEST;
    }
}