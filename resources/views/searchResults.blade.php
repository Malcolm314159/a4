@extends('master')
@section('content')

<h2>Search Results</h2>

@if (count($tunes) == 0)
    <p>No results found. Try "Catharsis" or "Midnight on the Water"!</p>
@else
    <ul>
        @foreach($tunes as $tune)
            @include('tuneMarkup')
        @endforeach
    </ul>
@endif

@endsection
