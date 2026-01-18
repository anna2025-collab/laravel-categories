<?php

namespace App\Http\Controllers\OneController;

use App\Http\Controllers\Controller;
use App\Models\News;

class IndexController extends Controller
{
public function __invoke(){
    $news = News::all();

    return view('news.index', compact('news'));
}
}
