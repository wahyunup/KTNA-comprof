@extends('main')
@section('content')
<div class="h-screen">
    <x-products :datas="$products" :categories="$categories"/>
</div>
@endsection