<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rating',
        'price',
        'description',
        'review'
    ];
}
