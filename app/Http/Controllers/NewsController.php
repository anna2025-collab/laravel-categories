<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        return view('news.index', compact('news'));
    }
    public function create()
    {
        return view('news.create');
    }
    public function store(Request $request)
    {
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
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'current_news' => 'required|string',
            'old_news'     => 'nullable|string',
        ]);

        $news->update([
            'current_news' => $data['current_news'],
            'old_news'     => $data['old_news'] ?? '',
        ]);

        return redirect()->route('news.index');
    }
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index');
    }

        public function like($id)
    {
        $news = News::findOrFail($id);

        $news->likes++;
        $news->save();

        return back();
    }




    public function dislike(News $news)
    {
        $news->increment('dislikes');
        return redirect()->back();
    }

}
