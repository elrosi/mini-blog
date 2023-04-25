<x-app-layout
    :title="__('About')"
    meta-description="About meta description">

    <!-- component -->
    <div class="container mx-auto">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">{{ __('About') }}</h1>

        <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
            <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                <img src="{{ asset('about-me.jpg') }}" alt="Peter Rosinský" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
                <div class="flex flex-col">
                    <h2 class="focus:outline-none text-lg text-gray-900 dark:text-white font-semibold tracking-wider m-1">Peter Rosinský, <strong class="font-semibold mb-5">Web Developer</strong></h2>
                    <p class=" text-gray-700 dark:text-gray-200 m-1 text-base lg:text-lg lg:leading-8 tracking-wide">Viem pracovať s obľúbeným Laravel frameworkom, Vue, JQuery, Bootstrap. Poznám architektúru rôznych CMS systémov, ako je Prestashop, WordPress, Magento2,
                        Joomla, Typo3, CS-Cart na úrovni programovania doplnkov a implementácie dizajnu.</p>
                    <p class="text-gray-700 dark:text-gray-200 m-1 text-base lg:text-lg lg:leading-8 tracking-wide">Referencie: profdiet.net, nestville.sk, nestvillepark.sk, fermeria.sk, vt.sk (a pridružené weby Tatry Mountain Resorts weby
                        postavené na TYPO3), vitimanager.eu (Apka určená na výpočet spotreby postrekov pre vinohradnícke farmy), subaruslovakia.sk, isklad.eu, NetSuccess.sk, xIT.camp. Posledný realizovaný projekt je aplikácia pre
                        správu Taskov postavená na Laravel. Aplikácia síce nie je reaktívna, no vo veľkej miere je použitý JavaScript, jQuery a asynchrónne požiadavky.
                        Tiež bol použitý WebSocket pre interakciu používateľov v reálnom čase.</p>
                </div>
            </div>
            <div class="flex justify-center pt-4 space-x-4 align-center">
                <a rel="noopener noreferrer" href="https://github.com/elrosi" target="_blank" aria-label="GitHub" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                </a>
                <a rel="noopener noreferrer" href="https://www.linkedin.com/in/peterrosinsky" target="_blank" aria-label="LinkedIn" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                </a>
                <a rel="noopener noreferrer" href="tel:+421905579755" aria-label="Phone" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </a>
                <a rel="noopener noreferrer" href="mailto:peto.rosinsky@gmail.com" aria-label="Email" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </a>
                <a rel="noopener noreferrer" href="https://rosigroup.com" target="_blank" aria-label="Link" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
