<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_image', 'user_name', 'followers', 'publication_data', 'post_type', 'post_image', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
