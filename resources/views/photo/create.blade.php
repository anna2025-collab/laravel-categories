{{--<!DOCTYPE html>--}}
{{--<html lang="ru">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Создать фотографию</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Создать фотографию</h1>--}}

{{--@if ($errors->any())--}}
{{--    <div>--}}
{{--        <strong>Ошибки:</strong>--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

{{--<form action="{{ route('photo.store') }}" method="POST">--}}
{{--    @csrf--}}

{{--    <div>--}}
{{--        <label for="title">Название:</label>--}}
{{--        <input id="title" type="text" name="title" value="{{ old('title') }}">--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="description">Описание:</label>--}}
{{--        <textarea id="description" name="description">{{ old('description') }}</textarea>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="path">Путь к файлу:</label>--}}
{{--        <input id="path" type="text" name="path" value="{{ old('path') }}">--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <button type="submit">Сохранить</button>--}}
{{--        <a href="{{ route('photo.index') }}">Назад к списку</a>--}}
{{--    </div>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
{{--@extends('layouts.app')--}}

{{--@section('title', 'Создать новую фотографию')--}}

{{--@section('content')--}}
{{--    <div class="max-w-3xl mx-auto bg-blue-100 rounded-xl shadow-lg p-8 mt-6">--}}
{{--        <h1 class="text-3xl font-bold mb-6 text-blue-800">Создать новую фотографию</h1>--}}

{{--        @if ($errors->any())--}}
{{--            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded shadow">--}}
{{--                <strong>Ошибки:</strong>--}}
{{--                <ul class="list-disc list-inside">--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form action="{{ route('photo.store') }}" method="POST">--}}
{{--            @csrf--}}

{{--            <div class="mb-4">--}}
{{--                <label class="block font-semibold text-blue-800 mb-1" for="title">Название</label>--}}
{{--                <input type="text" name="title" id="title"--}}
{{--                       value="{{ old('title') }}"--}}
{{--                       class="w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400">--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label class="block font-semibold text-blue-800 mb-1" for="description">Описание</label>--}}
{{--                <textarea name="description" id="description"--}}
{{--                          class="w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400"--}}
{{--                          rows="4">{{ old('description') }}</textarea>--}}
{{--            </div>--}}

{{--            <div class="mb-6">--}}
{{--                <label class="block font-semibold text-blue-800 mb-1" for="path">Путь к файлу</label>--}}
{{--                <input type="text" name="path" id="path"--}}
{{--                       value="{{ old('path') }}"--}}
{{--                       class="w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400">--}}
{{--            </div>--}}
{{--           --}}
{{--            <div class="flex gap-4">--}}
{{--                <button type="submit"--}}
{{--                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg shadow-lg transition">--}}
{{--                    Создать--}}
{{--                </button>--}}
{{--                <a href="{{ route('photo.index') }}"--}}
{{--                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg shadow transition">--}}
{{--                    Отмена--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('layouts.app')

@section('title', 'Создать новую фотографию')

@section('content')
    <div class="max-w-3xl mx-auto bg-blue-100 rounded-xl shadow-lg p-8 mt-6">
        <h1 class="text-3xl font-bold mb-6 text-blue-800">Создать новую фотографию</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded shadow">
                <strong>Ошибки:</strong>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('photo.store') }}" method="POST">
            @csrf

            {{-- Название --}}
            <div class="mb-4">
                <label class="block font-semibold text-blue-800 mb-1" for="title">Название</label>
                <input type="text" name="title" id="title"
                       value="{{ old('title') }}"
                       class="w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            {{-- Описание --}}
            <div class="mb-4">
                <label class="block font-semibold text-blue-800 mb-1" for="description">Описание</label>
                <textarea name="description" id="description"
                          class="w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400"
                          rows="4">{{ old('description') }}</textarea>
            </div>

            {{-- Путь --}}
            <div class="mb-6">
                <label class="block font-semibold text-blue-800 mb-1" for="path">Путь к файлу</label>
                <input type="text" name="path" id="path"
                       value="{{ old('path') }}"
                       class="w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-6">
                <label class="block font-semibold text-blue-800 mb-1">
                    Категория
                </label>

                <select name="category_id"
                        class="form-select w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400">

                    <option disabled selected>Выберите категорию</option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>
            </div>


            {{-- Кнопки --}}
            <div class="flex gap-4">
                <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg shadow-lg transition">
                    Создать
                </button>

                <a href="{{ route('photo.index') }}"
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg shadow transition">
                    Отмена
                </a>
            </div>
        </form>
    </div>
@endsection
