<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporation extends Model
{
        protected $table = 'corporations';
        protected $fillable = ['id', 'name', 'address', 'phone_number', 'email'];
}
