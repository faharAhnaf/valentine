@extends('layouts.main')

@section('container')
  <section class="min-h-screen text-center text-white">
    <div>
      <p class="text-5xl font-bold underline underline-offset-4">What are we doing after?</p>
    </div>
    <div class="flex flex-wrap justify-center my-5 gap-3 ">
      <x-place></x-place>
    </div>
    <a href="/flower"><button name="submit" class="bg-red-300 p-1 rounded-md">Continue UWU</button></a>
  </section>
@endsection
