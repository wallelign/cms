<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function getData(Request $req){
        $req->validate([
            'name'=>"required |max:10",
            'password'=>"required |min:5"
        ]);
        return $req->input();
    }
}
