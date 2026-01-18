<?php

namespace App\Http\Controllers\OneController;

use App\Http\Controllers\Controller;
use App\Models\News;

class EditController extends Controller
{
public function __invoke(News $news){
    return view('news.edit', compact('news'));
}
}
