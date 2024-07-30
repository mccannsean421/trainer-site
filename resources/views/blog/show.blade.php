<x-layout>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto my-12 w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                
                {{-- Heading --}}
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <div class="ml-6">
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">Natasha Metcalfe</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Personal Trainer</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class="py-6 text-5xl text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post['title']}}</h1>
                </header>

                {{-- Content --}}
                <x-markdown-renderer :markdown="$post['content']" />
            </article>
        </div>
    </main>
</x-layout>