@extends('layouts.main')

@section('container')
  <section class="min-h-screen text-center text-white">
    <div class="my-5">
      <p class="text-5xl font-bold ">Will you be my valentine?</p>
    </div>
    <div class="my-5 ">
      <a href="/acc"><button class="bg-red-300 rounded-md px-5 py-2">yes</button></a>
      <a href=""><button class="bg-red-300 rounded-md px-5 py-2" onclick="alert('PENCET TOMBOL YES AKU MAKSA!!!')">I no no wanna o(y__y)o</button></a>
    </div>
    <div class="flex justify-center">
      <img src="img/cat-please.gif" alt="">
    </div>
  </section>
@endsection
