<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <form action="/result" method="GET">
      <label for="number_1">1-number: </label><input type="number" value="" name="number_1"><br>
      <label for="number_2">2-number: </label><input type="number" value="" name="number_2"><br>
      <label for="number_3">3-number: </label><input type="number" value="" name="number_13"><br>
        <input type="submit" value="Ok">
    </form>

</x-layout>
