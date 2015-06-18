<?php namespace League\Tiny\Facades;

use Illuminate\Support\Facades\Facade;

class Tiny extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'tiny';
    }

}
