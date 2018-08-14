<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'email',
        'name',
        'phone',
        'message',
    ];
}
