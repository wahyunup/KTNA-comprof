<div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-3 flex-wrap py-[157px] px-[157px]">
@foreach ($datas as $data)
<div class="flex">
    <x-card :datas="$data"/>
</div>
@endforeach
</div>  
