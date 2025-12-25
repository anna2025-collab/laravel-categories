@extends('layouts.app')
@section('title', 'Список фотографий')

@section('content')
    <div class="max-w-8xl mx-auto px-6 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">Галерея фотографий</h1>
            <a href="{{ route('photo.create') }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg shadow-lg transition">
                Создать новую фотографию
            </a>
        </div>

        @if($photos->isEmpty())
            <p class="text-gray-600">Фотографий пока нет.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-10">
                @foreach($photos as $photo)
                    <div class="bg-blue-100 rounded-xl shadow-lg p-6 flex flex-col justify-between min-h-[240px] w-full box-border hover:shadow-2xl transition">
                        <div>
                            <!-- Добавлен номер фотографии -->
                            <h2 class="text-xl font-semibold mb-2 text-blue-800">
                                #{{ $photo->id }} - {{ $photo->title }}
                            </h2>
                            <p class="text-blue-600 mb-2">{{ $photo->description }}</p>
                            <p class="text-blue-400 mb-4 text-sm">{{ $photo->path }}</p>
                        </div>

                        <div class="flex flex-wrap gap-3 mt-auto">
                            <a href="{{ route('photo.show', $photo) }}"
                               class="bg-blue-200 hover:bg-blue-300 text-gray-800 px-4 py-1 rounded shadow transition">
                                Просмотр
                            </a>
                            <a href="{{ route('photo.edit', $photo) }}"
                               class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-1 rounded shadow transition">
                                Редактировать
                            </a>
                            <form action="{{ route('photo.destroy', $photo) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded shadow transition">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
