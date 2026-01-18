<?php

namespace App\Http\Controllers\OneController;

use App\Http\Controllers\Controller;
use App\Models\News;

class CreateController extends Controller
{
public function __invoke(){
    return view('news.create');
}
}
