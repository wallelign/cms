<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashsessioncontroller extends Controller
{
    function addmember(Request $req){
         $data= $req->input('name');
         $req->session()->flash('name',$data);
         return redirect("flashform");
    }
}
