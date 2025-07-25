<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'name',
        'route_name',
        'icon',
        'description',
        'enabled',
    ];
}
