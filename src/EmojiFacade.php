<?php

namespace SachinKiranti\Emoji;

use Illuminate\Support\Facades\Facade;

/**
 * Class EmojiFacade
 * @package SachinKiranti\Emoji
 */
class EmojiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'emoji';
    }
}