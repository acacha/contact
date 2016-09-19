<?php

namespace Acacha\Contact;

/**
 * Class Contact.
 */
class Contact
{
    /**
     * Tests copy path.
     *
     * @return array
     */
    public function tests()
    {
        return [
            ACACHA_CONTACT_PATH.'/tests'       => base_path('tests'),
            ACACHA_CONTACT_PATH.'/phpunit.xml' => base_path('phpunit.xml'),
        ];
    }

}
