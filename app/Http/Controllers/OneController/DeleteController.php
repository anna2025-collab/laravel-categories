<?php

namespace App\Http\Controllers\OneController;

use App\Http\Controllers\Controller;
use App\Models\News;

class DeleteController extends Controller
{
public function __invoke(News $news){
    $news->delete();

    return redirect()->route('news.index');
}
}
