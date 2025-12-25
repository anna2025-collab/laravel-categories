
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

<nav class="bg-blue-100 shadow mb-7">
    <div class="max-w-5xl mx-auto px-4 py-4 flex justify-between items-center">

        <h1 class="text-xl font-semibold text-gray-800">Меню</h1>

        <div class="flex space-x-6">

            {{-- Кнопка "Все фото" --}}
            <a href="{{ route('photo.index') }}"
               class="text-gray-700 hover:underline">
                 Фото
            </a>

            {{-- Новая кнопка "Все новости" --}}
            <a href="{{ route('news.index') }}"
               class="text-gray-700 hover:underline">
                 Новости
            </a>
            <a href="{{ route('categories.index') }}"
               class="text-gray-700 hover:underline">
                Категории
            </a>

        </div>
    </div>
</nav>

<div class="max-w-5xl mx-auto p-4">
    @yield('content')
</div>

</body>
</html>
