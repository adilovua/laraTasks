<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    @foreach ($Countries as $Country)
             <p>
                {{ $Country->name }}
            </p>
            @foreach($Cities[$Country->name] as $city)
                <p>
                    {{$city->city}}
                </p>
            @endforeach
    @endforeach

</x-layout>
