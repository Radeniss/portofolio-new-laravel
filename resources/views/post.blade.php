<x-layout>

    <section id="posts" class="pt-20  pb-32 bg-slate-100">
        <div class="container">

            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Cumque odit minima sint dolores.
                    </p>
                </div>
            </div>

            <article class="py-8 max-w-screen-md">
                <h2 class="mb-1 text-3xl tracking-tight font bold text-gray-900">{{ $post['title'] }}</h2>
                <div>By
                    <a href="/authors/{{ $post->author->username }}"
                        class="text-base text-gray-500 hover:underline">{{ $post['author']['name'] }}</a>
                    in
                    <a href="/categories/{{ $post->category->slug }}"
                        class="text-base text-gray-500 hover:underline">{{ $post->category->name }}</a>
                    |
                    {{ $post->created_at->diffForHumans() }}

                </div>
                <p class="my-4 font-light">{{ $post['body'] }}</p>
                <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to
                    posts
                </a>
            </article>
        </div>
    </section>

</x-layout>
