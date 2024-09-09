<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class deletcontroller extends Controller
{
    public function liss(){
        $data=member::all();
           return view("deletedlist",['members'=>$data]);
    }
    public function delete($id){
        $data=member::find($id);
        $data->delete();
        return redirect('listt');
        
    }
    public function show($id){
        $data=member::find($id);
        return view('edit',['data'=>$data]);
    //    $data->edit();
    //    return redirect('listt');
    }
    public function update(Request $req){
        $data=member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
       return redirect("listt");
    }
}
