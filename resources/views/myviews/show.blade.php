<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    @foreach($users as $user)
            <p>
                {{ $user->name }} {{    $user->surname }}
            </p>
            <p>
                {{ $user->email }}
            </p>
    @endforeach

</x-layout>
