<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <fieldset class="mb-4">
            <legend>
                <h2 class="mb-1 text-2xl tracking-tight font-bold">{{ $post['title'] }}</h2>
            </legend>
            <div class="text-base text-gray-500">
                <a href="/">{{ $post['author'] }}</a>
                <p class="my-4 font-light">{{ $post['body'] }}</p>
            </div>
            <a href="/posts" class="font-medium text-blue-500 hover:bold">Back to post &laquo;</a>
        </fieldset>
    </article>
</x-layout>
