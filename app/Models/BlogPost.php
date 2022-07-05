<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];
    use HasFactory;
}
