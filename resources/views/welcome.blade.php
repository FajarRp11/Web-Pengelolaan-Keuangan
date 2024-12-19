<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="relative flex-col gap-4 sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <h1 class="font-semibold text-3xl">Website Pengelolaan Keuangan</h1>
            <p>Silahkan lakukan <a href="/admin" class="text-blue-600">Login</a> untuk mencoba fitur dari Website ini</p>
            <div class="text-center">
            <p>Email: admin@mail.com</p>
            <p>Password: admin</p>
            </div>
        </div>
    </body>
</html>
