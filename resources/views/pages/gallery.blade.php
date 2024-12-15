
@extends('main')
@section('content')
<div class="flex justify-center py-7 lg:py-44">
<div class=" gap-3 px-5 grid grid-cols-2 lg:grid-cols-4">
    <x-gallerycard :datas="$gallerys"/>
</div>

</div>

@endsection