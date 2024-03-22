<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarder = ['id', 'created_at', 'update_at'];

    //Relación uno a muchos inversa (comment-user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //Relación uno a muchos inversa (comments-article)
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
