<?php

namespace App\Http\Controllers\OneController;

use App\Http\Controllers\Controller;
use App\Models\News;
use GuzzleHttp\Psr7\Request;

class UpdateController extends Controller
{
public function __invoke(Request $request, News $news){
    $data = $request->validate([
        'current_news' => 'required|string',
        'old_news'     => 'nullable|string',
    ]);

    $news->update([
        'current_news' => $data['current_news'],
        'old_news'     => $data['old_news'] ?? '',
    ]);

    return redirect()->route('news.index');}
}
