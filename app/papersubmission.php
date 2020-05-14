<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class papersubmission extends Model
{
   protected $fillable = [
        'name', 'email','phone', 'college', 'address', 'password',
    ];
}
