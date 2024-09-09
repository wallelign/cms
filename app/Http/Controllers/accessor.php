<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class accessor extends Controller
{
    public function access(){
        return member::all();
    }
}
