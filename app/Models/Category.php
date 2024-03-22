<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarder = ['id', 'created_at', 'update_at'];

    //Relación de uno a muchos (category-article)
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
