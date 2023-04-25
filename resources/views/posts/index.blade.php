<x-app-layout
    :title="__('Blog - Our digital marketing world closer to you')"
    meta-description="Latest from our Blog">

    <div id="blog" class="bg-gray-100 dark:bg-gray-900 px-4 xl:px-4 py-14">
        <div class="mx-auto container">

            <h1 tabindex="0" class="focus:outline-none text-center text-3xl lg:text-4xl tracking-wider text-gray-900 dark:text-white">
                {{ __('Learn How to Grow Your Ecommerce Business') }}
            </h1>

            <div aria-label="Group of cards" class="focus:outline-none mt-12 lg:mt-24">
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-8">

                    @include('posts.components.headline')

                    @include('posts.components.highlights')

                </div>
            </div>

            <div class="mx-auto flex-1">
                <section>
                    <div class="mx-auto px-8 py-12 max-w-7xl sm:py-24">
                        <div class="mx-auto max-w-2xl">

                            <h2 class="dark:text-white font-medium sm:text-4xl text-2xl text-neutral-900 tracking-tighter">
                                {{ __('Other articles') }}
                            </h2>

                            <p class="dark:text-neutral-300 mt-4 text-neutral-400">
                                {{ __('Check out my newest blog posts and discover the latest insights and trends in web development and UI design. From essential skills and top frameworks to user-centered design and responsive web design.Check out my newest blog posts and discover the latest insights and trends in web development and UI design. From essential skills and top frameworks to user-centered design and responsive web design.') }}
                            </p>

                            @if($posts->count())
                                @foreach ($posts as $post)
                                    @include('posts.components.post-item', ['post' => $post])
                                @endforeach
                            @endif

                            <div class="flex flex-wrap">
                                <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">{{ __('Load more') }}</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
