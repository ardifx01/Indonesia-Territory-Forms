<?php

namespace Teguh02\IndonesiaTerritoryForms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Teguh02\IndonesiaTerritoryForms\IndonesiaTerritoryForms
 */
class IndonesiaTerritoryForms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Teguh02\IndonesiaTerritoryForms\IndonesiaTerritoryForms::class;
    }
}
