@extends('master')
@section('content')
<form class="form-horizontal well bs-component" method='post' action='/processTypeEdits'>
    <fieldset>
        <legend>Edit Type: {{ $type->name }}</legend>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">New Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" name='name' value='{{ $type->name }}' required>
            </div>
            <div class="col-lg-10 col-lg-offset-2">
                {{ csrf_field() }}
                <input type='hidden' id='id' name='id' value='{{ $type->id }}'>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection
