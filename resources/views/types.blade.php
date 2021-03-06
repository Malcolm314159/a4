@extends('master')
@section('content')
<form class="form-horizontal well bs-component" method='post' action='/processNewType'>
    <fieldset>
        <h3>Types</h3>
        @if (count($types) == 0)
        <p>Create your first song type using the form below.
            These types will be an important classification system
            for your tunes! </p>
        @else
        <p>These cannot be deleted, but they can be edited.</p>
        <p>Click to edit.</p>
        <ul>
        @foreach ($types as $type)
            <li><a href='edittype/{{ $type->id }}'>{{ $type->name }}</a></li>
        @endforeach
        </ul>
        @endif
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" name='name' placeholder="New Type" required>
            </div>
            <div class="col-lg-10 col-lg-offset-2">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Save New Type</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection
