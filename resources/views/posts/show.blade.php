<x-app-layout
    :title="$post->title"
    :meta-description="$post->body">

    <div class="container w-full md:max-w-3xl mx-auto pt-20">
        <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">

            <div class="text-base md:text-sm dark:text-slate-300 font-bold">
                &lt; <a href="{{ route('posts.index') }}" class="text-base md:text-sm dark:text-slate-300 font-bold no-underline hover:underline">{{ __('Go back') }}</a>
            </div>

            <article id="post-{{ $post->id }}" class="font-sans">
                <h1 class="my-4 font-serif text-3xl text-sky-600 dark:text-sky-500">{{ $post->title }}</h1>

                @auth
                    <div class="flex flex-wrap sm:gap-8 gap-4 mt-5 mb-5">
                        @can('update', $post)
                            <a class="inline-flex items-center text-xs font-semibold tracking-widest uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200"
                               href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}
                            </a>
                        @endcan
                        @can('delete', $post)
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-flex items-center">
                                @csrf
                                @method('DELETE')
                                <button class="inline-flex items-center text-xs font-semibold tracking-widest text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none"
                                    type="submit">{{ __('Delete') }}</button>
                            </form>
                        @endcan
                    </div>
                @endauth

                <div class="flex text-sm md:text-base font-normal text-gray-600 gap-4">
                    <div class="float-left inline-block post-reading-time-value">{{ $post->created_at ? __('Published') . ' ' . $post->created_at->format(config('blog.date_format.with_time')) : '' }}</div>
                    <div class="mx-1 float-left inline-block" aria-hidden="true"><span class="reading-time-delimiter" aria-hidden="true"><span class="al b bm ag ai">·</span></span></div>
                    <div class="float-left inline-block post-reading-time">{{ $post->readingTime() }} {{ __('min read') }}</div>
                </div>
            </article>

            <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400">{{ $post->body }}</p>

        </div>

        <div class="text-base md:text-sm text-gray-500 px-4 py-6">
            {{ __('Tags') }}:
            <a href="#" class="text-base md:text-sm text-sky-600 dark:text-sky-500 no-underline hover:underline">tag</a>,
            <a href="#" class="text-base md:text-sm text-sky-600 dark:text-sky-500 no-underline hover:underline">log</a>,
            <a href="#" class="text-base md:text-sm text-sky-600 dark:text-sky-500 no-underline hover:underline">link</a>
        </div>

        <hr class="border-b-2 border-gray-400 mb-8 mx-4">

        <div class="container px-4">
            <div class="font-sans bg-gradient-to-b from-sky-100 to-gray-100 rounded-lg shadow-xl p-4 text-center">
                <h2 class="font-bold break-normal text-xl md:text-3xl">{{ __('Subscribe to my Newsletter') }} </h2>
                <h3 class="font-bold break-normal text-gray-600 text-sm md:text-base">{{ __('Get the latest posts delivered right to your inbox') }}</h3>
                <div class="w-full text-center pt-4">
                    <form action="#">
                        <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                            <input type="email" placeholder="youremail@example.com" class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none"/>
                            <button type="submit" class="flex-1 mt-4 block md:inline-block appearance-none bg-sky-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-sky-400">{{ __('Subscribe') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex w-full items-center font-sans px-4 py-12">
            <img class="w-10 h-10 rounded-full mr-4" src="https://i.pravatar.cc/300" alt="{{ $post->author->name }}">
            <div class="flex-1 px-2">
                <p class="dark:text-slate-200 font-bold md:text-xl leading-none mb-2">{{ $post->author->name }}</p>
                <p class="text-gray-600 text-xs md:text-base">{{ __('Digital Marketing Consultant') }} <a class="text-sky-600 dark:text-sky-500 no-underline hover:underline" href="https://rosigroup.com">{{ $post->author->name }}</a></p>
            </div>
            <div class="justify-end">
                <a href="#" class="bg-transparent border border-gray-500 hover:border-sky-500 text-xs text-gray-500 hover:text-sky-500 font-bold py-2 px-4 rounded-full">{{ __('More from the author') }}</a>
            </div>
        </div>

    </div>
</x-app-layout>
