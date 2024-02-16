@extends('layouts.main')

@section('container')
  <section class="min-h-screen text-center text-white">
    <div class="my-5">
      <p class="text-5xl font-bold">Are you free on . . .</p>
      <p class="my-5">(select a date)</p>
    </div>
    <form action="" method="get">
      <div class="grid justify-center">
        <div class="my-5">
          <label for="date" class="text-xl">Which Day : </label>
          <input type="date" name="date" id="date" class="bg-red-300 rounded-md text-white p-1">
        </div>
      </div>
    </form>
    <a href="/food"><button name="submit" class="bg-red-300 text-white p-1 rounded-md">submit</button></a>
  </section>
@endsection
