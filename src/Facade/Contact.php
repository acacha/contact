<?php

namespace Acacha\Contact\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Contact.
 */
class Contact extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Contact';
    }
}
