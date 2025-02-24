<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'img_url',
        'disease_name',
        'blog_title',
        'blog_description',
        'blog_content',
        'status',
        'blog_author'
    ];
}
