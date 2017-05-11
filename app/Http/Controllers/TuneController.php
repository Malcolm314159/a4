<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tune;
use App\Type;

class TuneController extends Controller
{
    private $kees;
    private $modes;

    public function __construct() {
        $this->kees = [
            'A','B','C','D','E','F','G',
            'A-sharp','B-sharp','C-sharp','D-sharp',
            'E-sharp','F-sharp','G-sharp',
            'A-flat','B-flat','C-flat','D-flat',
            'E-flat','F-flat','G-flat'
        ];
        $this->modes = [
            'Major','Minor','Dorian',
            'Mixolydian','Lydian','Phrygian',
            'Locrian','Freygish'
        ];
    }

    function allTunes() {
        $tunes = Tune::all();
        return view('tunes')->with('tunes', $tunes);
    }
    function tuneNames() {
        $tunes = Tune::all();
        return view('tuneNames')->with('tunes', $tunes);
    }
    function addTune() {
        $types = Type::all();
        $kees = $this->kees;
        $modes = $this->modes;

        return view('addTune')
        ->with('types', $types)
        ->with('kees', $kees)
        ->with('modes', $modes);
    }
    function processNewTune(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $tune = new Tune();
        $tune->name = $request->input('name');
        $tune->kee = $request->input('kee');
        $tune->mode = $request->input('mode');
        $tune->resource = $request->input('resource');
        $tune->save();

        $types = ($request->types) ?: [];
        $tune->types()->sync($types);
        $tune->save();

        return view('messages.tuneAdded');
    }
    function edit($id) {
        $tune = Tune::find($id);
        if (!$tune) {
            return view('messages.tuneNotFound');
        }
        else {
            $types = Type::all();
            $kees = $this->kees;
            $modes = $this->modes;

            return view('editTune')
            ->with('tune', $tune)
            ->with('types', $types)
            ->with('kees', $kees)
            ->with('modes', $modes);
        }
    }
    function processTuneEdits(Request $request) {
        $this->validate($request, []);
        $tune = Tune::find($request->input('id'));
        $tune->name = $request->input('name');
        $tune->kee = $request->input('kee');
        $tune->mode = $request->input('mode');
        $tune->resource = $request->input('resource');

        $types = ($request->types) ?: [];
        $tune->types()->sync($types);
        $tune->save();

        return view('messages.tuneUpdated');
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
