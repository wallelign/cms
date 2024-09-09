<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{
public function loadview(){
    return view("about",['name'=>"wale"]);
}


}