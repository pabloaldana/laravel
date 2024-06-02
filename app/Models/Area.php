<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['nombre'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
