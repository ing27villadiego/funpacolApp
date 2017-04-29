<?php

namespace App\Funpacol\Entities;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['name', 'city_id', 'slug'];
}
