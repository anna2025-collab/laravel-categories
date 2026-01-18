<?php

namespace Database\Seeders;

use App\Models\CategoryTag;
use Illuminate\Database\Seeder;

class CategoryTagSeeder extends Seeder
{

    public function run(): void
    {
         CategoryTag::factory(13)->create();

    }
}
