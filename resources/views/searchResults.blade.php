@extends('master')
@section('content')
<h2>Search Results</h2>
<ul>
    @foreach($tunes as $tune)
        <li>{{ $tune->name }}</li>
    @endforeach
</ul>
@endsection
