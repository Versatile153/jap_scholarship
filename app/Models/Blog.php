<?php

// app/Blog.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'author', 'details', 'image_url'];
}
