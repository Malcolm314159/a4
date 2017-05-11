@extends('master')
@section('content')

<!--The Home Page-->

<h3>Hello! Welcome to Tune Assembly.</h3>
<p>This app is for musicians who want help remembering
    what tunes they know, what types of tunes they are, and what
    keys they are in. You start with an empty tune library,
    you add all the tunes you can remember, then you keep adding
    tunes as you learn more! After a while, you'll have a handy,
    searchable library that you can reference when trying to
    create new sets, program a performance, or remind yourself
    of some old tunes that may need practice!
</p>
<p>The app is inspired by my experience as an amateur
    fiddle player. A few times per year I play for dancing at
    Longfellow's Wayside Inn. I like going to Maine Fiddle Camp,
    and I occasionally go to the Irish sessions at the Green Briar
    in Brighton. After many years of learning
    a few tunes per year, I decided that I need a better way to recall
    what tunes I know!
</p>

@if ($featuredTune != NULL)
<h3 class="featured">Featured Tune (random)</h3>
<ul class='tune'>
    <li class='name'>{{ $featuredTune->name }}</li>
    <li>{{$featuredTune->kee}} {{$featuredTune->mode}}</li>

    @if (count($featuredTune->types) > 0)
    <li>
    @foreach ($featuredTune->types as $type)
    {{ $type->name }}
    @endforeach
    </li>
    @endif

    @if ($featuredTune->resource != NULL)
    <li><a href="{{$featuredTune->resource}}" target="_blank">
        External Resource</a></li>
    @endif
</ul>
@endif
@endsection
