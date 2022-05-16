<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    //relation with posts
    public function posts()
    {
        return $this->belongsToMany(post::class);
    }

    public function user()
    {
        $this->belongsTo(user::class);
    }
}
