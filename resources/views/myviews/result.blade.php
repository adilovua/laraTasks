<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
        <p>The result is {{$result}}</p>
        <p><a href={{url('/form')}}>back>></a></p>
</x-layout>
