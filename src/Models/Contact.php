<?php

namespace Acacha\Contact\Models;

use Acacha\Contact\Traits\ContactPresenter;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    use ContactPresenter;

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

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['dateofbirth'];

}
