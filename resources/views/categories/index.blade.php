@extends('layouts.app')

@section('title', 'Категории')

@section('content')

    {{-- Заголовок --}}
    <h1 class="text-3xl font-bold mb-6">Категории</h1>

    {{-- Кнопка добавления --}}
    <div class="mb-4">
        <a href="{{ route('categories.create') }}"
           class="px-4 py-2 bg-yellow-300 text-yellow-900 rounded hover:bg-yellow-400 transition">
            Добавить категорию
        </a>
    </div>

    {{-- Список категорий --}}
    @foreach ($categories as $category)
        <div class="bg-white shadow rounded p-4 mb-4">

            {{-- Название категории --}}
            <h2 class="text-xl font-semibold mb-2">{{ $category->name }}</h2>

            {{-- Описание (если есть) --}}
            @if ($category->description)
                <p class="text-gray-600 mb-4">{{ $category->description }}</p>
            @endif
            @foreach ($category->tags as $tag)
                <h2 class="text-gray-600 mb-4">{{ $tag->title }}</h2>
            @endforeach

            {{-- Кнопки управления --}}
            <div class="flex space-x-4">

                {{-- Просмотр --}}
                <a href="{{ route('categories.show', $category->id) }}"
                   class="px-3 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">
                    Просмотр
                </a>

                {{-- Редактировать --}}
                <a href="{{ route('categories.edit', $category->id) }}"
                   class="px-3 py-2 bg-blue-300 text-blue-900 rounded hover:bg-blue-400 transition">
                    Редактировать
                </a>

                {{-- Удалить --}}
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
                        onclick="return confirm('Удалить категорию?')">
                        Удалить
                    </button>
                </form>

            </div>

        </div>
    @endforeach

@endsection
