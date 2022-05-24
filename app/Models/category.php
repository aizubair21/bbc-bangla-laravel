<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory; 

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];


    //relation with posts
    public function posts()
    {
        return $this->hasMany(post::class, 'category');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'author');
    }

}
