<?php

namespace App\Services\News;

use App\Http\Requests\NewsRequest;
use App\Models\News;

class Service
{
    public function store($data)
    {
        News::create([
            'current_news' => $data['current_news'],
            'old_news' => $data['old_news'] ?? '',
            'likes' => 0,
            'dislikes' => 0,
            'comments' => json_encode([]),
        ]);
    }

    public function update($data, $news)
    {
        $news->update([
            'current_news' => $data['current_news'],
            'old_news' => $data['old_news'] ?? '',
        ]);
    }

    public function like($id)
    {
        $news = News::findOrFail($id);

        $news->likes++;
        $news->save();

    }

    public function dislike($news)
    {
        $news->increment('dislikes');

    }
}
