<x-layout>
	<x-slot:title> {{ $title }} </x-slot>
		<p style="{{ $style }}"> {{ $name }} </p>
		<p> {{ $age }} years old. </p>
		<p> His salary is {{ $salary }}. </p>
</x-layout>

