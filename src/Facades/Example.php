<?php

namespace Lodeb\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lodeb\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lodeb\Example\Example::class;
    }
}
