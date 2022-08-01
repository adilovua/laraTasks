<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <div class="container align-items-center" style="height:100vh;">
    <div class="mb-3 myform">
    <form action="/result-1" method="POST">
        @csrf
      <label for="name">Name: </label><input type="text" value="" name="name" class="form-control form-control-lg"><br>
      <label for="age">Age: </label><input type="number" value="" name="age" class="form-control form-control-lg"><br>
      <label for="salary">Salary: </label><input type="number" value="" name="salary" class="form-control form-control-lg"><br>
        <input type="submit" value="Ok" class="btn btn-primary mb-3">
    </form>
    </div>
    </div>

</x-layout>
