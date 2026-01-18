<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model

{
    use softDeletes;
    protected $table = 'news';
    protected $fillable = ['current_news','old_news','likes','dislikes','comments'];
}
