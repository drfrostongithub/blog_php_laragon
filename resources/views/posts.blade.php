<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <fieldset class="mb-4">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                    <legend>
                        <h2 class="mb-1 text-2xl tracking-tight font-bold">{{ $post['title'] }}</h2>
                    </legend>
                </a>
                <div class="text-base text-gray-500">
                    <a href="/">{{ $post['author'] }}</a>
                    <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
                </div>
                <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:bold">Read More &raquo;</a>
            </fieldset>
        </article>
    @endforeach
</x-layout>
