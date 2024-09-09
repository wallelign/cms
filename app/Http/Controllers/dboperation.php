<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class dboperation extends Controller
{
    public function operations(){
        // $data= DB::table('members')->get();
        // return view('operation',['data'=>$data]);

        //return DB::table('members')->count();
        //return (array)DB::table('members')->find(45);

        // return DB::table('members')
        // ->insert([
        //     'id'=>100,
        //     'name'=>"ab",
        //     'email'=>"abQgmail.com",
        //     'address'=>"gobigob"
        // ]);
        //    return DB::table('members')->where('id','87923')
        //      ->update([
        //     'id'=>110,
        //     'name'=>"ewunetu",
        //     'email'=>"ewuneQgmail.com",
        //     'address'=>"sefer"
        // ]);   
        // return DB::table('members')->where('id','110')->delete();
        return DB::table('members')
       ->where('id','110')
        ->get();
    }
}
