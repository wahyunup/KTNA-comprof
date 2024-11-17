<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 py-[157px] px-[130px] z-40 ">
@foreach ($datas as $data)
<x-card :datas="$data"/>
@endforeach
</div>  
