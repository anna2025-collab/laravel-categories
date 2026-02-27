@extends('layouts.project')
@section('content')
    <div class="ps-4 pt-2">
        <div>
            <div>
                <a href="{{route('post.create')}}" class="btn btn-outline-primary mb-3">>Add one</a>
            </div>
            @foreach($posts as $post)

                <div><a href="{{ route('post.show',$post->id)}}">
                        {{$post->id}}. {{$post->title}}
                    </a>
                </div>

            @endforeach

        </div>
    </div>
@endsection


