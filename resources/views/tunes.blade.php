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
                <li>{{$tune->kee}} {{$tune->mode}}</li>
                <li>{{ $tune->type->name }}</li>
                @if ($tune->resource != NULL)
                <li><a href="{{$tune->resource}}" target="_blank">
                    External Resource</a></li>
                @endif
                <li><a href='/delete/{{ $tune->id }}'>Delete</a></li>
            </ul>
        </li>
    @endforeach
</ul>
@endif

@endsection
