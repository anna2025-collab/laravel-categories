<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{    use HasFactory;
    protected $table = 'tags';
    protected $fillable = ['title'];

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class, 'category_tags', 'tag_id', 'category_id')
            ->withTimestamps();
    }
}
