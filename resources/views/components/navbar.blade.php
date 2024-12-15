<nav class="w-full flex px-4 lg:justify-center sticky top-0  z-[10] lg:sticky lg:top-0 bg-[#6CBE02] lg:bg-transparent py-5 lg:py-0 items-start flex-col lg:flex-row transition-all duration-300 ease-in-out">

    <div class="hidden text-white absolute lg:flex items-center gap-5">
        <div class="flex gap-[53px] bg-[#6CBE02] px-[36px] py-[27px] items-center">
            <a href="{{url('/')}}">Beranda</a>
            <span class="border-[1px] border-[#64B100] h-[19px]"></span>
            <a href="#aboutus" class="{{ Request::is('/') ? '' : 'hidden' }}">Apa itu KTNA?</a>
            <span class="border-[1px] border-[#64B100] h-[19px] {{ Request::is('/') ? '' : 'hidden' }}"></span>
            <a href="/product">Produk</a>
            <span class="border-[1px] border-[#64B100] h-[19px]"></span>
            <a href="/gallery">Galeri</a>
            <span class="border-[1px] border-[#64B100] h-[19px]"></span>
            <a href="/keanggotaan">Keanggotaan</a>
        </div>
    </div>
    
    <button id="menu-toggle" class=" lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
        </button>
        
        <div id="mobile-menu" class="hidden relative flex-col bg-[#6CBE02] text-white w-full top-[100%] left-0">
            <a href="{{url('/')}}" class="block py-2 border-b border-[#64B100]">Beranda</a>
            <a href="#aboutus" class="block py-2 border-b border-[#64B100] {{ Request::is('/') ? '' : 'hidden' }}">Apa itu KTNA?</a>
            <a href="/product" class="block py-2 border-b border-[#64B100]">Produk</a>
            <a href="/gallery" class="block py-2 border-b border-[#64B100]">Galeri</a>
            <a href="/keanggotaan" class="block py-2">Keanggotaan</a>
        </div>
    </nav>
    <div id="overlay" class="inset-0 fixed h-screen -z-[-1] hidden"></div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('overlay');
            mobileMenu.classList.toggle('hidden');
            overlay.classList.toggle('hidden');
        });

        document.getElementById('overlay').addEventListener('click', function(){
            overlayClick = document.getElementById('overlay')
            const mobileMenu = document.getElementById('mobile-menu');
            overlayClick.classList.toggle('hidden')
            mobileMenu.classList.toggle('hidden')
        })

       
    </script>