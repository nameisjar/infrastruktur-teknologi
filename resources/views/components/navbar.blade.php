<!-- Require css -->
<style>
    .scroll-hidden::-webkit-scrollbar {
        height: 0px;
        background: transparent;
        /* make scrollbar transparent */
    }

    /* CSS untuk membuat nav tetap */
    nav.sticky {
        position: sticky;
        top: 0;
        z-index: 999;
    }
</style>

<nav x-data="{ isOpen: false }" class="bg-white shadow dark:bg-gray-800 sticky top-0"> <!-- relative -->
    <div class="container px-6 py-3 mx-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="/">
                        <img class="w-auto h-16 sm:h-34" src="/images/logo_lab.png" alt="">
                    </a>

                    <!-- Search input on desktop screen -->
                    <div class="hidden mx-10 md:block">
                        <form class="relative" action="/posts">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>

                            <input type="text" name="search"
                                class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                                placeholder="Pencarian">
                        </form>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 w-full px-6 py-2 transition-all duration-300 ease-in-out bg-white top-24 dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col md:flex-row md:mx-1">
                    <a class="my-2 p-4 border-b-2 text-base leading-5 text-gray-700 transition-colors duration-300 transform border-transparent dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:border-blue-300 md:mx-4 md:my-0"
                        href="/">Beranda</a>
                    <a class="my-2 p-4 border-b-2 text-base leading-5 text-gray-700 transition-colors duration-300 transform border-transparent dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:border-blue-300 md:mx-4 md:my-0"
                        href="{{ route('profile') }}">Profil</a>
                    <a class="my-2 p-4 border-b-2 text-base leading-5 text-gray-700 transition-colors duration-300 transform border-transparent dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:border-blue-300 md:mx-4 md:my-0"
                        href="{{ route('posts.index') }}">Blog</a>

                    @auth
                        {{-- <a class="my-2 text-base leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="/admin">Admin</a> --}}
                        {{-- <ul>
                            <li class="mr-2">
                                <a href="/dashboard"
                                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-300 ">
                                    Dashboard
                                </a>
                            </li>
                        </ul> --}}
                        <a class="my-2 p-4 border-b-2 text-base leading-5 text-gray-700 transition-colors duration-300 transform border-transparent dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:border-blue-300 md:mx-4 md:my-0"
                            href="/dashboard">Dashboard</a>
                        {{-- @else
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="{{ route('login') }}">Login</a> --}}
                    @endauth
                </div>

                <!-- Search input on mobile screen -->
                <div class="my-4 md:hidden">
                    <form class="relative" action="/posts">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span>

                        <input type="text" name="search"
                            class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                            placeholder="Search">
                    </form>
                </div>
            </div>
        </div>

        <x-navbar-partial-categories />
    </div>
</nav>
