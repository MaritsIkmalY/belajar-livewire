<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/app.css">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a href="/calculator" wire:navigate @class(['current' => request()->is('calculator')]) >Calculator</a>
            <a href="/todos" wire:navigate @class(['current' => request()->is('todos')]) >Todos</a>
            <a href="/counter" wire:navigate @class(['current' => request()->is('counter')]) >Counter</a>
            <a href="/posts" wire:navigate @class(['current' => request()->is('posts')]) >Posts</a>
            <a href="/create-post" wire:navigate @class(['current' => request()->is('create-post')]) >Create Post</a>
            <a href="/fibonacci" wire:navigate @class(['current' => request()->is('fibonacci')]) >Fibonacci</a>
            <a href="/prime-number" wire:navigate @class(['current' => request()->is('prime-number')]) >Prime Number</a>
        </nav>
        {{ $slot }}
    </body>
</html>
