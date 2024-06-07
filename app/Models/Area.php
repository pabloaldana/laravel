<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{


    protected $fillable = [
        'nombre',
        'image',
        'user_id'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
