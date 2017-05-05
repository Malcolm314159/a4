@extends('master')
@section('content')

<h2>Search Results</h2>

@if (count($tunes) == 0)
    <p>No results found</p>
@else    
    <ul>
        @foreach($tunes as $tune)
            <li>{{ $tune->name }}</li>
        @endforeach
    </ul>
@endif

@endsection
