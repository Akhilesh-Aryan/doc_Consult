<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded = [];
public function getContactAttribute($value){
    return "+91 " .$value;
   }

   public function users(){
       return $this->hasOne('App\Models\User','id','user_id');
   }

   public function getPatients(){
       return $this->hasMany('App\Models\Patient','doctor_id','id');
   }
}
