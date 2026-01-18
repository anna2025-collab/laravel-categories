<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{

    public function run(): void
    {
        News::create([
            'current_news' => 'Компания Tesla объявила о запуске новой модели электромобиля Model Z, работающей на усовершенствованных аккумуляторах.',
            'old_news' => 'Ранее компания представила обновлённую версию Model Y.',
            'likes' => random_int(1,60),
            'dislikes' => random_int(0,60),
            'comments' => json_encode("Комментариев пока нет"),

        ]);
        News::create([
            'current_news' => 'В России открыли самый крупный дата-центр в Европе с мощностью 250 МВт.',
            'old_news' => 'Ранее крупнейший дата-центр находился в Германии.',
            'likes' => random_int(1,60),
            'dislikes' => random_int(0,60),
            'comments' => json_encode("Комментариев пока нет"),


        ]);
        News::create([
            'current_news' => 'Учёные разработали новый метод лечения диабета с использованием нанокапсул.',
            'old_news' => 'Предыдущий метод требовал длительного медикаментозного курса.',
            'likes' => random_int(1,60),
            'dislikes' => random_int(0,60),
            'comments' => json_encode("Комментариев пока нет"),


        ]);

        News::create([
            'current_news' => 'Microsoft выпустила обновление Windows 12 с улучшенным интерфейсом и ускоренной загрузкой системы.',
            'old_news' => 'Windows 11 получила последнее обновление безопасности месяц назад.',
            'likes' => random_int(1,60),
            'dislikes' => random_int(0,60),
            'comments' => json_encode("Комментариев пока нет"),

        ]);
        News::create([
            'current_news' => 'SpaceX успешно провела запуск ракеты Starship и вернула обе ступени на Землю.',
            'old_news' => 'Предыдущий запуск завершился частичной неудачей.',
            'likes' => random_int(1,60),
            'dislikes' => random_int(0,60),
            'comments' => json_encode("Комментариев пока нет"),

        ]);

    }
}
