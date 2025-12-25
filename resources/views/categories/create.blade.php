@extends('layouts.app')

@section('title','Создание категории')

@section('content')

    <h1 class="text-3xl font-bold mb-6">Создание категории</h1>



    <form action="{{ route('categories.store') }}" method="POST" class="bg-white shadow rounded p-6">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-semibold mb-2">Название категории</label>
            <input type="text"
                   id="name"
                   name="name"
                   value="{{ old('name') }}"
                   class="w-full border px-3 py-2 rounded">

            @error('name')
             <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block font-semibold mb-2">
                Описание категории
            </label>
            <textarea id="description"
                      name="description"
                      rows="3"
                      class="w-full border px-3 py-2 rounded">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-red-500">{{$message}}</p> @enderror
        </div>
        <div class="form-group">
            <label class="block font-semibold text-blue-800 mb-1">
                Тэги
            </label>
            <select multiple
                    class="form-select w-full p-3 rounded shadow"
                    name="tags[]">
                <option  disabled> Выберите теги</option>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}"
                        {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }} >
                        {{ $tag->title }}
                    </option>
                @endforeach

            </select>


        </div>
        <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Сохранить
        </button>
    </form>

@endsection
