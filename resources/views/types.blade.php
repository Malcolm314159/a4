@extends('master')
@section('content')
<form class="form-horizontal well bs-component">
    <fieldset>
        <legend>Types</legend>
        <ul>
            <li>Jig</li>
            <li>Reel</li>
            <li>Waltz</li>
        </ul>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" placeholder="New Type">
            </div>
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Save New Type</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection
