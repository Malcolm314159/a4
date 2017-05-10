<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tune;
use App\Type;

class TypeController extends Controller
{
    function types() {
        $types = Type::all();
        return view('types')->with('types', $types);
    }
    function processNewType(Request $request) {
        $this->validate($request, []);
        $type = new Type();
        $type->name = $request->input('name');
        $type->save();
        return \Redirect::to('types');
    }
    function editType($id) {
        $type = Type::find($id);
        return view('editType')->with('type', $type);
    }
    function processTypeEdits(Request $request) {
        $this->validate($request, []);
        $type = Type::find($request->input('id'));
        $type->name = $request->input('name');
        $type->save();
        return \Redirect::to('types');
    }
}
