@props(['posts'])

<section class="bg-slate-100 pt-5 pb-2" id="posts">
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-5">
            <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
            <p class="font-medium text-md text-secondary md:text-lg">
                "Perfection isn't a requirement to start. Learn, act, reflect, and use each mistake as a step toward
                improvement."
            </p>
        </div>
    </div>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-5 lg:px-0">
        <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
            @forelse ($posts as $post)
                {{-- CARD POST --}}
                <article class="p-6 bg-white rounded-lg border shadow-md">
                    {{-- CATEGORY & DATE --}}
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/posts?category={{ $post->category->slug }}">
                            <span class="text-xs px-2 py-1 rounded bg-gray-200 text-gray-800">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>

                    {{-- TITLE --}}
                    <h2 class="mb-2 text-2xl font-bold hover:underline">
                        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                    </h2>

                    {{-- EXCERPT --}}
                    <p class="mb-5 text-gray-500">{{ Str::limit($post->body, 150) }}</p>

                    {{-- AUTHOR + LINK --}}
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}"
                                class="w-7 h-7 rounded-full" />
                            <a href="/posts?author={{ $post->author->username }}">
                                <span class="text-sm">{{ $post->author->name }}</span>
                            </a>
                        </div>
                        <a href="/posts/{{ $post->slug }}" class="text-blue-600 hover:underline text-sm">Read more</a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center">
                    <p class="text-xl font-semibold text-gray-500">Tidak ada postingan ditemukan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
