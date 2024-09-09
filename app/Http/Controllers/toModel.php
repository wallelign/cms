<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;            //model
class toModel extends Controller
{
    function getData(){
        return User::all();
    }
}
