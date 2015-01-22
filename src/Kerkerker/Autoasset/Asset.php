<?php namespace Kerkerker\Autoasset;

use Illuminate\Support\Facades\Facade;

class Asset extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'autoasset';
    }

}

