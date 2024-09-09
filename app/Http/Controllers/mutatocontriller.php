<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class mutatocontriller extends Controller
{
    public function mutator(){
       $member=new member;
       $member->id="4";
       $member->name="jon";
       $member->email="jonr";
       $member->address="jn";
       $member->save();
    }
}
