<div class="py-[157px] px-[157px] flex flex-col gap-5">

    <form action="{{ route('products') }}" method="GET" class="flex flex-wrap gap-2">
        
        <button type="submit" name="category" value="" 
            class="px-4 py-2 text-sm font-medium transition duration-300 ease-in-out 
                   {{ request('category') == '' ? 'bg-[#64B100] text-white' : 'bg-gray-100 text-gray-400 hover:bg-gray-200' }}">
            Semua Kategori
        </button>

        @foreach($categories as $cat)
            <button type="submit" name="category" value="{{ $cat }}" 
                class="px-4 py-2 text-sm font-medium transition duration-300 ease-in-out {{ request('category') == $cat ? 'bg-[#64B100] text-white' : 'bg-gray-100 text-gray-400 hover:bg-gray-200 ' }}">
                {{ $cat }}
            </button>
        @endforeach
    </form>

<div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-3 flex-wrap ">
    
    @foreach ($datas as $data)
        <div class="flex">
            <x-card :datas="$data"/>
        </div>
    @endforeach

</div>  
</div>
