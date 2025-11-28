<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'post_title',
        'post_body',
        'thumbnail',
        'user_id',
        'post_status_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
