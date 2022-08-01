<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <div class="container align-items-center" style="height:100vh;">
    <div class="mb-3 myform">
    <form action="/result" method="GET">
      <label for="number_1">1-number: </label><input type="number" value="" name="number_1" class="form-control form-control-lg"><br>
      <label for="number_2">2-number: </label><input type="number" value="" name="number_2" class="form-control form-control-lg"><br>
      <label for="number_3">3-number: </label><input type="number" value="" name="number_3" class="form-control form-control-lg"><br>
        <input type="submit" value="Ok" class="btn btn-primary mb-3">
    </form>
    </div>
    </div>

</x-layout>
