<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tune;

class MainController extends Controller
{
    function home() {
        $featuredTune = Tune::inRandomOrder()->first();
        return view('home')->with('featuredTune', $featuredTune);
    }
    function allTunes() {
        $tunes = Tune::all();
        return view('tunes')->with('tunes', $tunes);
    }
    function search(Request $request) {
        $this->validate($request, []);

        $searchTerm = $request->input('searchTerm');
        $tunes = Tune::where('name', 'LIKE', $searchTerm)->get();

        return view('searchResults')->with('tunes', $tunes);
    }
}
