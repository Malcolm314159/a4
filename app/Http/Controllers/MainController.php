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
    function search(Request $request) {
        $this->validate($request, [
            'searchTerm' => 'required'
        ]);
        $searchTerm = $request->input('searchTerm');
        $tunes = Tune::where('name', 'LIKE', '%'.$searchTerm.'%')->get();
        return view('tunes')->with('tunes', $tunes);
    }
}
