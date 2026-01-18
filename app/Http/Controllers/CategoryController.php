<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        $tags = Tag::all();

        return view('categories.create', compact('tags'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'tags' => [],]);

        $tags = $data['tags'] ?? [];
        unset($data['tags']);

        $category = Category::create($data);
        $category->tags()->sync($tags);


//        $category = new Category($data);
//        $category->save();
//        foreach ($tags as $tag) {
//            CategoryTag::firstOrCreate([
//              'tag_id'=>$tag,
//            'category_id'=>$category->id,
//            ]);
//        }

//        $category = new Category();
//        $category->name = $data['name'];
//        $category->description = $data['description'];
//        $category->tags=$data['tags'];
//        $category->save();
        return redirect(route('categories.index'));
    }


    public function show(string $id)
    {
        $categories = Category::find($id);
        return view('categories.show', compact('categories'));
    }


    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        $tags = Tag::all();
        return view('categories.edit', compact('category', 'tags'));
    }


    public function update(int $id, Request $request)
    {
        $category =Category::find($id);
        $data = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'tags' => [],
        ]);

        $tags = $data['tags'] ?? [];
        unset($data['tags']);

        $category->update($data);

        $category->tags()->sync($tags);

        return redirect(route('categories.index', $category->id));

    }


    public function destroy(int $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect(route('categories.index'));
    }
}
