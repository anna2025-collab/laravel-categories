<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $tags
 */
class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = ['name', 'description','tags'];

    public function photos()
    {
        return $this->hasMany(Photo::class, 'category_id','id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'category_tags', 'category_id', 'tag_id')
            ->withTimestamps();
    }

}
