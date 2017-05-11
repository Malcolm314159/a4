@extends('master')
@section('content')

<h2>Tunes</h2>
@if (count($tunes) == 0)
    <p>Database empty</p>
@else
<a href='tunes'>Expand</a>
<ul>
    @foreach($tunes as $tune)
        <li>{{ $tune->name }}</li>
    @endforeach
</ul>
@endif

@endsection
