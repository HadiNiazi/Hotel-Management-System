<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    public $timestamps = false;
    protected $fillable = ['listing_id', 'ac', 'furniture', 'furniture_details', 'price', 'sqm'];
}
