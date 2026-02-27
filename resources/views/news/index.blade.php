@extends('layouts.project')

@section('title', 'Новости')

@section('content')

    <h1 class="text-3xl font-bold mb-6">Новости</h1>

    {{-- КНОПКА ДОБАВИТЬ НОВОСТЬ — такой же цвет, как "Создать новую фотографию" --}}
    <div class="mb-4">
        <a href="{{ route('news.create') }}"
           class="px-4 py-2 bg-yellow-300 text-yellow-900 rounded hover:bg-yellow-400 transition">
            Добавить новость
        </a>
    </div>

    @foreach($news as $item)
        <div class="bg-white shadow rounded p-4 mb-4">

            <h2 class="text-xl font-semibold mb-2">{{ $item->current_news }}</h2>

            @if($item->old_news)
                <p class="text-gray-500 text-sm mb-2">Старая версия: {{ $item->old_news }}</p>
            @endif

            <div class="flex items-center space-x-8 mb-4">

                <form action="{{ route('news.like', $item->id) }}" method="POST">
                    @csrf
                    <button
                            class="w-10 h-10 rounded-full flex items-center justify-center text-xl text-green-800
                               bg-green-100
                               hover:bg-green-300
                               active:bg-green-400
                               border border-green-600
                               transition select-none">
                        👍
                    </button>
                </form>

                <span class="text-green-700 text-lg">{{ $item->likes }}</span>

                <form action="{{ route('news.dislike', $item->id) }}" method="POST">
                    @csrf
                    <button
                            class="w-10 h-10 rounded-full flex items-center justify-center text-xl text-red-800
                               bg-red-100
                               hover:bg-red-300
                               active:bg-red-400
                               border border-red-600
                               transition select-none">
                        👎
                    </button>
                </form>

                <span class="text-red-700 text-lg">{{ $item->dislikes }}</span>

            </div>

            <div class="flex space-x-4">

                <a href="{{ route('news.show', $item->id) }}"
                   class="px-3 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">
                    Просмотр
                </a>

                <a href="{{ route('news.edit', $item->id) }}"
                   class="px-3 py-2 bg-blue-300 text-blue-900 rounded hover:bg-blue-400 transition">
                    Редактировать
                </a>

                <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                            class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
                            onclick="return confirm('Удалить новость?')">
                        Удалить
                    </button>
                </form>

            </div>

        </div>
    @endforeach
    <div class="mt-8 flex justify-center">
        {{ $news->links() }}
    </div>
@endsection
