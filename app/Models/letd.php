<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class letd extends Model
{
    protected $fillable = [
        'service_name',
        'service_description',
        'service_image',
    ];
}
