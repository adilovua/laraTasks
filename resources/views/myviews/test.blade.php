<x-layout>
	<x-slot:title> {{ $title }} </x-slot>
		<p style="{{ $style }}"> {{ $name }} </p>
		<p> {!! $age !!}  years old. </p>
		<p> His salary is {{ $salary }}. </p>
		{{--This is comment--}}
		<p><input type="text" value="{{ $name }}"/></p>
		<p><input type="text" value="{{ $age }}"/></p>
		<p><input type="text" value="{{ $salary }}"/></p>
		<p><a href="{{ $href }}"> {{ $text }} </a></p>

		<p>current date is: {{ date('d-M-Y') }} </p>

		<h1>Array tools:</h1>
		<h2> data below are taken from array "Person"</h2>
		<p>{{ $person['name'] }}</p>
		<p>{{ $person['age'] }}</p>
		<p>{{ $person['salary'] }}</p>

		<p>{{ count($person) }}</p>

</x-layout>

