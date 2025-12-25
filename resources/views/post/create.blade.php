@extends('layouts.app')

@section('title', 'Создание поста')

@section('content')

    <h1 class="text-3xl font-bold mb-6 text-blue-700">Создание поста</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded mb-6">
            <strong>Ошибки:</strong>
            <ul class="list-disc pl-6 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post.store') }}"
          method="POST"
          class="bg-white shadow-md rounded-lg p-6 space-y-6 border border-gray-200">
        @csrf

        {{-- Title --}}
        <div>
            <label for="title" class="block font-semibold text-gray-700 mb-2">Заголовок</label>

            <input type="text"
                   id="title"
                   name="title"
                   value="{{ old('title') }}"
                   class="w-full border border-gray-300 px-3 py-2 rounded
                          focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Введите заголовок">
        </div>

        {{-- Content --}}
        <div>
            <label for="content" class="block font-semibold text-gray-700 mb-2">Контент</label>

            <textarea id="content"
                      name="content"
                      rows="4"
                      class="w-full border border-gray-300 px-3 py-2 rounded
                             focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                      placeholder="Введите текст">{{ old('content') }}</textarea>
        </div>

        {{-- Likes --}}
        <div>
            <label for="likes" class="block font-semibold text-gray-700 mb-2">Likes</label>

            <input type="number"
                   id="likes"
                   name="likes"
                   value="{{ old('likes') }}"
                   class="w-full border border-gray-300 px-3 py-2 rounded
                          focus:ring-2 focus:ring-green-500 focus:border-green-500"
                   placeholder="0">
        </div>

        {{-- Dislikes --}}
        <div>
            <label for="dislikes" class="block font-semibold text-gray-700 mb-2">Dislikes</label>

            <input type="number"
                   id="dislikes"
                   name="dislikes"
                   value="{{ old('dislikes') }}"
                   class="w-full border border-gray-300 px-3 py-2 rounded
                          focus:ring-2 focus:ring-red-500 focus:border-red-500"
                   placeholder="0">
        </div>

        {{-- Select --}}
        <div>
            <label class="block font-semibold text-gray-700 mb-2">Выберите значения</label>

            <select name="options[]" multiple
                    class="w-full border border-gray-300 px-3 py-2 rounded h-32
                           focus:ring-2 focus:ring-purple-500 focus:border-purple-500">

                <option value="1" @if(collect(old('options'))->contains(1)) selected @endif>Один</option>
                <option value="2" @if(collect(old('options'))->contains(2)) selected @endif>Два</option>
                <option value="3" @if(collect(old('options'))->contains(3)) selected @endif>Три</option>

            </select>
        </div>

        {{-- Submit button --}}
        <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Отправить
        </button>

    </form>

@endsection
