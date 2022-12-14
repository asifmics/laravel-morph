<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','body'];

    protected $casts = [
        'title' => 'string',
        'body' => 'string',
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
