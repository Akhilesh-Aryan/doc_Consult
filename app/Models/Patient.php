<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getContactAttribute($value){
        return "+91 " .$value;
    }

    // public function patients(){
    //     return $this->hasMany('App\Models\User','id','user_id');
    // }

    public function getUser(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
