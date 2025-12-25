@extends('layouts.app')

@section('title', "Категория: $categories->name")

@section('content')

    <h1 class="text-3xl font-bold mb-6">{{ $categories->name }}</h1>

    <div class="bg-white shadow rounded p-6 mb-8">

        <div class="mb-4">
            <span class="font-semibold text-gray-700 text-lg">Название:</span>
            <span class="text-gray-900 text-lg">{{ $categories->name }}</span>
        </div>

        <div class="mb-4">
            <span class="font-semibold text-gray-700 text-lg">Описание:</span>
            <span class="text-gray-900 text-lg">
                {{ $categories->description ?? '—' }}
            </span>
        </div>

    </div>

    <div class="flex space-x-6 mt-10">

        {{-- НАЗАД — серый --}}
        <a href="{{ route('categories.index') }}"
           class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">
            Назад
        </a>

        {{-- РЕДАКТИРОВАТЬ — мягкий синий --}}
        <a href="{{ route('categories.edit', $categories->id) }}"
           class="px-4 py-2 bg-blue-300 text-blue-900 rounded hover:bg-blue-400 transition">
            Редактировать
        </a>

        {{-- УДАЛИТЬ — синий, как в News Show --}}
        <form action="{{ route('categories.destroy', $categories->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
                onclick="return confirm('Удалить категорию?')">
                Удалить
            </button>
        </form>

    </div>

@endsection
