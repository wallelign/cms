<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function viewload1(){
        $data=["lurice","jon","janffier","walle"];
        return view("user",['user'=>$data]);
    }
}
//     public function viewload2(){
//         return view("user",['users'=>["wale","habi","binu"]]);
//     }   use thus count{{users}} methode;
 