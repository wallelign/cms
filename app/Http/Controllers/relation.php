<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class relation extends Controller
{
    public function relation(){
       return student::find(2120)->getteacher();
    }
}
