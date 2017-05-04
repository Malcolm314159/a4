@extends('master')
@section('content')
<h2>Tunes</h2>
<ul>
    <li class="list-group-item">
        <ul class="tune">
            <li class="name">Seven Stars</li>
            <li>Jig</li>
            <li>D Major</li>
        </ul>
    </li>
    <li class="list-group-item">
        <ul class="tune">
            <li class="name">Frank's Reel</li>
            <li>Reel</li>
            <li>A Major</li>
        </ul>
    </li>
    <li class="list-group-item">
        <ul class="tune">
            <li class="name">Midnight on the Water</li>
            <li>Waltz</li>
            <li>D Major</li>
        </ul>
    </li>
</ul>
<h2>Tunes from the database!</h2>
<ul>
    @foreach($tunes as $tune)
        <li>{{ $tune->name }}</li>
    @endforeach
</ul>
@endsection
