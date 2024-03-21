<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarder = ['id', 'created_at', 'update_at'];

    //Relación uno a muchos inversa (user-comments)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
