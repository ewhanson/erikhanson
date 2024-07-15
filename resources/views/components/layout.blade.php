<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://fav.farm/👋">

    <title>{{ $title ?? 'Erik Hanson' }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="flex min-h-screen max-w-none flex-col">
{{ $slot }}
</body>
</html>
