<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Resources\PhotoResource;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Tag;
use App\Services\Photos\PhotoService;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
  public PhotoService $photoService;
    public function __construct(PhotoService $photoService)
    {
        $this->photoService = $photoService;
    }
    public function index()
    {

        $photos = Photo::paginate();
        // return PhotoResource::collection($photos);
        return view('photo.index', compact('photos'));
    }


    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('photo.create', compact('categories', 'tags'));
    }


    public function store(StorePhotoRequest $request)
    {
//        $data = $request->validated();
//        $photo=$this->photoService->storePhoto($data);
//        Photo::create($photo);
//        return redirect()->route('photo.index');
        $this->photoService->storePhoto($request->validated());

        return redirect()->route('photo.index');
    }


    public function show(Photo $photo)
    {
//        return new PhotoResource($photo);
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

        return new PhotoResource($photo);
       // return redirect()->route('photo.show', $photo);
    }


    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photo.index');
    }
}
