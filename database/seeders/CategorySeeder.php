<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $allTags = Tag::all();
        $cat = Category::create([
            'name' => 'Новости',
            'description' => 'Категория, включающая любые новости.'
        ]);
        $tags = $allTags->random(3);
        $cat->tags()->sync($tags);
        Category::create([
            'name' => 'Спорт',
            'description' => 'Все спортивные события и материалы.',
        ]);
        Category::create([
            'name' => 'Технологии',
            'description' => 'Новости о технологиях, IT, разработке.',
        ]);
        Category::create([
            'name' => 'Развлечения',
            'description' => 'Фильмы, музыка, игры, культура.',
        ]);
        Category::create([
            'name' => 'Животный мир',
            'description' => 'все о разных видах животных',
        ]);

    }
}
