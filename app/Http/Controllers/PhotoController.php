<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Tag;
use Illuminate\Http\Request;

class PhotoController extends Controller
{

    public function index()
    {
        $photos = Photo::paginate(6);

        return view('photo.index', compact('photos'));
    }


    public function create()
    {
        $categories = Category::all();
         $tags=Tag::all();

        return view('photo.create', compact('categories','tags'));
    }


    public function store(Request $data)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'path' => 'string',
            'category_id' => 'integer'

        ]);

        Photo::create($data);
        return redirect()->route('photo.index');
    }


    public function show(Photo $photo)
    {
        return view('photo.show', compact('photo'));
    }


    public function edit(Photo $photo)
    {
        $categories = Category::all();

        return view('photo.edit', compact('categories', 'photo'));
    }


    public function update(Photo $photo)
    {

        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'path' => 'string',
            'category_id' => 'integer'

        ]);
        $photo->update($data);
        return redirect()->route('photo.show', $photo);
    }


    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photo.index');
    }
}
