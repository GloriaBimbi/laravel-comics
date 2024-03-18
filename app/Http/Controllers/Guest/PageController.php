<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function characters(){
        return view('characters');
    }

    public function comics(){
        $comics = config('comics');
        return view('comics', compact('comics'));
    }

    public function movies(){
        return view('movies');
    }

    public function tv(){
        return view('tv');
    }

    public function games(){
        return view('games');
    }

    public function collectibles(){
        return view('collectibles');
    }

    public function videos(){
        return view('videos');
    }

    public function fans(){
        return view('fans');
    }

    public function news(){
        return view('news');
    }
}
