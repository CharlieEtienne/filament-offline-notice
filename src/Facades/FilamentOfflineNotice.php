<?php

namespace CharlieEtienne\FilamentOfflineNotice\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CharlieEtienne\FilamentOfflineNotice\FilamentOfflineNotice
 */
class FilamentOfflineNotice extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CharlieEtienne\FilamentOfflineNotice\FilamentOfflineNotice::class;
    }
}
