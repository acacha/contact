<?php

namespace Acacha\Contact\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'address',
        'postalcode',
        'city',
        'postalcode',
        'phonenumber',
        'mobile',
        'email',
        'dateofbirth',
        'gender',
        'maritalstatus',

    ];
}
