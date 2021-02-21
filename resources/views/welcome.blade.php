<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>LaraDev8x</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    </style>
</head>
<body class="font-roboto">
<div class="mx-5 min-h-screen grid place-content-center">
    <div
        class="bg-gradient-to-r from-principal-normal to-secondaria-normal rounded-2xl text-white p-8 text-center h-72 max-w-sm mx-auto">
        <h1 class="text-3xl mb-3">Olá, bem vindo(a)</h1>
        <p class="text-lg">Esta aplicação realiza um crud básico fazendo o uso do laravel v8x junto com tailwindcss.</p>
        <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </div>
    <div
        class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
        <img class="w-10 h-10 mx-auto "
             src="{{ asset('img/laravel-brands.svg') }}"
             alt="User avatar">
        <span class="flex items-center border rounded-full w-24 pr-2 justify-center mx-auto mt-2 mb-12"><div
                class="bg-green-400 rounded-full w-2.5 h-2.5 block mr-2"></div>Active</span>
        <img class="w-10 h-10 mx-auto "
             src="{{ asset('img/tailwindcss-icon.svg') }}"
             alt="User avatar">
        <span class="flex items-center border rounded-full w-24 pr-2 justify-center mx-auto mt-2 mb-12"><div
                class="bg-green-400 rounded-full w-2.5 h-2.5 block mr-2"></div>Active</span>
        <a href={{ route('livros.index') }}>
            <button
                class="mr-5 ml-5 rounded-md bg-white text-xl text-white pt-3 pb-4 px-8 shadow-md text-gray-400 border-b-2 border-secondaria-normal hover:bg-secondaria-normal hover:text-white">
                Começar &#128512;
            </button>
        </a>
    </div>
</div>


</body>
</html>
