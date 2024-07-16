<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:title" content="Erik Hanson">
    <meta property="og:type" content="website">
    <meta name="og:description" content="The personal website of Erik Hanson. Thanks for visiting! 👋">

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
