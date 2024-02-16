@extends('layouts.main')

@section('container')
  <section class="min-h-screen text-center text-white">
    <div>
      <p class="text-5xl font-bold underline underline-offset-4">Which dessert we eatin cuh</p>
    </div>
    <div class="flex flex-wrap justify-center my-5 gap-3 ">
      <x-dessert></x-dessert>
    </div>
    <a href="/place"><button name="submit" class="bg-red-300 p-1 rounded-md">Continue UWU</button></a>
  </section>
@endsection
