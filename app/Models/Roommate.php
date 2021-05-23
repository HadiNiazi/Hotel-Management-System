<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roommate extends Model
{
    protected $gaurded = [];

    public function lists()
    {
        return $this->belongsToMany(Listing::class);
    }
}
