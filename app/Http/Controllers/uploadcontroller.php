<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    function upload(Request $req){
         //return" file is upoad";
          return $req->file('file')->store('docs');
    }
}
