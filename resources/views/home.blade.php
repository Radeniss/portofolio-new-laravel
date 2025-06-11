<x-layout>
    @vite ('resources/css/app.css', 'resources/js/app.js')
    {{-- home section start --}}
    <x-home></x-home>
    {{-- home section end --}}

    {{-- About me section start --}}
    <x-about></x-about>
    {{-- About me section end  --}}

    {{-- portfolio section start --}}
    <x-projects></x-projects>
    {{-- portfolio section end --}}

    {{-- cetificate section start --}}
    <x-certificate></x-certificate>
    {{-- certificate section end --}}

    {{-- clients section start --}}
    <x-clients></x-clients>
    {{-- clients section end --}}

    {{-- blog section start --}}
    <x-blog></x-blog>
    {{-- blog section end --}}

    {{-- contact section start --}}
    <x-contact></x-contact>
    {{-- contact section end --}}

</x-layout>
