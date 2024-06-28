<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
    'id',
    'name',
    'email',
    'phone_number',
    'dob',
    'created_at',
    'updated_at' 
    ];
}