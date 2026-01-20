<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Services\News\Service;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(3);

        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(NewsRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

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

    public function update(NewsRequest $request, News $news)
    {
        $data = $request->validated();
        $this->service->update($data, $news);

        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index');
    }

    public function like($id)
    {
        $this->service->like($id);

        return back();
    }


    public function dislike(News $news)
    {
        $this->service->dislike($news);

        return back();
    }

}
