<?php

namespace App\Models;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $table = 'city';

    // public function employess(){
    //     return $this->hasOne('App\Models\city','ID');
    // }
}
