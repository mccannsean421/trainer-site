<x-layout>
    <section class="mx-auto my-12 max-w-screen-lg">
        <h1 class="text-5xl text-center mb-12">Natasha's Blog</h1>

        <ul class="grid grid-cols-3 gap-5">
            @foreach($posts as $post)
            <li>
                <a href="/blog/{{$post['id']}}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h2 class="text-3xl">{{$post['title']}}</h2>
                    <p>{{$post['meta_description']}}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </section>
</x-layout>