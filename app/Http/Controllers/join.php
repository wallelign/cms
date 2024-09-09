<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class join extends Controller
{
    public function joint(){
        return DB::table('students')
        ->join('dept','students.id',"=",'dept.student_id')
        ->where('dept.id', 4)
        ->get();
    }
}
