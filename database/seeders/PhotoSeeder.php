<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('photos')->insert([
            [
                'title'       => 'Лев на закате',
                'description' => 'Мощный лев стоит на скале на фоне оранжевого заката.',
                'path'        => 'images/animals/lion_sunset.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'title'       => 'Щенок в траве',
                'description' => 'Маленький щенок лежит в зелёной траве и смотрит в камеру.',
                'path'        => 'images/animals/puppy_grass.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'title'       => 'Кот у окна',
                'description' => 'Серый кот сидит на подоконнике и наблюдает за улицей.',
                'path'        => 'images/animals/cat_window.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'title'       => 'Панда с бамбуком',
                'description' => 'Панда сидит и ест бамбук в зоопарке.',
                'path'        => 'images/animals/panda_bamboo.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'title'       => 'Дельфин в прыжке',
                'description' => 'Дельфин выпрыгивает из воды в море.',
                'path'        => 'images/animals/dolphin_jump.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]
        ]);

    }
}
