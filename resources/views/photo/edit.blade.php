
@extends('layouts.app')

@section('title', 'Редактировать #' . $photo->id)

@section('content')
    <div class="max-w-4xl mx-auto px-6 py-8 bg-blue-100 rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-blue-800">Редактировать фотографию #{{ $photo->id }}</h1>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded">
                <strong>Ошибки:</strong>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('photo.update', $photo) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-semibold mb-1 text-blue-800">Название:</label>
                <input id="title" type="text" name="title" value="{{ old('title', $photo->title) }}"
                       class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="description" class="block font-semibold mb-1 text-blue-800">Описание:</label>
                <textarea id="description" name="description"
                          class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('description', $photo->description) }}</textarea>
            </div>

            <div>
                <label for="path" class="block font-semibold mb-1 text-blue-800">Путь к файлу:</label>
                <input id="path" type="text" name="path" value="{{ old('path', $photo->path) }}"
                       class="w-full px-4 py-2 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label class="block font-semibold text-blue-800 mb-1">
                    Категория
                </label>

                <select name="category_id"
                        class="form-select w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400">

                    <option disabled selected>Выберите категорию</option>

                    @foreach($categories as $category)
                        <option {{$category->id === $photo->category_id ? 'selected' : ''}}
                            value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="flex gap-4 mt-6">
                <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg shadow-lg transition">
                    Сохранить
                </button>
                <a href="{{ route('photo.show', $photo) }}"
                   class="bg-blue-400 hover:bg-blue-500 text-white px-6 py-2 rounded-lg shadow-lg transition">
                    Отмена
                </a>
            </div>
        </form>
    </div>
@endsection
