<?php

namespace Injakit;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Injakit\InjakitManager
 */
class Injakit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return InjakitManager::class;
    }
}
