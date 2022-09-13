<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    //Relationship to Post
    public function posts() 
    {
        return $this->hasMany(Post::class);

    }

}
