<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryItem extends Model
{
    protected $fillable = ['corporation_id', 'item_id', 'quantity'];
}
