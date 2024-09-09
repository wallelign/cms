<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class registercontroller extends Controller
{
    function regster(Request $req){
      $student =new student;
      $student->id=$req->id;
      $student->name=$req->name;
      $student->phone_No=$req->phone;
      $student->email=$req->email;
      $student->adderess=$req->adderess;
      $student->save();
      return redirect ('regform');
      
    }
}
