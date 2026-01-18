<?php

namespace App\Http\Controllers\OneController;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class StoreController extends Controller
{
public function __invoke(Request $request){
    $data = $request->validate([
        'current_news' => 'required|string',
        'old_news'     => 'nullable|string',
    ]); News::create([
        'current_news' => $data['current_news'],
        'old_news'     => $data['old_news'] ?? '',
        'likes'        => 0,
        'dislikes'     => 0,
        'comments'     => json_encode([]),
    ]);

    return redirect()->route('news.index');
}
}
