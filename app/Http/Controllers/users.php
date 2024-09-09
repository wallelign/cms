<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
 // controller is used to feach data from model or database and display in the view;
 //all logical opperation are done in the controller
 //all router are directly links in the controller
 public function index($user){
    //  echo $user;
    //  echo " this is from controller";
    return ['name'=>"wale",'age'=>"24"];
 
 }
}
