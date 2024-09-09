<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public function getteacher(){
        return $this->hasmany('App\Models\teacher');
        //return $this->hasOne('App\Models\teacher');
    }
}
