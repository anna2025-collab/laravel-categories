@extends('layouts.app')

@section('title', "Редактирование: $category->name")

@section('content')

    <h1 class="text-3xl font-bold mb-6">Редактирование категории</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
            <strong>Ошибки:</strong>
            <ul class="list-disc pl-6 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}"
          method="POST"
          class="bg-white shadow rounded p-6">

        @csrf
        @method('PUT')

        {{-- НАЗВАНИЕ --}}
        <div class="mb-4">
            <label class="block font-semibold mb-2">Название категории</label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $category->name) }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        {{-- ОПИСАНИЕ --}}
        <div class="mb-4">
            <label class="block font-semibold mb-2">Описание</label>
            <textarea name="description"
                      rows="4"
                      class="w-full border px-3 py-2 rounded"
            >{{ old('description', $category->description) }}</textarea>
        </div>

        {{-- КНОПКИ --}}
        <div class="flex space-x-4">

            {{-- Обновить --}}
            <button type="submit"
                    class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
                Обновить
            </button>

            {{-- Назад --}}
            <a href="{{ route('categories.show', $category->id) }}"
               class="px-4 py-2 bg-blue-400 text-white rounded hover:bg-blue-500 transition">
                Назад
            </a> <div class="form-group">
                <label class="block font-semibold text-blue-800 mb-1">
                    Тэги
                </label>

                <select multiple class="form-select w-full p-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400" id="tags" name="tags[]">
                    <option disabled> Выберите теги</option>
                    @foreach($tags as $tag)

                        <option @foreach($category->tags as $tagCat)
                            {{$tag->id == $tagCat->id?'selected':''}}
                      @endforeach
                            value="{{ $tag->id }}">
                            {{ $tag->title }}
                        </option>
                    @endforeach

                </select>
            </div>


        </div>

    </form>

@endsection
