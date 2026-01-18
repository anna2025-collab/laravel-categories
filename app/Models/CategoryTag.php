<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class CategoryTag extends Model
{ use HasFactory;
  protected $guarded = false;
  protected $fillable = ['category_id', 'tag_id'];

}
