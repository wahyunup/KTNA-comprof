@extends('main')
@section('content')
<div class="h-[2000px]">
    <x-products :datas="$products" :categories="$categories"/>
</div>
@endsection