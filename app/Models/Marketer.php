<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    use HasFactory;

    protected $table = 'marketers';
    public function markeGet()
    {
        return $this->hasOneThrough(Owner::class,Car::class);
    }
}
