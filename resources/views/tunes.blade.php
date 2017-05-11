@extends('master')
@section('content')

<h2>Tunes</h2>
<a href='tuneNames'>View names only</a>
@if (count($tunes) == 0)
    <p>Database empty</p>
@else
<ul>
    @foreach($tunes as $tune)
        @include('tuneMarkup')
    @endforeach
</ul>
@endif

@endsection
