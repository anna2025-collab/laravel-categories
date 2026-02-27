@extends('layouts.project')

@section('title', $news->current_news)

@section('content')

    <h1 class="text-3xl font-bold mb-6">{{ $news->current_news }}</h1>

    {{-- ЛАЙК / ДИЗЛАЙК --}}
    <div class="flex items-center space-x-8 mb-8">

        {{-- ЛАЙК --}}
        <form action="{{ route('news.like', $news->id) }}" method="POST">
            @csrf
            <button
                    class="w-12 h-12 rounded-full flex items-center justify-center text-2xl text-green-800
                       bg-green-100 hover:bg-green-300 active:bg-green-400
                       border border-green-600 transition select-none">
                👍
            </button>
        </form>

        <span class="text-green-700 text-xl">{{ $news->likes }}</span>

        {{-- ДИЗЛАЙК --}}
        <form action="{{ route('news.dislike', $news->id) }}" method="POST">
            @csrf
            <button
                    class="w-12 h-12 rounded-full flex items-center justify-center text-2xl text-red-800
                       bg-red-100 hover:bg-red-300 active:bg-red-400
                       border border-red-600 transition select-none">
                👎
            </button>
        </form>

        <span class="text-red-700 text-xl">{{ $news->dislikes }}</span>

    </div>

    @if($news->old_news)
        <div class="mb-4 text-gray-600">
            <span class="font-semibold">Старая версия:</span> {{ $news->old_news }}
        </div>
    @endif


    {{-- КНОПКИ УПРАВЛЕНИЯ — стиль как в фотогалерее --}}
    <div class="flex space-x-6 mt-10">

        {{-- НАЗАД (серый, как Просмотр в фотогалерее) --}}
        <a href="{{ route('news.index') }}"
           class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">
            Назад
        </a>

        {{-- РЕДАКТИРОВАТЬ — мягко-синий --}}
        <a href="{{ route('news.edit', $news->id) }}"
           class="px-4 py-2 bg-blue-300 text-blue-900 rounded hover:bg-blue-400 transition">
            Редактировать
        </a>

        {{-- УДАЛИТЬ — ярко-синий --}}
        <form action="{{ route('news.destroy', $news->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
                    onclick="return confirm('Удалить новость?')">
                Удалить
            </button>
        </form>

    </div>

@endsection
