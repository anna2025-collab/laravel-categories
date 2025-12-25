@extends('layouts.app')

@section('title', 'Редактировать новость')

@section('content')

    <h1 class="text-3xl font-bold mb-6">Редактировать новость</h1>

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

    <form action="{{ route('news.update', $news->id) }}" method="POST" class="bg-white shadow rounded p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-2">Текущая новость</label>
            <textarea name="current_news"
                      class="w-full border px-3 py-2 rounded"
                      rows="4">{{ $news->current_news }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2">Старая новость</label>
            <textarea name="old_news"
                      class="w-full border px-3 py-2 rounded"
                      rows="3">{{ $news->old_news }}</textarea>
        </div>

        <button type="submit"
                class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
            Обновить
        </button>
    </form>
1
@endsection
