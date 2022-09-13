<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;



    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['tag'] ?? false, fn($query, $tag) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $tag . '%')
                    ->orWhere('body', 'like', '%' . $tag . '%')
            )
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $category)
            )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('username', $author)
            )
        );
    }


    //Relationship to Category
    public function category() 
    {
    
        return $this->belongsTo(Category::class);
    
    }
    //Relationship to Author
    public function author() 
{

    return $this->belongsTo(User::class, 'user_id');

}
}
