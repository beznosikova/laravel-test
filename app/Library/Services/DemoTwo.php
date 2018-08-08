<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.08.2018
 * Time: 11:06
 */

namespace App\Library\Services;

use App\Library\Services\Contracts\CustomServiceInterface;

class DemoTwo implements CustomServiceInterface
{
    const TEST = 55;

    public function doSomethingUseful()
    {
        return 'Output from DemoTwo'.self::TEST;
    }
}