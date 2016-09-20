<?php

namespace Acacha\Contact\Traits;

use Acacha\Contact\Model\Contact;

trait Contactable
{
    /**
     * Get the entity's contacts.
     */
    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable')
                            ->orderBy('created_at', 'desc');
    }

    /**
     * Get the entity last contact.
     */
    public function contact()
    {
        return $this->morphMany(Contact::class, 'contactable')
            ->orderBy('created_at', 'desc')->first();
    }

}
