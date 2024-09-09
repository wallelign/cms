<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
   public function userlogin(Request $req){
      // return $req->input();
       $data= $req->input();
       $req->session()->put('user',$data['name']);
       // echo session('user');
       return redirect('profile');

    }

}
