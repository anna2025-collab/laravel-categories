<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\CategoryTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryTagFactory extends Factory
{

    protected $model = CategoryTag::class;

    public function definition(): array
    {
        return [
            'category_id' =>Category::query()->inRandomOrder()->value('id'),
            'tag_id' => Tag::query()->inRandomOrder()->value('id')

        ];
    }
}
