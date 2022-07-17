<x-layout>
	<x-slot:title> {{ $title }} </x-slot>
		<p style="{{ $style }}"> {{ $name }} </p>
		<p> {{ $age }} years old. </p>
		<p> His salary is {{ $salary }}. </p>

		<p><input type="tex" value="{{ $name }}"/></p>
		<p><input type="tex" value="{{ $age }}"/></p>
		<p><input type="tex" value="{{ $salary }}"/></p>
		<p><a href="{{ $href }}"> {{ $text }} </a></p>
</x-layout>

