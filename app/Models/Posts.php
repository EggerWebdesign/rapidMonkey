<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'post_title',
        'post_body',
        'post_status',
        'post_type',
        'comment_status'
    ];
}
