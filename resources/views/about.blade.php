<x-default-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                Pengurus Laboratorium Infrastruktur Teknologi
            </h1>

            <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
                Laboratorium Infrastruktur Teknologi memiliki struktur organisasi yang terdiri dari 4 (empat) divisi,
                yaitu: BPH, Pengembangan Ilmu, Penelitian, dan media teknologi
            </p>

            <div class="flex items-center justify-center" id="tabs-tab3" role="tablist" data-te-nav-ref>
                <div class="flex items-center p-1 border border-blue-600 dark:border-blue-400 rounded-xl">
                    <a href="#tabs-home3" id="tabs-home-tab3" data-te-toggle="pill" data-te-target="#tabs-home3"
                        data-te-nav-active="tab" role="tab" aria-controls="tabs-home3" aria-selected="true">
                        <button
                            class="px-4 py-2 mx-4 text-sm font-medium text-blue-600 capitalize transition-colors duration-300 md:py-3 dark:text-blue-400 dark:hover:text-white focus:outline-none hover:bg-blue-600 hover:text-white rounded-xl md:mx-8 md:px-12">
                            BPH
                        </button>
                    </a>
                    <a href="#tabs-profile3" id="tabs-profile-tab3" data-te-toggle="pill"
                        data-te-target="#tabs-profile3" role="tab" aria-controls="tabs-profile3"
                        aria-selected="false">
                        <button
                            class="px-4 py-2 mx-4 text-sm font-medium text-blue-600 capitalize transition-colors duration-300 md:py-3 dark:text-blue-400 dark:hover:text-white focus:outline-none hover:bg-blue-600 hover:text-white rounded-xl md:mx-8 md:px-12">
                            Pengembangan Ilmu dan Penelitian
                        </button>
                    </a>
                    <a href="#tabs-messages3" id="tabs-messages-tab3" data-te-toggle="pill"
                        data-te-target="#tabs-messages3" role="tab" aria-controls="tabs-messages3"
                        aria-selected="false">
                        <button
                            class="px-4 py-2 text-sm font-medium text-blue-600 capitalize transition-colors duration-300 md:py-3 dark:text-blue-400 dark:hover:text-white focus:outline-none hover:bg-blue-600 hover:text-white rounded-xl md:px-12">
                            Media Teknologi
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Tabs content-->
    <div>
        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-home3" role="tabpanel" data-te-tab-active aria-labelledby="tabs-home-tab3">
            {{-- bph --}}
            <section class="bg-white dark:bg-gray-900">
                <div class="h-[32rem] bg-gray-100 dark:bg-gray-800">
                    <div class="container px-6 py-10 mx-auto">
                        <h1
                            class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                            BPH</h1>

                        <div class="flex justify-center mx-auto mt-6">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                        </div>

                        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300">
                            BPH mengelola operasional sehari-hari, anggaran, dan sumber daya manusia, memastikan
                            kelancaran fungsi laboratorium untuk mencapai tujuan organisasi.
                        </p>
                    </div>
                </div>

                <div class="container px-6 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
                    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                M. Rendy Firmansyah
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Koordinator Laboratorium</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Muhammad Sahrul Ibad
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Sekretaris</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Maulidaturrohmah
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Bendahara</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-profile3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
            {{-- Pengembangan Ilmu dan Penelitian --}}
            <section class="bg-white dark:bg-gray-900">
                <div class="h-[32rem] bg-gray-100 dark:bg-gray-800">
                    <div class="container px-6 py-10 mx-auto">
                        <h1
                            class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                            Divisi Pengembangan Ilmu</h1>

                        <div class="flex justify-center mx-auto mt-6">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                        </div>

                        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300">
                            Divisi ini berfokus pada peningkatan ilmu pengetahuan dengan mengembangkan metode dan
                            teknologi terkini dalam infrastruktur teknologi.
                        </p>
                    </div>
                </div>

                <div class="container px-6 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
                    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Farah Fairus
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Koordinator Div. Pengembangan
                                Ilmu</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Maretha Nur Azizah
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Abd. Mu'iz Samsul Arifin
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Yuandika Purnama H.
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-white dark:bg-gray-900">
                <div class="h-[32rem] bg-gray-100 dark:bg-gray-800">
                    <div class="container px-6 py-10 mx-auto">
                        <h1
                            class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                            Divisi Penelitian</h1>

                        <div class="flex justify-center mx-auto mt-6">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                        </div>

                        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300">
                            Divisi ini melakukan penelitian mendalam untuk inovasi teknologi dan solusi efisien dalam
                            infrastruktur teknologi.
                        </p>
                    </div>
                </div>

                <div class="container px-6 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
                    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Rohmatullah Fadhillah
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Koordinator Div. Penelitian</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Afita Ganda Rizka
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Ahmad Nafi' Mu'izzuddin
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Nadilia Dwi Oktavia
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-messages3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
            {{-- Media --}}
            <section class="bg-white dark:bg-gray-900">
                <div class="h-[32rem] bg-gray-100 dark:bg-gray-800">
                    <div class="container px-6 py-10 mx-auto">
                        <h1
                            class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                            Divisi Media Teknologi</h1>

                        <div class="flex justify-center mx-auto mt-6">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                        </div>

                        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300">
                            Divisi ini mengelola komunikasi dan pemasaran teknologi laboratorium melalui media dan
                            platform teknologi, serta memberikan informasi kepada seluruh mahasiswa.
                        </p>
                    </div>
                </div>

                <div class="container px-6 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
                    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Niko Muhamad Fajar
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Koordinator Div. Media
                                Teknologi</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Mita Nurul Azizah
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                            <img class="object-cover w-full rounded-xl aspect-square"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                Febrianto Noto Negoro
                            </h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Staff</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Instagram">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#FDE494;"
                                                d="M114.759,512h61.103l-96.414-61.793L0.198,403.898C3.659,464.09,53.716,512,114.759,512z">
                                            </path>
                                            <path style="fill:#FEA150;"
                                                d="M335.448,476.69l-69.006-17.655H114.759c-34.072,0-61.793-27.721-61.793-61.793v-33.876 l-26.483-28.42L0,339.628v57.613c0,2.236,0.072,4.454,0.198,6.657L175.862,512h208.767L335.448,476.69z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M441.655,440.14c-11.244,11.637-26.993,18.894-44.414,18.894H266.442L384.629,512h12.612 c41.202,0,77.396-21.829,97.64-54.527l-27.022-16.094L441.655,440.14z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M459.034,326.014v71.228c0,16.652-6.633,31.775-17.379,42.899l53.227,17.333 C505.728,439.954,512,419.318,512,397.241v-62.805l-27.396-15.391L459.034,326.014z">
                                            </path>
                                            <polygon style="fill:#FF4D95;"
                                                points="512,149.19 483.797,142.474 459.034,157.3 459.034,326.014 512,334.436 ">
                                            </polygon>
                                            <path style="fill:#CB319C;"
                                                d="M512,114.759c0-57.633-42.708-105.473-98.136-113.55L344.43,30.101l-35.183,22.865h87.994 c34.072,0,61.793,27.721,61.793,61.793V157.3L512,149.19V114.759z">
                                            </path>
                                            <path style="fill:#8A3293;"
                                                d="M317.732,0l-65.682,24.636l-51.805,28.33h109.002L413.864,1.208C408.435,0.417,402.887,0,397.241,0 H317.732z">
                                            </path>
                                            <path style="fill:#FF5D4A;"
                                                d="M256,406.069c18.358,0,35.954-3.32,52.226-9.38l-86.02-39.047l-91.178-18.657 C157.946,379.39,203.913,406.069,256,406.069z">
                                            </path>
                                            <path style="fill:#E45261;"
                                                d="M329.153,305.358c-15.883,23.465-42.748,38.918-73.153,38.918c-40.273,0-74.308-27.118-84.867-64.046 l-23.682-14.801l-40.847,4.538c2.353,25.345,11.014,48.887,24.425,69.017l177.198,57.705c38.303-14.264,69.237-43.757,85.458-81.068 l-31.753-16.085L329.153,305.358z">
                                            </path>
                                            <g>
                                                <path style="fill:#FF4D95;"
                                                    d="M167.724,256c0-21.878,8.018-41.907,21.247-57.346l-37.658-5.268l-38.25,16.892 c-4.625,14.422-7.132,29.784-7.132,45.722c0,4.712,0.244,9.365,0.671,13.966l64.53,10.262 C168.929,272.524,167.724,264.403,167.724,256z">
                                                </path>
                                                <path style="fill:#FF4D95;"
                                                    d="M406.069,256c0-32.138-10.159-61.946-27.428-86.39l-37.397-5.308l-38.418,16.917 c24.873,15.631,41.45,43.298,41.45,74.781c0,18.27-5.58,35.261-15.123,49.358l64.531,10.262 C401.634,297.334,406.069,277.18,406.069,256z">
                                                </path>
                                            </g>
                                            <g>
                                                <path style="fill:#CB319C;"
                                                    d="M256,167.724c17.194,0,33.242,4.959,46.826,13.495l75.815-11.609 c-27.196-38.493-72.03-63.679-122.641-63.679c-66.81,0-123.554,43.889-142.937,104.345l75.908-11.624 C205.173,179.742,229.203,167.724,256,167.724z">
                                                </path>
                                                <path style="fill:#CB319C;"
                                                    d="M397.241,150.069c19.47,0,35.31-15.84,35.31-35.31s-15.84-35.31-35.31-35.31 c-19.47,0-35.31,15.84-35.31,35.31S377.771,150.069,397.241,150.069z">
                                                </path>
                                            </g>
                                            <polygon style="fill:#FF5D4A;"
                                                points="52.966,313.564 27.47,300.847 0,296.316 0,339.629 52.966,363.366 ">
                                            </polygon>
                                            <polygon style="fill:#E45261;"
                                                points="0,253.014 0,296.316 52.966,313.564 52.966,261.437 25.446,251.543 ">
                                            </polygon>
                                            <polygon style="fill:#FF4D95;"
                                                points="52.966,219.479 25.749,219.233 0,227.59 0,253.014 52.966,261.437 ">
                                            </polygon>
                                            <polygon style="fill:#CB319C;"
                                                points="52.966,179.757 24.911,182.603 0,205.962 0,227.59 52.966,219.479 ">
                                            </polygon>
                                            <polygon style="fill:#8A3293;"
                                                points="0,205.962 52.966,179.757 52.966,119.362 21.9,122.333 0,143.241 ">
                                            </polygon>
                                            <path style="fill:#523494;"
                                                d="M205.059,0L84.206,46.481L1.387,96.928C0.477,102.741,0,108.695,0,114.759v28.482l52.966-23.878 v-4.605c0-34.072,27.721-61.793,61.793-61.793h85.487L317.732,0H205.059z">
                                            </path>
                                            <path style="fill:#2D2D87;"
                                                d="M114.759,0C57.545,0,9.978,42.088,1.387,96.928L205.059,0H114.759z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="LinkedIn" role="img"
                                        viewBox="0 0 512 512" fill="#ffffff" class="w-6 h-6">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#0077b5">
                                            </rect>
                                            <circle cx="142" cy="138" r="37"></circle>
                                            <path stroke="#ffffff" stroke-width="66" d="M244 194v198M142 194v198">
                                            </path>
                                            <path
                                                d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32">
                                            </path>
                                        </g>
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Github">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-label="GitHub"
                                        role="img" viewBox="0 0 512 512" fill="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="512" height="512" rx="15%" fill="#1B1817">
                                            </rect>
                                            <path fill="#ffffff"
                                                d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-default-layout>
