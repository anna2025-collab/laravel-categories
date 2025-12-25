@extends('layouts.notused')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Title"
                       value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">CONTENT</label>
                <textarea name="content" class="form-control" id="content"
                          placeholder="Content">{{$post->content}}</textarea>
            </div>

            <div class="mb-3">
                <label for="likes" class="form-label">Likes</label>
                <input name="likes" type="text" class="form-control" id="likes" placeholder="likes"
                       value="{{$post->likes}}">
            </div>
            <div class="mb-3">
                <label for="dislikes" class="form-label">Dislikes</label>
                <input name="dislikes" type="text" class="form-control" id="dislikes" placeholder="dislikes"
                       value="{{$post->dislikes}}">
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
