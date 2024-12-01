@props(['datas'])
<a href="{{ route('products.show', ['slug' => $datas->slug]) }}" class="group h-[450px] w-[394px] relative overflow-hidden">
    <div class="w-full h-full group-hover:scale-[1.1] transition-all duration-300 ease-in-out">
        <img class="object-cover w-full h-full" src="{{$datas->image_url}}" alt="">
    </div>
    <div class="bg-white absolute group-hover:-translate-y-[100%] w-full flex flex-col gap-1 justify-between py-4 items-end px-5 transition-all duration-300 ease-in-out">
        <div class='w-full'>
            <div class="flex justify-between items-center">
                <h2 class="text-[17px] font-medium">{{$datas->productName}} </h2>
                <span class="text-[12px] font-medium text-slate-300">{{$datas['created_at']->diffForHumans()}}</span>
            </div>
        </div>
        <div class="flex justify-between items-center w-full">
            <h2 class="text-[17px] font-bold text-[#6CBE02]">Rp.{{$datas['price']}}</h2>
            <div class="{{$datas['stock'] >= 20 ? 'bg-[#dfffb6]' : 'bg-[#ffcaca]'}} rounded-xl px-[13px] py-[5px]">
                <p class="{{$datas['stock'] >= 20 ? 'text-[#8cd32e]' : 'text-[#ff8484]' }} font-semibold text-[11px]">{{$datas['stock']}} Stok</p>
            </div>
        </div>
    </div>  
</a>