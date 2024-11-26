@props(['datas'])
<div class="flex py-[157px] px-[130px] gap-[64px] justify-center">
   <div class="w-[500px] h-[600px] overflow-hidden ">
        <img class="object-cover w-full h-full hover:scale-[1.1] transition-all duration-300 ease-in-out" src="https://www.orchid-florist.com/uploads/blog-thumbnail/4abeb627e90b3197345fb2e0f865f982c9ccf965.jpg" alt="">
    </div>
    <div>
         <h1 class="font-semibold text-[47px]"></h1>
        <div>
            <div class="flex items-center gap-[30px]">
                <p class="font-bold text-[33px]">{{$datas['productName']}}</p>
                <div  class="{{$datas['stock'] >= 20 ? 'bg-[#dfffb6]' : 'bg-[#ffcaca]'}} rounded-xl px-[13px] py-[5px]">
                    <p class="{{$datas['stock'] >= 20 ? 'text-[#8cd32e]' : 'text-[#ff8484]' }} font-semibold text-[11px]">{{$datas['stock']}} Stok</p>
                </div>
            </div>
            <p class="font-bold text-[33px] text-[#6CBE02]">Rp. {{$datas['price']}}</p>
            <p>{{$datas['description']}}</p>
         </div>
    </div>
</div>