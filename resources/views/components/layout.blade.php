<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="{{ $title ?? 'Erik Hanson' }}">
    <meta name="description" content="The personal website of Erik Hanson. Thanks for visiting! 👋">

    <!-- Open Graph Meta Tags -->
    <meta property="og:url" content="https://erikhanson.dev/">
    <meta property="og:type" content="website">
    <meta name="og:title" content="{{ $title ?? 'Erik Hanson' }}">
    <meta name="og:description" content="The personal website of Erik Hanson. Thanks for visiting! 👋">
    <meta property="og:image" content="https://erikhanson.dev/images/og_card.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="erikhanson.dev">
    <meta property="twitter:url" content="https://erikhanson.dev/">
    <meta name="twitter:title" content="{{ $title ?? 'Erik Hanson' }}">
    <meta name="twitter:description" content="The personal website of Erik Hanson. Thanks for visiting! 👋">
    <meta name="twitter:image" content="https://erikhanson.dev/images/og_card.png">

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
