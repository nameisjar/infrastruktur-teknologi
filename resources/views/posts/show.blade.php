<x-default-layout>
    <main class="pt-2 pb-4 lg:pt-4 lg:pb-8 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-6xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="lg:mb-6 not-format">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
                    <object data="{{ $post->banner_url }}"
                        class="w-full h-full object-cover object-center rounded-lg lg:h-180">
                        <img class="w-full" src="/images/OIP.jpeg" alt="{{ $post->title }}">
                    </object>
                    <p class="text-sm text-gray-500 dark:text-gray-400 ">
                        {{ $post->excerpt }}
                    </p>
                    <address class="flex items-center mt-6 mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-12 h-12 rounded-full max-w-xs transition duration-300 ease-in-out hover:scale-110"
                                src="{{ $post->author->photo_url }}" alt="{{ $post->author->name }}">
                            <div class="mr-4">
                                <a href="#" rel="author"
                                    class="text-sm font-semibold text-gray-900 dark:text-white">
                                    {{ $post->author->name }}
                                </a>
                                {{-- <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-1">
                                    {!! $post->author->bio !!}</p> --}}
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="inline w-5 h-5" fill="#000000" viewBox="0 0 32 32" data-name="Layer 12"
                                        id="Layer_12" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title></title>
                                            <path
                                                d="M20.69,24H3.53a1,1,0,0,1-1-1V11.34H26.76v7.05a0.5,0.5,0,0,0,1,0V8a2,2,0,0,0-2-2H24.07V4.5a0.5,0.5,0,0,0-1,0V5.93h-5V4.62a0.5,0.5,0,1,0-1,0V5.93h-5V4.62a0.5,0.5,0,1,0-1,0V5.93h-5V4.62a0.5,0.5,0,1,0-1,0V5.93H3.53a2,2,0,0,0-2,2v15a2,2,0,0,0,2,2H20.69A0.5,0.5,0,0,0,20.69,24ZM3.53,6.93H5.18V8.24a0.5,0.5,0,0,0,1,0V6.93h5V8.24a0.5,0.5,0,0,0,1,0V6.93h5V8.24a0.5,0.5,0,0,0,1,0V6.93h5V8.12a0.5,0.5,0,1,0,1,0V6.93h1.65a1,1,0,0,1,1,1v2.38H2.5V8A1,1,0,0,1,3.53,6.93Z">
                                            </path>
                                            <rect height="1.92" width="1.92" x="9.21" y="13.03"></rect>
                                            <rect height="1.92" width="1.92" x="13.71" y="13.03"></rect>
                                            <rect height="1.92" width="1.92" x="18.21" y="13.02"></rect>
                                            <rect height="1.92" width="1.92" x="4.71" y="16.7"></rect>
                                            <rect height="1.92" width="1.92" x="9.21" y="16.7"></rect>
                                            <rect height="1.92" width="1.92" x="13.71" y="16.7"></rect>
                                            <rect height="1.92" width="1.92" x="4.71" y="20.41"></rect>
                                            <rect height="1.92" width="1.92" x="9.21" y="20.41"></rect>
                                            <rect height="1.92" width="1.92" x="13.71" y="20.39"></rect>
                                            <rect height="1.92" width="1.92" x="18.21" y="20.39"></rect>
                                            <rect height="1.92" width="1.92" x="18.21" y="16.69"></rect>
                                            <rect height="1.92" width="1.92" x="22.63" y="13"></rect>
                                            <rect height="1.92" width="1.92" x="22.63" y="16.67"></rect>
                                            <path
                                                d="M26.32,19.65a4.18,4.18,0,1,0,4.17,4.17A4.18,4.18,0,0,0,26.32,19.65Zm0,7.35a3.18,3.18,0,1,1,3.17-3.18A3.18,3.18,0,0,1,26.32,27Z">
                                            </path>
                                            <path
                                                d="M27.5,22.42L25.77,24.2l-0.67-.54a0.5,0.5,0,1,0-.63.77l1,0.83a0.5,0.5,0,0,0,.67,0l2.05-2.11A0.5,0.5,0,0,0,27.5,22.42Z">
                                            </path>
                                        </g>
                                    </svg>
                                    
                                    <time pubdate datetime="{{ $post->created_at->format('Y-m-d') }}"
                                        title="{{ $post->created_at->formatLocalized('%A, %d %B %Y') }}">
                                        {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('l, d F Y') }}
                                    </time>

                                </p>
                                
                                
                            </div>

                            {{-- <a href="{{$post->author->github_handle}}">
                                <svg class="inline w-12 h-12" viewBox="0 0 512 512" data-name="Слой 1"
                                    id="Слой_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #cdccd2;
                                                }

                                                .cls-2 {
                                                    fill: #ffffff;
                                                }

                                                .cls-3 {
                                                    opacity: 0.79;
                                                }

                                                .cls-4 {
                                                    fill: url(#linear-gradient);
                                                }

                                                .cls-5 {
                                                    fill: url(#linear-gradient-2);
                                                }

                                                .cls-6 {
                                                    fill: url(#linear-gradient-3);
                                                }
                                            </style>
                                            <linearGradient gradientUnits="userSpaceOnUse" id="linear-gradient"
                                                x1="305.31" x2="318.59" y1="210.09" y2="196.81">
                                                <stop offset="0" stop-color="#fbb03b"></stop>
                                                <stop offset="0.19" stop-color="#ea6d48"></stop>
                                                <stop offset="0.44" stop-color="#d4145a"></stop>
                                                <stop offset="0.64" stop-color="#bb0b5b"></stop>
                                                <stop offset="0.86" stop-color="#a6035d"></stop>
                                                <stop offset="1" stop-color="#9e005d"></stop>
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-2" x1="172.97" x2="340.88"
                                                xlink:href="#linear-gradient" y1="337.59" y2="169.68">
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-3" x1="217.29" x2="295.71"
                                                xlink:href="#linear-gradient" y1="293.12" y2="214.7">
                                            </linearGradient>
                                        </defs>
                                        <title></title>
                                        <circle class="cls-1" cx="255" cy="256" r="207.77">
                                        </circle>
                                        <circle class="cls-2" cx="254.68" cy="256.04" r="194.41">
                                        </circle>
                                        <g class="cls-3">
                                            <circle class="cls-4" cx="311.95" cy="203.45" r="9.39">
                                            </circle>
                                            <path class="cls-5"
                                                d="M313.44,158H201.24C179.51,158,161,175.94,161,197.68v112.2c0,21.73,18.51,39.13,40.24,39.13h112.2c21.74,0,38.56-17.39,38.56-39.13V197.68C352,175.94,335.18,158,313.44,158ZM334,304.42A27.2,27.2,0,0,1,306.43,332H208.26C192.73,332,180,319.94,180,304.42V206.24A28.35,28.35,0,0,1,208.26,178h98.16C322,178,334,190.72,334,206.24v98.17Z">
                                            </path>
                                            <path class="cls-6"
                                                d="M256.5,198.46a55.45,55.45,0,1,0,55.45,55.45A55.45,55.45,0,0,0,256.5,198.46Zm0,91.54a36.09,36.09,0,1,1,36.09-36.09A36.1,36.1,0,0,1,256.5,290Z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="{{ $post->author->twitter_handle }}">
                                <svg class="inline w-12 h-12" viewBox="0 0 512 512" data-name="Слой 1"
                                    id="Слой_1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #cdccd2;
                                                }

                                                .cls-2 {
                                                    fill: #ffffff;
                                                }

                                                .cls-3 {
                                                    fill: #0078b9;
                                                }
                                            </style>
                                        </defs>
                                        <title></title>
                                        <circle class="cls-1" cx="254" cy="252" r="207.77">
                                        </circle>
                                        <circle class="cls-2" cx="254" cy="251.95" r="194.41">
                                        </circle>
                                        <polygon class="cls-3"
                                            points="169 225 204.72 225 205.59 344 169 344 169 225"></polygon>
                                        <path class="cls-3"
                                            d="M264.33,243.24L263.61,229H229.55L228,345l36-1.63V284.19s-2.11-25.52,17.49-29S303.16,271,303.16,271L303,304.19v40l38-.86v-75.7s5.91-37.49-34.82-44.05C306.18,223.58,277.74,219.37,264.33,243.24Z">
                                        </path>
                                        <circle class="cls-3" cx="188.65" cy="189.01" r="21.91">
                                        </circle>
                                    </g>
                                </svg>
                            </a> --}}

                            <div>

                            </div>
                        </div>
                    </address>

                </header>

                {{-- Conten Start --}}

                {!! $post->content !!}


                {{-- Conten End --}}


                <div class="coments">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://project-coba.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>
                </div>
            </article>
        </div>
    </main>

    <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @forelse ($relatedPosts as $post)
                    <article class="max-w-xs transition duration-500 ease-in-out hover:scale-110">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <object data="{{ $post->banner_url }}"
                                class="w-full h-64 object-cover object-center rounded-lg lg:h-50">
                                <img class=" w-full h-64 object-cover object-center mb-5 rounded-lg lg:h-50"
                                    src="/images/OIP.jpeg" alt="{{ $post->title }}">
                            </object>
                        </a>
                        <h2 class="mb-2 mt-4 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="mb-4 text-gray-500 dark:text-gray-400 line-clamp-3">
                            {{ $post->excerpt }}
                        </p>
                        <a href="{{ route('posts.show', $post->slug) }}"
                            class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                            Baca Selengkapnya
                        </a>
                    </article>
                @empty
                    <div class="flex items-center justify-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Info !</span> Related Posts not found
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </aside>

    {{-- <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Sign
                    up for our newsletter</h2>
                <p class="mx-auto mb-8 max-w-2xl  text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400">Stay up to date
                    with the roadmap progress, announcements and exclusive discounts feel free to sign up with your
                    email.</p>
                <form action="#">
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="email"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                                address</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-9 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Enter your email" type="email" id="email" required="">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</button>
                        </div>
                    </div>
                    <div
                        class="mx-auto max-w-screen-sm text-sm text-left text-gray-500 newsletter-form-footer dark:text-gray-300">
                        We care about the protection of your data. <a href="#"
                            class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Read our Privacy
                            Policy</a>.</div>
                </form>
            </div>
        </div>
    </section> --}}

</x-default-layout>
