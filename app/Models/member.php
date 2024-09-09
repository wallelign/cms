<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    public $timestamps=false;
  // public function getNameAttribute($value){
  //         return ucfirst($value);
  //   }
  // public function getaddressAttribute($value){
  //     return $value.',Ethiopia';
  //}
  public function setNameAttribute($value){
    $this->attributes['name']="Mr ".$value;
  }
  public function setemailAttribute($value){
    $this->attributes['email']=$value."@gmail.com";
  }  
  public function setaddressAttribute($value){
    $this->attributes['address']=$value." india";
  }
}
