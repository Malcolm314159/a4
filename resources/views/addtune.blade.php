@extends('master')
@section('content')
<form class="form-horizontal well bs-component">
    <fieldset>
        <legend>Add Tune</legend>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" placeholder="Tune Name">
            </div>
        </div>

        <div class="form-group">
            <label for="type" class="col-lg-2 control-label">Type</label>
            <div class="col-lg-10">
                <select multiple="" class="form-control" id="type">
                    <option>Jig</option>
                    <option>Reel</option>
                    <option>Waltz</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="key" class="col-lg-2 control-label">Key</label>
            <div class="col-lg-10">
                <select class="form-control" id="key">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="e">E</option>
                    <option value="f">F</option>
                    <option value="g">G</option>
                    <option value="a-sharp">A-sharp</option>
                    <option value="b-sharp">B-sharp</option>
                    <option value="c-sharp">C-sharp</option>
                    <option value="d-sharp">D-sharp</option>
                    <option value="e-sharp">E-sharp</option>
                    <option value="f-sharp">F-sharp</option>
                    <option value="g-sharp">G-sharp</option>
                    <option value="a-flat">A-flat</option>
                    <option value="b-flat">B-flat</option>
                    <option value="c-flat">C-flat</option>
                    <option value="d-flat">D-flat</option>
                    <option value="e-flat">E-flat</option>
                    <option value="f-flat">F-flat</option>
                    <option value="g-flat">G-flat</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Mode</label>
            <div class="col-lg-10">
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="major" value="major">
                        Major
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="minor" value="minor">
                        Minor
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="dorian" value="dorian">
                        Dorian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="mixolydian" value="mixolydian">
                        Mixolydian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="lydian" value="lydian">
                        Lydian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="phrygian" value="phrygian">
                        Phrygian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="locrian" value="locrian">
                        Locrian
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="mode" id="freygish" value="freygish">
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
