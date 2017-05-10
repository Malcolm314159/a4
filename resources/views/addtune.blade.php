@extends('master')
@section('content')
@if (count($types) == 0)
<p><a href='/types'>Create some tune types</a> before adding tunes.</p>
@else
<form class="form-horizontal well bs-component" method='post' action='/processNewTune'>
    <fieldset>
        <legend>Add Tune</legend>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Tune Name">
            </div>
        </div>

        <div class="form-group">
            <label for="type" class="col-lg-2 control-label">Type</label>
            <div class="col-lg-10">
                <select multiple="" class="form-control" id="type_id" name="type_id">
                    @foreach ($types as $type)
                    <option value={{ $type->id }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="key" class="col-lg-2 control-label">Key</label>
            <div class="col-lg-10">
                <select class="form-control" id="kee" name="kee">
                    @foreach ($kees as $kee)
                        <option value='{{ $kee }}'>{{ $kee }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Mode</label>
            <div class="col-lg-10">
                @foreach ($modes as $mode)
                    <div class='radio'>
                        <label>
                            <input type='radio' name='mode'
                            id='mode' value='{{$mode}}'>{{ $mode }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label for="resource" class="col-lg-2 control-label">Resource URL</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="resource" id="resource" placeholder="http://...">
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
@endif
@endsection
