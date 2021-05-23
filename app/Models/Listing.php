<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = ['cityAddress', 'elevator', 'parking', 'furniture', 'total_bedroom'];

    public function roommates()
    {
        return $this->belongsToMany(Roommate::class);
    }
}
