<?php

namespace App\Models;

use App\Models\city;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
 
    public $fillable = ['name', 'email', 'phone_number', 'dob'];

    protected $guarded=['id'];
          
   public function city(){
        return $this->hasOne('App\Models\city','ID');
    }


}
