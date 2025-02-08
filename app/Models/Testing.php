<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testing extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'image',
        'skill',
        'currency',
        'phone',
    ];
}
