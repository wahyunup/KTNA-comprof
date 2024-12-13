<nav class="w-full flex px-4 lg:justify-center sticky top-0  z-[2] lg:sticky lg:top-0 bg-[#6CBE02] lg:bg-transparent py-5 lg:py-0">

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

    <button id="menu-toggle" class=" lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
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