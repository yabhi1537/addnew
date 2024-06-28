<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marketer;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
}
