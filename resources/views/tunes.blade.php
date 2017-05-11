@extends('master')
@section('content')

<h2>Tunes</h2>
@if (count($tunes) == 0)
    <p>Database empty</p>
@else
<a href='tuneNames'>Collapse</a>
<ul>
    @foreach($tunes as $tune)
        @include('tuneMarkup')
    @endforeach
</ul>
@endif

@endsection
