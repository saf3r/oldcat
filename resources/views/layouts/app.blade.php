<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@hasSection('title') @yield('title') - @endif {{ config('app.name', 'Старый кот') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/all.min.css', 'resources/js/app.js', 'resources/js/main.js'])
    </head>
    <body class="font-golos-text antialiased text-gray-800">
        <div class="bg-[#f8f7fa]">

            {{-- @include('layouts.navigation') --}}
            <div class="flex min-h-screen">
                <div id="_sidebar" class="bg-[#2f3349] text-[#cfcce4] group {{ cache('sidebar') === 1 ? 'min-w-64 open' : 'w-16 close' }}">
                    @include('layouts.sidebar')
                </div>
                <div class="w-full">
                    <header class="relative bg-white max-w-[calc(1440px-3.25rem)] w-[calc(100%-3.25rem)] 2xl:w-[calc(100%-12rem)] mx-auto my-3 px-6 mb-6 shadow-md rounded-md">
                        <div class="flex items-center justify-between py-2.5">
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                    <input type="text" id="global_search" class=" border-0 placeholder-gray-400 transition-all focus:ring-0 focus:outline-0 z-[2]" placeholder="Поиск">
                                    <button id="global_search_close" class="absolute right-5 hidden z-[2]">
                                        <i class="fa-regular fa-xmark"></i>
                                    </button>
                                    <span class="hidden absolute w-[calc(100%-1rem)] left-[.5rem]"></span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <x-buttons.small class="relative">
                                    <i class="fa-light fa-bell"></i>
                                    <i class="fa-solid fa-circle-small absolute top-[5px] right-[11px] text-[10px] text-[#ff4c51]"></i>
                                </x-buttons.small>
                                <div class="relative">
                                    <div id="header_profile_button"  class="relative">
                                        <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" class="rounded-full w-10 h-10 cursor-pointer" alt="Аватарка пользователя {{ Auth::user()->name }}">
                                        <i class="fa-solid fa-circle-small absolute bottom-[-3px] right-[5px] text-[14px] text-green-500 z-[1]"></i>
                                        <i class="fa-solid fa-circle-small absolute bottom-[-5px] right-[4px] text-[18px] text-white"></i>
                                    </div>
                                    <ul id="header_profile_list" class="hidden absolute right-[-5px] top-[4rem] w-max bg-white text-gray-800 rounded-md z-[1] py-2 shadow-md border border-[#eee]">
                                        <li class="mb-2 flex items-center space-x-3 py-2 px-3 mx-3 rounded-md transition-all">
                                            <div class="relative">
                                                <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" class="rounded-full w-10 h-10" alt="">
                                                <i class="fa-solid fa-circle-small absolute bottom-[-4px] right-[5px] text-[14px] text-green-500 z-[1]"></i>
                                                <i class="fa-solid fa-circle-small absolute bottom-[-6px] right-[4px] text-[18px] text-white"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                                                <span class="text-xs text-gray-500">{{ __('Администратор') }}</span>
                                            </div>
                                        </li>
                                        <hr class="border-gray-200">
                                        <li class="mt-2">
                                            <a href="#" class="flex items-center py-2 px-3 mx-3 hover:bg-gray-100 rounded-md transition-all">
                                                <i class="fa-regular fa-user w-5 text-center text-sm mr-3"></i>
                                                {{ __('Профиль') }}
                                            </a>
                                        </li>
                                        <li class="mt-2">
                                            <a href="#" class="flex items-center py-2 px-3 mx-3 hover:bg-gray-100 rounded-md transition-all">
                                                <i class="fa-regular fa-gear w-5 text-center text-sm mr-3"></i>
                                                {{ __('Настройки') }}
                                            </a>
                                        </li>
                                        <li class="mt-2">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-buttons.basic-link class="w-[calc(100%-1.5rem)] mx-3 border-[#ff4c51]  !bg-[#ff4c51] text-white shadow-[0_0.125rem_0.375rem_0_rgba(255,76,81,.3)] hover:!bg-[#e64449] h-[30px]" :href="route('logout')" 
                                                            onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                    {{ __('Выйти') }}
                                                    <i class="fa-light fa-arrow-right-from-bracket ml-1.5 text-[11px]"></i>
                                                </x-buttons.basic-link>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </header>

                    <!-- Page Content -->
                    <main class="space-y-6 max-w-[calc(1440px-3.25rem)] w-[calc(100%-3.25rem)] 2xl:w-[calc(100%-12rem)] mx-auto">
                        {{ $slot }}
                    </main>
                </div>
            </div>

            
            
        </div>

        <span class="min-w-64 w-16 hidden"></span>
    </body>
</html>
