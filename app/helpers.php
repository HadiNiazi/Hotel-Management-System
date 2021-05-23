<?php

use App\Models\Roommate;

if(!function_exists('roommates')){
    function roommates(){
        $roommates = Roommate::all();
        return $roommates;
    }
}
