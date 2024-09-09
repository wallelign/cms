<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class loadalldblist extends Controller
{
    function lists(){
        //return view("dblist");
       // $data= member::paginate(3);
        $data= member::all();
        return view ('dblist',['members'=>$data]);
    }
}
