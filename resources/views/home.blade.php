<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Portofolio Laravel</title>
</head>

<body>

    {{-- hero section start --}}

    <section id="home" class="pt-36 ml-0">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">
                        Hallo semua 🖐, saya
                        <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">
                            <h1>
                                mahelbee
                            </h1>
                        </span>
                    </h1>
                    <h2 class="font-medium text-slate-500 text-large lg:text-2xl mb-5">student & santri pondok</h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed">
                        belajar web prigraming mudah dan menyenangkan bukan.
                        <span class="text-dark font-semibold">
                            bukan!
                        </span>
                    </p>
                    <a href=""
                        class="text-base font-semibold text-white
                    bg-primary py-3 px-8 rounded-full hover:shadow-lg
                    hover:opacity-90 transition duration-300 ease-in-out">Hubungi
                        saya</a>
                </div>

                {{-- sebelah kiri cuy --}}
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="img/mahel.png" alt="mahelbee" class="max-w-full mx-auto ">
                        <span
                            class="absolute -bottom-20 -z-10 left-1/2 -translate-x-1/2 md:scale-150 md:ml-10 md:bottom-2">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#0284c7"
                                    d="M55.1,-20.7C60.7,-0.7,47.1,22.8,30.8,32.3C14.5,41.8,-4.7,37.3,-25.6,24.6C-46.5,11.9,-69.2,-9,-65.2,-26.8C-61.2,-44.6,-30.6,-59.3,-2.9,-58.4C24.7,-57.4,49.5,-40.8,55.1,-20.7Z"
                                    transform="translate(100 100) scale(1.2)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- hero section end --}}

    {{-- About me section start --}}
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10">
                    <h4>About Me</h4>
                    <h2>
                        Learn, understand, and grow according to your interests
                    </h2>
                    <p>
                        Seeking knowledge is an obligation for every Muslim. That is why I always have a strong desire
                        and thirst for knowledge. However, above all the knowledge I acquire, I always prioritize having
                        good character
                    </p>
                </div>

            </div>
        </div>

    </section>








    {{-- About me section end  --}}
</body>

</html>