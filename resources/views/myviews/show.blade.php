<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @if(isset($surname) and isset($name))
        Hello {{$surname}} {{$name}}
    @else
        Hello world!!!
    @endif

</x-layout>
