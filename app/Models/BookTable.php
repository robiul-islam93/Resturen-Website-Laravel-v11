<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'date',
        'time_slot',
        'guest',
        'message'
    ];
}
