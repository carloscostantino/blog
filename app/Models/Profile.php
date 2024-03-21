<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarder = ['id', 'created_at', 'update_at'];
    //Relación de 1 a 1 inversa (profile-user)
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
