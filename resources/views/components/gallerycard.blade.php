@props(['datas'])

@foreach ($datas as $data)    
<div class="overflow-hidden h-[260px] lg:w-[361px] lg:h-[460px] group">
    <img class="h-full min-w-full lg:w-auto group-hover:scale-[1.1] transition-all duration-[300] ease-in-out object-cover" 
    src="{{$data['image']}}" alt="Gallery Image">
</div>
@endforeach

