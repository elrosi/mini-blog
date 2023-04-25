@if($headline)
    <div tabindex="0" class="focus:outline-none" aria-label="card 1">
        <img role="img" aria-label="code editor" tabindex="0" class="focus:outline-none w-full" src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(1).png" alt="code editor" />
        <div class="py-4 px-8 w-full flex justify-between bg-indigo-700">
            <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $headline->author->name }}</p>
            <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $headline->created_at ? $headline->created_at->format(config('blog.date_format.with_time')) : '' }}</p>
        </div>
        <div class="bg-white dark:bg-gray-800 px-10 py-6 rounded-bl-3xl rounded-br-3xl">
            <a href="{{ route('posts.show', $headline) }}">
                <h1 tabindex="0" class="focus:outline-none text-4xl text-gray-900 dark:text-white font-semibold tracking-wider">
                    {{ $headline->title }}
                </h1>
            </a>
            <p tabindex="0" class="focus:outline-none text-gray-700 dark:text-gray-200 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">{{ Str::words($headline->body, 60) }}</p>
            <div class="w-full flex justify-end" >
                <a href="{{ route('posts.show', $headline) }}" class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                    <span class=" text-base tracking-wide dark:text-slate-400 text-slate-500">{{ __('Read more') }}</span>
                    <img class="ml-3 lg:ml-6" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/2-column-with-main-and-supporting-svg1.svg" alt="arrow"/>
                </a>
            </div>
            <div class="h-5 w-2"></div>
        </div>
    </div>
@endif

