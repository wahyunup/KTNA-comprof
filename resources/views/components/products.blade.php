<?php
$products = collect([
    [
    'nama' => 'wahyu',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],
    [
    'nama' => 'nur',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],
    [
    'nama' => 'pambuko',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],   
    [
    'nama' => 'Raihan',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],   
    [
    'nama' => 'ilyasah',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],   
    [
    'nama' => 'dendy',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],   
    [
    'nama' => 'syahrul',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],   
    [
    'nama' => 'kamil',
    'gambar' => 'https://akcdn.detik.net.id/visual/2020/09/08/tanaman-hias-sirih-gading_43.jpeg?w=720&q=90',
    ],   
    ])
?>

<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 py-[157px] px-[130px] z-40 ">
@foreach ($products as $product) 
<x-card
:src="$product['gambar']" 
nama="{{$product['nama']}}">
</x-card>
@endforeach
{{-- kalo pake map gabisa ngeloop, gembel --}}

{{-- {!! $products->map(fn($product) => 
    " <x-card class='-z-10'> 
    {$product['nama']} 
    </x-card> "
    )->implode('') !!} --}}
</div>