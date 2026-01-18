<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    public function run(): void
    {
        $tags = [
            'спорт',
            'животные',
            'музыка',
            'кино',
            'путешествия',
            'еда',
        ];

        foreach ($tags as $tag) {
            Tag::firstOrCreate([
                'title' => $tag,
            ]);
        }
    }
}
