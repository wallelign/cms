<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
class fdb extends Controller
{
    public function index(){
    //    echo"from database";
      return DB::select("select *from walle");
    }
}