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

    {{-- header section  start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">mahelbee</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absoluter right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">About
                                    me</a>
                            </li>
                            <li class="group">
                                <a href="#portofolio"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                            </li>
                            </li>
                            <li class="group">
                                <a href="#certificate"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Certificate</a>
                            </li>
                            <li class="group">
                                <a href="#blog"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#clients"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    {{-- header section end --}}

    {{-- hero section start --}}
    <section id="home" class="pt-36 ml-0">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">
                        Hallo semua 🖐, saya
                        <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">
                            <h1>mahelbee</h1>
                        </span>
                    </h1>
                    <h2 class="font-medium text-secondary text-large lg:text-2xl mb-5">student & santri pondok</h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed">
                        belajar web prigraming mudah dan menyenangkan bukan.
                        <span class="text-dark font-semibold">bukan!</span>
                    </p>
                    <a href=""
                        class="text-base font-semibold text-white
                    bg-primary py-3 px-8 rounded-full hover:shadow-lg
                    hover:opacity-90 transition duration-300 ease-in-out">
                        Hubungi saya
                    </a>
                </div>

                {{-- sebelah kiri cuy --}}
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="img/toya.png" alt="mahelbee" class="max-w-full mx-auto ">
                        <span
                            class="absolute -bottom-20 -z-10 left-1/2 -translate-x-1/2 md:scale-150 md:ml-10 md:bottom-2 lg:-right-48">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#0891b2"
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
    <section id="about" class="pt-36 pb-32 ">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="block font-bold text-primary uppercase mb-3">About Me</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">
                        Learn, understand, and grow
                    </h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">
                        Seeking knowledge is an obligation for every Muslim. That is why I always have a strong desire
                        and thirst for knowledge. However, above all the knowledge I acquire, I always prioritize having
                        good character
                    </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-3xl max-w-md mb-4 lg:text-3xl lg:pt-10">Let's be friends
                    </h3>
                    <p class="font-medium text-secondary text-base max-w-xl mb-6 lg:text-lg">
                        We might share the same hobbies and grow together. Building relationships is important while
                        young. Be a knowledgeable and wise youth
                    </p>
                    <div class="flex items-center">
                        {{-- instagram --}}
                        <a href="https://www.instagram.com/donatz.021_" target="blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary text-slate-300 hover:text-white">
                            <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="fill-current">
                                <title>Instagram</title>
                                <path
                                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                            </svg>
                        </a>

                        {{-- facebook --}}
                        <a href="https://www.facebook.com/profile.php?id=100013222929598" target="blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border  border-slate-300 hover:border-primary hover:bg-primary text-slate-300 hover:text-white">
                            <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="fill-current">
                                <title>Facebook</title>
                                <path
                                    d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                            </svg>
                        </a>

                        {{-- discord --}}
                        <a href="https://discord.com/channels/manggarox8818" target="blank"
                            class="h-9 w-9 mr-3 rounded-full flex justify-center items-center border  border-slate-300 hover:border-primary hover:bg-primary text-slate-300 hover:text-white">
                            <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="fill-current">
                                <title>Discord</title>
                                <path
                                    d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z" />
                            </svg>
                        </a>

                        {{-- twitter --}}
                        <a href="https://x.com/izi0001" target="blank"
                            class="h-9 w-9 mr-3 rounded-full flex justify-center items-center border  border-slate-300 hover:border-primary hover:bg-primary text-slate-300 hover:text-white">
                            <svg role="img" width="20" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <title>X</title>
                                <path
                                    d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
                            </svg>
                        </a>

                        {{-- telegram --}}
                        <a href="" target="blank"
                            class="h-9 w-9 mr-3 rounded-full flex justify-center items-center border  border-slate-300 hover:border-primary hover:bg-primary text-slate-300 hover:text-white">
                            <svg role="img" width="20" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <title>Telegram</title>
                                <path
                                    d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About me section end  --}}

    {{-- portfolio section start --}}
    <section id="portofolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Magni rerum maxime alias natus delectus
                        dolorum consequuntur inventore esse nisi ratione eaque adipisci explicabo et animi aliquam,
                        asperiores deserunt ex non?
                    </p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/1.png" alt="blog laravel" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">my blog</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nemo
                        molestias recusandae amet?</p>
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/2.png" alt="puskesmas" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">SIMPUS</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nemo
                        molestias recusandae amet?</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/3.png" alt="pppm" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">PPPM Baitul Izzah Aziziah</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nemo
                        molestias recusandae amet?</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/4.png" alt="iklan kopi gayo" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Gayo Coffee</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nemo
                        molestias recusandae amet?</p>
                </div>
            </div>
        </div>

    </section>
    {{-- portfolio section end --}}

    {{-- cetificate section start --}}
    <section id="certificate" class="bg-blueb">
        <div class="pt-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f1f5f9" fill-opacity="1"
                    d="M0,192L26.7,208C53.3,224,107,256,160,229.3C213.3,203,267,117,320,112C373.3,107,427,181,480,208C533.3,235,587,213,640,181.3C693.3,149,747,107,800,101.3C853.3,96,907,128,960,165.3C1013.3,203,1067,245,1120,224C1173.3,203,1227,117,1280,80C1333.3,43,1387,53,1413,58.7L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
                </path>
            </svg>
        </div>

        <div class="container">
            <div class="w-full px-4">
                <div class=" mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 ">Certificate</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">I got several certificates
                    </h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Dolore ad corrupti quidem.
                    </p>
                </div>
            </div>

            <div class="w-full px-10">
                <div class=" flex flex-wrap items-center justify-center ">
                    <a href="#" class="mb-10 p-2 md:w-1/2 md:-px-10">
                        <img class="max-w-[350px] mx-auto rounded-md overflow-hidden shadow-md" src="img/1.png"
                            alt="">
                        <div>
                            <h3 class="font-semibold text-xl text-dark mt-3">w3 school certificate</h3>
                        </div>
                    </a>
                    <a href="#" class="mb-10 p-2 md:w-1/2 md:px-10">
                        <img class="max-w-[350px] mx-auto rounded-md overflow-hidden shadow-md mb-10" src="img/1.png"
                            alt="">
                    </a>
                    <a href="#" class="mb-10 p-2 md:w-1/2 md:-px-10">
                        <img class="max-w-[350px] mx-auto rounded-md overflow-hidden shadow-md mb-10" src="img/1.png"
                            alt="">
                    </a>
                    <a href="#" class="mb-10 p-2 md:w-1/2 md:px-10">
                        <img class="max-w-[350px] mx-auto rounded-md overflow-hidden shadow-md mb-10" src="img/1.png"
                            alt="">
                    </a>
                    <a href="#" class="mb-10 p-2 md:w-1/2 md:-px-10">
                        <img class="max-w-[350px] mx-auto rounded-md overflow-hidden shadow-md mb-10" src="img/1.png"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- certificate section end --}}

    {{-- clients section start --}}
    <div id="section" class="bg-slate-700">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#D9EAFD" fill-opacity="1"
                    d="
                    M0,192L26.7,208C53.3,224,107,256,160,229.3C213.3,203,267,117,320,112C373.3,107,427,181,480,208C533.3,235,587,213,640,181.3C693.3,149,747,107,800,101.3C853.3,96,907,128,960,165.3C1013.3,203,1067,245,1120,224C1173.3,203,1227,117,1280,80C1333.3,43,1387,53,1413,58.7L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
                </path>
            </svg>
        </div>
        <div class="container">
            <div class="w-full px-4">
                <div class=" mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">I have worked with</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Dolore ad corrupti quidem.
                    </p>
                </div>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#"
                        class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/google.png" alt="google">
                    </a>
                    <a href="#"
                        class="max-w-[120px] mx-4 py-4 opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/netflix.png" alt="netflix">
                    </a>
                    <a href="#"
                        class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/gojek.svg" alt="gojek">
                    </a>
                    <a href="#"
                        class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="img/clients/dana.png" alt="dana">
                    </a>
                </div>
            </div>
        </div>
        <div class="rotate-180 -mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f1f5f9"
                    d="
                    M0,192L26.7,208C53.3,224,107,256,160,229.3C213.3,203,267,117,320,112C373.3,107,427,181,480,208C533.3,235,587,213,640,181.3C693.3,149,747,107,800,101.3C853.3,96,907,128,960,165.3C1013.3,203,1067,245,1120,224C1173.3,203,1227,117,1280,80C1333.3,43,1387,53,1413,58.7L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
                </path>
            </svg>
        </div>
    </div>
    {{-- clients section end --}}

    {{-- blog section start? --}}
    <section id="blog" class="pt-20  pb-32 bg-slate-100">
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
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="img/blog/unsplash1.png" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Seeing
                                    Grandpa's Car</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Animi, perspiciatis.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary rounded-md shadow-lg py-2 px-4 hover:opacity-80">baca
                                selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="img/blog/unsplash1.png" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Activities
                                    On Campus</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Corrupti unde exercitationem labore aliquid, ex facilis esse minima
                                adipisci facere repudiandae?</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary rounded-md shadow-lg py-2 px-4 hover:opacity-80">baca
                                selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="img/blog/unsplash1.png" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Developing
                                    AI</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-4">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Nisi libero voluptates esse dolor ratione voluptatum?</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary rounded-md shadow-lg py-2 px-4 hover:opacity-80">baca
                                selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- blog section end --}}

    {{-- contact section start --}}
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Us</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Expedita sit cum optio accusantium minima nihil sunt, magnam sequi.
                    </p>
                </div>
            </div>

            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama</label>
                        <input type="text" name="" id="name"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">Email</label>
                        <input type="text" name="" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base font-bold text-primary">Message</label>
                        <textarea type="text" email="" id="message"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"> </textarea>
                    </div>
                    <div class="w-full px-4">
                        <button
                            class="text-base font-semibold text-white  bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- contact section end --}}

    {{-- footer start --}}
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-warp">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">bee studio</h2>
                    <h3 class="font-bold text-2xl mb-2">Contact Us</h3>
                    <p>radenis3354@gmail.com</p>
                    <p>Jl. Bukit Indah, kampus Universitas Malikussaleh</p>
                    <p>Lhokseumawe</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class=" inline-block text-base hover:text-primary mb-3">Programming</a>
                        </li>
                        <li>
                            <a href="#" class=" inline-block text-base hover:text-primary mb-3">Teknologi</a>
                        </li>
                        <li>
                            <a href="#" class=" inline-block text-base hover:text-primary mb-3">Gaya Hidup</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class=" inline-block text-base hover:text-primary mb-3">Home</a>
                        </li>
                        <li>
                            <a href="about" class=" inline-block text-base hover:text-primary mb-3">About Me</a>
                        </li>
                        <li>
                            <a href="portfolio" class=" inline-block text-base hover:text-primary mb-3">Portfolio</a>
                        </li>
                        <li>
                            <a href="project" class=" inline-block text-base hover:text-primary mb-3">Project</a>
                        </li>
                        <li>
                            <a href="certificate" class=" inline-block text-base hover:text-primary mb-3">Sertificate</a>
                        </li>
                        <li>
                            <a href="clients" class=" inline-block text-base hover:text-primary mb-3">Clients</a>
                        </li>
                        <li>
                            <a href="blog" class=" inline-block text-base hover:text-primary mb-3">Blog</a>
                        </li>
                        <li>
                            <a href="contact" class=" inline-block text-base hover:text-primary mb-3">Contact Us</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{-- footer end --}}



    <script src="js/script.js"></script>
</body>

</html>
