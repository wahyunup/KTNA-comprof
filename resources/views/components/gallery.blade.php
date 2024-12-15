@php
    $gallerys = [
           ['image' => asset('images/gallery/1.jpg')],
           ['image' => asset('images/gallery/2.jpg')],
           ['image' => asset('images/gallery/3.jpg')],
           ['image' => asset('images/gallery/4.jpg')],
       ];
@endphp
<div class="bg-[#282828] py-12 flex justify-center" >  

<div class=" flex flex-col items-center gap-5 lg:gap-10 w-fit p-4">
    <div class="grid grid-cols-2 lg:grid-cols-4 lg:w-full justify-center gap-[13px] lg:gap-[37px]"> 
        @foreach ($gallerys as $gallery)    
            <div class="overflow-hidden lg:w-[361px] lg:h-[460px] w-[100] h-[250px]  group">
                <img class="w-full h-full object-cover lg:w-auto group-hover:scale-[1.1] transition-all duration-[300] ease-in-out" data-aos="fade-up" data-aos-duration="1000" 
                src="{{$gallery['image']}}" alt="Gallery Image">
            </div>
        @endforeach
    </div>
    <a data-aos="fade-up" data-aos-duration="1000" href="/gallery" class="bg-[#6CBE02] hover:bg-green-600 text-white font-semibold py-2 px-4 self-end text-[13px]">
    SEE MORE
    </a>
</div>
</div> 