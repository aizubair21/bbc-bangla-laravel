<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'author',
        'category',
        'image',
        'image_cation'
    ];


    //relation with category
    public function categories()
    {
        return $this->belongsTo(category::class, 'category');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'author');
    }
}
