<?php

namespace Ignatiusn\SweetAlert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ignatiusn\SweetAlert\SweetAlert
 */
class SweetAlert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ignatiusn\SweetAlert\SweetAlert::class;
    }
}
