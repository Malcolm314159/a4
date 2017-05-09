<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tune;
use App\Type;

class MainController extends Controller
{
    function home() {
        $featuredTune = Tune::inRandomOrder()->first();
        return view('home')->with('featuredTune', $featuredTune);
    }
    function allTunes() {
        $tunes = Tune::with('type')->get();
        return view('tunes')->with('tunes', $tunes);
    }
    function addTune() {
        $types = Type::all();
        return view('addtune')->with('types', $types);
    }
    function processNewTune(Request $request) {
        $this->validate($request, []);
        $tune = new Tune();
        $tune->name = $request->input('name');
        $tune->type_id = $request->input('type_id');
        $tune->kee = $request->input('kee');
        $tune->mode = $request->input('mode');
        $tune->resource = $request->input('resource');
        $tune->save();
        return view('messages.tuneAdded');
    }
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
    function search(Request $request) {
        $this->validate($request, []);
        $searchTerm = $request->input('searchTerm');
        $tunes = Tune::where('name', 'LIKE', '%'.$searchTerm.'%')->get();
        return view('searchResults')->with('tunes', $tunes);
    }
    function newType(Request $request) {
        $this->validate($request, []);
        $type = new Type();
        $type->name = $request->input('name');
        $type->save();
    }
    function processTuneDeletion($id) {
        $tune = Tune::find($id);
        if (!$tune) {
            return view('messages.couldNotDeleteTune');
        }
        else {
            $tune->delete();
            return view('messages.tuneDeleted');
        }
    }
}
