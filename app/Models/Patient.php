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
    
    public function users(){
        return $this->hasOne('App\Models\User','user_id','id');
    }
}
