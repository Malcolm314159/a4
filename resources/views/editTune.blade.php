@extends('master')
@section('content')
<form class="form-horizontal well bs-component" method='get' action=''>
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
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="A-sharp">A-sharp</option>
                    <option value="B-sharp">B-sharp</option>
                    <option value="C-sharp">C-sharp</option>
                    <option value="D-sharp">D-sharp</option>
                    <option value="E-sharp">E-sharp</option>
                    <option value="F-sharp">F-sharp</option>
                    <option value="G-sharp">G-sharp</option>
                    <option value="A-flat">A-flat</option>
                    <option value="B-flat">B-flat</option>
                    <option value="C-flat">C-flat</option>
                    <option value="D-flat">D-flat</option>
                    <option value="E-flat">E-flat</option>
                    <option value="F-flat">F-flat</option>
                    <option value="G-flat">G-flat</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Mode</label>
            <div class="col-lg-10">
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Major">
                        Major
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Minor">
                        Minor
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Dorian">
                        Dorian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Mixolydian">
                        Mixolydian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Lydian">
                        Lydian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Phrygian">
                        Phrygian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Locrian">
                        Locrian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mode" value="Freygish">
                        Freygish
                    </label>
                </div>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection
