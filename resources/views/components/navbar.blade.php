<nav class="w-full flex justify-center z-[2] sticky top-0 bg-[#6CBE02] lg:bg-transparent py-5 lg:py-0">

    <div class="hidden text-white absolute lg:flex items-center gap-5">
        <div class="flex gap-[53px] bg-[#6CBE02] px-[36px] py-[27px] items-center">
            <a href="{{url('/')}}">Beranda</a>
            <span class="border-[1px] border-[#64B100] h-[19px]"></span>
            <a href="/apaituktna">Apa itu KTNA?</a>
            <span class="border-[1px] border-[#64B100] h-[19px]"></span>
            <a href="/product">Produk</a>
            <span class="border-[1px] border-[#64B100] h-[19px]"></span>
            <a href="/galeri">Galeri</a>
            <span class="border-[1px] border-[#64B100] h-[19px]"></span>
            <a href="/keanggotaan">Keanggotaan</a>
        </div>
    </div>

    <button id="menu-toggle" class="block lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <div id="mobile-menu" class="hidden flex-col bg-[#6CBE02] text-white w-full absolute top-[100%] left-0">
        <a href="{{url('/')}}" class="block px-4 py-2 border-b border-[#64B100]">Beranda</a>
        <a href="/apaituktna" class="block px-4 py-2 border-b border-[#64B100]">Apa itu KTNA?</a>
        <a href="/product" class="block px-4 py-2 border-b border-[#64B100]">Produk</a>
        <a href="/galeri" class="block px-4 py-2 border-b border-[#64B100]">Galeri</a>
        <a href="/keanggotaan" class="block px-4 py-2">Keanggotaan</a>
    </div>

</nav>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>