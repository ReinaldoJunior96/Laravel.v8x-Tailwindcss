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
<nav class="bg-gradient-to-r from-principal-normal to-secondaria-normal">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 ">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <!--
                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!-- Icon when menu is open. -->
                    <!--
                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="hidden lg:block h-8 w-auto"
                         src="{{ asset('img/laravel-brands.svg') }}"
                         alt="Workflow">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#"
                           class="bg-white text-principal-dark shadow-2xl px-3 py-2 rounded-md text-sm font-medium">Laravel with tailwind frameworks</a>
                        <a href="{{ route('livros.index') }}"
                           class="text-gray-300 hover:bg-white hover:text-black px-3 py-2 rounded-md text-sm font-medium">Produtos</a>
                        <a href="{{ route('livros.create') }}"
                           class="text-gray-300 hover:bg-white hover:text-black px-3 py-2 rounded-md text-sm font-medium">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    <div>
                        <button onclick="changeClass()"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white "
                                id="user-menu" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-10 w-10 rounded-full bg-secondaria-normal border-white border-4"
                                 src="{{ asset('img/student.svg') }}"
                                 alt="">
                        </button>
                    </div>
                    <!--
                      Profile dropdown panel, show/hide based on dropdown state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div id="dropmenu-custom"
                         class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                            Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Menu open: "block", Menu closed: "hidden"
    -->
    <div class="hidden sm:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>

@yield('table-produtos')
@yield('form-cadastro')






<script type="text/javascript">
    function changeClass() {
        if (document.getElementById("dropmenu-custom").className.match(/(?:^|\s)hidden(?!\S)/)) {
            document.getElementById("dropmenu-custom").classList.add('block');
            document.getElementById("dropmenu-custom").classList.remove('hidden')
        } else {
            document.getElementById("dropmenu-custom").classList.add('hidden');
            document.getElementById("dropmenu-custom").classList.remove('block')
        }
    }
</script>
</body>
</html>
