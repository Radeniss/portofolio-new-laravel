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

            {{-- <article class="py-8 max-w-screen-md">
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
            </article> --}}

            <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased">
                <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                    <article
                        class="mx-auto w-full max-w8xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                        <header class="mb-4 lg:mb-6 not-format ">
                            <a class="font-medium text-xs text-blue-900 hover:underline" href="/posts">&laquo; Back to
                                all posts</a>
                            <address class="flex items-center my-6 not-italic">
                                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                    <img class="mr-4 w-16 h-16 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Jese Leos">
                                    <div>
                                        <a href="/posts?author={{ $post->author->username }}" rel=""
                                            class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                        <p class="text-base text-gray-500 dark:text-gray-400">
                                            {{ $post->created_at->diffForHumans() }}</p>
                                        <div>
                                            <span
                                                class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center my-1.5 px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                                <a
                                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </address>
                            <h1
                                class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                {{ $post->title }}</h1>
                        </header>
                        <p class="lead">{{ $post->body }}</p>

                    </article>
                </div>
            </main>
        </div>
    </section>

</x-layout>
