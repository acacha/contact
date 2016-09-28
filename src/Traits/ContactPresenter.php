<?php

namespace Acacha\Contact\Traits;

/**
 * Class ContactPresenter
 * @package Acacha\Contact\Traits
 */
trait ContactPresenter
{
    /**
     * Laravel accessor for location attribute
     *
     * @return string
     */
    public function getLocationAttribute() {
        return $this->address . ' ' .
               $this->postalcode . ' ' .
               $this->city;
    }

    /**
     * Laravel accessor for fullname attribute
     *
     * @return string
     */
    public function getFullnameAttribute() {
        return $this->firstname . ' ' .
        $this->middlename . ' ' .
        $this->lastname;
    }

    /**
     * Laravel accessor for fullnamebysurname attribute
     *
     * @return string
     */
    public function getFullnamebysurnamesAttribute() {
        return $this->middlename . ' ' .
        $this->lastname . ', ' .
        $this->firstname;
    }
}