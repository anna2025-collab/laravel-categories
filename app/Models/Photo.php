<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;
    protected $table = 'photos';
    protected $fillable = [
        'title','description','path','category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

