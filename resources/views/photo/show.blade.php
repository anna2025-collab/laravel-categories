
@extends('layouts.app')

@section('title', 'Фотография #' . $photo->id)

@section('content')
    <h2 class="text-2xl font-bold mb-4">Фотография #{{ $photo->id }}</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- Название --}}
        <div class="bg-blue-100 text-gray-800 p-4 rounded shadow flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 4v16m8-8H4"/>
            </svg>
            <span class="font-semibold">Название: {{ $photo->title }}</span>
        </div>

        {{-- Описание --}}
        <div class="bg-blue-100 text-gray-800 p-4 rounded shadow flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 12h8m-8 4h8m-8-8h8"/>
            </svg>
            <span class="font-semibold">Описание: {{ $photo->description }}</span>
        </div>

        {{-- Путь --}}
        <div class="bg-blue-100 text-gray-800 p-4 rounded shadow flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 16l3-3 4 4 8-8 3 3"/>
            </svg>
            <span class="font-semibold">Путь: {{ $photo->path }}</span>
        </div>

    <div class="bg-blue-100 text-gray-800 p-4 rounded shadow flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 16l3-3 4 4 8-8 3 3"/>
            </svg>
        <span class="font-semibold">Категория:
        @if($photo->category)
            {{ $photo->category->name }}
        @endif
        </span>
        </div>
    </div>


    <div class="flex gap-4 mt-6">
        {{-- Желтая кнопка --}}
        <a href="{{ route('photo.edit', $photo) }}"
           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded shadow">
            Редактировать
        </a>

        <a href="{{ route('photo.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded shadow">
            Назад
        </a>
    </div>
@endsection
