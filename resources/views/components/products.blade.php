<div class="lg:py-[157px] lg:px-[157px] flex flex-col items-start lg:items-start py-[40px] px-[40px] gap-5">

    <form action="{{ route('products') }}" method="GET" class="flex flex-wrap gap-2">
        
        <button type="submit" name="category" value="" 
            class="px-2 py-2 text-sm font-medium transition duration-300 ease-in-out text-[10px] lg:text-[14px]
                   {{ request('category') == '' ? 'bg-[#64B100] text-white' : 'bg-gray-100 text-gray-400 hover:bg-gray-200' }}">
            Semua Kategori
        </button>

        @foreach($categories as $cat)
            <button type="submit" name="category" value="{{ $cat }}" 
                class="px-2 py-2 text-sm font-medium transition duration-300 ease-in-out lg:text-[14px] text-[10px] {{ request('category') == $cat ? 'bg-[#64B100] text-white' : 'bg-gray-100 text-gray-400 hover:bg-gray-200 ' }}">
                {{ $cat }}
            </button>
        @endforeach
    </form>

<div class="grid lg:grid-cols-4 grid-cols-2 gap-3 ">
    
    @foreach ($datas as $data)
        <div class="flex">
            <x-card :datas="$data"/>
        </div>
    @endforeach

</div>  
</div>
