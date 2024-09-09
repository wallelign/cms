<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;
class fromOtherSite extends Controller
{
    function feachdata(){
        // return"API data is here"; 
        $collection= Http::get("http://localhost:8000/feachfromdb2");
        return view("otherpageview",['collection'=>$collection]);

        //return view("otherpageview",['collection'=>$collection['data']]);    // uses in different data inside it;

    }
}
