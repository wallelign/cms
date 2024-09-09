<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
class apimethod extends Controller
{
    public function method(){
        //return "frist API method code";
       // return ['name'=>"wallelign",'email'=>"walleignworkieas@gmail.com"];
       return teacher::all();
    }
}
