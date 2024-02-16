@foreach ($dessert as $name => $img)
  <div>
    <img src="img/dessert/{{ $img }}" alt="" class="w-[250px] h-[200px]">
    <form action="">
      <label for="checkbox">{{ $name }}</label>
      <input type="checkbox" name="checkbox" id="checkbox">
    </form>
  </div>
@endforeach