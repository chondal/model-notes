<?php

namespace Chondal\ModelNotes\Facades;

use Illuminate\Support\Facades\Facade;

class ModelNotes extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'ModelNotes';
    }
}
