@forelse ($categories as $item)
    <a class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline"
        href="/posts?category={{ $item->slug }}">{{ $item->name }}</a>
@empty
    <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 md:my-0"
        href="#">No Category</a>
@endforelse
