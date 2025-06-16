<?php

namespace Sharenjoy\NoahCore\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sharenjoy\NoahCore\NoahCore
 */
class NoahCore extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Sharenjoy\NoahCore\NoahCore::class;
    }
}
