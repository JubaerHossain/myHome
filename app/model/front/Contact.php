<?php

namespace App\model\front;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=[
        'firstname','lastname','email','phone','message'
    ];
}