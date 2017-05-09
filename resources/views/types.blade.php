@extends('master')
@section('content')
<form class="form-horizontal well bs-component" method='post' action='/processNewType'>
    <fieldset>
        <legend>Types</legend>
        @if (count($types) == 0)
        <p>Create your first song type using the form below.
            These types will be an important classification system
            for your tunes! </p>
        @else
        <ul>
        @foreach ($types as $type)
            <li>{{ $type->name }}</li>
        @endforeach
        </ul>
        @endif
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" name='name' placeholder="New Type">
            </div>
            <div class="col-lg-10 col-lg-offset-2">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Save New Type</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection
