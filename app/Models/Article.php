<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarder = ['id', 'created_at', 'update_at'];

    //Relazión de uno a muchos inversa (user-articles)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
