<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
        <p>Your name is {{$name}}</p>
        <p>You are {{$age}} years old</p>
        <p>Your salary is {{$salary}}</p>
        <p><a href={{url('/form-1')}}>back>></a></p>
</x-layout>
