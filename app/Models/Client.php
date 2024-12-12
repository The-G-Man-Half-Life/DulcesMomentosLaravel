<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'name',
        'email',
        'password',
        'identification_number',
        'role_id'
    ];
}
