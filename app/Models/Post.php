<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relacion 1 a N inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Relacion N a M
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // Relacion 1 a 1 polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
