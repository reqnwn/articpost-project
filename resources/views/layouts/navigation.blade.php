<nav class="bg-sky-200 border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('posts.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo.png') }}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ArticPost</span>
        </a>
        
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <!-- Navigator Bar -->
            <div class="hidden md:flex rtl:space-x-reverse">
    <!-- Home -->
    <a href="{{ route('posts.index') }}" 
        class="relative group block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-500 dark:text-white md:dark:hover:text-blue-500">
        <img src="{{ asset('img/element2.png') }}" alt="Post Icon" class="w-8 h-8 mx-auto">
        <span 
            class="absolute left-1/2 transform -translate-x-1/2 bottom-0 translate-y-full opacity-0 transition-opacity duration-200 group-hover:opacity-100 bg-gray-800 text-white text-sm rounded px-2 py-1 shadow-lg">
            Home
        </span>
    </a>

    <!-- Posting Article -->
    <a href="{{ route('admin.posts.create') }}" 
        class="relative group block py-2 px-3 mr-5 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-500 dark:text-white md:dark:hover:text-blue-500">
        <img src="{{ asset('img/element.png') }}" alt="Post Icon" class="w-8 h-8 mx-auto">
        <span 
            class="absolute left-1/2 transform -translate-x-1/2 bottom-0 translate-y-full opacity-0 transition-opacity duration-200 group-hover:opacity-100 bg-gray-800 text-white text-sm rounded px-2 py-1 shadow-lg">
            Posting Article
        </span>
    </a>
</div>

            
            <div x-data="{ open: false }" class="relative">
                @guest
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                        Login
                    </x-nav-link>
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                        Register
                    </x-nav-link>
                @else
                    <button @click="open = !open" type="button"
                        class="flex text-sm bg-sky-200 rounded-full focus:ring-4 focus:ring-sky-200 dark:focus:ring-gray-600 bg-white"
                        id="user-menu-button" aria-expanded="false">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="{{ asset('img/user2.png') }}" alt="user photo">
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="open" @click.away="open = false"
                        class="z-50 absolute right-0 mt-2 w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                            <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                        </div>
                        <ul class="py-2">
                            <li>
                                <a href="{{ route('about') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200">{{ __('About') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200">{{ __('Setting') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.categories.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200">Category</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.tags.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200">Tags</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.posts.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200">Post</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200">
                                    {{ __('Sign out') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>

        <!-- Mobile Menu -->
        <button data-collapse-toggle="navbar-user" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700"
            aria-controls="navbar-user" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </div>
</nav>
