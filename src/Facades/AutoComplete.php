<?php

namespace PackiMaster\AutoComplete\Facades;

use Illuminate\Support\Facades\Facade;

class AutoComplete extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'autocomplete';
    }
}
