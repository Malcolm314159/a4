@extends('master')
@section('content')

<h2>Tunes</h2>

@if (count($tunes) == 0)
    <p>Database empty</p>
@else
<ul>
    @foreach($tunes as $tune)
        <li class="list-group-item">
            <ul class='tune'>
                <li class='name'>{{ $tune->name }}</li>
                <li>{{ $tune->type_id }}</li>
                <li>{{$tune->key}} {{$tune->mode}}</li>
            </ul>
        </li>
    @endforeach
</ul>
@endif

@endsection
