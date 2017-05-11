@extends('master')
@section('content')
<form class="form-horizontal well bs-component" method='post' action='/processTuneEdits'>
    <fieldset>
        <legend>Edit</legend>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $tune->name }}">
            </div>
        </div>

        <div class="form-group">
            <label for="type" class="col-lg-2 control-label">Type</label>
            <div class="col-lg-10">
                @foreach ($types as $type)
                <div class='checkbox'>
                    <label>
                        <input type='checkbox' value='{{ $type->id }}' id='type_{{ $type->id }}' name='types[]'
                        @if ($tune->types->contains($type))
                        checked
                        @endif
                        >{{ $type->name }}</input>
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label for="key" class="col-lg-2 control-label">Key</label>
            <div class="col-lg-10">
                <select class="form-control" id="kee" name="kee">
                    @foreach ($kees as $kee)
                    <option value='{{ $kee }}'
                    @if ($kee == $tune->kee)
                    selected
                    @endif
                    >{{ $kee }}</option>
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
                        id='mode' value='{{$mode}}'
                        @if ($mode == $tune->mode)
                        checked
                        @endif
                        >{{ $mode }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label for="resource" class="col-lg-2 control-label">Resource URL</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="resource" id="resource" placeholder="http://..." value='{{ $tune->resource }}'>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {{ csrf_field() }}
                <input type='hidden' id='id' name='id' value='{{ $tune->id }}'>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection
