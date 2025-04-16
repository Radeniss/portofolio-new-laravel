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
        @foreach ($posts as $post)
            <article class="py-8 max-w-screen-md border-b border-gray-300">
                <h2 class="mb-1 text-3xl tracking-tight font bold text-gray-900">{{ $post['title'] }}</h2>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post['author'] }}</a> | 1 january 2025
                </div>
                <p class="my-4 font-light">{{ $post['body'] }}</p>
                <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
            </article>
        @endforeach
    </div>
</section>
