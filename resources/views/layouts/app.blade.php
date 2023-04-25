<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials.head')

    <body class="antialised bg-slate-100 dark:bg-slate-900">
        <x-navigation />

        @if (session('status'))
            <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
                {{ session('status') }}
            </div>
        @endif

        {{ $slot }}

        @include('partials.footer')
    </body>
</html>
