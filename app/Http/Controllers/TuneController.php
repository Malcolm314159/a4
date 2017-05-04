<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tune;

class TuneController extends Controller
{
    function allTunes() {
        $tunes = Tune::all();
        return view('tunes')->with('tunes', $tunes);
    }
}
