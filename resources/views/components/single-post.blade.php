<div class="mb-6 lg:mb-0">
    <div
        class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <div class="flex">
            <div class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <object data="{{ $post->banner_url }}" class="w-full h-64 object-cover object-center rounded-lg lg:h-180">
                    <img class="w-full" src="/images/OIP.jpeg" alt="{{ $post->title }}">
                </object>
                <a href="{{ route('posts.show', $post->slug) }}">
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                    </div>
                </a>
            </div>
        </div>
        <div class="p-6">
            <h5 class="mb-3 text-lg font-bold line-clamp-1">{{ $post->title }}</h5>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                {{ $post->category->name }}
            </span>

            <p class="mb-4 mt-2 text-neutral-500 dark:text-neutral-300">
                <small>Dipublikasikan
                    <u>{{ \Carbon\Carbon::parse($post->created_at)->locale('id')->diffForHumans() }}</u> Oleh
                    <img class="inline w-6 h-6 rounded-full max-w-xs transition duration-300 ease-in-out hover:scale-110"
                        src="{{ $post->author->photo_url }}" alt="{{ $post->author->name }}">
                    <a href="#!">{{ $post->author->name }}</a>
                </small>
            </p>
            <p class="mb-4 pb-2 line-clamp-3">
                {{ $post->excerpt }}
            </p>
            <a href="{{ route('posts.show', $post->slug) }}" data-te-ripple-init data-te-ripple-color="light"
                class="inline-block rounded-full bg-blue-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Baca Selengkapnya
            </a>
        </div>
    </div>
</div>
