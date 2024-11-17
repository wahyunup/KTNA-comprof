@props(['datas'])
<div class="h-screen">
    <div>
        <img src="" alt="">
    </div>
    <div>
         <h1 class="font-semibold text-[47px]"></h1>
        <div class="flex">
            <p class="font-bold text-[33px] text-[#6CBE02]">Rp. </p>
            <p class="text-[#6cbe02]"> Stok</p>
            <p class="text-[#6cbe02]">{{$datas->description}}</p>
         </div>
    </div>
</div>
