<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
class routebinding extends Controller
{
    public function rout( teacher $key){
        return "$key";
         
    }
}
