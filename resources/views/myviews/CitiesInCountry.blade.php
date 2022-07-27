<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    @foreach($Cities as $City)
            <p>
                {{ $City->city }}
            </p>
    @endforeach

</x-layout>
