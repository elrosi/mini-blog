@php $cardPosition = 2; @endphp
@if($highlights->count())
    <div class="highlights-wrapper">
        @foreach($highlights as $highlightColumn => $highlightPosts)
            @php $cardPosition + $highlightColumn; @endphp
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8 {{ $highlightColumn === 0 ? '' : 'mt-10'}}">
                @foreach($highlightPosts as $highlightPostKey => $highlightPostItem)
                    <div tabindex="0" class="focus:outline-none" aria-label="card {{ $cardPosition }}">
                        <div tabindex="0" class="focus:outline-none" aria-label="card {{ $cardPosition }}" >
                            <img tabindex="0" role="img" aria-label="gaming" class="focus:outline-none w-full" src="{{ asset('/posts/post-'.array_rand([1,2,3,4]).'.png') }}" alt="{{ $highlightPostItem->title }}" />
                            <div class="py-2 px-4 w-full flex justify-between bg-indigo-700">
                                <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $highlightPostItem->author->name }}</p>
                                <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $highlightPostItem->created_at ? $highlightPostItem->created_at->format(config('blog.date_format.with_time')) : '' }}</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 px-3 lg:px-6 py-4 rounded-bl-3xl rounded-br-3xl">
                                <a href="{{ route('posts.show', $highlightPostItem) }}">
                                    <h3 tabindex="0" class="focus:outline-none text-lg text-gray-900 dark:text-white font-semibold tracking-wider">{{ Str::words($highlightPostItem->title, 4) }}</h3>
                                </a>
                                <p tabindex="0" class="focus:outline-none text-gray-700 dark:text-gray-200 text-sm lg:text-base lg:leading-8 pr-4 tracking-wide mt-2">{{ Str::words($highlightPostItem->body, 15) }}</p>
                                <div class="w-full flex justify-end" >
                                    <a href="{{ route('posts.show', $highlightPostItem) }}" class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                                        <span class=" text-base tracking-wide dark:text-slate-400 text-slate-500">{{ __('Read more') }}</span>
                                        <img class="ml-3 lg:ml-6" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/2-column-with-main-and-supporting-svg1.svg" alt="arrow"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $cardPosition++; @endphp
                @endforeach
            </div>
        @endforeach
    </div>
@endif

