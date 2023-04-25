<div class="dark:border-neutral-500 border-t mt-10 pt-10 sm:my-16 sm:pt-16 space-y-16">
    <article class="flex flex-col items-start justify-between max-w-xl">
        <div class="items-center flex gap-x-4 text-xs">
            <time class="uppercase dark:text-neutral-200 text-neutral-400 text-xs" datetime="{{ $post->created_at ? $post->created_at->format(config('blog.date_format.with_time')) : ''}}">
                {{ $post->created_at ? __('Published') . ' ' . $post->created_at->format(config('blog.date_format.with_time')) : '' }}
            </time>
        </div>
        <div class="group relative">
            <h3 class="dark:text-white text-neutral-900 font-semibold group-hover:text-accent-400 leading-6 mt-3 text-lg">
                <a href="{{ route('posts.show', $post) }}" title="{{ $post->title }}">
                    <span class="inset-0 absolute"></span> {{ $post->title }}
                </a>
            </h3>
            <p class="dark:text-neutral-300 mt-4 text-neutral-400 line-clamp-3">
                {{ Str::words($post->body, 40) }}
            </p>
        </div>
    </article>
</div>
