@section('title', $pageTitle ?? 'Coming Soon')
<x-home-layout>
    @vite('resources/css/app.css')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">{{ $pageTitle ?? 'Coming Soon' }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="container px-4 mx-auto">
                <div class="max-w-3xl mx-auto overflow-hidden bg-white border border-gray-100 shadow-xl rounded-3xl">
                    <div class="px-8 py-10 text-center md:px-12">
                        <span
                            class="inline-flex items-center px-4 py-1 text-xs font-semibold tracking-[0.2em] text-indigo-700 uppercase bg-indigo-50 rounded-full">
                            Marketplace Update
                        </span>
                        <h2 class="mt-6 text-3xl font-bold text-gray-900 md:text-4xl">
                            {{ $heading ?? 'This section is still being finished.' }}
                        </h2>
                        <p class="mt-4 text-base leading-7 text-gray-600 md:text-lg">
                            {{ $description ?? 'The route now has a stable fallback so the app keeps working cleanly while the full page is being built.' }}
                        </p>

                        <div class="flex flex-col items-center justify-center gap-4 mt-8 sm:flex-row">
                            <a href="{{ route('explore') }}"
                                class="inline-flex items-center justify-center px-6 py-3 font-semibold text-white transition bg-indigo-600 rounded-xl hover:bg-indigo-700">
                                Explore NFTs
                            </a>
                            <a href="{{ route('index') }}"
                                class="inline-flex items-center justify-center px-6 py-3 font-semibold text-indigo-700 transition border border-indigo-200 rounded-xl bg-indigo-50 hover:bg-indigo-100">
                                Back Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
