@extends('master')
@section('content')

<h2>Tunes</h2>
<div class="btn-group-vertical">
    <a href="/tunes" class="btn btn-default">All</a>
    <a href="/tunes/key/A" class="btn btn-default">Key: A</a>
    <a href="/tunes/key/D" class="btn btn-default">Key: D</a>
    <a href="/tunes/key/G" class="btn btn-default">Key: G</a>
    <a href="/tunes/key/E" class="btn btn-default">Key: E</a>
    <a href="/tunes/mode/Major" class="btn btn-default">Mode: Major</a>
    <a href="/tunes/mode/Minor" class="btn btn-default">Mode: Minor</a>
    <a href="/tunes/mode/Dorian" class="btn btn-default">Mode: Dorian</a>
    <a href="/tunes/mode/Mixolydian" class="btn btn-default">Mode: Mixolydian</a>
</div>
<div class='tunes'>
@if (count($tunes) == 0)
    <p>No tunes.</p>
</div>
@else
<ul>
    @foreach($tunes as $tune)
        @include('tuneMarkup')
    @endforeach
</ul>
</div>
@endif

@endsection
