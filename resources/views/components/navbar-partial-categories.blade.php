<div class="py-3 mt-3 -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">
    @forelse ($categories as $item)
        <a class="mx-4 text-base leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 md:my-0"
            href="/posts?category={{ $item->slug }}">{{ $item->name }}</a>
    @empty
        <a class="mx-4 text-base leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 md:my-0"
            href="#">No Category</a>
    @endforelse
</div>

