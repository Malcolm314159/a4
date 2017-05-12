<li class="list-group-item">
    <ul class='tune'>
        <li class='name'>{{ $tune->name }}</li>
        <li>{{$tune->kee}} {{$tune->mode}}</li>

        @if (count($tune->types) > 0)
        <li>
        @foreach ($tune->types as $type)
        {{ $type->name }}
        @endforeach
        </li>
        @endif

        @if ($tune->resource != NULL)
        <li><a href="{{$tune->resource}}" target="_blank">
            External Resource</a></li>
        @endif
        <li><a href='/edit/{{ $tune->id }}'>Edit</a></li>
        <li><a href='/delete/{{ $tune->id }}'>Delete</a></li>
    </ul>
</li>
