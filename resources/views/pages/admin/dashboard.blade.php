@extends('main')
@section('content')
<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 h-screen flex justify-center items-center">
    <div class="mx-auto max-w-lg">
      <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Get started today</h1>
  
      <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti
        inventore quaerat mollitia?
      </p>
  
      <form action="{{route("upload")}}" method="POST" enctype="multipart/form-data" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
        @csrf
        <p class="text-center text-lg font-medium">Sign in to your account</p>
  
        <input type="file" name="image">
        <button
          type="submit"
          class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
        >
          Sign in
        </button>
  
        <p class="text-center text-sm text-gray-500">
          No account?
          <a class="underline" href="#">Sign up</a>
        </p>
      </form>
    </div>
  </div>
@endsection