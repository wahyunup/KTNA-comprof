@props(['datas'])
<div class="flex flex-col lg:flex-row lg:py-[157px] pb-20 lg:px-[130px] gap-[64px] justify-center">
   <div class="lg:w-[500px] lg:h-[600px] overflow-hidden h-[500px] w-[100vw]">
        <img class="object-cover w-full h-full hover:scale-[1.1] transition-all duration-300 ease-in-out" src="{{$datas->image_url}}" alt="">
    </div>

    <div class="lg:w-[600px] flex flex-col gap-[10px] px-10">
        <p class="font-bold text-[33px]">{{$datas['productName']}}</p>

            <div class=" flex flex-col gap-[40px]">
                <div class="flex items-center justify-between gap-[30px]">
                    <p class="font-bold text-[33px] text-[#6CBE02]">Rp. {{$datas['price']}}</p>
                    <div  class="{{$datas['stock'] >= 20 ? 'bg-[#dfffb6]' : 'bg-[#ffcaca]'}} rounded-xl px-[13px] py-[5px]">
                        <p class="{{$datas['stock'] >= 20 ? 'text-[#8cd32e]' : 'text-[#ff8484]' }} font-semibold text-[11px]">{{$datas['stock']}} Stok</p>
                    </div>
                </div>
                <p class="text-wrap text-justify">{{$datas['description']}}</p>
            </div>
            
    </div>

</div>