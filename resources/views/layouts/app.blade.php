<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Здесь можно добавить ссылки на стили, шрифты и другие ресурсы -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- Навигация или шапка -->
<nav>
    <!-- Навигационные элементы -->
</nav>

<!-- Основной контент страницы -->
<div class="container">
    @yield('content')
</div>

<!-- Подвал -->
<footer>
    <!-- Подвал -->
</footer>

<!-- Скрипты -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
