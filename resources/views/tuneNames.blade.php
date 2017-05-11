@extends('master')
@section('content')

<h2>Tunes</h2>
<a href='tunes'>View full info</a>
@if (count($tunes) == 0)
    <p>Database empty</p>
@else
<ul>
    @foreach($tunes as $tune)
        <li>{{ $tune->name }}</li>
    @endforeach
</ul>
@endif

@endsection
